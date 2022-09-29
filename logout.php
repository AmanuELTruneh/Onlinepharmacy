<?php
/* session_start();
include_once('connect_db.php');
if((isset($_SESSION['Username']))&(isset($_SESSION['Customer_id']))){

unset($_SESSION['customer_id']);
unset($_SESSION['Username']);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
}else{
	
//header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();

} */
//unset($_SESSION['admin_id']);
//unset($_SESSION['pharmacist_id']);
//unset($_SESSION['cashier_id']);
//unset($_SESSION['manager_id']);
//unset($_SESSION['customer_id']);
//unset($_SESSION['St_cordinator_id']);
//unset($_SESSION['last_name']);
//unset($_SESSION['staff_id']);
//unset($_SESSION['Username']);
//header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
?>
<?php
//include_once('connect_db.php');
session_start();
if((isset($_SESSION['Username']))&(isset($_SESSION['Customer_id']))){
//unset($_SESSION['Username']);
unset($_SESSION['Customer_id']);
//echo "er";
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
}else{
//header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
//unset($_SESSION['pharmacist_id']);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
?>