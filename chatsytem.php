<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat System</title>
  <style>
body{
  margin:0;
  padding:0;
  background-image:url("./img.jpg");

}
.container{
    width:50%;
    margin:10% auto;
    border:2px solid;
    text-align: center;
    color: white;
}
.container .image img{
  height: 100px;
  width: 100px;
  border-radius: 50%;
  margin:10px;
}
.container .inputfield input{
  width: 90%;
  height: 50px;
  text-align: center;
  margin:10px;
  border:none;
  outline: none;
  font-size:20px;
  
}
.container .btn button{
  width: 90%;
  height: 50px;
  text-align: center;
  background-color: blue;
  color:white;
  border:0px;
  margin:10px;
  font-size:20px
}
  </style>
</head>
<body>
  <div class="container">
    <form action="claimroom.php" method="POST" autocomplete="off">
    <div class="image"><img src="./pic.jpg" alt="error"></div>
    <div class="text"><h1>Live Chat System</h1>
    <h3>Developed By : Aryan Kumar Dubey</h3></div>
    <div class="inputfield"><input type="text" name="room" placeholder="Create a Room to Chat" ></div>
    <div class="btn"><button name="btn">Start Chatting</button></div>
    </form>
  </div>
  
</body>
</html>
