<?php session_start();
include("../function/function.php");
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/src/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jan 2020 11:28:21 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Five River  - All Type Of Fashion & Beauty | Electronics | Toiletry | Health & Care Online Shopping Platform">
    <meta name="author" content="BlueBoxSolution">
    <link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>Restraunt Management System | Restraunt Panel </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<style>
.login-page, .register-page {
    background: url('images/back.jpg') center center no-repeat #d2d6de;
    background-size: cover;
    height: 100%;
    width: 100%;
    position: fixed;
}
  </style>
<body class="hold-transition login-page" >
<!-- 
style="background-image:url('images/techtrixlogo.jpg')" -->


<div class="login-box" >
  <div class="login-logo">
    <a href="">Restraunt <b> Panel</b> </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register start your session</p>

    <form  method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="aaddress" placeholder=" Address" required="required"> 
        <span class="ion ion-email form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="apincode" placeholder="Pin Code" required="required">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="aemail" placeholder=" Login Email" required="required">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="apass" placeholder="Login Password" required="required">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="acontact" placeholder="Contact No">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="acemail" placeholder=" Contact Email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="row">
       
        <!-- /.col -->
       
        <!-- /.col -->
        <div class="col-12 text-center">
          <p>Already Have an Account  in This Site ? <a href="restraunt_login.php"> Login Now </a></p>
          <input type="submit" class="btn btn-info btn-block margin-top-10" name="btnlogin" value="SIGN UP">
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<?php


if(isset($_POST['btnlogin']))
{

$aaddress=$_POST['aaddress'];
$apincode=$_POST['apincode'];
$email=$_POST['aemail'];
$pass=$_POST['apass'];
$acontact=$_POST['acontact'];
$acemail=$_POST['acemail'];


$check_avail="select * from tbl_restraunt where login_email='$email'";
$run_avail=mysqli_query($con,$check_avail);
$row_avail=mysqli_num_rows($run_avail);



if($row_avail ==0)
{

$ins="INSERT INTO tbl_restraunt(r_address,r_pincode,login_email,login_pass) VALUES ('$aaddress','$apincode','$email','$pass')";
$run_ins=mysqli_query($con,$ins);


$last_ins="select * from tbl_restraunt order by res_id desc limit 1";
$run_last=mysqli_query($con,$last_ins);
$row_last=mysqli_fetch_array($run_last);
$res_id=$row_last['res_id'];

$ins2="INSERT INTO tbl_contact_detail(restraunt_id,contact_no,contact_email) VALUES ('$res_id','$acontact','$acemail')";
$run_ins2=mysqli_query($con,$ins2);

$ins3="INSERT INTO tbl_store_location(res_id,r_address,r_pincode) VALUES ('$res_id','$aaddress','$apincode')";
$run_ins3=mysqli_query($con,$ins3);

if($run_ins)
{
echo "<script>alert('Register Successfully')</script>";
echo "<script>window.open('restraunt_login.php','_self')</script>";
}
else
{
 echo "<script>alert('Register UnSuccessfully')</script>";
echo "<script>window.open('restraunt_register.php','_self')</script>"; 
}

}
else
{

echo "<script>alert('Email Id Already Exist')</script>";
echo "<script>window.open('restraunt_register.php','_self')</script>";
}






}



?>



	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/src/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jan 2020 11:28:21 GMT -->
</html>
