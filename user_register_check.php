<?php
include("function/function.php");

$ufisrt=$_POST['ufisrt'];
$ulast=$_POST['ulast'];
$uemail=$_POST['uemail'];
$upass=$_POST['upass'];
$uphone=$_POST['uphone'];
$ustreet=$_POST['ustreet'];
$ustate=$_POST['ustate'];
$ucountry=$_POST['ucountry'];
$upincode=$_POST['upincode'];



$check_avail="select * from tbl_user where email_id='$uemail'";
$run_avail=mysqli_query($con,$check_avail);
$row_avail=mysqli_num_rows($run_avail);



if($row_avail ==0)
{

$ins="INSERT INTO tbl_user(first_name,last_name,email_id,phone_no,street_no,state,country,pin_code,join_date) VALUES ('$ufisrt','$ulast','$uemail','$uphone','$ustreet','$ustate','$ucountry','$upincode',NOW())";
$run_ins=mysqli_query($con,$ins);

$fg_last="select * from tbl_user order by user_id desc limit 1";
$run_last=mysqli_query($con,$fg_last);
$row_last=mysqli_fetch_array($run_last);
$user_id=$row_last['user_id'];

$ins_login="INSERT INTO tbl_login(user_id,user_email,user_pass,last_login) VALUES ('$user_id','$uemail','$upass','2021/11/26')";
$run_login=mysqli_query($con,$ins_login);


$ins_login2="INSERT INTO tbl_name(user_id,first_name,last_name) VALUES ('$user_id','$ufisrt','$ulast')";
$run_login2=mysqli_query($con,$ins_login2);

$ins_login3="INSERT INTO tbl_personal_details(email_id,user_id,phone_no) VALUES ('$uemail','$user_id','$uphone')";
$run_login3=mysqli_query($con,$ins_login3);

$ins_login4="INSERT INTO tbl_address(user_id,street,state,country,pincode) VALUES ('$user_id','$ustreet','$ustate','$ucountry','$upincode')";
$run_login4=mysqli_query($con,$ins_login4);

if($run_ins)
{
echo "Register Successfully";
}
else
{
echo "Register UnSuccessfully";
}

}
else
{
echo "Email Id Already Exist";
}
?>
