   <input type="hidden" value="{{$group_id}}" name="group_id">
   <div class="row d-flex mt-100 col-md-10 m-1 useraddednew">
       @if(isset($groupUser))
       @foreach($groupUser as $user)
       <div class="groupuser col-md-8 mb-2 ml-3" id="groupuser{{$user->id}}">
           <label class="form-check-label" for="flexCheckDefault">
           <img style="width: 40px; height: 40px;" src="{{isset($user->image) ? $user->image : 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/271deea8-e28c-41a3-aaf5-2913f5f48be6/de7834s-6515bd40-8b2c-4dc6-a843-5ac1a95a8b55.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzI3MWRlZWE4LWUyOGMtNDFhMy1hYWY1LTI5MTNmNWY0OGJlNlwvZGU3ODM0cy02NTE1YmQ0MC04YjJjLTRkYzYtYTg0My01YWMxYTk1YThiNTUuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.BopkDn1ptIwbmcKHdAOlYHyAOOACXW0Zfgbs0-6BY-E'}}">
           </label>
           <label class="form-check-label">
                  <h6>{{$user->name}}</h6>
            </label>
       </div>
       <div class="col-md-2" id="col{{$user->id}}">
           @if($user->id!=Auth::id())
           <button id="remove" data-id="{{ $user->id }}" class="btn btn-sm btn-danger">Remove</button>
           @endif
       </div>
       @endforeach
       @endif
       <hr>
</div>
       <div class="row col-md-9 m-1 removeuser">
           @if(isset($addUserList))
           @foreach($addUserList as $users)
           <div class="form-check newaddedusers{{$users->id}}">
               <!--<input class="form-check-input" type="checkbox" name="userlistname" value="{{$users->id}}" id="userlistname">-->
               <label class="form-check-label" for="flexCheckDefault">
                   <span><img src="{{isset($users->image) ? $users->image : 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/271deea8-e28c-41a3-aaf5-2913f5f48be6/de7834s-6515bd40-8b2c-4dc6-a843-5ac1a95a8b55.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzI3MWRlZWE4LWUyOGMtNDFhMy1hYWY1LTI5MTNmNWY0OGJlNlwvZGU3ODM0cy02NTE1YmQ0MC04YjJjLTRkYzYtYTg0My01YWMxYTk1YThiNTUuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.BopkDn1ptIwbmcKHdAOlYHyAOOACXW0Zfgbs0-6BY-E'}}" style="width: 40px; height: 40px;"></span>
               </label>
                <label class="form-check-label">
                  <h6>{{$users->name}}</h6>
                </label>
                <button  data-id="{{ $users->id }}"  type="button" class="btn btn-primary addguser"><i class="fa fa-plus"></i>Add</button>
           </div>
           @endforeach
           @endif
       </div>
      <!-- <div class="col-md-2">
           <button type="button" class="btn btn-primary addguser"><i class="fa fa-plus"></i>
               Add</button>
       </div>-->
