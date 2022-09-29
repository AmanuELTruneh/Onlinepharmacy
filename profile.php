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
<head>
<?php include('head_cust.php');?>
<link rel="stylesheet" href="style_dropdown.css" media="all">
 
<div class="span" >
<div class="dropdown">
<a class="dropbtn"><i class="fa fa-bars"></i>&nbsp;<label>Menu</label></a>
<div class="dropdown-content">
<a href="feedback_customer.php"><i class="fa fa-prescription-bottle-alt"></i>&nbsp;FeedBack</a>
 
<a href="view_post.php"><i class="fa fa-user-cog"></i>&nbsp;View Post</a>
  
 
</div>
</div>
 
<a href="logout.php"><label style="background:#30a4ffd1;" class ="bk" >Logout</label></a>
</div>
<!--a href="logout.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a-->
 
</head>
<style>
.mn{
	font-weight:bold;
	position:absolute;
	margin-left:10%;
	font-size:22px;
	 padding:3px; 
	 position:absolute; 
}
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
.span{
	    display: inline-block;
    position: relative;
    background-color: #0082e9d9;
    font-size: 1.2rem;
    color: white;
    padding: 5px;
    justify-content: center;
    align-items: center;
   
    padding-right: 5%;
    padding-bottom: 2%;
    letter-spacing: 2px;
    width: 100%;
    height: 40px;
}
}
.login{
	
	border-radius:7px;
	<!--background:crimson; -->
	<!--background:#0082e9; -->
	background:#1b9bff;
	padding:10px; 
	margin-right:5px;
	 
	color:white;
	pointer:cursor;
	float:right;
	font-size:19px;
	border-radius:1px solid white;
}
.login  a:hover{
	font-size:19.5px;
}
.grid7{
	display:inline-block;
	width:100%;
	height:100%
	
	position:absolute;
	justify-content: center;
   float:right;
   position:relative;
}
.dashboard-module{
	  
	width: 3%;
    height: 3%;
    justify-content: center;
    display: inline-grid;
    float: right;
    position: relative;
    margin: 41px;
    margin-right: 75px;
    margin-bottom: 96px;
}
.dashboard-module img{
	width:96px;
	height:96px;
	justify-content: center;
    align-items: center;
	 position:relative;
}
.dashboard-module span{
	font-size:15px;
}
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
     // if(isset($_POST['send_to_pharmacist'])){
		  
/*  @ $filename = $_FILES["uploadimage"]["name"];
            @ $tempname = $_FILES["uploadimage"]["tmp_name"];
            $folder = "prescription_order/".$filename;		
		// $folder = " kool ";
		 move_uploaded_file($tempname,$folder); */
	 /*  @$filename1 = $_FILES["uploadimage1"]["name"];
             @$tempname1 = $_FILES["uploadimage1"]["tmp_name"];
			 //$folder1=" mook ";
            $folder1 = "prescription_order/".$filename1;	 
		   move_uploaded_file($tempname1,$folder1); 
	 @$filename2 = $_FILES["uploadimage2"]["name"];
             @$tempname2 = $_FILES["uploadimage2"]["tmp_name"];
			 //$folder1=" mook ";
            @$folder2 = "prescription_order/".$filename2;	 
		   @move_uploaded_file($tempname2,$folder2); 
		    */
		    
	//  }
	?>
 <?php 
$mcount=0;
$conn=mysqli_connect("localhost","root","","drug");
//$query1=" select count(med_id) from customer_order where Action='pending' "; 
$query1=" select * from customer_table where Customer_id ='$id'  ";
$result=mysqli_query($conn,$query1);
if($result){
	
	//$status="pending";
    //  $invoice=mt_rand();
       $row=mysqli_fetch_array($result);
       //  $Customer_id =$row['Customer_id'];           
		 $phone=$row['Phone']; 		
		  $First_name=$row['First_name']; 
		    $middle_name=$row['Middle_name'];
        // $Price=$row['Benefits'];	
        //  $Type=$row['Directions'];
		 // $safety=$row['Safety'];
         // $side_effect=$row['Side_Effect']; 
	     $age=$row['Age'];
	
}else{
	echo '<script> alert(" No Data exist ");</script>';
}
	?>
<center>
<div action="" enctype="multipart/form-data" method="post" style="min-width:350px; margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:30%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 10%;">
 <div>
 <br>  <div>
			<label class="signup"  for="img" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;"> PROFILE:</label><br>   
		<br>  
   <label style="font-weight:bold;font-size:17px;color:#000000;margin-bottom:2px;">  Name:</label><?php echo "<h2 style='font-weight:bold;font-size:17px;color:#000000;margin-bottom:2px;'>".$First_name." ".$middle_name."</h2>" ?> 
    <label style="font-weight:bold;font-size:17px;color:#000000;margin-bottom:2px;"> Age:</label><?php echo "<h2 style='font-weight:bold;font-size:17px;color:#000000;margin-bottom:2px;'>". $age."</h2>" ?> 
    <label style="font-weight:bold;font-size:17px;color:#000000;margin-bottom:2px;"> Phone:</label><?php echo "<h2 style='font-weight:bold;font-size:17px;color:#000000;margin-bottom:2px;'>". $phone ."</h2>" ?>	  
			  </div>
			  </div><br>
<a href="update_customer.php?Customer_id=<?php echo $row['Customer_id']?>"><button  type="submit" id="Edit_profile" name="Edit_profile"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Edit profile</button></a>

</div>
</center >
<?php $conn=mysqli_connect("localhost","root","","drug");
if(isset($_POST['Edit_profile'])){
	
/* //$query=" insert into customer_prescription('prec_Image1','prec_Image2','prec_Image3') values('$folder','$folder1','@$folder2')";
$query="INSERT INTO `customer_prescription` (`prec_Image1`, `Drug_name`, `Quantity`, `Comapany_name`, `Price`, `Type`, `Proceed`, `Delete`, `Phone`, `Age`, `Customer_id`) 
VALUES ('$folder', '', '0', '', '0', ' ', '1', ' ', '$phone', '$age', '$id');";
$run=mysqli_query($conn,$query);
if($run > 0)
{
	echo "<br>";
	echo "<center><label style='font-weight:bold;font-size:17px;color:blue;margin-bottom:2px;'> YOUR ORDER ARE SUCCESSFULLY SUBMITTED,<br> WAIT A MINUETS TO RECIEVE ORDER LIST BY PHARMACIST,<br> TO RECIEVE REFRESH CURENT SITE!</label></center>";
	echo "<br>";
}else{
	echo "<center><label style='font-weight:bold;font-size:17px;color:blue;margin-bottom:2px;'> YOUR ORDER ARE NOT  SUBMITTED TO THE PHARMACIST </label></center>";
} */
}
?>
<br><br><br>
<footer style="margin-top:9%;">
<?php include("footer.php");  ?>
</footer>