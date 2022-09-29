
 <?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&(isset($_SESSION['manager_id']))){
$id=$_SESSION['manager_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
<html lang="en-US">
<header>
<?php include('head_manag.php'); ?>
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
if(isset($_POST['manager_send'])){
	        
		     $filename1 = $_FILES["upload_file"]["name"];
             $tempname1 = $_FILES["upload_file"]["tmp_name"];			 
             $folder1 = "img/".$filename1;	 
		     move_uploaded_file($tempname1,$folder1);  
//$Date=$_POST[''];
//$time=$_POST[''];
$conn=mysqli_connect("localhost","root","","drug");
$post_test=$_POST['manger_post'];
 	
$query=" INSERT INTO `manager_post` (`Date`, `time`, `post_test`, `post_file`)
VALUES (NOW(), NOW(), '$post_test', '$folder1');";
$result=mysqli_query($conn,$query);
	
	if($result > 0){
 		

echo '<script type="text/javascript"> alert (" SUCCESSFULLY POSTED ")</script>';	
	}else{
echo '<script type="text/javascript"> alert ("NOT POSTED ")</script>';
 		
	}
}

?>
 
<body>
  <br><br>
 <form action="" enctype="multipart/form-data" method="post" style="margin-left:30%;">

 <textarea name="manger_post" type="text" style="padding:25px;font-size:14px; width:70%;height:250px;border-radius:10px;border:1px solid groove;" /></textarea><br>

 <input type="file" name="upload_file" style="position: absolute;float:right;justify-content:center;display: block;" /><br><br>
 
 <input type="submit" name="manager_send" value="send post" style="cursor:pointer;border-radius:5px; font-size:20px;" />
 
 <br><br><br>
 
 </form><br><br>
  
</body>
<footer>
<?php include('footer.php'); ?>
</footer>
</html>