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
<div class="span"  id="span">

<a href="logout.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
</div>
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
</head>
 <?php 
     // if(isset($_POST['send_to_pharmacist'])){
		  
 @ $filename = $_FILES["uploadimage"]["name"];
            @ $tempname = $_FILES["uploadimage"]["tmp_name"];
            $folder = "prescription_order/".$filename;		
		// $folder = " kool ";
		 move_uploaded_file($tempname,$folder);
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
		// $First_name=$row['First_name']; 
		 //  $middle_name=$row['Middle_name'];
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
<form action="" enctype="multipart/form-data" method="post" style="min-width:350px; margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:30%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 10%;">
 <div>
 <br>  <div>
			<label class="signup"  for="img" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Upload prescription Image:</label><br>   
		<br>   <input type="file" id="uploadimage" name="uploadimage" style="width:50%;height:30px; border-radius:5px;" required />
			   <!--input type="file" id="uploadimage1" name="uploadimage1" style="width:50%;height:30px; border-radius:5px;"  />
               <input type="file" id="uploadimage2" name="uploadimage2" style="width:50%;height:30px; border-radius:5px;"  /--> 	
		  
			  </div>
			  </div><br>
<button  type="submit" id="send_to_pharmacist" name="send_to_pharmacist"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Send to Pharmacist</button>

</form>
</center >
<?php $conn=mysqli_connect("localhost","root","","drug");
if(isset($_POST['send_to_pharmacist'])){
	
//$query=" insert into customer_prescription('prec_Image1','prec_Image2','prec_Image3') values('$folder','$folder1','@$folder2')";
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
}
}
?>
<br><br><br>
 <?php
 echo "<br><br>";
// $query_del="delete from customer_order where med_id='$id'";
 $result=mysqli_query($conn,"SELECT * FROM tmp_order_customer where Customer_ID='$id' AND Status='pending' ")or die(mysqli_error());

		 echo "<table border='' cellpadding='5' align='center' > ";
		  echo "<tr><th style='width: max-content;display: inherit;'>Your Drugs List Ordered By Pharmacist</th></tr>";
		  echo "<tr style='background:#0082e6;color:white;'><th>prescription_image </th><th>Drug Name</th><th>Quantity</th><th>Comapany Name </th><th>Price </th><th>Type </th><th>Comment </th><th>Delete </th><th>Proceed</th></tr>";
		$count=1;
		while($row=mysqli_fetch_array($result)){
$image2= '<img  style="object-fit:contain;width:180px;height:180px;" src="' .$row['presc_Image'].'"  />';
//$image3= '<img  style="object-fit:contain;width:70px;height:70px;" src="' .$row['presc1_image'].'"  />';			
			$count++; 
			$Total=0;
			  
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
		echo '<td style="font-size:22px;"><center>'.$image2.'</center></td>';/****/
        echo '<td style="font-size:22px;">'.$row['Drug_name'].'</td>';	
		echo '<td style="font-size:22px;">'.$row['Quantity'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Company_name'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Price'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Type'].'</td>'; 
		echo '<td style="font-size:22px;">'.$row['comment'].'</td>';?>
		
<td>&nbsp;&nbsp;&nbsp;<a href="tmp_order_customer_delete.php?Number=<?php echo $row['Number']?>" alt="delete" style="color:white;margin:5px;background:blue;padding:5px;" ><span class="fa fa-trash-o"> </span></a></td>

				<?php
				if($row['Drug_name']!='NULL'){
					?>
<td>&nbsp;&nbsp;&nbsp;<a href="order_page_prescription_proceed.php?med_id=<?php echo $row['med_id']?> & Number=<?php echo $row['Number']?> " alt="Proceed" style="color:white;margin:5px;padding:5px;" ><img  style="object-fit:contain;width:34px;height:34px;" src="\Drug-I-S\img\download.png"  /></span></a></td>
<?php
}
?>
	
	<?php	// $Total=$Total + $row['Price'];

	
				}else{
				echo "<tr style='background:#0082e600'>";
		echo '<td style="font-size:22px;"><center>'.$image2.'<center></td>';/****/
        echo '<td style="font-size:22px;">'.$row['Drug_name'].'</td>';	
		echo '<td style="font-size:22px;">'.$row['Quantity'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Company_name'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Price'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Type'].'</td>'; 
		echo '<td style="font-size:22px;">'.$row['comment'].'</td>';?>
<td>&nbsp;&nbsp;&nbsp;<a href="tmp_order_customer_delete.php?Number=<?php echo $row['Number']?>" alt="delete" style="color:white;margin:5px;background:blue;padding:5px;justify-item:center;item-align:center;" ><span class="fa fa-trash-o"> </span></a></td>
<?php
				if($row['Drug_name']!='NULL'){
					?>
<td>&nbsp;&nbsp;&nbsp;<a href="order_page_prescription_proceed.php?med_id=<?php echo $row['med_id']?> & Number=<?php echo $row['Number']?> " alt="Proceed" style="color:white;margin:5px;padding:5px;" ><img  style="object-fit:contain;width:34px;height:34px;" src="\Drug-I-S\img\download.png"  /></span></a></td>
<?php
}
?>
	<?php
		
		// $Total=$Total + $row['Price'];
		}}
		?>
 
<footer style="margin-top:9%;">
<?php //include("footer.php");  ?>
</footer>