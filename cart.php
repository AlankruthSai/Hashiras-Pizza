<?php include("header.php");
if(isset($_GET['itemid']))
{
    $itemid=$_GET['itemid'];
}

$feth="select * from tbl_topping";
$run_feth=mysqli_query($con,$feth);
$row_feth=mysqli_num_rows($run_feth);


$feth2="select * from tbl_sauce ";
$run_feth2=mysqli_query($con,$feth2);
$row_feth2=mysqli_fetch_array($run_feth2);


 ?>
<div id="booking-page" class="page-hero-section division">
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
                                                        <li class="breadcrumb-item active" aria-current="page">Add To Cart</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                                <!-- Title -->


                            </div>
                        </div>  
                    </div>    <!-- End row -->
                </div>     <!-- End container --> 
            </div>  <!-- END PAGE HERO -->  
        <div id="booking-2" class="wide-70 booking-section division">
                <div class="container">
                    <div class="row">


                        <!-- BOOKING FORM -->
                        <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                            <div class="form-holder">

                                <!-- Text -->   
                                <p class="p-xl text-center">
Add To Cart Now
                                </p>

                                <!-- Form -->
                                <form method="post" class="row booking-form">

                                    <!-- Form Input -->
                                     <div class="col-lg-12">
                                         <select class="form-control" name="utopping" id="utopping">
            <option value="" hidden>Select Topping</option>
            <?php
            $feth="select * from tbl_topping";
            $run_feth=mysqli_query($con,$feth);
            while($row_feth=mysqli_fetch_array($run_feth))
            {
                $topping_id=$row_feth['topping_id'];
                $topping_name=$row_feth['topping_name'];
                
                
                echo "<option value='$topping_id'>$topping_name</option>";
            }
            ?>
        </select>
                                    </div>

                                      <div class="col-lg-12">
                             <select class="form-control" name="usauce" id="usauce">
            <option value="" hidden>Select Sauce</option>
            <?php
            $feth="select * from tbl_sauce";
            $run_feth=mysqli_query($con,$feth);
            while($row_feth=mysqli_fetch_array($run_feth))
            {
                $sauce_id=$row_feth['sauce_id'];
                $sauce_name=$row_feth['sauce_name'];
                
                
                echo "<option value='$sauce_id'>$sauce_name</option>";
            }
            ?>
        </select>
                                    </div>


                                           <div class="col-lg-12">
                             <select class="form-control" name="ubase" id="ubase">
            <option value="" hidden>Select Base</option>
            <?php
            $feth="select * from tbl_base";
            $run_feth=mysqli_query($con,$feth);
            while($row_feth=mysqli_fetch_array($run_feth))
            {
                $base_id=$row_feth['base_id'];
                $base_name=$row_feth['base_name'];
                
                
                echo "<option value='$base_id'>$base_name</option>";
            }
            ?>
        </select>
                                    </div>
                                                <div class="col-md-12 mt-10">  
                                        <button type="submit" class="btn btn-md btn-red tra-red-hover " name="ulogin" onclick="register()">Add To Cart</button> 
                                    </div>
                                                                                  
                                 
                                                                                            
                                </form> <!-- End Form -->   

                            </div>  
                        </div>  <!-- END BOOKING FORM -->   

                    </div>  <!-- End row -->
                </div>     <!-- End container -->   
            </div>  <!-- END BOOKING-2 -->




  
<?php include("footer.php");?>
<script type="text/javascript">
    function register()
    {

    var utopping=$('#utopping').val();
    var usauce=$('#usauce').val();
    var ubase=$('#ubase').val();
    window.open("carts.php?iid=<?php echo $itemid ?>&utopping="+ $('#utopping').val()+"&usauce="+ $('#usauce').val()+"&ubase="+ $('#ubase').val(),"_self");
  
 
        
    }
</script>



