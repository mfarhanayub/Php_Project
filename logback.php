<?php
include("db.php");
if(isset($_POST['loginsert'])){
$Email = $_POST['le'];
$password = $_POST['lp'];

$query = "SELECT user_email, user_password FROM signup_tb WHERE user_email='$Email' ";

$go = mysqli_query($connect,$query);
$count = mysqli_num_rows($go);
if(isset($_POST['remember'])) {
    setcookie('user_email',$Email, time() +30 );
    setcookie('user_password',$password, time() +30 );
 }  
if($count){
$data = mysqli_fetch_assoc($go);
$hash = $data['user_password'];



if(password_verify($password,$hash)){
    session_start();
    $_SESSION['loguser']=$Email;

    if(isset($_POST['rem'])){
        setcookie('emailcookie', $Email,time()+86400);
        setcookie('passwordcookie', $password,time()+86400);
        

}
header("location:dashboard.php");
}
else{
    echo "<script>alert('password incorrect');</script>";
}
}
else{
    echo "<script>alert('email incorrect');</script>";
}
}


?>

