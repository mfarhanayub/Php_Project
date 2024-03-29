<?php
include("db.php");

if(isset($_POST['btnsubmit'])){

$name = $_POST["yn"];    
$email = $_POST["ye"];
$number = $_POST["ynum"];
$service = $_POST["ys"];
$message = $_POST["ym"];

$query = "INSERT INTO `contact_tb`(`user_Name`, `user_Email`, `user_Number`, `user_service`, `message`) 
VALUES ('$name','$email','$number','$service','$message')";

$go = mysqli_query($connect,$query);

if($go){

   header("location:contact.html");
   
}
else{
    echo"error";
}

}



?>
