<?php include("header.php");?>

<div id="booking-page" class="page-hero-section division">
				<div class="container">	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1">
							<div class="hero-txt text-center white-color">

								<!-- Breadcrumb -->
								<div id="breadcrumb">
									<div class="row">						
										<div class="col">
											<div class="breadcrumb-nav">
												<nav aria-label="breadcrumb">
												  	<ol class="breadcrumb">
												    	<li class="breadcrumb-item"><a href="index.php">Home</a></li>
												    	<li class="breadcrumb-item active" aria-current="page">CheckOut Page</li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl">Order Placement</h2>

							</div>
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- End container --> 
			</div>	<!-- END PAGE HERO -->	




			<!-- BOOKING-2
			============================================= -->
			<div id="booking-2" class="wide-70 booking-section division">
				<div class="container">
				 	<div class="row">


						<!-- BOOKING FORM -->
				 		<div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
			 				<div class="">

				 				<!-- Text -->	
								<p class="p-xl text-center">
									Please Enter Your Detail To Order Procedd
								</p>
								<?php
								$uemail=$_SESSION['user_email'];
								$fg_us="select * from tbl_user where email_id='$uemail'";
								$run_us=mysqli_query($con,$fg_us);
								$row_us=mysqli_fetch_array($run_us);
								$phone_no=$row_us['phone_no'];
								$street_no=$row_us['street_no'];
								$state=$row_us['state'];
								$country=$row_us['country'];
								$pin_code=$row_us['pin_code'];

								?>

								<!-- Form -->
								<form method="post" class="row booking-form">

					                <!-- Form Input -->
					                
					                <div class="col-lg-12">
					                	<input id="uphone" type="text" name="uphone" class="form-control " placeholder="Enter Phone No"  value="<?php echo $phone_no ?>">
					                </div>
					                <div class="col-lg-12">
					                	<input id="ustreet" type="text" name="ustreet" class="form-control " placeholder="Enter Street No" value="<?php echo $street_no ?>" >
					                </div>
					                <div class="col-lg-12">
					                	<input id="ustate" type="text" name="ustate" class="form-control " placeholder="Enter State"  value="<?php echo $state ?>">
					                </div>
					                <div class="col-lg-6">
					                	<input id="ucountry" type="text" name="ucountry" class="form-control " placeholder="Enter Country"  value="<?php echo $country ?>">
					                </div>
					                <div class="col-lg-6">
					                	<input id="upincode" type="text" name="upincode" class="form-control " placeholder="Enter PinCode"  value="<?php echo $pin_code ?>">
					                </div>
										  
					                <!-- Form Button -->
					                <div class="col-md-12 mt-10">  
					                	<input type="submit" class="btn btn-md btn-red  " name="ulogin" value="Order Now" onclick="register()">		
					                				                </div>
					                                                              
					             
																							
								</form>	<!-- End Form -->	

				 			</div>	
				 		</div>	<!-- END BOOKING FORM -->	

					</div>	<!-- End row -->
				</div>	   <!-- End container -->	
			</div>	<!-- END BOOKING-2 -->



<?php include("footer.php");?>

<script type="text/javascript">
	function register()
	{


    var uphone=$('#uphone').val();
    var ustreet=$('#ustreet').val();
    var ustate=$('#ustate').val();
    var ucountry=$('#ucountry').val();
    var upincode=$('#upincode').val();

    $.ajax({
      url:"order_place.php",
      method:"POST",
      data:{uphone:uphone,ustreet:ustreet,ustate:ustate,ucountry:ucountry,upincode:upincode},
      dataType:"text",
      success:function(data){

alert(data);
if(data == "Order Place")
{
	window.open('index.php','_self');
}
if(data == "Order Not Place")
{
	window.open('index.php','_self');
}
      }
      
    });
 
		
	}
</script>

