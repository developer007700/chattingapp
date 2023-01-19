<x-app-layout>
    <style>
        body {
            margin-top: 20px;
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
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css"> {{-- Multi.
    select --}}
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script> {{-- Multi. select
    --}}

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
    </h2>
    </x-slot> --}}

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
                        <form action="{{ route('group.add')  }}" method="post">
                            @csrf
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Group name:</label>
                                    <input type="text" name="name" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea class="form-control" name="description" id="message-text" required></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
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
                        <form action="{{ route('user.add')  }}" method="post">
                            @csrf
                            <input type="hidden" value="{{$group_id}}" name="group_id">
                            <div class="row d-flex mt-100 col-md-10 m-1">
                                @if(isset($groupUser))
                                @foreach($groupUser as $user)
                                <div class="groupuser col-md-8 mb-2 ml-3" id="groupuser{{$user->id}}">

                                    @if($user->id!=Auth::id())
                                    {{$user->name}}
                                    @endif

                                </div>
                                <div class="col-md-2" id="col{{$user->id}}">
                                    @if($user->id!=Auth::id())
                                    <button id="remove" data-id="{{ $user->id }}" class="btn btn-sm btn-danger">Remove</button>
                                    @endif
                                </div>
                                @endforeach
                                @endif
                                <hr>
                                <div class="row col-md-9 m-1">
                                    @if(isset($addUserList))
                                    <select id="choices-multiple-remove-button" name="user[]" placeholder="Select upto 5 tags" multiple required>
                                        @foreach($addUserList as $users)
                                        <option value="{{ $users->id }}">{{ $users->name }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>
                                        Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox chat-view">
                        <div class="ibox-title row">
                            <div class="col-md-6">
                                <small class="pull-right text-muted"><b>{{isset($groupDetail->name) ? $groupDetail->name
                                        : ''}}{{isset($userName->name) ? $userName->name : ''}}</b></small>
                            </div>
                            <div class="d-flex col-md-4">
                                @if(isset($groupDetail))@if($groupDetail->created_by == Auth::id()) <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="fa fa-user-plus"></i> Add Member
                                </button>@endif @endif
                                &nbsp;
                                @if(isset($groupDetail))@if($groupDetail->created_by == Auth::id())
                                <form action="{{route('group.delete',$groupDetail->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-users"></i> Delete Group
                                    </button>@endif @endif
                                </form>
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
    <script>
        var rid = "{{ $reciver_id }}";
        var group_id = "{{ $group_id }}"
        console.log('group_id', group_id);
        console.log(rid);
        var socket = io.connect('http://localhost:3000');
        socket.on('chat', function(data) {
            var reciverId = "{{ $reciver_id }}";
            $("#messages").append("<strong>" + data.user + ":</strong><p>" + data.message + "</p>");
            var html;
            var username = "{{Auth::user()->name}}"
            if (data.user_id == "{{ Auth::user()->id }}") {
                html = '<div class="chat-message right"><img class="message-avatar" src="{{Auth::user()->image}}" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> {{isset($message) ? \Carbon\Carbon::parse($message->created_at)->diffForHumans() : "" }} </span><span class="message-content">' + data.message + '</span></div></div>'
            } else if (data.reciver_id == rid && data.reciver_id == "{{ Auth::id()}}") {
                html = '<div class="chat-message left"><img class="message-avatar" src="' + data.image + '" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> {{ isset($message) ? \Carbon\Carbon::parse($message->created_at)->diffForHumans() : "" }} </span>   <a class="message-author" href="#">' + data.user + ' </a><span class="message-content">' + data.message + '</span></div></div>';
            } else if (data.user_id == rid && data.reciver_id == "{{Auth::id()}}") {
                html = '<div class="chat-message left"><img class="message-avatar" src="' + data.image + '" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> {{ isset($message) ? \Carbon\Carbon::parse($message->created_at)->diffForHumans() : "" }} </span>   <a class="message-author" href="#">' + data.user + ' </a><span class="message-content">' + data.message + '</span></div></div>';
            } else if (group_id != null && rid == data.reciver_id) {
                html = '<div class="chat-message left"><img class="message-avatar" src="' + data.image + '" alt=""><div class="message"><span class="message-date"> </span> <span class="message-date"> {{ isset($message) ? \Carbon\Carbon::parse($message->created_at)->diffForHumans() : "" }} </span>   <a class="message-author" href="#">' + data.user + ' </a><span class="message-content">' + data.message + '</span></div></div>';
            }
            $('.chat-discussion').append(html);
            $(".chat-discussion").animate({
                scrollTop: $('.chat-discussion').prop("scrollHeight")
            }, 0);
        });
        socket.on('usertyping', function(data) {
            if (data) {
                console.log(data.gid, group_id);
                if (data.id != "{{ Auth::user()->id }}" && data.id == rid && group_id == null) {
                    $(".typingmessage").text(data.message);
                } else if (data.gid == group_id && data.id != "{{ Auth::user()->id }}") {

                    $(".typingmessage").text(data.message);
                } else {
                    $(".typingmessage").text('');
                }
            } else {
                $(".typingmessage").text('');
            }

        });
        $(document).on('click', '#send-message', function(e) {
            var reciver_id = null;
            e.preventDefault();
            console.log('message');
            var _token = $("input[name='_token']").val();
            var user_id = "{{ Auth::user()->id }}";

            reciver_id = "{{ isset($reciver_id) ?  $reciver_id : null }}";
            console.log(reciver_id);
            var user = "{{ Auth::user()->name }}";
            var message = $("#message").val();
            console.log(message);
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
                        'group_id': group_id
                    },
                    success: function(data) {
                        console.log(data);
                        $(".message").val('');
                        console.log()
                    }
                });

                socket.emit('chat', {
                    user_id,
                    user,
                    message,
                    image,
                    reciver_id,
                });
                $(".message").val('');
                console.log('jkjkjkj');
            }
        });
        $(".message").on('keydown', function(event) {
            if (event.which === 13) {
                $("#send-message").trigger('click');
            } else {
                var message = "{{ Auth::user()->name }}" + ' is typing...';
                var id = "{{ Auth::user()->id }}";
                var gid = "{{ $group_id }}";
                socket.emit('usertyping', {
                    id,
                    message,
                    gid
                });
                setTimeout(function() {
                    socket.emit('usertyping', false);
                }, 2000);
            }
        });
        $(document).ready(function() {
            console.log('chat content');
            $(".chat-discussion").animate({
                scrollTop: $('.chat-discussion').prop("scrollHeight")
            }, 0);
        });

        // Multiple Select for Add Member
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 5,
                searchResultLimit: 5,
                renderChoiceLimit: 10
            });
        });
        //End Multiple Select for Add Member
        $(document).on('click', '#remove', function(e) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            console.log(id);
            $.ajax({
                url: "{{ route('user.delete') }}",
                type: 'POST',
                data: {
                    "id": id,
                    "group_id": group_id,
                    "_token": token,
                },
                success: function() {
                    $("#col" + id).remove();
                    $("#groupuser" + id).remove();
                    console.log('jkj')
                    $('#choices-multiple-remove-button').append(`<option value="opopo">
                                      001
                                  </option>`);
                },
                error: function(response) {
                    console.log("error : " + JSON.stringify(response));
                }
            });
        });

        $(document).on('click', '#gchat', function(e) {
            console.log('gchat');
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            console.log(id);
            $.ajax({
                url: "{{ route('group.content') }} ",
                type: 'POST',
                data: {
                    "id": id,
                    "group_id": group_id,
                    "_token": token,
                },
                success: function(data) {
                    $(".chatcontent").html(data);
                },
                error: function(response) {
                    console.log("error : " + JSON.stringify(response));
                }
            });
        });

        $(document).on('click', '#pchat', function(e) {
            console.log('pchat');
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            console.log(id);
            $.ajax({
                url: "{{ route('chat.content') }} ",
                type: 'POST',
                data: {
                    "id": id,
                    "group_id": null,
                    "_token": token,
                },
                success: function(data) {
                    $(".chatcontent").html(data);
                },
                error: function(response) {
                    console.log("error : " + JSON.stringify(response));
                }
            });
        });
    </script>
</x-app-layout>