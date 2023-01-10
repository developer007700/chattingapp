<?php
namespace App\Http\Controllers;
use Auth;
use App\Models\ChatHistory;
use App\Models\Chatbtuser;
use App\Models\UserGroup;
use App\Models\User;
use App\Models\Group;
use App\Models\ClearChat;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index(){
        $messages = null;
        $reciver_id = null;
        $group = UserGroup::where('user_id', Auth::id())->groupBy('group_id')->pluck('group_id');
        $groupList = Group::whereIn('id', $group)->get();
        $group_id = null;
        $groupDetail = null;
        $groupUser = null;
        $addUserList = null;
        $userGroup = null;
        $groupTyping = null;
        $userList = User::whereNotIn('id', [Auth::id()])->get();
        $datalist = Chatbtuser::with(['users','message','lastmessanger','group'])->where('user_id',Auth::id())->orderBy('updated_at','DESC')->get();

        $userName = null;
        return view('dashboard', compact('messages','groupTyping','datalist','userGroup','userList', 'groupUser', 'groupList', 'reciver_id', 'group_id', 'groupDetail', 'userName', 'addUserList'));
    }

    public function sendMessage(Request $request)
    {
        $data=ChatHistory::create(['message'=>$request->message, 'sender_id'=> Auth::id(), 'reciver_id'=>null]);
        return response()->json(['success' => true, 'data' => $data]);
    }

    public function storeChats(Request $request){
        if($request->group_id!=null){
        $data=ChatHistory::create(['message' => $request->message,'sender_id' => Auth::id(), 'reciver_id' => null,'group_id'=>$request->group_id]);
        Chatbtuser::where('group_id',$request->reciver_id)->update(['last_messenger_id'=>Auth::id(),'last_message_id'=>$data->id]);
        $newdata = Chatbtuser::with(['users','message','lastmessanger','group'])->where('group_id',$request->group_id)->where('group_id',$request->reciver_id)->first();
        $groupUser = UserGroup::where('group_id',$request->group_id)->whereNotIn('user_id',[Auth::id()])->get();
        }
        else{
        $data=ChatHistory::create(['message' => $request->message, 'sender_id' => Auth::id(), 'reciver_id' => $request->reciver_id,'group_id'=>null]);
        Chatbtuser::where('user_id',Auth::id())->where('reciver_id',$request->reciver_id)->update(['last_messenger_id'=>Auth::id(),'last_message_id'=>$data->id]);
        Chatbtuser::where('user_id',$request->reciver_id)->where('reciver_id',Auth::id())->update(['last_messenger_id'=>Auth::id(),'last_message_id'=>$data->id]);
        $newdata = Chatbtuser::with(['users','message','lastmessanger','group'])->where('user_id',Auth::id())->where('reciver_id',$request->reciver_id)->first();
        $groupUser = null;
        }

      /*  $dt = new DateTime($data->created_at);
        $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after
        $dt->setTimezone($tz);
        dd($dt->format('Y-m-d H:i:s'));*/
        //dd(Carbon::now()->toDateTimeString());

        $now = Carbon::now();
        $date = $now->diffForHumans($data->created_at);
        return response()->json(['success' => true, 'data' => $date,'id'=>$data->id,'groupUser'=>$groupUser,'newdata'=>$newdata]);
    }

    public function clearChat(Request $request){
          ClearChat::create(['reciver_id'=>$request->id,'user_id'=>Auth::id(),'group_id'=>null]);
    }
    public function messageseen(Request $request){
          if(isset($request->message_id)){
            ChatHistory::where('id',$request->message_id)->update(['message_status'=>1]);
          }
          else{
            ChatHistory::where('sender_id',$request->id)->update(['message_status'=>1]);
          }
    }
}
