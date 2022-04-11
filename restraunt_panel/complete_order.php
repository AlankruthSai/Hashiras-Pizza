<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Order</a></li>
        <li class="breadcrumb-item active">Order List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="box box-solid bg-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Hover Export Data Table</h3>
              <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
					<thead>
						<tr>
							<th>Id</th>
							<th>User Email</th>
              <th>Order Price</th>
              <th>Order Time</th>
              
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

<?php 
$resemail=$_SESSION['admin_email'];
$feth_user="select * from tbl_order where res_email='$resemail' AND order_status='Complete'";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$order_id=$rows['order_id'];
$user_email=$rows['user_email'];

$order_time=$rows['order_time'];
$total_price=$rows['total_price'];

echo "

<tr>
							<td>$index </td>
              <td>$user_email</td>

              <td>$order_time</td>
              <td>$total_price</td>
           
            
							
							
							
							<td><a href='view_order.php?oid=$order_id' class='btn btn-info'>View Order</a> 
            
							</td>
						
						</tr>

";

$index=$index + 1;


}

?>


						
						
					</tbody>				  
					
				</table>
				</div>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
         
       
			
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>
  <?php

if(isset($_GET['oid2']))
{
	$oid2=$_GET['oid2'];

	$del_cat="update tbl_order set order_status='Complete' where order_id='$oid2'";
	$run_del=mysqli_query($con,$del_cat);

    $del_cat2="update tbl_payment set pay_status='Complete' where order_id='$oid2'";
  $run_del2=mysqli_query($con,$del_cat2);

if($run_del)
{
	echo "<script>alert('Order Successfully Complete')</script>";
	echo "<script>window.open('pending_order.php','_self')</script>";
}

else {
		echo "<script>alert('Order Not Successfully Complete')</script>";
	echo "<script>window.open('pending_order.php','_self')</script>";
}

}


  ?>

