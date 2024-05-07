<?php
include("connection.php");
$room = $_POST['room'];
$query = "select msg,ctime,ip from messages where room='$room'";
$res="";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $res=$res . '<div class="container" style="border:1px solid white;">';
        $res=$res . $row["ip"];
        $res=$res . "Says <p>".$row["msg"];
        $res = $res . '</p><span class="time-right">'. $row["ctime"].'</span></div><br><br>';

    }
}
echo $res;
?>