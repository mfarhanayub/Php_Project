
<?php
include("db.php");

$id =$_GET['uid'];

$query = "DELETE FROM `appoint_tb` WHERE user_id = '$id'";

$row = mysqli_query($connect,$query);

if($row)

{
    
   header("location:admin.php");
   
}

else{
    echo"data not delete";
}

?>