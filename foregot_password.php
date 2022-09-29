
<html style="overflow-x:hidden;">
  
 
<header>
<?php include('header.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	  
<div class="span"  id="span">
<a href="logout_mang.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
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
   if(isset($_POST['foregot_password'])){
	$conn = mysqli_connect ("localhost","root","","drug");
	$Email=$_POST['Email'];
	
		$sql = mysqli_query($conn," SELECT * FROM `admin_table` WHERE `admin_table`.`Email`='$Email' ");
	$sql2 = mysqli_query($conn," SELECT * FROM `pharmacist_table` WHERE `pharmacist_table`.`Email`='$Email' ");
	$sql3 = mysqli_query($conn," SELECT * FROM `manager_table` WHERE  `manager_table`.`Email` ='$Email' ");
	$sql4 = mysqli_query($conn," SELECT * FROM `customer_table` WHERE `customer_table`.`Email` ='$Email'  ");
	$sql5 = mysqli_query($conn," SELECT * FROM `cashier_table` WHERE `cashier_table`.`Email` ='$Email' ");
	$sql6 = mysqli_query($conn," SELECT * FROM `store_cordi_table` WHERE `store_cordi_table`.`Email` ='$Email' ");
	
  if(($row=mysqli_fetch_array($sql)) > 0)
		{	
           /*    $password=base64_decode($row['Password']);
			  $email=$row['Email'];
			  $to      = 'bininew12@gmail.com';
              $subject = 'password='.$password;
              $message = 'passcode';
              $headers = 'From: bininew12@gmail.com'       . "\r\n" .
                 'Reply-To: bininew12@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers); */
	echo '<script type="text/javascript"> alert (" CHECK YOU Email ADDRESS ")</script>';
	//header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/foregot_password.php");	
 	exit();
		}else if(($row=mysqli_fetch_array($sql2)) > 0){
    
	          $password=base64_decode($row['Password']);
			  $email=$row['Email'];
	
	echo '<script type="text/javascript"> alert (" CHECK YOU Email ADDRESS ")</script>';
 	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/foregot_password.php");	
 exit();
		}else if(($row=mysqli_fetch_array($sql3)) > 0){ 
       
	         $password=base64_decode($row['Password']);
			  $email=$row['Email'];
	   
	   echo '<script type="text/javascript"> alert (" CHECK YOU Email ADDRESS ")</script>';
		
		exit();
		 }else if(($row=mysqli_fetch_array($sql4)) > 0){ 
          
		      $password=base64_decode($row['Password']);
			  $email=$row['Email'];
		  
		  echo '<script type="text/javascript"> alert (" CHECK YOU Email ADDRESS ")</script>';
		header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/foregot_password.php");
exit();		
		 }else if(($row=mysqli_fetch_array($sql5)) > 0){ 
         
		      $password=base64_decode($row['Password']);
			  $email=$row['Email'];
		 
echo '<script type="text/javascript"> alert (" CHECK YOU Email ADDRESS ")</script>';
		header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/foregot_password.php"); 
exit();		
		 }else if(($row=mysqli_fetch_array($sql6)) > 0){ 
 
              $password=base64_decode($row['Password']);
			  $email=$row['Email'];
 
echo '<script type="text/javascript"> alert (" CHECK YOU Email ADDRESS ")</script>';
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/foregot_password.php"); 
exit();
		 }	   
		 else{
echo '<script type="text/javascript"> alert (" YOUR Email IS DOES NOT EXIST IN DATABASE ")</script>';			 
	 } 
	
   }

?>
 
<body>
  <br><br>
 <form action="" enctype="multipart/form-data" method="post" style="margin-left:30%;">

 <textarea placeholder="Enter your email address" name="Email" type="text" style="padding:25px;font-size:14px; width:70%;height:250px;border-radius:10px;border:1px solid groove;" /></textarea><br>
 
 <input type="submit" name="foregot_password" value="send" style="cursor:pointer; font-size:17px;" />
 
 <br><br><br>
 
 </form><br><br>
  
</body>
<footer>
<?php include('footer.php'); ?>
</footer>
</html>