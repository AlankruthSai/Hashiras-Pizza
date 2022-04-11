<?php
include("function/function.php");
session_start();
$uemail=$_SESSION['user_email'];

$uphone=$_POST['uphone'];
$ustreet=$_POST['ustreet'];
$ustate=$_POST['ustate'];
$ucountry=$_POST['ucountry'];
$upincode=$_POST['upincode'];


$ins="update tbl_user set phone_no='$uphone',street_no='$ustreet',state='$ustate',country='$ucountry',pin_code='$upincode' where email_id='$uemail'";
$run_ins=mysqli_query($con,$ins);
$total=0;
foreach ($_SESSION['mycart'] as $i => $value) {
$total=$total + $value['p'] * $value['q'];

 $fg_item="select * from tbl_item where item_id='$i'";
        $run_item=mysqli_query($con,$fg_item);
        $row_item=mysqli_fetch_array($run_item);
        $restraunt_email=$row_item['restraunt_email'];
       
	}

$ins_ord="INSERT INTO tbl_order(user_email,order_time,total_price,res_email) VALUES ('$uemail',NOW(),'$total','$restraunt_email')";
$run_ord=mysqli_query($con,$ins_ord);

$last_ord="select * from tbl_order order by order_id desc limit 1";
$run_lastord=mysqli_query($con,$last_ord);
$row_lastord=mysqli_fetch_array($run_lastord);
$order_id=$row_lastord['order_id'];

$ins_ord2="INSERT INTO tbl_order_status(order_id,order_status) VALUES ('$order_id','Pending')";
$run_ord2=mysqli_query($con,$ins_ord2);


$ins_pay="INSERT INTO tbl_payment(order_id,payment_amount,pay_status,res_email) VALUES ('$order_id','$total','Pending','$restraunt_email')";
$run_pay=mysqli_query($con,$ins_pay);

$last_ord2="select * from tbl_payment order by pay_id desc limit 1";
$run_lastord2=mysqli_query($con,$last_ord2);
$row_lastord2=mysqli_fetch_array($run_lastord2);
$pay_id=$row_lastord2['pay_id'];

$ins_pay2="INSERT INTO tbl_payment_status(payment_id,payment_status) VALUES ('$pay_id','Pending')";
$run_pay2=mysqli_query($con,$ins_pay2);





foreach ($_SESSION['mycart'] as $i => $value) {

	    $fg_item="select * from tbl_item where item_id='$i'";
        $run_item=mysqli_query($con,$fg_item);
        $row_item=mysqli_fetch_array($run_item);
        $item_name=$row_item['item_name'];
        $item_image=$row_item['item_image'];
        $item_detail=$row_item['item_detail'];
        $item_price=$row_item['item_price'];
        $item_id=$row_item['item_id'];


        $pqty=$value['q'];
        $pt=$value['t'];
        $ps=$value['s'];
        $bs=$value['b'];


        $ins_detail="INSERT INTO tbl_order_detail(order_id,item_id,topping_id,sauce_id,base_id,order_qty) VALUES ('$order_id','$item_id','$pt','$ps','$bs','$pqty')";
        $run_detail=mysqli_query($con,$ins_detail);

        $fg_las="select * from tbl_inventory where item_id='$item_id'";
        $run_las=mysqli_query($con,$fg_las);
        $row_las=mysqli_fetch_array($run_las);
        $stock=$row_las['stock'];

        $less=$stock - $pqty;

        $update="update tbl_inventory set stock='$less' where item_id='$item_id'";
        $run_update=mysqli_query($con,$update);


	unset($_SESSION['mycart'][$i]);

        }

if($run_ord)
{

echo "Order Place";
}
else
{
echo "Order Not Place";
}

?>