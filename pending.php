 <?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&&($_SESSION['pharmacist_id'])){
$id=$_SESSION['pharmacist_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
<?php 
include_once('connect_db.php');
$conn=mysqli_connect("localhost","root","","drug");
$id=$_GET['invoice_no'];
$Action=$_GET['Action'];
echo $id;
echo "<br>";
echo $Action;
//$q=" update pharmacist_table set Status = $status where pharmacist_id = $id ";
$q1=" UPDATE customer_order SET Action = '$Action' WHERE customer_order.invoice_no = '$id'; ";
$result=mysqli_query($conn,$q1);
 if($result){

//echo '<script type="text/javascript"> alert (" status=true ")</script>';
//header('location:pharmacist_order_view.php');
//header('location:pharmacist_order_view.php?invoice_no=%20%20&%20Action=pending');
header('location:pharmacist.php');
}
else {
	//$q=" update pharmacist_table set Status = 0 where pharmacist_id = $id ";
//mysqli_query($conn,$q);
//echo '<script type="text/javascript"> alert (" status=false ")</script>';
//header('location:pharmacist_order_view.php?invoice_no=%20%20&%20Action=pending');
header('location:pharmacist.php');
}

//if($result)
//header('location:ph_signup.php');
//else
//echo '<script type="text/javascript"> alert (" not up data ")</script>';
?>