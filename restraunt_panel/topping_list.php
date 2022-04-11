<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Topping List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Topping</a></li>
        <li class="breadcrumb-item active">Topping List</li>
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
							<th>Topping Name</th>
              <th>Price</th>
              
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

<?php 
$resemail=$_SESSION['admin_email'];
$feth_user="select * from tbl_topping";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$topping_id=$rows['topping_id'];
$topping_name=$rows['topping_name'];

$topping_price=$rows['topping_price'];

echo "

<tr>
							<td>$index </td>
              <td>$topping_name</td>

              <td>$topping_price</td>
           
            
							
							
							
							<td><a href='?cdid=$topping_id  '>Delete</a> 

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

if(isset($_GET['cdid']))
{
	$catid=$_GET['cdid'];

	$del_cat="delete from tbl_topping where topping_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);

if($run_del)
{
	echo "<script>alert('Topping Successfully Deleted')</script>";
	echo "<script>window.open('topping_list.php','_self')</script>";
}

else {
		echo "<script>alert('Topping Not Successfully Deleted')</script>";
	echo "<script>window.open('topping_list.php','_self')</script>";
}

}


  ?>

