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
												    	<li class="breadcrumb-item active" aria-current="page">Register Page</li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl">Register To Continuee</h2>

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
									Please Enter Your Detail to Procedd.
								</p>

								<!-- Form -->
								<form method="post" class="row booking-form">

					                <!-- Form Input -->
					                 <div class="col-lg-6">
					                	<input  type="text" name="ufisrt" id="ufisrt" class="form-control " placeholder="First Name" >
					                </div>
					                 <div class="col-lg-6">
					                	<input  type="text" name="ulast" id="ulast" class="form-control " placeholder="Last Name" >
					                </div>
					                

					                 <div class="col-lg-12">
					                	<input  type="email" name="uemail" id="uemail" class="form-control " placeholder="Enter Email" >
					                </div>

					                  <div class="col-lg-12">
					                	<input  type="password" name="upass" id="upass" class="form-control " placeholder="Enter Password" >
					                </div>
					                <div class="col-lg-12">
					                	<input id="uphone" type="text" name="uphone" class="form-control " placeholder="Enter Phone No" >
					                </div>
					                <div class="col-lg-12">
					                	<input id="ustreet" type="text" name="ustreet" class="form-control " placeholder="Enter Street No" >
					                </div>
					                <div class="col-lg-12">
					                	<input id="ustate" type="text" name="ustate" class="form-control " placeholder="Enter State" >
					                </div>
					                <div class="col-lg-6">
					                	<input id="ucountry" type="text" name="ucountry" class="form-control " placeholder="Enter Country" >
					                </div>
					                <div class="col-lg-6">
					                	<input id="upincode" type="text" name="upincode" class="form-control " placeholder="Enter PinCode" >
					                </div>
										  <div class="col-lg-12">
										  	<p>Already Have An Account ? <a href="user_login.php">Click Login Now.</a></p>

										  </div>      
										        
					                <!-- Form Button -->
					                <div class="col-md-12 mt-10">  
					                	<input type="submit" class="btn btn-md btn-red  " name="ulogin" value="Register Now" onclick="register()">		
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

    var ufisrt=$('#ufisrt').val();
    var ulast=$('#ulast').val();
    var uemail=$('#uemail').val();
    var upass=$('#upass').val();
    var uphone=$('#uphone').val();
    var ustreet=$('#ustreet').val();
    var ustate=$('#ustate').val();
    var ucountry=$('#ucountry').val();
    var upincode=$('#upincode').val();

    $.ajax({
      url:"user_register_check.php",
      method:"POST",
      data:{ufisrt:ufisrt,ulast:ulast,uemail:uemail,upass:upass,uphone:uphone,ustreet:ustreet,ustate:ustate,ucountry:ucountry,upincode:upincode},
      dataType:"text",
      success:function(data){

alert(data);
if(data == "Register Successfully")
{
	window.open('user_login.php','_self');
}
if(data == "Register UnSuccessfully")
{
	window.open('user_register.php','_self');
}
if(data == "Email Id Already Exist")
{
	window.open('user_register.php','_self');
}
      }
      
    });
 
		
	}
</script>

