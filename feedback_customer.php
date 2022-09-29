<html style="overflow-x:hidden;">
 <?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&&($_SESSION['Customer_id'])){
$id=$_SESSION['Customer_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
<html lang="en-US">
<header>
<?php include('head_cust.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	  
<div class="span"  id="span">
<a href="logout.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
</div>
</header>
<style>
 .bk{
float:right;	
 font-size: 2rem;
 color:white;
 border-radius:7px;
 padding:3px;
 cursor:pointer;
}
.bk:hover{
	font-size: 2.2rem;
}
span {
	
	color:deepskyblue;
	
}
#span{
	 display:fixed;
 }
 .span{
	 
	    display: inline-block;
    position: relative;
    background-color: #1b9bff;
    font-size: 1.2rem;
    color: white;
    padding: 5px;
    justify-content: center;
    align-items: center;
   
    padding-right: 20px;
    padding-bottom: 2%;
    letter-spacing: 2px;
    width: 100%;
    height: 40px;
}
</style>
 <?php
if(isset($_POST['customer_send'])){
	        
		     
//$Date=$_POST[''];
//$time=$_POST[''];
$conn=mysqli_connect("localhost","root","","drug");
$customer_feedback=$_POST['customer_feedback'];
 
$query7=" SELECT * FROM `customer_table` WHERE `customer_table`.`Customer_id`='$id' "; 
$result2=mysqli_query($conn,$query7);	
$row=mysqli_fetch_array($result2);
$First_name=$row['First_name'];
$Middle_name=$row['Middle_name'];

$fullname=$First_name." ".$Middle_name;
//echo $fullname;
$query="INSERT INTO `feedback_customer` (`feedback`, `date`, `time`, `customer_name`) 
VALUES ('$customer_feedback', NOW(), NOW(), '$fullname') ";
$result=mysqli_query($conn,$query);
	
	if($result > 0){
 		
echo '<script type="text/javascript"> alert (" YOUR FEEDBACK SUCCESSFULLY SEND ")</script>';
	}else{

echo '<script type="text/javascript"> alert (" NOT SEND ")</script>';
 		
	}
}

?>
 
<body>
  <br><br>
 <form action="" enctype="multipart/form-data" method="post" style="margin-left:30%;">

 <textarea name="customer_feedback" placeholder="Enter your FEEDBACK..."  type="text" style="padding:25px;font-size:14px; width:70%;height:250px;border-radius:10px;border:1px solid groove;" /></textarea><br>
 
 <input type="submit" name="customer_send" value="send" style="cursor:pointer;border-radius:5px; font-size:20px;" />
 
 <br><br><br>
 
 </form><br><br>
  
</body>
<footer>
<?php include('footer.php'); ?>
</footer>
</html>