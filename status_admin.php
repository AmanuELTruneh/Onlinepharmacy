<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&(isset($_SESSION['Admin_id']))){
$id=$_SESSION['Admin_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
<?php 
include_once('connect_db.php');
$conn=mysqli_connect("localhost","root","","drug");
$id=$_GET['Admin_id'];
$status=$_GET['Status'];
//$q=" update pharmacist_table set Status = $status where pharmacist_id = $id ";
$q1=" UPDATE admin_table SET Status = '$status' WHERE admin_table.Admin_id = '$id'; ";
$result=mysqli_query($conn,$q1);
 if($result){

//echo '<script type="text/javascript"> alert (" status=true ")</script>';
header('location:admin_signup_signup.php');
}
else {
	//$q=" update pharmacist_table set Status = 0 where pharmacist_id = $id ";
//mysqli_query($conn,$q);
//echo '<script type="text/javascript"> alert (" status=false ")</script>';
header('location:admin_signup_signup.php');
}

//if($result)
//header('location:ph_signup.php');
//else
//echo '<script type="text/javascript"> alert (" not up data ")</script>';
?>