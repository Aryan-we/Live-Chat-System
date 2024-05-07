<?php
//this code check where the existing room is match with db roomname data or not
include("connection.php");
$roomname=$_GET['roomname'];
$query="select * from rooms where  roomname='$roomname'";
$result=mysqli_query($conn,$query);
if($result){
   if(mysqli_num_rows($result)==0)
   {
      $msg="This Room does not Exist, Kindly create a Room first";
      echo '<script language = "javascript">';
      echo 'alert("'.$msg.'");';
      echo 'window.location="./chatsytem.php";';
      echo '</script>';
   }
}
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
  background-image:url(./img.jpg);

}
.container1{
  
    border:0px solid;
    text-align: left;
    color: white;
    margin-left: 10%;
    
    
}
.container1 .display{
  padding:10px;  
  width:70%;
  height:400px;
  border: 0px solid black;
  margin:10px 0px;
  background-color: silver;
 
  
}
.container1 .inputfield input{
  margin:10px 0px;
  width: 70%;
  height: 40px;
  border: none;
  outline:none;
}
.container1 button{
  background-color: green;
  color: white;
  width: 70px;
  height: 20px;
  border: none;
}

.container1 .display .divScroll{
 display:flex;
 flex-direction:column;
 border:0px;
}

.divScroll{
  height:400px;
  overflow-y:scroll;
  
}
</style>
</head>
<body background="img.jpg">
 
  <div class="container1">
   <h1>Chat Messages for <?php echo $roomname;?></h1>
   <div class="display">
   <div class="divScroll">
    
    </div></div>
    <div class="inputfield">
      <input type="text" name="usermsg" id="usermsg" placeholder="Type Your Message Here">
    </div>
    <button name="submitmsg" id="submitmsg">Send</button>
  </div>
<script>
  //code for fetching messages from DB
  window.setInterval(runFunction,1000);
  function runFunction(){
    $.post("fechmsg.php",{room: '<?php echo $roomname ?>'},
      function(data,status){
        document.getElementsByClassName("divScroll")[0].innerHTML= data;

      }
    )
  }
</script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous">
  </script>
  <!--jquery-->
  <script>
  $("#submitmsg").click(function(){
    var clientmsg = $("#usermsg").val();
    $.post("postmsg.php", {text:clientmsg, room:'<?php echo $roomname?>',ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
    function(data,status){
      document.getElementsByClassName('divScroll')[0].innerHTML=
      data;
    }
    );
    $("#usermsg").val("");
    return false;

});
</script>
</body>
<script>
  function chat(){
  let message=document.getElementsByName("usermsg")[0].value;
  document.getElementsByTagName("span")[0].innerHTML+=message+" ";
  }
</script>
</html>
