<?php include("header.php");?>
			<!-- HERO-3
			============================================= -->	
			<section id="hero-3" class="hero-section division">

				
				<!-- SLIDER -->
				<div class="slider mt-1001">
			    	<ul class="slides">


				          	<!-- SLIDE #1 -->
				      	<li id="slide-1">

					        <!-- Background Image -->
				        	<img src="images/slider/slide-12.jpg" alt="slide-background">

							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center left-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-sm-6">
		       								<div class="caption-txt white-color">

						       					<!-- Title -->
								         	 	<h2>Pepperoni Pizza</h2>
								         	 	<h3>Only <span class="yellow-color">$7.65</span></h3>	

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->


				      	<!-- SLIDE #2 -->
				      	<li id="slide-2">

				        	<!-- Background Image -->
				        	<img src="images/slider/slide-11.jpg" alt="slide-background">

							<!-- Image Caption -->
	        				<div class="caption d-flex align-items-center right-align">
	        					<div class="container">
		       						<div class="row">
		       							<div class="col-sm-6 ">
		       								<div class="caption-txt white-color">

					        					<!-- Title -->
								         	 	<h2>BBQ Chicken Pizza</h2>
								         	 	<h3>Only <span class="yellow-color">$8.29</span></h3>	

											</div>	
				         				</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

				     	</li>

				    </ul>
			  	</div>	<!-- END SLIDER -->

				
			</section>	<!-- END HERO-3 -->	




		




			<!-- MENU-6
			============================================= -->
			<section id="menu-6" class="wide-70 menu-section division">
				<div class="container">
					<div class="row">


                  <?php 
                  $fg_item="select * from tbl_item";
                  $run_item=mysqli_query($con,$fg_item);
                  while($row_item=mysqli_fetch_array($run_item))
                  {
                  	$item_name=$row_item['item_name'];
                  	$item_image=$row_item['item_image'];
                  	$item_detail=$row_item['item_detail'];
                  	$item_price=$row_item['item_price'];
                  	$item_id=$row_item['item_id'];



                  ?>
						<!-- MENU ITEM #1 -->
						<div class="col-sm-6 col-lg-3">
							<div class="menu-6-item bg-white">

								<!-- IMAGE -->
								<div class="menu-6-img rel">
									<div class="hover-overlay">

										<!-- Image -->
										<img class="img-fluid" src="restraunt_panel/item_image/<?php echo $item_image ?>" alt="menu-image" />

										<!-- Item Code -->
<!-- 										<span class="item-code bg-tra-dark">Code: 0850</span> -->	

										<!-- Zoom Icon -->
										<div class="menu-img-zoom ico-25">
											<a href="restraunt_panel/item_image/<?php echo $item_image ?>" class="image-link">
												<span class="flaticon-zoom"></span>
											</a>
										</div> 

									</div>
								</div>

								<!-- TEXT -->
								<div class="menu-6-txt rel">

									<!-- Rating -->	
									

								

									<!-- Title -->
									<h5 class="h5-sm"><?php echo $item_name ?></h5>

									<!-- Description -->	
									<p class="grey-color"><?php echo $item_detail ?></p>

									<!-- Price -->
									<div class="menu-6-price bg-coffee">
										<h5 class="h5-xs yellow-color">Rs : <?php echo $item_price ?></h5>
									</div>

									<!-- Add To Cart -->
									<div class="add-to-cart bg-yellow ico-10">
										<a href="cart.php?itemid=<?php echo $item_id ?>"><span class="flaticon-shopping-bag"></span> Add to Cart</a>
									</div>

								</div>

							</div>
						</div>	<!-- END MENU ITEM #1 -->

					<?php } ?>




					</div>	  <!-- End row -->	
				</div>	   <!-- End container -->
			</section>	<!-- END MENU-6 -->









			<!-- BANNER-3
			============================================= -->
			<section id="banner-3" class="bg-yellow banner-section division">
				<div class="container">
			 		<div class="row d-flex align-items-center">


			 			<!-- BANNER TEXT -->
						<div class="col-md-7 col-lg-6">
							<div class="banner-3-txt coffee-color">

								<!-- Title  -->
								<h4 class="h4-xl">Download mobile App and</h4>
								<h2>save up to 20%</h2>
								
							   <!-- Text -->	
								<p class="p-md" style="font-size: 25px;">GetGo with just a click to grab your Super Meal !!
								</p>

								<!-- Store Badges -->
								<div class="stores-badge">

									<!-- AppStore -->
									<a href="#" class="store">
										<img class="appstore-original" src="images/appstore.png" alt="appstore-logo" />
									</a>
													
									<!-- Google Play -->
									<a href="#" class="store">
										<img class="googleplay-original" src="images/googleplay.png" alt="googleplay-logo" />
									</a>
												
								</div>

							</div>
						</div>


						<!-- BANNER IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="banner-3-img">
								<img class="img-fluid" src="images/e-shop.png" alt="banner-image">
							</div>
						</div>


			 		</div>      <!-- End row -->
				</div>	    <!-- End container -->		
			</section>	<!-- END BANNER-3 -->




			<!-- ABOUT-3
			============================================= -->
			<section id="about-3" class="wide-60 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- ABOUT IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="about-3-img text-center mb-40">
								<img class="img-fluid" src="images/about-01-img.png" alt="about-image">
							</div>
						</div>


						<!-- ABOUT TEXT -->
						<div class="col-md-7 col-lg-6">
							<div class="about-3-txt mb-40">

								<!-- Title -->	
								<h2 class="h2-sm">Nothing brings people together like a good pizza</h2>

								<!-- Text -->
								<p class="p-md">We bake the best pizzas using the highest grade ingredients and serve with love
								</p>
								
								<!-- List -->	
								<ul class="txt-list">

									<li class="list-item">
										<p class="p-md">All our pizzas are made on order by our trained chefs with fresh sauces
										</p>
									</li>
									<li class="list-item">
										<p class="p-md">All our locations are pet friendly
										</p>
									</li>

								</ul>

							</div>
						</div>	<!-- END ABOUT TEXT -->	


					</div>	   <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-3 -->







			<!-- CONTACTS-3
			============================================= -->
			<section id="contacts-3" class="bg-fixed wide-60 contacts-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1">
							<div class="section-title mb-60 text-center">	

								<!-- Title 	-->	
								<h2 class="h2-xl red-color">Our Locations</h2>	

								<!-- Text -->	
								
									
							</div>	
						</div>
					</div>


					<div class="row">


                   <?php
                   $fg_res="select * from tbl_restraunt order by res_id desc";
                   $run_res=mysqli_query($con,$fg_res);
                   while($row_us=mysqli_fetch_array($run_res))
                   {
                   	$r_address=$row_us['r_address'];
                   	$res_id=$row_us['res_id'];
                   	$login_email=$row_us['login_email'];


                   	$fg_deta="select * from tbl_contact_detail where restraunt_id='$res_id'";
                   	$run_deta=mysqli_query($con,$fg_deta);
                   	$row_deta=mysqli_fetch_array($run_deta);
                   	$contact_no=$row_deta['contact_no'];
                   	$contact_email=$row_deta['contact_email'];


                   ?>
						<!-- LOCATION-1 -->
						<div class="col-md-6 col-lg-4">
							<div class="cbox-3 text-center">

								<!-- Image --> 
								<div class="hover-overlay"> 
									<img class="img-fluid" src="images/location-1.jpg" alt="location-image" />
								</div>
							
								<!-- Text -->
								<div class="cbox-3-txt">

									<!-- Location -->	


									<!-- Phone -->	
									<h6 class="h6-xl">Phone: <span><a href="tel:<?php echo $contact_no ?>"><?php echo $contact_no ?></a></span></h6>

									<!-- Address -->		
									<h6 class="h6-lg mt-20">Address</h6>
									<p class="grey-color"><?php echo $r_address ?></p>  

                                    <?php
                                    $fg_time="select * from tbl_timings where res_email='$login_email'";
                                    $run_time=mysqli_query($con,$fg_time);
                                    while($row_time=mysqli_fetch_array($run_time))
                                    { 
                                    	$day_of_weak=$row_time['day_of_weak'];
                                    	$opening_time=$row_time['opening_time'];
                                    	$closing_time=$row_time['closing_time'];
                                    ?>
									<!-- Working Hours -->	
									<p class="grey-color"><?php echo $day_of_weak ?> <?php echo $opening_time ?> - <?php echo $closing_time ?></p> 
								<?php } ?>

								</div>

							</div>
						</div>

					<?php } ?>



					</div>    <!-- End row -->


				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-3 -->




			<!-- BANNER-4
			============================================= -->
			<section id="banner-4" class="bg-fixed wide-100 banner-section division">
				<div class="container">
			 		<div class="row">


			 			<!-- BANNER TEXT -->
						<div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
							<div class="banner-4-txt text-center">

								<!-- Title  -->
								<h4 class="h4-xl">We Guarantee</h4>
								
								<!-- Title  -->
							    <h2>30 Minutes Delivery!</h2>

							    

								
							</div>
						</div>


			 		</div>      <!-- End row -->
				</div>	    <!-- End container -->		
			</section>	<!-- END BANNER-4 -->



<?php include("footer.php");?>