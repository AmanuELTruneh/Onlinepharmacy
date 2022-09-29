<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&(isset($_SESSION['Cashier_id']))){
$id=$_SESSION['Cashier_id'];
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
$med_id=$_GET['med_id'];
$NO2=$_GET['NO2'];
echo "<br>";
 echo '<script type="text/javascript"> alert (" status=true ")</script>';
$q1=" UPDATE `customer_order` SET `Action` = 'Finished' WHERE `customer_order`.`invoice_no` = '$id' ";


$result=mysqli_query($conn,$q1);
 if($result){

 //echo '<script type="text/javascript"> alert (" status=true ")</script>';
 $conn=mysqli_connect("localhost","root","","drug");
  $query7=" SELECT * FROM `register_drug` where med_id='$med_id'  ";
$run3=mysqli_query($conn,$query7);
//if($run3){
	$row=mysqli_fetch_array($run3);
	$quantity=$row['Number_drug'];	
//}
 
$query5=" SELECT * FROM `customer_order` where NO2='$NO2' ";
$run8=mysqli_query($conn,$query5);
  $row3=mysqli_fetch_array($run8);
  $quantity4=$row3['quantity'];
      if($quantity > 0){
  $result=$quantity + $quantity4; 
 }else{
	echo '<script type="text/javascript"> alert (" NOT Recorded Drug Exist ")</script>'; 
 }
  $query7=" UPDATE `register_drug` SET `Number_drug` = '$result' WHERE `register_drug`.`med_id` = '$med_id' ";
 $run9=mysqli_query($conn,$query7);
 

header('location:cashier.php');
}
else {
	 
 //echo '<script type="text/javascript"> alert (" status=false ")</script>';
 
header('location:cashier.php');
}
 
?>