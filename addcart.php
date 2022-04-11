<?php
include("header.php");
// session_start();
$pid=$_GET['pid'];
$s=(int)$_GET['s'];
$t=(int)$_GET['t'];
$b=(int)$_GET['b'];

$fet_pro="select * from tbl_item where item_id='$pid'";
$run_pro=mysqli_query($con,$fet_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pprice=$row_pro['item_price'];

$fg_topping="select * from tbl_topping where topping_id='$t'";
$run_topping=mysqli_query($con,$fg_topping);
$row_topping=mysqli_fetch_array($run_topping);
$topping_price=$row_topping['topping_price'];

$fg_sauce="select * from tbl_sauce where sauce_id='$s'";
$run_sauce=mysqli_query($con,$fg_sauce);
$row_sauce=mysqli_fetch_array($run_sauce);
$sauce_price=$row_sauce['sauce_price'];

$fg_base="select * from tbl_base where base_id='$b'";
$run_base=mysqli_query($con,$fg_base);
$row_base=mysqli_fetch_array($run_base);
$base_price=$row_base['base_price'];

$tprice=($pprice * 1) + ($sauce_price * 1) + ($topping_price * 1)+ ($base_price * 1); 

if(isset($_SESSION['mycart'][$pid]))
{
	$q=$_SESSION['mycart'][$pid]["q"];
	$q++;
	$_SESSION['mycart'][$pid]=array("p"=>$tprice,"q"=>$q,"t"=>$t,"s"=>$s,"b"=>$b);

}

else {
$_SESSION['mycart'][$pid]=array("p"=>$tprice,"q"=>1,"t"=>$t,"s"=>$s,"b"=>$b);
}
// $mycart=$_SESSION['mycart'];

// foreach($mycart as $i => $value)
// {
// 	echo $i;
// }


echo "<script>window.open('mycart.php','_self')</script>";

?>