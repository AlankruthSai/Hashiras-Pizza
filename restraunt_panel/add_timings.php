<?php include("header.php");?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Timings
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Timings</a></li>
        <li class="breadcrumb-item active"> Add Timings</li>
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
                  <label>Opening Time</label>
                  <small class="sidetitle">xyz</small>
                  <input type="time" class="form-control" name="o_time" required="required">
                </div>
              </div>
               <div class="col-md-12 col-xl-4">
                <div class="form-group">
                  <label>Closing Time</label>
                  <small class="sidetitle">xyz</small>
                  <input type="time" class="form-control" name="c_time" required="required">
                </div>
              </div>
           
               
               <div class="col-md-12 col-xl-4">
                <div class="form-group">
                  <label>Day Of Weak</label>
                  <small class="sidetitle">xyz</small>
                  <input type="text" class="form-control" placeholder="Monday..." name="c_day" >
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

   $c_day=mysqli_real_escape_string($con,$_POST['c_day']);
   $o_time=$_POST['o_time'];
   $c_time=$_POST['c_time'];
 

$resemail=$_SESSION['admin_email'];
  $ins_cat="INSERT INTO tbl_timings(res_email,opening_time,closing_time,day_of_weak) VALUES ('$resemail','$o_time','$c_time','$c_day')";
  $run_cat=mysqli_query($con,$ins_cat);


if($run_cat)
{
   echo "<script>alert('Time Successfully Created')</script>";
    echo "<script>window.open('add_timings.php','_self')</script>";
}

else {
   echo "<script>alert('Time Not Successfully Added')</script>";
    echo "<script>window.open('add_timings.php','_self')</script>";
}


}

  ?>