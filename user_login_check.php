<?php
include("function/function.php");
session_start();
$email=$_POST['uemail'];
$pass=$_POST['upass'];


$check_avail="select * from tbl_login where user_email='$email' AND user_pass='$pass'";
$run_avail=mysqli_query($con,$check_avail);
$row_avail=mysqli_num_rows($run_avail);



if($row_avail !=0)
{

$update="update tbl_login set last_login=NOW() Where user_email='$email'";
$run_update=mysqli_query($con,$update);

$fg_us="select * from tbl_user where email_id='$email'";
$run_us=mysqli_query($con,$fg_us);
$row_us=mysqli_fetch_array($run_us);
$user_name=$row_us['first_name'] . " " . $row_us['last_name'];

$_SESSION['user_email']=$email;

$_SESSION['user_name']=$user_name;
echo "Login Successfully";
}
else
{

echo "Login UnSuccessfully";
}



?>