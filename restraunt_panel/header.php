<?php
include("../function/function.php");
error_reporting(0);
session_start();
if(!isset($_SESSION['admin_email']))
{
  echo "<script>window.open('restraunt_login.php','_self')</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Arowana | VTC Car & Van Reservation Service Since 1999">
    <meta name="author" content="BlueBoxSolution">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Restraunt Management - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
    
	<!--amcharts -->
	<link href="lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	<script src="https://kit.fontawesome.com/51238610b6.js" crossorigin="anonymous"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <b class="logo-mini">
      <span class="light-logo"><img src="images/logo-light.png" alt="logo"></span>
      <span class="dark-logo"><img src="images/logo-dark.png" alt="logo"></span>
    </b>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
 
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
 
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
		 <div class="ulogo">
			 <a href="index.php">
			  <!-- logo for regular state and mobile devices -->
			  <span><b>Restraunt Management </b></span>
			</a>
		</div>
        <!-- <div class="image">
          <img src="../assets/img/logo_main.png" style='background:white;height: 70px;width: 120px' alt="User Image">
        </div> -->
        <div class="info">
          <p>Restraunt Panel</p>
			
            <a href="restraunt_logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="nav-devider"></li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
          <a href="index.php">
           <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>


  <li class="treeview">
          <a href="#">
            <i class="fas fa-tachometer-alt"></i>
            <span>Menu</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_item.php">Add Item</a></li>
            <li><a href="item_list.php">Item List</a></li>
            <li><a href="add_topping.php">Add Topping</a></li>
            <li><a href="topping_list.php">Topping List</a></li>
            <li><a href="add_sauce.php">Add Sauce</a></li>
            <li><a href="sauce_list.php">Sauce List</a></li>

            <li><a href="add_base.php">Add Base</a></li>
            <li><a href="base_list.php">Base List</a></li>


         
            
          </ul>
        </li>       
  <li class="treeview">
          <a href="#">
            <i class="fas fa-tachometer-alt"></i>
            <span>Order</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pending_order.php">Pending Order</a></li>
            <li><a href="complete_order.php">Complete Order</a></li>


         
            
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fas fa-tachometer-alt"></i>
            <span>Payment</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pending_payment.php">Pending Payment</a></li>
            <li><a href="paid_payment.php">Paid Payment </a></li>


         
            
          </ul>
        </li>

 <li class="treeview">
          <a href="#">
            <i class="fas fa-tachometer-alt"></i>
            <span>Operation Timing</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_timings.php">Add Timings</a></li>
            <li><a href="timing_list.php">Timing List</a></li>


         
            
          </ul>
        </li>

         
       

        <!--  <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_pro.php">Add Product</a></li>
            <li><a href="view_pro.php">View Product</a></li>
            
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="icon-chart"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_data.php">View Orders</a></li>
                        <li><a href="user_list.php">Manage Orders</a></li>
                        
            
          </ul>
        </li> -->
       
        
      </ul>
    </section>
  </aside>