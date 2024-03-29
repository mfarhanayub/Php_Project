<?php
include("db.php");

if(isset($_POST['insert'])){

$name = $_POST['name'];
$number = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$service = $_POST['service'];
$select = $_POST['sel'];
$area = $_POST['area'];
$city = $_POST['city'];


$query = "INSERT INTO `appoint_tb`(`user_Name`, `user_number`, `user_email`, `user_date`, `user_time`, `user_service`, `user_type`, `user_area`, `user_address`)
VALUES ('$name','$number','$email','$date','$time','$service','$select','$area','$city')";

$go = mysqli_query($connect,$query);

if($go){
    header("location:services.html");
}
else{
    echo"data not insert";
}
}


?>