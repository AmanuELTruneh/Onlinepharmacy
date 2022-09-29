<?php
/* session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&(isset($_SESSION['Cashier_id']))){
$id=$_SESSION['Cashier_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
unset($_SESSION['cashier_id']);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
 */?>
<?php
//include_once('connect_db.php');
session_start();
if((isset($_SESSION['Username']))&(isset($_SESSION['Cashier_id']))){
//unset($_SESSION['Username']);
unset($_SESSION['Cashier_id']);
//echo "er";
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
}else{
//header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
//unset($_SESSION['pharmacist_id']);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
?>