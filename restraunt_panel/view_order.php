<?php include("header.php");
$oid=$_GET['oid'];
$fg_p="select * from tbl_order where order_id='$oid'";
$run_p=mysqli_query($con,$fg_p);
$row_p=mysqli_fetch_array($run_p);
$user_email=$row_p['user_email'];

  $fg_us="select * from tbl_user where email_id='$user_email'";
                $run_us=mysqli_query($con,$fg_us);
                $row_us=mysqli_fetch_array($run_us);
                $phone_no=$row_us['phone_no'];
                $street_no=$row_us['street_no'];
                $state=$row_us['state'];
                $country=$row_us['country'];
                $pin_code=$row_us['pin_code'];
?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order Detail
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item active"> Order Detail</li>
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

<div class="col-md-12 col-xl-3">
<p><b style="font-size: 16px">Phone No : <?php echo $phone_no ?></b></p>
</div>
<div class="col-md-12 col-xl-4">
<p><b style="font-size: 16px">Street No : <?php echo $street_no ?></b></p>
</div>
<div class="col-md-12 col-xl-3">
<p><b style="font-size: 16px">State : <?php echo $state ?></b></p>
</div>

<div class="col-md-12 col-xl-2">
<p><b style="font-size: 16px">PinCode : <?php echo $pin_code ?></b></p>
</div>



              <div class="col-md-12 col-xl-12">
                <div class="form-group">
                  <b>Order Detail</b>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Topping</th>
      <th scope="col">Sauce</th>
      <th scope="col">Qty</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $fg_de="select * from tbl_order_detail where order_id='$oid'";
    $run_de=mysqli_query($con,$fg_de);
    $index=1;
    while($row_de=mysqli_fetch_array($run_de))
    {

      $item_id=$row_de['item_id'];
      $topping_id=$row_de['topping_id'];
      $sauce_id=$row_de['sauce_id'];
      $order_qty=$row_de['order_qty'];

      $fet_pro="select * from tbl_item where item_id='$item_id'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$item_name=$row_pro['item_name'];

$fg_topping="select * from tbl_topping where topping_id='$topping_id'";
$run_topping=mysqli_query($con,$fg_topping);
$row_topping=mysqli_fetch_array($run_topping);
$topping_name=$row_topping['topping_name'];

$fg_sauce="select * from tbl_sauce where sauce_id='$sauce_id'";
$run_sauce=mysqli_query($con,$fg_sauce);
$row_sauce=mysqli_fetch_array($run_sauce);
$sauce_name=$row_sauce['sauce_name'];

?>
    <tr>
      <th scope="row"><?php echo $index ?></th>
      <td><?php echo $item_name ?></td>
      <td><?php echo $topping_name ?></td>
      <td><?php echo $sauce_name ?></td>
      <td><?php echo $order_qty ?></td>
    </tr>
<?php
$index=$index + 1;
    }
    ?>
    
  </tbody>
</table>

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