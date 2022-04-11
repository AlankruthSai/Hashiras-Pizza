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
												    	<li class="breadcrumb-item active" aria-current="page">Login Page</li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl">Login To Continuee</h2>

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
			 				<div class="form-holder">

				 				<!-- Text -->	
								<p class="p-xl text-center">
									Please Enter Your Login Crediantial to Procedd.
								</p>

								<!-- Form -->
								<form method="post" class="row booking-form">

					                <!-- Form Input -->
					                 <div class="col-lg-12">
					                	<input id="uemail" type="email" name="uemail" class="form-control " placeholder="Enter Email" required>
					                </div>

					                  <div class="col-lg-12">
					                	<input id="upass" type="password" name="upass" class="form-control " placeholder="Enter Password" required>
					                </div>
										  <div class="col-lg-12">
										  	<p>Don't Have An Account ? <a href="user_register.php">Click Register Now.</a></p>

										  </div>              
					                <!-- Form Button -->
					                <div class="col-md-12 mt-10">  
					                	<button type="submit" class="btn btn-md btn-red tra-red-hover " name="ulogin" onclick="register()">
										<span>
										Login Now
										</span>
										</button> 
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

    var uemail=$('#uemail').val();
    var upass=$('#upass').val();
    $.ajax({
      url:"user_login_check.php",
      method:"POST",
      data:{uemail:uemail,upass:upass},
      dataType:"text",
      success:function(data){

alert(data);
if(data == "Login Successfully")
{
	window.open('index.php','_self');
}

if(data == "Email Id Or Password Not Match")
{
	window.open('user_login.php','_self');
}
      }
      
    });
 
		
	}
</script>