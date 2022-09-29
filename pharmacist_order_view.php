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
<head>
<?php include('head_ph.php'); ?>
</head>
<?php $folder1="";$folder="";?>
<style>


</style>
<?php
$conn=mysqli_connect("localhost","root","","drug");
if(isset($_GET['invoice_no'])){ 
       $invoice_no=$_GET['invoice_no'];
$query=" select * from customer_order where invoice_no = '$invoice_no'  ";
//echo $med_id;
$run=mysqli_query($conn,$query);
if($run){
	//echo " <script>alert('q3SUCCESSFULLY SUMMITED ');<script>";
	// $invoice_no1=rand(101199,181199);
    //$invoice=$invoice_no1;		 	  
    //  $invoice=mt_rand();
       $row=mysqli_fetch_array($run);
         $Customer_id=$row['Customer_id'];           
		 $Drug_name=$row['Drug_name']; 		
		 $Comapany_name=$row['Comapany_name']; 
		  $Price=$row['Price'];
         $quantity=$row['quantity'];	
          $Type=$row['Type'];
		  $Date=$row['Date'];
           $Action=$row['Action'];
		   $invoice_no=$row['invoice_no'];
      // $image= '<td><img style="width:80px;height:80px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>'; 		 
        $image= '<td><img  style="object-fit:contain;margin:3px;width:500px;height:500px;border:1px groove deepskyblue;" src="' .$row['presc_image'].'"  /></td>';
	// $image1= '<td><img  style="object-fit:contain;margin:3px;width:550px;height:500px;border:1px groove deepskyblue;" src="' .$row['presc1_image'].'"  /></td>';	
}
else{
	echo '<script> alert(" No Data exist ");</script>';
}
}
?>
<center>
<form action="" enctype="multipart/form-data" method="post" style=" float:right; margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:150px;border-radius: 5%; text-align: center;padding:15px;box-shadow: 5px 10px #989ba0;margin-right: 25%;">
  	                           
<a href="pending_cancel.php?NO2=<?php echo $row['NO2']?> & Action=Finished " style="border-radius:3px;font-size:15px;color:white;background:#0d5dc1;position:relative;padding:12px;" >Cancel</a>
 
</form>
<form action="" enctype="multipart/form-data" method="post" style=" float:right; margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:150px;border-radius: 5%; text-align: center;padding:15px;box-shadow: 5px 10px #989ba0;margin-right: 25%;">
 
<?php 
	if($Action == 'pending')
	{ ?>
	   	                           
<a href="pending.php?invoice_no=<?php echo $row['invoice_no']?> & Action=Finished " style="border-radius:3px;font-size:15px;color:white;background:#1125ff;position:relative;padding:12px;" > Proceed</a>
 
  <?php 
    
  }
  else{ ?> 
<a href="pending.php?invoice_no=<?php echo $row['invoice_no']?>  & Action=pending "  style="border-radius:3px;font-size:15px;color:white;background:#0082e9;position:relative;padding:12px;" > Finished</a>    
	<?php 
	}
	?>
</form>
</center>
<?php
   if(isset($_GET['invoice_no'])){ 
  // echo " <table border='2'><tr> ";
  echo "<div style='margin:10px;font-size:15px;display:inline-block;border:1px groove deepskyblue;'><legend>prescription image</legend>";
  
   echo "<label  style='font-size:22px;'>".$image."</label>";
 
    
  echo "</div>";
 // echo "<hr style='width:70%;color:blue;'>";
   echo " <br>";
   ?><div style="border:groove #e3e8ef;margin-left:15px;width:70%;background-color: rgb(11 12 233 / 18%);border-radius:1%;font-family: initial;"><?php
  
 echo "<label style='font-size:22px;'>"."<label style='color:blue;font-size:22px;'>Customer_id:</label>".$Customer_id."</label>";
  echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Drug_name: </p>".$Drug_name."</label>";
//echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Comapany_name: </p>".$Comapany_name."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Price: </p>".$Price."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> quantity: </p>".$quantity."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Type: </p>".$Type."</label>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Date: </p>".$Date."</label>";
  echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Invoice No: </p>".$invoice_no."</label>";
 ?></div><?php
   }
  ?>


