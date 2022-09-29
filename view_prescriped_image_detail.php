 <?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&&($_SESSION['pharmacist_id'])){
$id=$_SESSION['pharmacist_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>

<?php 

$conn=mysqli_connect("localhost","root","","drug");
//$NO=$_SESSION['NO'];
//echo $NO;
$NO=$_GET['NO'];
$query2=" select prec_Image1 from customer_prescription where NO='$NO' ";
//$query2=" select * from customer_prescription where NO='$NO' ";

$run1=mysqli_query($conn,$query2);
if($run1){
	$row=mysqli_fetch_array($run1);
	$prec_Image1=$row['prec_Image1'];
	
	//echo $prec_Image1;
	  //echo "<img width='25px' height='25px' src=".$prec_Image1."/>";
$image2= '<img  style="object-fit:contain;width:70px;height:70px;" src="' .$row['prec_Image1'].'"  />';	

}
?>
<?php 
$Proceed=$_GET['Proceed'];
//echo $Proceed;

$query4=" UPDATE `customer_prescription` SET `Proceed` = ' $Proceed' WHERE `customer_prescription`.`NO` = $NO ";
$run1=mysqli_query($conn,$query4);
if($run1){
	 
} 
?>

<head>
<?php include('head_ph.php'); ?>
 <div class="span"  id="span">

<a href="logout_ph.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
</div>

</head>
<?php $folder1="";$folder="";?>
<style>
 
.a1:hover{
box-shadow: 1px 3px #989ba0;
background-color:blue;
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
$conn=mysqli_connect("localhost","root","","drug");
if(isset($_GET['NO'])){ 
       $NO=$_GET['NO'];
$query=" select * from customer_prescription where NO = '$NO' ";
//echo $med_id;
$run=mysqli_query($conn,$query);
if($run){
	//echo " <script>alert('q3SUCCESSFULLY SUMMITED ');<script>";
	// $invoice_no1=rand(101199,181199);
    //$invoice=$invoice_no1;
		 	
       
    //  $invoice=mt_rand();
       $row=mysqli_fetch_array($run);
         $Customer_id=$row['Customer_id'];           
		 $Phone=$row['Phone']; 		
		$Age=$row['Age']; 
	    //$Customer_id=$row['Customer_id'];
       //  $quantity=$row['quantity'];	
       //   $Type=$row['Type'];
		//  $Date=$row['Date'];
         //  $Action=$row['Action'];
      // $image= '<td><img style="width:80px;height:80px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>'; 		 
     $image=  '<td><img  style="object-fit:contain;margin:3px;width:470px;height:470px;border:1px groove deepskyblue;" src="' .$row['prec_Image1'].'"  /></td>';
	// $image1= '<td><img  style="object-fit:contain;margin:3px;width:470px;height:470px;border:1px groove deepskyblue;" src="' .$row['prec_Image2'].'"  /></td>';	
	// $image2= '<td><img  style="object-fit:contain;margin:3px;width:470px;height:470px;border:1px groove deepskyblue;" src="' .$row['prec_Image3'].'"  /></td>'; 
}
else{
	echo '<script> alert(" No Data exist ");</script>';
}
}
?>
<?php
if(isset($_POST['Register_drug'])){
	 $comment=$_POST['comment'];
	// $folder=$_SESSION['NO'];
	  $query2=" INSERT INTO `tmp_order_customer` (`presc_Image`, `Drug_name`, `Quantity`, `Company_name`, `Price`, `Type`, `comment`, `Customer_ID`, `med_id`)
 VALUES ('$prec_Image1', 'NULL', '0', '', '0', '', '$comment', '$Customer_id', '')";
//// $query2=" INSERT INTO `tmp_order_comment_notdeli_img` (`presc_image3`, `Comment`, `Customer_id`)
//// values('$prec_Image1', '$comment', '$Customer_id')";
//$query2="INSERT INTO `tmp_order_customer` (`presc_Image`, `Drug_name`, `Quantity`, `Company_name`, `Price`, `Type`, `comment`, `Number`, `Customer_ID`, `med_id`) 
//VALUES ('gf\\k.png', ' ', '4', 'rreer', '5.15', 'solid', 'reererrrrrrrrrrr', '8', 'CUS-98318-0', '12')";
$run=mysqli_query($conn,$query2);
if($run > 0){
	
 echo '<script type="text/javascript"> alert (" YOUR COMMENT HAS BEEN SUCCESSFULLY DELIVERED TO THE CUSTOMER")</script>';

}else{
	echo '<script type="text/javascript"> alert (" YOUR COMMENT HAS NOT BEEN SEND TRY PLEASE ")</script>';
}
}
	?>
<form action="" enctype="multipart/form-data" method="post" style="min-width:340px;min-height:50px; float:right; margin:3%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:30%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 10%;">
<h2 style="color:blue;cursor:pointer;font-size:20px;font-family: fantasy;">Image Not visible</h2>
<!--div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Drug Name:</label><br>
			  <input type="text" id="Dname" name="Dname" style="width:70%;height:30px; border-radius:5px;"required>
			  </div><br>
<div  > <a href="#" style="font-size:22px;hoverable:blue;">Not visible Image</a>
				<label class="signup" for="cp_name" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Company Name:</label><br>
				<input type="Text"   id="cp_name" name="cp_name" style="width:70%;height:30px; border-radius:5px;" required>
			  </div><br>	
<div><label class="signup"  for="no_drug" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Quantity:</label><br>
			  <input type="number" id="no_drug" name="no_drug" style="width:70%;height:30px; border-radius:5px;"required>
			  </div><br>	
<div>
				<label class="signup" for="price" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Price:</label><br>
				<input type="numeric"  id="price"  name="price" style="width:70%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div>
				<label class="signup" for="Type" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Type:</label><br>
				<input type="Text"  id="Type"  name="Type" style="width:70%;height:30px; border-radius:5px;" required>
			  </div><br-->
<div>
				<label class="signup" for="comment" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;font-family: fantasy;">Comment:</label><br>
				<textarea type="Text" value="IMAGE IS NOT VISIBLE PLEASE TAKE AGAIN"  id="comment"  name="comment" style="width:70%; font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" required></textarea>
			  </div>
			  <br>	

			   <button  type="submit" id="Register_drug" name="Register_drug" style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Send to Customer</button><br><br>
               <button value="Clear" onclick="clr()" type="button"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:15px;color: #000000;padding:3px;  border-radius:5px;">Clear</button>			   
			  <br><br>		
			  
</form>
<form class="a1" action="" enctype="multipart/form-data" method="post" style="font-family: fantasy;min-width:200px; min-height:50px; float:right; margin:3%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:20%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 30%;">
<a target="_blank" rel="noopener noreferrer" href="order_for_customer.php? Customer_id=<?php echo $Customer_id ?> & NO=<?php echo $NO ?> " style="color:blue;font-size:22px;hoverable:red;">Choose Drugs</a>
</form>
<?php
   if(isset($_GET['NO'])){ 
  // echo " <table border='2'><tr> ";
  echo "<div style='margin:10px;font-size:15px;display:block;border:1px groove deepskyblue;'><legend>prescription image</legend>";
  
   echo "<label  style='font-size:22px;'>".$image."</label>";
 // echo "<label  style='font-size:22px;'>".$image1."</label>";
 // echo "<label  style='font-size:22px;'>".$image2."</label>"; 
  echo "</div>";
 // echo "<hr style='width:70%;color:blue;'>";
   echo " <br>";
   ?><div style="border:groove #e3e8ef;margin-left:15px;width:40%;background-color: rgb(11 12 233 / 18%);border-radius:1%;font-family: initial;"><?php
  
 echo "<label style='font-size:22px;'>"."<label style='color:blue;font-size:22px;'>Customer_id:</label>".$Customer_id."</label>";
  echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Phone: </p>".$Phone."</label>";
//echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Age: </p>".$Age."</label>";
 echo " <br>";
 /* echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Price: </p>".$Price."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> quantity: </p>".$quantity."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Type: </p>".$Type."</label>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Date: </p>".$Date."</label>"; */
 ?></div><?php
   }
  ?>


