<?php include("header.php");?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Sauce
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Sauce</a></li>
        <li class="breadcrumb-item active"> Add Sauce</li>
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

              <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Sauce Name</label>
                  <small class="sidetitle">xyz</small>
                  <input type="text" class="form-control" name="v_name" required="required">
                </div>
              </div>
           
               
               <div class="col-md-12 col-xl-6">
                <div class="form-group">
                  <label>Sauce Price</label>
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
   $v_price=$_POST['v_price'];
 


  $ins_cat="INSERT INTO tbl_sauce(sauce_name,sauce_price) VALUES ('$v_name','$v_price')";
  $run_cat=mysqli_query($con,$ins_cat);


if($run_cat)
{
   echo "<script>alert('Sauce Successfully Created')</script>";
    echo "<script>window.open('add_sauce.php','_self')</script>";
}

else {
   echo "<script>alert('Sauce Not Successfully Added')</script>";
    echo "<script>window.open('add_sauce.php','_self')</script>";
}


}

  ?>