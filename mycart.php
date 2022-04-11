<?php
include("header.php");
?>

<div id="cart-page" class="page-hero-section division">
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
												    	<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl">Shopping Cart</h2>

							</div>
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- End container --> 
			</div>	<!-- END PAGE HERO -->	




			<!-- CART PAGE
			============================================= -->
			<section id="cart-1" class="wide-100 cart-page division">
				<div class="container">


					<!-- CART TABLE -->	
					<div class="row">
						<div class="col-md-12">
							<div class="cart-table mb-70">
								<table id="myTable">
									<thead>
									    <tr>
									      	<th scope="col">Product</th>
									      	<th scope="col">Price</th>
									      	<th scope="col">Quantity</th>
									      	<th scope="col">Total</th>
									      	<th scope="col">Delete</th>
									    </tr>
									 </thead>

									<tbody>
	<?php
$total=0;

foreach ($_SESSION['mycart'] as $i => $value) {

	    $fg_item="select * from tbl_item where item_id='$i'";
        $run_item=mysqli_query($con,$fg_item);
        $row_item=mysqli_fetch_array($run_item);
        $item_name=$row_item['item_name'];
        $item_image=$row_item['item_image'];
        $item_detail=$row_item['item_detail'];
        $item_price=$row_item['item_price'];
        $item_id=$row_item['item_id'];


$total=$total + ($value['p'] * $value['q']);

?>
										<!-- CART ITEM #1 -->
									    <tr>
									      	<td data-label="Product" class="product-name">

									      		<!-- Preview -->
												<div class="cart-product-img"><img src="restraunt_panel/item_image/<?php echo $item_image ?>" alt="cart-preview"></div>

												<!-- Description -->
												<div class="cart-product-desc">
										      		<h5 class="h5-sm"><?php echo $item_name ?></h5>
										      	</div>

									      	</td>

									      	<td data-label="Price" class="product-price"><h5 class="h5-md">Rs : <?php echo $value['p']; ?></h5></td>
									      	<td data-label="Quantity" class="product-qty">
									      		<a href="addcart.php?pid=<?php echo $i ?>&t=<?php echo $value['t'] ?>&s=<?php echo $value['s'] ?>&b=<?php echo $value['b'] ?>"><span class='ir'><i class='fas fa-plus'></i></span></a>  <input type='text' name='' readonly class='form-control input-number' value='<?php echo $value['q']; ?>'>
                                   <a href="mincart.php?pid=<?php echo $i ?>&t=<?php echo $value['t'] ?>&s=<?php echo $value['s'] ?>&b=<?php echo $value['b'] ?>"><span class='ir'><i class='fas fa-minus'></i></span></a>
									      	</td>
									      	<td data-label="Total" class="product-price-total"><h5 class="h5-md">Rs : <?php  echo $value['p'] * $value['q']; ?></h5></td>
									      	<td data-label="Delete" class="td-trash"><a href="remove.php?pid=<?php echo $i ?>"><i class="fas fa-trash-alt"></i></a></td>

									    </tr>

									<?php } ?>

									</tbody>

								</table>
							</div>
						</div>
					</div>	<!-- END CART TABLE -->


					<!-- CART CHECKOUT -->		
					<div class="row">

						<!-- DISCOUNT COUPON -->
					

						<!-- CHECKOUT -->
						<div class="col-lg-4"></div>
						<div class="col-lg-4">
							<div class="cart-checkout bg-lightgrey">

								<!-- Title -->
								<h5 class="h5-lg">Cart Total</h5>

								<!-- Table -->
								<table>
									<tbody>
									  
									    <tr class="last-tr">
									      	<td>Total</td>
									      	<td> </td>
									      	<td class="text-right">Rs : <?php  echo $total; ?></td>
									    </tr>
									  </tbody>
								</table>

								<!-- Button -->
								<a href="checkout.php" class="btn btn-md btn-salmon tra-salmon-hover">Proceed To Checkout</a>

							</div>
						</div>	<!-- END CHECKOUT -->


					</div>	  <!-- END CART CHECKOUT -->


				</div>	   <!-- End container --> 
			</section>	<!-- END CART PAGE -->	
<?php
include("footer.php");
?>