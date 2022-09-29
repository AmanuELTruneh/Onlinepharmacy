<?php
$servername="localhost";
$username="root";
$password="";
$database="drug";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	die("connection failed : " . mysqli_connect_error());
}
//echo "connected successfully ";
echo '<script type="text/javascript"> alert (" CONNECTED SUCCESSFULLY ")</script>';
?>