 <?php
session_start();
include_once('connect_db.php');
$conn=mysqli_connect("localhost","root","","drug");
if(isset($_SESSION['Username'])&&($_SESSION['Customer_id'])){
$cid=$_SESSION['Customer_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
$id=$_GET['NO2'];
$sql=" delete from customer_order where NO2='$id'";
$result=mysqli_query($conn,$sql);
//$rows=mysql_fetch_assoc($result);
//header("location:order_page.php");
if($result){
	echo '<script type="text/javascript"> alert (" YOUR ORDER HAS BEEN DELETED ")</script>';
	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/order_drug.php");
}else{
	echo '<script type="text/javascript"> alert (" YOUR ORDER HAS NOT BEEN DELETED   ")</script>';
	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/order_drug.php");
	
}
?>