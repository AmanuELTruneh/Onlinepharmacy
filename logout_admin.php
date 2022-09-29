
<?php
//include_once('connect_db.php');
session_start();
if((isset($_SESSION['Username']))&(isset($_SESSION['Admin_id']))){
//unset($_SESSION['Username']);
unset($_SESSION['Admin_id']);
//echo "er";
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
 
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
?>
 