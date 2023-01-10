var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server, {
  cors: {
    origin: "http://127.0.0.1:8000",
    methods: ["GET", "POST"]
  }
});

const users = {};
server.listen(3000);
io.on('connection', function (socket) {
  console.log("Server Running...");
  console.log(socket.id);

  socket.on('login', function (data) {
    console.log('User: ' + data.userId + ' connected');
    // saving userId to object with socket ID
    users[socket.id] = data.userId;
    io.emit('user_connected', users);
  });

  console.log("new client connected");
  socket.on('chat', data => {
    console.log(`chat data: ${JSON.stringify(data, null, 2)}`);
    console.log(data.reciver_id);
    io.emit('chat'+data.reciver_id, data);
    io.emit('authchat'+data.user_id,data);
  });

  socket.on('groupchat', data => {
    console.log('hello group user');
    for (let i = 0; i < data.groupusers.length; i++) {
       //setTimeout(function () {
        console.log(data.groupusers[i].user_id);
        io.emit('groupchatting'+data.groupusers[i].user_id, data);
    //  }//,1);
     }
    console.log(`chat data: ${JSON.stringify(data, null, 2)}`);
    // io.emit('groupchatting'+data.reciver_id, data);
  });

  socket.on('useremove', data => {
    console.log(`user remove: ${JSON.stringify(data, null, 2)}`);
    io.emit('useremove'+data.user_id, data);
  });

  socket.on('useradded', data => {
       console.log(`useradded: ${JSON.stringify(data, null, 2)}`);
       console.log('useradded'+data.user_id);
       io.emit('useradded'+data.user_id, data);
  });

  socket.on('messageseen', data => {
    console.log(`message seen: ${JSON.stringify(data, null, 2)}`);
    io.emit('messageseen'+data.reciver_id, data);
  });

  socket.on('pmessageseen', data => {
    console.log(`message seen new data: ${JSON.stringify(data, null, 2)}`);
     io.emit('pmessageseen'+data.id, data);
  });

  socket.on('messageseenstatus', data => {
    console.log(`message seen: ${JSON.stringify(data, null, 2)}`);
    io.emit('messageseenstatus'+data.id, data);
  });

   socket.on('deletegroups', data => {
    console.log(`group delete: ${JSON.stringify(data, null, 2)}`);
    io.emit('deletegroups', data);
  });

  socket.on('usertyping', data => {
    io.emit('usertyping'+data.id, data);
  });

  socket.on('groupusertyping', data => {
    console.log(data.typing_nums);
      for (let i = 0; i < data.typing_nums.length; i++) {
        io.emit('goupusertyping'+data.typing_nums[i],data);
        console.log('goupusertyping'+data.typing_nums[i]);
      }
  });

  socket.on('disconnect', function () {
    console.log('User: ' + users[socket.id] + ' disconnected');
    io.emit('user_disconnected', users[socket.id]);
    delete users[socket.id];
  });

  socket.on('connect_error', function (err) {
    console.log(err.message);
  });

});
io.on('connect_error', function (err) {
  console.log('this is error-- ' + err.message);
});
