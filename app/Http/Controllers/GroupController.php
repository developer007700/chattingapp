<?php

namespace App\Http\Controllers;

use App\Models\ChatHistory;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use App\Models\ClearChat;
use App\Models\UserGroup;
use Auth;
use App\Models\Chatbtuser;

class GroupController extends Controller
{
    public function groupAdd(Request $request){
        $group = Group::create(['name' => $request->group_name, 'description' => $request->description, 'created_by' => Auth::id()]);
        UserGroup::create(['group_id' => $group->id, 'user_id' => Auth::id()]);
        Chatbtuser::create(['group_id' => $group->id, 'user_id' => Auth::id(),'reciver_id'=>Auth::id()]);
        return response()->json($group);
    }
    public function groupUserAdd(Request $request){
        //foreach($request->user_id as $users)
        //{
          //  dd($request->all());
            UserGroup::create(['group_id' => $request->group_id, 'user_id' => $request->user_id]);
            //Chatbtuser::create(['group_id' => $request->group_id, 'user_id' => Auth::id(),'reciver_id'=>null]);
            Chatbtuser::create(['group_id' => $request->group_id, 'user_id' => $request->user_id,'reciver_id'=>null]);
            $user = User::where('id',$request->user_id)->first();
      //  }
        $group =  Group::where('id',$request->group_id)->first();
        $data= [
            'group_name'=>$group->name,
            'user_id'=>$request->user_id
        ];
        return response()->json(['success' => true,'data' => $data,'user'=>$user]);
    }

    public function groupDelete(Request $request){
        ChatHistory::where('group_id', $request->id)->delete();
        UserGroup::where('group_id', $request->id)->delete();
        Chatbtuser::where('group_id',$request->id)->delete();
        Group::where('id',$request->id)->get();
        return response()->json(['success' => true, 'data' => []]);
    }
    public function userDelete(Request $request){
       $user = User::where('id',$request->id)->first();
       UserGroup::where('group_id',$request->group_id)->where('user_id',$request->id)->delete();
       Chatbtuser::where('group_id',$request->group_id)->where('user_id',$request->id)->delete();
       return response()->json(['success' => true, 'data' => $user]);
    }
    public function groupchatting(Request $request)
    {
        //dd($request->all());
        $clearchat = ClearChat::where('user_id',Auth::id())->where('group_id',$request->id)->latest()->first();
        $groupDate = UserGroup::where('user_id',Auth::id())->first();
        if($clearchat!=null){
        $messages = ChatHistory::with(['users'])->where('group_id', $request->id)->where('created_at', '>=', $groupDate->created_at)->where('created_at','>',$clearchat->created_at)->get();
        }
       else{
          $messages = ChatHistory::with(['users'])->where('group_id', $request->id)->where('created_at', '>=', $groupDate->created_at)->get();
        }
        $reciver_id = $request->id;
        $group_id = $request->id;
        $groupDetail = Group::where('id', $request->id)->first();
        $groupTyping = UserGroup::select('group_id','user_id')->where('group_id',$request->id)->pluck('user_id');
        //$groupTyping = $groupTyping1->toArray();
        //dd($groupTyping);
        $group = UserGroup::where('user_id', Auth::id())->groupBy('group_id')->pluck('group_id');
        $groupList = Group::whereIn('id', $group)->get();
        $userList = User::whereNotIn('id', [Auth::id()])->get();
      //  $groupTyping = UserGroup::
        $chekUser = UserGroup::where('group_id', $groupDetail->id)->pluck('user_id');
        $userGroup = UserGroup::where('group_id',$request->id)->where('user_id',Auth::id())->first();
        $groupUser = User::whereIn('id', $chekUser)->get();
        $addUserList = User::whereNotIn('id', $chekUser)->get();
        $userName = Group::where('id', $request->id)->first();
        $datalist = Chatbtuser::with(['users','message','lastmessanger','group'])->where('user_id',Auth::id())->orderBy('updated_at','DESC')->get();
        return view('chatcontent', compact('messages','groupTyping','datalist','userList','userGroup','groupList', 'groupUser', 'reciver_id', 'group_id', 'groupDetail', 'userName', 'addUserList'));
    }
    public function dashgroupchat(Request $request){
        $clearchat = ClearChat::where('user_id',Auth::id())->where('reciver_id',$request->id)->latest()->first();
        if($clearchat!=null){
          $messages = ChatHistory::with(['users'])->whereIn('sender_id', [Auth::id(), $request->id])->whereIn('reciver_id', [$request->id, Auth::id()])->where('created_at','>',$clearchat->created_at)->get();
        }
        else{
          $messages = ChatHistory::with(['users'])->whereIn('sender_id', [Auth::id(), $request->id])->whereIn('reciver_id', [$request->id, Auth::id()])->get();
        }
        $reciver_id = $request->id;
        $group = UserGroup::where('user_id', Auth::id())->groupBy('group_id')->pluck('group_id');
        $groupList = Group::whereIn('id', $group)->get();
        $group_id = null;
        $groupDetail = null;
        $groupUser = null;
        $addUserList = null;
        $groupTyping = null;
        $userList = User::whereNotIn('id', [Auth::id()])->get();
        $userName = User::where('id', $request->id)->first();
        $datalist = Chatbtuser::with(['users','message','lastmessanger','group'])->where('user_id',Auth::id())->orderBy('updated_at','DESC')->get();
        return view('chatcontent', compact('datalist','groupTyping','messages', 'userList', 'groupUser', 'groupList', 'reciver_id', 'group_id', 'groupDetail', 'userName', 'addUserList'));
    }

    public function groupUsers(Request $request){
        $messages = ChatHistory::with(['users'])->where('group_id', $request->id)->get();
        $reciver_id = $request->id;
        $group_id = $request->id;
        $groupDetail = Group::where('id', $request->id)->first();
        $group = UserGroup::where('user_id', Auth::id())->groupBy('group_id')->pluck('group_id');
        $groupList = Group::whereIn('id', $group)->get();
        $userList = User::whereNotIn('id', [Auth::id()])->get();
        $chekUser = UserGroup::where('group_id', $groupDetail->id)->pluck('user_id');
        $groupUser = User::whereIn('id', $chekUser)->where('id','!=',Auth::id())->get();
        $addUserList = User::whereNotIn('id', $chekUser)->get();
        $userName = null;
        return view('userlist', compact('messages', 'userList', 'groupList', 'groupUser', 'reciver_id', 'group_id', 'groupDetail', 'userName', 'addUserList'));
    }
    public function clearChat(Request $request){
          ClearChat::create(['reciver_id'=>null,'user_id'=>Auth::id(),'group_id'=>$request->id]);
    }
}
