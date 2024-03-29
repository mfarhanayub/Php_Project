<?php
include("db.php");
if(isset($_POST["insert"])){
$fname = $_POST['fn'];
$email = $_POST['em'];
$password = $_POST['pas'];
$cpassword = $_POST['cpas'];

$query1 ="SELECT  user_email FROM signup_tb WHERE user_email='$email' ";
$go1 = mysqli_query($connect,$query1);
$count = mysqli_num_rows($go1);

$incript = password_hash($password,PASSWORD_DEFAULT);
$incript = password_hash($cpassword,PASSWORD_DEFAULT);

if($count){
    echo"user alrady exist";
}

else{
$query = "INSERT INTO `signup_tb`( `first_name`, `user_email`, `user_password`, `conform_password`)
 VALUES ('$fname','$email','$incript','$incript')";

$go = mysqli_query($connect,$query);

if($go){
    header("location:dashboard.php");
}
else{
    echo"error";
}

}
}

?>