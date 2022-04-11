<?php
include("header.php");


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Item List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Item</a></li>
        <li class="breadcrumb-item active">Item List</li>
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
              <th>Item Image</th>
							<th>Item Name</th>
              <th>Item Detail</th>
              <th>Price</th>
              
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

<?php 
$resemail=$_SESSION['admin_email'];
$feth_user="select * from tbl_item where restraunt_email='$resemail'";
$run_us=mysqli_query($con,$feth_user);

$index=1;

while($rows=mysqli_fetch_array($run_us))
{



$item_id=$rows['item_id'];
$item_name=$rows['item_name'];

$item_image=$rows['item_image'];
$item_detail=$rows['item_detail'];
$item_price=$rows['item_price'];

echo "

<tr>
							<td>$index </td>
              <td><img src='item_image/$item_image' style='height:150px;width:150px'></td>
              <td>$item_name</td>
              <td>$item_detail</td>
              <td>$item_price</td>
           
            
							
							
							
							<td><a href='?cdid=$item_id  '>Delete</a> 

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

	$del_cat="delete from tbl_item where item_id='$catid'";
	$run_del=mysqli_query($con,$del_cat);

if($run_del)
{
	echo "<script>alert('Item Successfully Deleted')</script>";
	echo "<script>window.open('item_list.php','_self')</script>";
}

else {
		echo "<script>alert('Item Not Successfully Deleted')</script>";
	echo "<script>window.open('item_list.php','_self')</script>";
}

}


  ?>

