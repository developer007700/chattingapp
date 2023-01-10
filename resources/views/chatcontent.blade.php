<div class="ibox-content">
    <div class="row">
        <div class="col-md-9">
            <div class="chat-discussion">
                @if(!isset($messages))
                <br/><br/> <br/><br/> <br/><br/>
                <div class="flex justify-content-center">
                    <h1>📳 Stay Connected...</h1>
                </div>
                @endif
                @if(isset($messages) && !empty($messages))
                @foreach($messages as $key=>$message)
                @if($message->sender_id == Auth::id())
                <div class="chat-message right right{{$message->id}} seen{{$message->sender_id}}{{$message->reciver_id}}">
                    <img class="message-avatar" src="{{$message->users->image}}" alt="">
                    <div class="message">
                        <span class="message-date">
                            {{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}
                        </span>
                        <span class="message-content">
                            {{$message->message}}
                        </span>
                       @if($message->message_status==0)
                       <i id="messagestatus{{$message->sender_id}}{{$message->reciver_id}}" class="fa fa-paper-plane-o" aria-hidden="true"></i>
                       @else
                        <i id="messagestatus{{$message->sender_id}}{{$message->reciver_id}}" class="fa fa-paper-plane" aria-hidden="true"></i>
                       @endif

                    </div>
                </div>
                @else
                <div class="chat-message left">
                    <img class="message-avatar" src="{{$message->users->image}}" alt="">
                    <div class="message">
                        <a class="message-author" href="#">{{$message->users->name}} </a>
                        <span class="message-date">
                            {{\Carbon\Carbon::parse($message->created_at)->diffForHumans()}}
                        </span>
                        <span class="message-content">
                            {{$message->message}}
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
            </div>

            @if($group_id != null || $reciver_id!=null )
            <div class="chat-message-form">
                <div class="typingmessage" style="height: 35px"> </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control message-input message" name="message" id="message" placeholder="Enter message text and press enter" />
                    <div class="input-group-append">
                        <button class="publisher-btn text-info btn btn-outline-warning" type="button" id="send-message" data-abc="true" style="padding: 0.375rem 3.75rem;"><i class="fa fa-paper-plane fa-lg"></i></button>
                    </div>
                </div>
            </div>


  
            @endif

        </div>
        <input type="hidden" value="{{$group_id}}" id="gid">
        <input type="hidden" value="{{$reciver_id}}" id="rid">
        <input type="hidden" value="{{isset($groupTyping) ? $groupTyping : '' }}" id="gtyping">
        <input type="hidden" value="{{isset($groupDetail) ? $groupDetail->created_by : ''}}" id="gdetail">
        <input type="hidden" value="{{isset($userName) ? $userName->name : ''}}" id="gname">
        <div class="col-md-3">
            <div class="chat-users">
                <div class="users-list">
                    @foreach($datalist as $user)
                    <div class="chat-user  chatuserslist{{isset($user->group_id) ? $user->group->id : $user->users->id}}">
                        <img class="chat-avatar" src="{{isset($user->users->image) ? $user->users->image : '' }}" alt="">
                        @if(isset($user->group_id))
                        <div class="chat-user-name {{($group_id == $user->group->id) ? 'bg-lights' : '' }} ">
                        @else
                        <div class="chat-user-name {{($reciver_id == $user->users->id) ? 'bg-lights' : '' }} ">
                        @endif
                            <a data-id="{{isset($user->group->id) ? $user->group->id : $user->users->id}}" class="chatuser{{isset($user->group_id) ? $user->group_id : $user->users->id}}" id="{{isset($user->group_id) ? 'gchat' : 'pchat'}}">{{isset($user->group_id) ? $user->group->name : $user->users->name}}<h6>{{isset($user->message) ? $user->message->message : ''}}</h6></a>&nbsp;
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js" integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

        $('.chat-user').css('cursor', 'pointer'); // 'default' to revert
        console.log('chat content');
        $(".chat-discussion").animate({
            scrollTop: $('.chat-discussion').prop("scrollHeight")
        }, 0);

        $( document ).ready(function() {
        $("#message").on('keydown', function(event) {
            console.log('message');
            if (event.which === 13) {
                $("#send-message").trigger('click');
            } else {
                var message = "{{ Auth::user()->name }}" + ' is typing...';
                var auth = "{{ Auth::user()->id }}";
                var gid = $("#gid").val();
                var pid = $("#rid").val();
                var typing_nums = $("#gtyping").val().slice(1, -1).split(',').map(Number);
              //  console.log(gtyping);
                if (!gid) {
                    var id = pid
                } else {
                    var id = gid
                }
                console.log(id);
                if(gid){
                    console.log('group typing');
                    socket.emit('groupusertyping',{
                        id,
                        message,
                        auth,
                        typing_nums
                    });
                }
                else{
                  socket.emit('usertyping',{
                      id,
                      message,
                      auth
                  });
                }
                setTimeout(function() {
                    socket.emit('usertyping', false);
                },2000);
            }
        });
        });

</script>
