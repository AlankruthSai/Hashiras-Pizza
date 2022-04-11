<?php include("header.php");?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Item
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Item</a></li>
        <li class="breadcrumb-item active"> Add Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box bg-hexagons-dark">
      
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" enctype= "multipart/form-data">
			<div class="row">

              <div class="col-md-12 col-xl-4">
                <div class="form-group">
                  <label>Item Name</label>
                  <small class="sidetitle">xyz</small>
                  <input type="text" class="form-control" name="v_name" required="required">
                </div>
              </div>
               <div class="col-md-12 col-xl-8">
                <div class="form-group">
                  <label>Item Detail</label>
                  <small class="sidetitle">xyz</small>
                  <input type="text" class="form-control" name="v_detail" >
                </div>
              </div>
               <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Item Image</label>
                  <small class="sidetitle">xyz</small>
                  <input type="file" class="form-control" name="v_image" required="required">
                </div>
              </div>
               <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Item Price</label>
                  <small class="sidetitle">xyz</small>
                  <input type="number" class="form-control" name="v_price" >
                </div>
              </div>
              
             

            
              
 


               <div class="col-md-12 col-xl-12">
                <div class="form-group">
              <center>
                  <input type="submit" class="btn btn-info" name="cat_sub">
                </center>
                </div>
              </div>


               
			
        </div>
      </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include("footer.php");?>

  <?php

if(isset($_POST['cat_sub']))
{

   $v_name=mysqli_real_escape_string($con,$_POST['v_name']);
   $v_detail=mysqli_real_escape_string($con,$_POST['v_detail']);
   $v_price=$_POST['v_price'];
 
$image_1=$_FILES['v_image']['name'];
$image_tmp1=$_FILES['v_image']['tmp_name'];
             
$resemail=$_SESSION['admin_email'];
move_uploaded_file($image_tmp1,"item_image/$image_1");

  $ins_cat="INSERT INTO tbl_item(restraunt_email,item_name,item_image,item_detail,item_price) VALUES ('$resemail','$v_name','$image_1','$v_detail','$v_price')";
  $run_cat=mysqli_query($con,$ins_cat);

$fg_las="select * from tbl_item order by item_id desc limit 1";
$run_las=mysqli_query($con,$fg_las);
$row_las=mysqli_fetch_array($run_las);
$item_id=$row_las['item_id'];


    $ins_cat2="INSERT INTO tbl_item_detail(item_id,item_cost,item_detail) VALUES ('$item_id','$v_price','$v_detail')";
  $run_cat2=mysqli_query($con,$ins_cat2);

      $ins_cat3="INSERT INTO tbl_inventory(item_id,stock) VALUES ('$item_id',500)";
  $run_cat3=mysqli_query($con,$ins_cat3);


if($run_cat)
{
   echo "<script>alert('Menu Successfully Created')</script>";
    echo "<script>window.open('add_item.php','_self')</script>";
}

else {
   echo "<script>alert('Menu Not Successfully Added')</script>";
    echo "<script>window.open('add_item.php','_self')</script>";
}


}

  ?>