<?php session_start();
error_reporting(0);
include("function/function.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="Restraunt Management System | User Website"/>
		<meta name="keywords" content="Restraunt Management System | User Website">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Restraunt Management System | User Website</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&amp;display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="../../../../../use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">		
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="css/menu.css" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">	
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/jquery.datetimepicker.min.css" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet">
	      <script src="https://kit.fontawesome.com/51238610b6.js" crossorigin="anonymous"></script>
	</head>




	<body>










		<!-- HEADER-3
		============================================= -->
		<header id="header-3" class="header navik-header header-transparent header-shadow">
			<div class="container">


				<!-- NAVIGATION MENU -->
				<div class="navik-header-container">


					<!-- CALL BUTTON -->
				    <div class="callusbtn"><a href="tel:123456789"><i class="fas fa-phone"></i></a></div>

					
					<!-- LOGO IMAGE -->
	                <div class="logo" data-mobile-logo="images/logo1.png" data-sticky-logo="images/logo1.png">
	                	<a href="#hero-3"><img src="images/logo1.png" alt="header-logo"/></a>
					</div>

					
					<!-- BURGER MENU -->
					<div class="burger-menu">
						<div class="line-menu line-half first-line"></div>
						<div class="line-menu"></div>
						<div class="line-menu line-half last-line"></div>
					</div>


					<!-- MAIN MENU -->
	                <nav class="navik-menu menu-caret navik-yellow">
	                	<ul class="top-list">

	                		<!-- DROPDOWN MENU -->
	                		<li><a href="index.php">Home</a>
	                			
	                		</li>

	                		<!-- DROPDOWN MENU -->
	                    	<li><a href="#menu-6">Our Menu</a>
	                        	
	                        </li>

	                        <!-- MEGA MENU -->
	                        <li class="mega-menu"><a href="#contacts-3">Our Location's</a>
								
							</li>	<!-- END MEGA MENU -->

	                       	<!-- DROPDOWN MENU -->
	                		

							<!-- DROPDOWN MENU -->
							

							<!-- DROPDOWN MENU -->
							

	                        <!-- HEADER BUTTON  -->
	                        <?php
	                        if(isset($_SESSION['user_email']))
	                        {
	                        ?>
 <li class="nav-btn yellow-color"><a ><?php echo $_SESSION['user_name'];  ?> </a></li>
	                    <?php }  else { ?>
	                        <li class="nav-btn yellow-color"><a href="user_login.php">Login / Register</a></li>
<?php } ?>
							<!-- BASKET ICON -->
							<li class="basket-ico ico-30">
					        	<a href="mycart.php">
					        		<span class="ico-holder"><span class="flaticon-shopping-bag"></span> <em class="roundpoint">
					        			<?php
					        			if(isset($_SESSION['mycart']))
{
  echo count($_SESSION['mycart']);
}
else {
  echo "0";
}
					        			?>
					        		</em></span>
					        	</a>
					        </li>

	                    </ul>
	                </nav>	<!-- END MAIN MENU -->


				</div>	<!-- END NAVIGATION MENU -->


			</div>     <!-- End container -->
		</header>	<!-- END HEADER-3 -->

	<div id="page" class="page">