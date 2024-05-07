<?php
include("connection.php");

   $room = $_POST['room'];
   if(strlen($room)>15 or strlen($room)<2){
      $msg="Please choose Room Name between 2 to 15 characters";
      echo '<script language = "javascript">';
      echo 'alert("'.$msg.'");';
      echo 'window.location="./chatsystem.php";';
      echo '</script>';
 }
 $query="select * from rooms where  roomname='$room'";
$result=mysqli_query($conn,$query);
if($result){
   if(mysqli_num_rows($result)>0)
   {
      $msg="Room Already in Use! Please Choose a different room name";
      echo '<script language = "javascript">';
      echo 'alert("'.$msg.'");';
      echo 'window.location="./chatsytem.php";';
      echo '</script>';
   }
}
if(strlen($room)<=15 and strlen($room)>=2){
   $query="insert into rooms(roomname,ctime) values('$room',CURRENT_TIMESTAMP)";
   $result=mysqli_query($conn,$query); 
   if($result){
   $msg="Your Room is ready for Chat!";
   echo '<script language = "javascript">';
   echo 'alert("'.$msg.'");';
   echo 'window.location="./rooms.php?roomname='.$room.'";';
   echo '</script>';
   }
}


  


?>