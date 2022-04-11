<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pending Payment List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pending Payment</a></li>
        <li class="breadcrumb-item active">Pending Payment List</li>
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
							<th>Order Id</th>
              <th>Payment Amount</th>
              </tr>
					</thead>
					<tbody>

<?php 
$resemail=$_SESSION['admin_email'];
$feth_user="select * from tbl_payment where res_email='$resemail' AND pay_status='Complete'";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$order_id=$rows['order_id'];
$payment_amount=$rows['payment_amount'];


echo "

<tr>
							<td>$index </td>
              <td>$order_id</td>

              <td>Rs : $payment_amount</td>
            
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

