    <x-app-layout>
        <style>
            body {
                margin-top: 20px;
            }

            #send-message{
               height: 50px;
            }

            .active::after {
                content: " 🟢";
                font-size: 11px;
            }

            /* WRAPPERS */
            #wrapper {
                width: 100%;
                overflow-x: hidden;
            }

            .wrapper {
                padding: 0 20px;
            }

            .wrapper-content {
                padding: 20px 10px 40px;
            }

            #page-wrapper {
                padding: 0 15px;
                min-height: 568px;
                position: relative !important;
            }

            @media (min-width: 768px) {
                #page-wrapper {
                    position: inherit;
                    margin: 0 0 0 240px;
                    min-height: 2002px;
                }
            }


            .message-input {
                height: 90px !important;
            }

            .chat-avatar {
                white: 36px;
                height: 36px;
                float: left;
                margin-right: 10px;
            }

            .chat-user-name {
                padding: 10px;
            }

            .chat-user {
                padding: 8px 10px;
                border-bottom: 1px solid #e7eaec;
            }

            .chat-user a {
                color: inherit;
            }

            .chat-view {
                z-index: 20012;
            }

            .chat-users,
            .chat-statistic {
                margin-left: -30px;
            }

            @media (max-width: 992px) {

                .chat-users,
                .chat-statistic {
                    margin-left: 0;
                }
            }

            .chat-view .ibox-content {
                padding: 0;
            }

            .chat-message {
                padding: 10px 20px;
            }

            .message-avatar {
                height: 48px;
                width: 48px;
                border: 1px solid #e7eaec;
                border-radius: 4px;
                margin-top: 1px;
            }

            .chat-discussion .chat-message.left .message-avatar {
                float: left;
                margin-right: 10px;
            }

            .chat-discussion .chat-message.right .message-avatar {
                float: right;
                margin-left: 10px;
            }

            .message {
                background-color: #fff;
                border: 1px solid #e7eaec;
                text-align: left;
                display: block;
                padding: 10px 20px;
                position: relative;
                border-radius: 4px;
            }

            .chat-discussion .chat-message.left .message-date {
                float: right;
            }

            .chat-discussion .chat-message.right .message-date {
                float: left;
            }

            .chat-discussion .chat-message.left .message {
                text-align: left;
                margin-left: 55px;
            }

            .chat-discussion .chat-message.right .message {
                text-align: right;
                margin-right: 55px;
            }

            .message-date {
                font-size: 10px;
                color: #888888;
            }

            .message-content {
                display: block;
            }

            .chat-discussion {
                background: #eee;
                padding: 15px;
                height: 400px;
                overflow-y: auto;
            }

            .chat-users {
                overflow-y: auto;
                height: 400px;
            }

            .chat-message-form .form-group {
                margin-bottom: 0;
            }

            .ibox {
                clear: both;
                margin-bottom: 25px;
                margin-top: 0;
                padding: 0;
            }

            .ibox.collapsed .ibox-content {
                display: none;
            }

            .ibox.collapsed .fa.fa-chevron-up:before {
                content: "\f078";
            }

            .ibox.collapsed .fa.fa-chevron-down:before {
                content: "\f077";
            }

            .ibox:after,
            .ibox:before {
                display: table;
            }

            .ibox-title {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                background-color: #ffffff;
                border-color: #e7eaec;
                border-image: none;
                border-style: solid solid none;
                border-width: 3px 0 0;
                color: inherit;
                margin-bottom: 0;
                padding: 14px 15px 7px;
                min-height: 48px;
            }

            .ibox-content {
                background-color: #ffffff;
                color: inherit;
                padding: 15px 20px 20px 20px;
                border-color: #e7eaec;
                border-image: none;
                border-style: solid solid none;
                border-width: 1px 0;
            }

            .ibox-footer {
                color: inherit;
                border-top: 1px solid #e7eaec;
                font-size: 90%;
                background: #ffffff;
                padding: 10px 15px;
            }

            .message-input {
                height: 50px !important;
                outline: 0 !important;
                border-color: orange !important;
            }

            .form-control,
            .single-line {
                background-color: #FFFFFF;
                background-image: none;
                border: 1px solid #e5e6e7;
                border-radius: 1px;
                color: inherit;
                display: block;
                padding: 6px 12px;
                transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
                width: 100%;
                font-size: 14px;
            }

            .bootstrap-select .bs-ok-default::after {
                width: 0.3em;
                height: 0.6em;
                border-width: 0 0.1em 0.1em 0;
                transform: rotate(45deg) translateY(0.5rem);
            }

            .btn.dropdown-toggle:focus {
                outline: none !important;
            }

            .bg-lights {
                background-color: #eee !important;
            }
            .form-check .form-check-input {
    float: left !important;
    margin-left: -2.5em !important;
}.form-check-input {
    width: 2em !important;
    height: 2em !important;}
        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
        <div class="container">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <strong>Chat Room </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal1 -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create New Group</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Group name:</label>
                                    <input type="text" name="name" class="form-control" id="recipient-name" required>
                                    <div class="gr-name"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea class="form-control" name="description" id="message-text" required></textarea>
                                    <div class="gr-description"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="javascript:void(0)" onClick="createGroup()" type="submit" class="btn btn-primary">Create</a>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal2 add user-->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Select group members</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="userlistdata">
                                @include('userlist')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox chat-view">
                            <div class="ibox-title row">
                                <div class="col-md-7">
                                   <!-- <small id="chatusername" class="pull-right text-muted"><b>
                                   </b></small>-->
                               </div>
                               <div class="d-flex col-md-2" id="userAdd">

                               </div>
                           </div>
                           <div class="chatcontent">
                            @include('chatcontent')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://127.0.0.1:8000/socket.io/socket.io.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script>
        console.log("{{Auth::id()}}")
        var socket = io.connect('http://127.0.0.1:3000');
        socket.emit('login', {userId: {{Auth::user()->id;}}});
        socket.on('user_connected', (data) => {
            console.log("Connected: ", Object.values(data));
            Object.values(data).forEach(userID => {
                console.log("User_ID", userID);
                var a = 'chatuser'
                $(".chatuser" + userID).addClass("active");
            });
        });
        socket.on('user_disconnected', (data) => {
            console.log("Disconnected:", data);
            $(".chatuser" + data).removeClass("active");
        });

        socket.on('messageseenstatus'+"{{Auth::id()}}", (data) => {
         if(data.message_id){
             console.log(data);
             console.log('p');
            $('i[id="messagestatus'+data.id+data.authid+'"]').removeClass('fa fa-paper-plane-o');
            $('i[id="messagestatus'+data.id+data.authid+'"]').addClass('fa fa-paper-plane');
          //  $('#messagestatus'+data.message_id).removeClass('fa fa-paper-plane-o');
          //  $('#messagestatus'+data.message_id).addClass('fa fa-paper-plane');
        }
       });

        socket.on('messageseen'+"{{Auth::id()}}", (data) => {
            var _token = $("input[name='_token']").val();
            var rid = $("#rid").val();
            var id = rid;
            var authid = "{{Auth::id()}}"
            var gid = $("#gid").val();
            var message_id = data.message_id;
            console.log("messageseen:", data);
            if(data.reciver_id == {{Auth::id()}} && data.user_id == rid)
            {
               $.ajax({
                url: "{{ route('message.seen') }} ",
                type: 'POST',
                data: {
                    "_token": _token,
                    "message_id":message_id
                },
                success: function(data) {
                  console.log('latest',data);
                   socket.emit('messageseenstatus', {
                        message_id,
                        id,
                        authid
                    });
                },
                error: function(response) {
                    console.log("error : " + JSON.stringify(response));
                }
            });
           }

       });
        socket.on('useremove'+"{{Auth::id()}}", (data) => {
              console.log('enter');
              $('.chatuserslist'+data.id).remove();
              $(".g" + data.id).remove();
        });

        socket.on('deletegroups', (data) => {
          console.log('group removed');
          $(".g" + data.id).remove();
        });

        socket.on('chat'+"{{Auth::id()}}", function(data) {
                var rid = $("#rid").val();
                var gid = $("#gid").val();
                console.log(gid);
                console.log('user_id', data.user_id);
                console.log('rid', rid);
                console.log('reciver_id', data.reciver_id);
                $("#message").append("<strong>" + data.user + ":</strong><p>" + data.message + "</p>");
                var html;
                var username = "{{Auth::user()->name}}"
                if (data.reciver_id == "{{Auth::id()}}" && data.user_id == rid) {
                    html = '<div class="chat-message left"><img class="message-avatar" src="' + data.image + '" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> '+data.date+'</span>   <a class="message-author" href="#">' + data.user + ' </a><span class="message-content">' + data.message + '</span></div></div>';
                } else if (data.reciver_id == rid && data.user_id == rid) {
                    html = '<div class="chat-message left"><img class="message-avatar" src="' + data.image + '" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> '+data.date+' </span>   <a class="message-author" href="#">' + data.user + ' </a><span class="message-content">' + data.message + '</span></div></div>';
                } else if (gid != null && data.reciver_id == gid) {
                    html = '<div class="chat-message left"><img class="message-avatar" src="' + data.image + '" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> '+data.date+' </span>   <a class="message-author" href="#">' + data.user + ' </a><span class="message-content">' + data.message + '</span></div></div>';
                }
                console.log(data.user_id);

                if(data.user_id==rid){
                var userlist = '<div class="chat-user chatuserslist'+data.user_id+'"><img class="chat-avatar" src="'+data.image+'" alt=""><div class="chat-user-name bg-lights"><a class="chatuser'+data.user_id+'" data-id =' +data.user_id + ' id="pchat">' +  data.user + ' <h6>'+data.message+'</h6></a>&nbsp;</div></div>';
                }
                else{
                  var userlist = '<div class="chat-user chatuserslist'+data.user_id+'"><img class="chat-avatar" src="'+data.image+'" alt=""><div class="chat-user-name"><a class="chatuser'+data.user_id+'" data-id =' +data.user_id + ' id="pchat">' +  data.user + ' <h6>'+data.message+'</h6></a>&nbsp;</div></div>';
                }
                $(".chatuserslist"+data.user_id).remove();
                $('.users-list').prepend(userlist);
                $('.chat-discussion').append(html);
                $(".chat-discussion").animate({
                    scrollTop: $('.chat-discussion').prop("scrollHeight")
                }, 0);
        });

        socket.on('useradded'+"{{Auth::id()}}",function(data){
                  console.log('added');
                  var html = '<div class="chat-user g' + data.group_id + '" id="group-append"><img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""><div class="chat-user-name "><a data-id =' + data.group_id + ' id="gchat">' + data.gName + ' </a>&nbsp;</div></div>';
                  $('.users-list').append(html);
        });

        socket.on('groupchatting'+"{{Auth::id()}}",function(data){
                console.log(data);
                  var gid = $("#gid").val();
                  if(data.group_id==gid){
                  console.log('message user');
                  html = '<div class="chat-message left"><img class="message-avatar" src="" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> '+data.date+'</span>   <a class="message-author" href="#">' + data.user + ' </a><span class="message-content">' + data.message + '</span></div></div>';
                  $('.chat-discussion').append(html);
                  $(".chat-discussion").animate({
                      scrollTop: $('.chat-discussion').prop("scrollHeight")
                  }, 0);
                }
                $(".chatuserslist"+data.group_id).remove();
                if(gid==data.group_id){
                console.log('wrong');
                var userlist = '<div class="chat-user chatuserslist'+data.group_id+'"><img class="chat-avatar" src="'+data.image+'" alt=""><div class="chat-user-name bg-lights"><a class="chatuser'+data.group_id+'" data-id =' +data.group_id + ' id="pchat">' +  data.name + ' <h6>'+data.message+'</h6></a>&nbsp;</div></div>';
                }
                else{
                  var userlist = '<div class="chat-user chatuserslist'+data.group_id+'"><img class="chat-avatar" src="'+data.image+'" alt=""><div class="chat-user-name"><a class="chatuser'+data.group_id+'" data-id =' +data.group_id + ' id="pchat">' +  data.name + ' <h6>'+data.message+'</h6></a>&nbsp;</div></div>';
                }
                $('.users-list').prepend(userlist);

        });

        socket.on('authchat'+"{{Auth::id()}}",function(data){
          console.log('authdata',data);
          html = '<div class="chat-message right right'+data.message_id+'"><img class="message-avatar" src="{{Auth::user()->image}}" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> '+data.date+'</span><span class="message-content">' + data.message + '</span><i id="messagestatus'+data.user_id+data.reciver_id+'" class="fa fa-paper-plane-o" aria-hidden="true"></i></div></div>'
          $('.chat-discussion').append(html);
          $(".chat-discussion").animate({
              scrollTop: $('.chat-discussion').prop("scrollHeight")
          }, 0);
         });

         socket.on('goupusertyping'+"{{Auth::id()}}",function(data){
           console.log(data);
            var gid = $("#gid").val();
            if(data.id==gid && data.auth!="{{Auth::id()}}"){
                $(".typingmessage").text(data.message);
                setTimeout(function(){
                $(".typingmessage").text('');
              }, 1000);
            }
         });


         socket.on('pmessageseen'+"{{Auth::id()}}",function(data){
           console.log('messagestatus'+data.id+data.authid);
           var _token = $("input[name='_token']").val();
           var message_id = null;
           var id = data.id;
           $.ajax({
            url: "{{ route('message.seen') }} ",
            type: 'POST',
            data: {
                "_token": _token,
                "message_id":message_id,
                "id":id
            },
            success: function(data) {
            },
            error: function(response) {
                console.log("error : " + JSON.stringify(response));
            }
           });
           $('i[id="messagestatus'+data.id+data.authid+'"]').removeClass('fa fa-paper-plane-o');
           $('i[id="messagestatus'+data.id+data.authid+'"]').addClass('fa fa-paper-plane');
         });

        socket.on('usertyping'+"{{Auth::id()}}", function(data) {
            console.log('useris typing', data);
            var gid = $("#gid").val();
            var pid = $("#rid").val();
          /*  if (!gid) {
                var uid = pid
            } else {
                var uid = gid
                var groupId = gid
            }*/
              console.log('id',data.id);
            //  console.log('uid',uid);
              console.log('gid', gid);
              console.log('pid', pid);
            if (data) {
                /*if (data.auth != "{{ Auth::user()->id }}" && "{{ Auth::user()->id }}" == uid) {
                    $(".typingmessage").text(data.message);
                    console.log("peer");
                }*/
                 if(pid){
                    if(pid == data.auth){
                        console.log("HEY GID NOT FOUND");
                        $(".typingmessage").text(data.message);
                        setTimeout(function(){
                        $(".typingmessage").text('');
                      }, 1000);
                    }
                }
            } else {
                $(".typingmessage").text('');
            }

        });

        $(document).on('click', '#send-message', function(e) {
            console.log('hello g');
            var group_id = null;
            e.preventDefault();
            console.log('message');
            var reciver_id = $('#rid').val();
            console.log(reciver_id);
            var _token = $("input[name='_token']").val();
            var user_id = "{{ Auth::user()->id }}";
            group_id = $("#gid").val();
            var user = "{{ Auth::user()->name }}";
            var message = $("#message").val();
            console.log(reciver_id);
            var image = "{{ Auth::user()->image }}";
            if (message != '') {
                $.ajax({
                    type: "POST",
                    url: "{{ route('store.message') }}",
                    dataType: "json",
                    data: {
                        '_token': _token,
                        'message': message,
                        'user': user,
                        'reciver_id': reciver_id,
                        'group_id': group_id,
                    },
                    success: function(data) {
                        console.log('new data',data);
                        $(".message").val('');
                        var date = data.data
                        var message_id = data.id
                        var groupusers = data.groupUser
                        console.log(groupusers)
                        if(data.newdata.group_id==null){
                          var html = '<div class="chat-user chatuserslist'+reciver_id+'"><img class="chat-avatar" src="'+data.newdata.users.image+'" alt=""><div class="chat-user-name bg-lights"><a class="chatuser'+reciver_id+'" data-id =' + reciver_id + ' id="pchat">' + data.newdata.users.name + ' <h6>'+data.newdata.message.message+'</h6></a>&nbsp;</div></div>';
                          $(".chatuserslist"+reciver_id).remove();
                        }
                        else{
                          var html = '<div class="chat-user chatuserslist'+group_id+'"><img class="chat-avatar" src="'+data.newdata.group.image+'" alt=""><div class="chat-user-name bg-lights"><a data-id =' + group_id + ' id="gchat">' + data.newdata.group.name + ' <h6>'+data.newdata.message.message+'</h6></a>&nbsp;</div></div>';
                          $(".chatuserslist"+group_id).remove();

                        }
                        $('.users-list').prepend(html);
                        socket.emit('login', {userId: {{Auth::user()->id;}}});
                        socket.on('user_connected', (data) => {
                            console.log("Connected User: ", Object.values(data));
                            Object.values(data).forEach(userID => {
                                console.log("User_ID", userID);
                                var a = 'chatuser'
                                $(".chatuser" + userID).addClass("active");
                            });
                        });
                        if(group_id){
                         var name = data.newdata.group.name;
                         html = '<div class="chat-message right right'+data.message_id+'"><img class="message-avatar" src="{{Auth::user()->image}}" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> '+date+'</span><span class="message-content">' + message + '</span><i id="messagestatus'+data.message_id+'" class="fa fa-paper-plane-o" aria-hidden="true"></i></div></div>'
                         $('.chat-discussion').append(html);
                         $(".chat-discussion").animate({
                             scrollTop: $('.chat-discussion').prop("scrollHeight")
                         }, 0);
                         socket.emit('groupchat',{
                            group_id,
                            message,
                            groupusers,
                            message_id,
                            date,
                            user,
                            name
                         });
                        }
                        else{
                          socket.emit('chat', {
                              user_id,
                              user,
                              message,
                              image,
                              reciver_id,
                              date,
                              message_id
                          });
                        }
                        socket.emit('messageseen', {
                            user_id,
                            reciver_id,
                            message_id
                        });
                    }
                   });
                    $(".message").val('');
                }
            });

            $(document).ready(function() {
              $(".chat-discussion").animate({
                scrollTop: $('.chat-discussion').prop("scrollHeight")
              }, 0);
            });

            $(document).on('click', '#gchat', function(e) {
                var group_id = $("#gid").val();
                var id = $(this).data("id");
                var token = $("meta[name='csrf-token']").attr("content");
                $(".adduser").remove();
                $(".dashboarduser").remove();
                $(".deletegroup").remove();
                $(".clearchat").remove();
                console.log(id);
                $.ajax({
                    url: "{{ route('group.content') }} ",
                    type: 'POST',
                    data: {
                        "id": id,
                      //  "group_id": group_id,
                        "_token": token,
                    },
                    success: function(data) {
                        console.log(data);
                        $(".chatcontent").html(data);
                        var gdetail = $("#gdetail").val();
                        var gid = $("#gid").val();
                        var gname = $("#gname").val();
                        var html1 = '<b class="dashboarduser">' + gname + '</b>';
                        $('#chatusername').append(html1);
                        console.log(gname);
                        socket.emit('login', {userId: {{Auth::user()->id;}}});
                        socket.on('user_connected', (data) => {
                            console.log("Connected: ", Object.values(data));
                            Object.values(data).forEach(userID => {
                                console.log("User_ID", userID);
                                var a = 'chatuser'
                                $(".chatuser" + userID).addClass("active");
                            });
                        });
                        socket.on('user_disconnected', (res) => {
                            console.log("Disconnected:", res);
                            $(".chatuser" + res).removeClass("active");
                        });
                        $(".chat-discussion").animate({
                            scrollTop: $('.chat-discussion').prop("scrollHeight")
                        }, 0);
                        var html = '<button type="button" class="btn btn-warning clearchat groupc mr-2"><i class="fa fa-remove"></i>  Clear Chat </button>';
                        $('#userAdd').append(html);
                        if (gdetail == "{{Auth::id()}}") {
                            var html = '<button type="button" class="btn btn-primary adduser mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal2"> <i class="fa fa-user-plus"></i> Add Member </button> <button type="button" data-id = ' + gid + ' class="btn btn-danger deletegroup"> <i class="fa fa-users"></i> Delete Group </button>';
                            $('#userAdd').append(html);
                        }
                    },
                    error: function(response) {
                        console.log("error : " + JSON.stringify(response));
                    }
                });
            });

            $(document).on('click', '#pchat', function(e) {
                console.log('pchat');
                var id = $(this).data("id");
                var authid = "{{Auth::id()}}"
                var token = $("meta[name='csrf-token']").attr("content");
                $(".adduser").remove();
                $(".deletegroup").remove();
                $(".dashboarduser").remove();
                $(".clearchat").remove();
                console.log(id);
                $.ajax({
                    url: "{{ route('chat.content') }} ",
                    type: 'POST',
                    data: {
                        "id": id,
                      //  "group_id": null,
                        "_token": token,
                    },
                    success: function(data) {
                        var gname = $("#gname").val();
                        var html1 = '<b class="dashboarduser">' + gname + '</b>';
                        $('#chatusername').append(html1);
                        $(".chatcontent").html(data);
                        socket.emit('login', {userId: {{Auth::user()->id;}}});
                        socket.on('user_connected', (data) => {
                            console.log("Connected: ", Object.values(data));
                            Object.values(data).forEach(userID => {
                                console.log("User_ID", userID);
                                var a = 'chatuser'
                                $(".chatuser" + userID).addClass("active");
                            });
                        });
                        socket.on('user_disconnected', (res) => {
                            console.log("Disconnected:", res);
                            $(".chatuser" + res).removeClass("active");
                        });
                        $(".chat-discussion").animate({
                            scrollTop: $('.chat-discussion').prop("scrollHeight")
                        }, 0);
                        var html = '<button type="button" class="btn btn-warning clearchat userc"> <i class="fa fa-remove"></i> Clear Chat </button> ';
                        $('#userAdd').append(html);
                        socket.emit('pmessageseen', {
                             id,
                             authid
                        });
                    },
                    error: function(response) {
                        console.log("error : " + JSON.stringify(response));
                    }
                });
            });

            function createGroup() {
                let group_name = $('#recipient-name').val();
                let description = $('#message-text').val();

                if (group_name == '') {
                    $('#recipient-name').addClass('is-invalid');
                    var name = '<small class="text-danger">Please enter group name</small>';
                    $('.gr-name').empty().append(name);
                    return false;
                } else {
                    $('#recipient-name').removeClass('is-invalid');
                    $('.gr-name').empty().remove(name);
                }
                if (description == '') {
                    $('#message-text').addClass('is-invalid');
                    var desc = '<small class="text-danger">Please enter group description</small>';
                    $('.gr-description').empty().append(desc);
                    return false;
                } else {
                    $('#message-text').removeClass('is-invalid');
                    $('.gr-description').empty().remove(desc);
                }
                $.ajax({
                    method: "POST",
                    url: "{{ route('group.add') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        group_name: group_name,
                        description: description
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#exampleModal').modal('hide');
                        var html = '<div class="chat-user" id="group-append"><img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""><div class="chat-user-name "><a data-id =' + res.id + ' id="gchat">' + res.name + ' </a>&nbsp;</div></div>';
                        $('.users-list').append(html);
                        $(".chat-users").animate({
                            scrollTop: $('.chat-users').prop("scrollHeight")
                        }, 0);
                    },
                });
            }


            $(document).on('click', '.adduser', function(e) {
                var id = $("#gid").val();
                var token = $("meta[name='csrf-token']").attr("content");
                $.ajax({
                    url: "{{ route('group.users') }} ",
                    type: 'POST',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function(data) {
                        $(".userlistdata").html(data);
                    },
                    error: function(response) {
                        console.log("error : " + JSON.stringify(response));
                    }
                });
            });

            $(document).on('click', '.deletegroup', function(e) {
                var id = $(this).data("id");
                var token = $("meta[name='csrf-token']").attr("content");
                swal({
                  title: "Are you sure ??",
                  text: "Are you sure you want to delete this group?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ route('group.delete') }} ",
                            type: 'POST',
                            data: {
                                "id": id,
                                "_token": token,
                            },
                            success: function(data) {
                                $(".adduser").remove();
                                $(".chat-message-form").remove();
                                $(".deletegroup").remove();
                                $(".right").remove();
                                $(".dashboarduser").remove();
                                $(".left").remove();
                                $(".g" + id).remove();
                                console.log('delete');
                                socket.emit('deletegroups', {
                                    id
                                });

                            },
                            error: function(response) {
                                console.log("error : " + JSON.stringify(response));
                            }
                        });
                        swal("Group has been deleted!", {
                            icon: "success",
                        });
                    }
                });
            });
            $(document).on('click', '.addguser', function(e) {
                var group_id = $("#gid").val();
                var groupadd = "groupadd";
                var user_id = $(this).data("id");
                console.log(user_id);
              /*  var user_id = $('input:checkbox[name=userlistname]:checked')
                .map(function() {
                    return $(this).val();
                }).get();*/

                var token = $("meta[name='csrf-token']").attr("content");
                $.ajax({
                    url: "{{ route('user.add') }} ",
                    type: 'POST',
                    data: {
                        "user_id": user_id,
                        "_token": token,
                        "group_id": group_id
                    },
                    success: function(data) {
                        console.log(data.data.user_id);
                        var userId = data.data.user_id;
                        var gName = data.data.group_name
                        console.log(data.data.group_name);
                        //$(".userlistdata").html(data);
                      //  $('#exampleModal2').modal('hide');
                        socket.emit('useradded', {
                            gName,
                            groupadd,
                            user_id,
                            group_id
                        });
                      console.log(data.user);
                      $(".newaddedusers" + user_id).remove();
                      html='<div class="groupuser col-md-8 mb-2 ml-3" id="groupuser'+user_id+'"><label class="form-check-label" for="flexCheckDefault"><img style="width: 40px; height: 40px;" src="'+data.user.image+'"></label><label class="form-check-label"><h6>'+data.user.name+'</h6></label></div><div class="col-md-2" id="col'+user_id+'"><button id="remove" data-id="'+user_id+'" class="btn btn-sm btn-danger">Remove</button></div>'
                      $('.useraddednew').append(html);

                    },
                    error: function(response) {
                        console.log("error : " + JSON.stringify(response));
                    }
                });
            });
        </script>
        <script>
            $(document).on('click', '#remove', function(e) {
                var id = $("#gid").val();
                var user_id = $(this).data("id");
                var token = $("meta[name='csrf-token']").attr("content");
                console.log(id);
                $.ajax({
                    url: "{{ route('user.delete') }}",
                    type: 'POST',
                    data: {
                        "id": user_id,
                        "group_id": id,
                        "_token": token,
                    },
                    success: function(data) {
                        console.log('hh', data);
                        socket.emit('useremove', {
                            user_id,
                            id
                        });
                        if(data.data.image == null){
                            var newimage = "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/271deea8-e28c-41a3-aaf5-2913f5f48be6/de7834s-6515bd40-8b2c-4dc6-a843-5ac1a95a8b55.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzI3MWRlZWE4LWUyOGMtNDFhMy1hYWY1LTI5MTNmNWY0OGJlNlwvZGU3ODM0cy02NTE1YmQ0MC04YjJjLTRkYzYtYTg0My01YWMxYTk1YThiNTUuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.BopkDn1ptIwbmcKHdAOlYHyAOOACXW0Zfgbs0-6BY-E";
                        }
                        else{
                            newimage = data.data.image
                        }
                        $("#col" + user_id).remove();
                        $("#groupuser" + user_id).remove();
                        $('.removeuser').append('<div class="form-check newaddedusers'+user_id+'"><label class = "form-check-label"for = "flexCheckDefault" ><span><img src='+newimage+' style ="width: 40px; height: 40px;"></span></label>  <label class="form-check-label"><h6>'+data.data.name+'</h6></label>  <button  data-id='+user_id+'  type="button" class="btn btn-primary addguser"><i class="fa fa-plus"></i>Add</button></div>');
                    },
                    error: function(response) {
                        console.log("error : " + JSON.stringify(response));
                    }
                });
            });

            $(document).on('click', '.userc', function(e) {
                var id = $("#rid").val();
                var token = $("meta[name='csrf-token']").attr("content");
                swal({
                  title: "Are you sure ??",
                  text: "Are you sure you want to clear this chats?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ route('clear.chat') }} ",
                            type: 'POST',
                            data: {
                                "id": id,
                                "_token": token,
                            },
                            success: function(data) {
                                $(".chat-message").remove();
                                console.log('clear chat');
                            },
                            error: function(response) {
                                console.log("error : " + JSON.stringify(response));
                            }
                        });
                        swal("Your chats has been deleted!", {
                            icon: "success",
                        });
                    }
                });
            });
            $(document).on('click', '.groupc', function(e) {
                var id = $("#gid").val();
                var token = $("meta[name='csrf-token']").attr("content");
                swal({
                  title: "Are you sure ??",
                  text: "Are you sure you want to delete this group?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ route('clear.chat.group') }} ",
                            type: 'POST',
                            data: {
                                "id": id,
                                "_token": token,
                            },
                            success: function(data) {
                                $(".chat-message").remove();
                                console.log('clear chat');
                            },
                            error: function(response) {
                                console.log("error : " + JSON.stringify(response));
                            }
                        });
                        swal("group has been deleted!", {
                            icon: "success",
                        });
                    }
                });
            });

        </script>
    </x-app-layout>
