<?php
include("connection.php");
$msg=$_POST['text'];
$ip=$_POST['ip'];
$room=$_POST['room'];
$sql = "insert into messages(msg,room,ip,ctime) values('$msg','$room','$ip',CURRENT_TIMESTAMP)";
mysqli_query($conn,$sql);
mysqli_close($conn);

?>