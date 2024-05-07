<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="chatsystem";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "Failed to Connect".mysqli_connect_error();
}else{
   // echo "Connection Ok";
}
?>