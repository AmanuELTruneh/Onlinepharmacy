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
<?php include('head_cust.php'); ?>
<div class="span"  id="span">

<a href="logout.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
</div>

</head>
<?php $folder1="";$folder="";?>
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
input[type="button"]:not(.active) {
	background-color:transparent;
}

.active {
	background-color: #0082e9;
	color :#fff;
}

input[type="button"]:hover:not(.active) {
	background-color: #ddd;
}
 input[type="button"] {
	transition: all .3s;
    border: 1px solid #ddd;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
	 
}
 tr:hover:not(th) {background-color: rgba(237,28,64,.1);}
 
 table {
  color: #333;
  border-collapse: separate;
   
  border: 2px solid #1b9bff;
  overflow:scroll;
  margin: 50px auto;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,.16);
  border-radius: 2px;
}
th {
  background: #0b72c2;
  color: #fff;
  border: none;
  padding:15px;
}
td{
	 padding:10px;
	 border: none;
}
</style>
<?php
         $Price=1;
         $Drug_name=""; 		
		 $Comapany_name=""; 
		  $Description="";
          $benefits="";	
          $directions="";
		  $safety="";
          $side_effect="";         		  
	     $Price1=1; 
		 $invoice="1";
		 $Type=""; 
		 $quantity=0;
		// $folder="";
		// $folder1="";
$conn=mysqli_connect("localhost","root","","drug");
if(isset($_GET['med_id'])){ 
       $med_id=$_GET['med_id'];
$query=" select * from register_drug where med_id = '$med_id' ";
//echo $med_id;
$run=mysqli_query($conn,$query);
if($run){
	//echo " <script>alert('q3SUCCESSFULLY SUMMITED ');<script>";
	// $invoice_no1=rand(101199,181199);
    //$invoice=$invoice_no1;
		 	
       $status="pending";
      $invoice=mt_rand();
       $row=mysqli_fetch_array($run);
         $med_id=$row['med_id'];           
		 $Drug_name=$row['Drug_name']; 		
		 $Comapany_name=$row['Comapany_name']; 
		  $Description=$row['Description'];
         $benefits=$row['Benefits'];	
          $directions=$row['Directions'];
		  $safety=$row['Safety'];
          $side_effect=$row['Side_Effect']; 
	     $Price1=$row['Price'];
          		 
		 $Type=$row['Type']; 
      // $image= '<td><img style="width:80px;height:80px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>'; 		 
        $image= '<td><img id="img1" onmouseover="expand1()" onmouseout="shrink1()" style="object-fit:contain;width:550px;height:550px;" src="' .$row['Image'].'"  /></td>';
}
else{
	echo '<script> alert(" No Data exist ");</script>';
}
}
?>
 <?php 
     // if(isset($_POST['add_to_cart'])){
		  
 /* @ $filename = $_FILES["uploadimage"]["name"];
            @ $tempname = $_FILES["uploadimage"]["tmp_name"];
            $folder = "prescription/".$filename;		
		// $folder = " kool ";
		 move_uploaded_file($tempname,$folder);
	  @$filename1 = $_FILES["uploadimage1"]["name"];
             @$tempname1 = $_FILES["uploadimage1"]["tmp_name"];
			 //$folder1=" mook ";
            $folder1 = "prescription/".$filename1;	 
		   move_uploaded_file($tempname1,$folder1);  */
	 // }
	?>
 <?php
 @$filename1 = $_FILES["Payment_image"]["name"];
             @$tempname1 = $_FILES["Payment_image"]["tmp_name"];
			 //$folder1=" mook ";
            $folder1 = "payment_image/".$filename1;	 
		   move_uploaded_file($tempname1,$folder1); 
		   ?>
<form action="" enctype="multipart/form-data" method="post" style="min-width:420px; float:right; margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:30%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 10%;">
 <div><label   for="quantity" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Drug Quantity:</label>
			  <input value=1 min="1"  type="number" id="quantity" name="quantity" style="width:60px;height:30px; border-radius:5px;"required>
			 <br>
			  </div><br>
			  <fieldset>
			 <legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Delivery Date And Time:</legend><br>
		<!--label for="cars"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">Order Available for 48:00 hours Only:</label-->	 
			  <input type="date" id="deliverydate" name="deliverydate" style="width:50%;height:30px; border-radius:5px;"  />
			  <input type="time" id="deliverytime" name="deliverytime" style="width:50%;height:30px; border-radius:5px;"  />
			  </fieldset><br>
			  <label for="cars"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">Delivery Options:</label>
			   <select id="Delivery_Options" name="Delivery_Options">
    <option value="Pick Up">Pick Up</option>
    <option value="Delivered to home">Delivered to home</option>    
  </select><br>
   <fieldset>
	<legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Address:</legend>
	<input type="text" id="Customer_city" name="Customer_city" placeholder="city" style="width:50%;height:30px; border-radius:5px;"  />
    <input type="text" id="Customer_address" name="Customer_address" placeholder="Street address,apartement,floor" style="width:50%;height:30px; border-radius:5px;"  />
	
	 </fieldset><br>
	 
	 <fieldset>
	<legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Mobile Number:</legend>
	<input type="tel" pattern="+251[0-9]{9}" minlength="10" maxlength="10" id="Mobile_Number" name="Mobile_Number" placeholder="Mobile Number" style="width:50%;height:30px; border-radius:5px;"  />   
	 </fieldset>
	<br>
	<fieldset>
	<legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Payment instruction:</legend>
<label class="signup"  for="img" style="font-weight:bold;font-size:17px;color:#000000;margin-bottom:2px;">Commercial Bank of Ethiopia</label><br> 
<label class="signup"  for="img" style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Account Number: 1000********7 </label>
<div>
			<label class="signup"  for="img" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Upload Payment Atachement Image:</label>   
			  <br>  <input type="file" id="Payment_image" name="Payment_image" style="width:50%;height:30px; border-radius:5px;" required />
			   
			   </div>
	 </fieldset>
			  
<button  type="submit" id="add_to_cart" name="add_to_cart"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Add to Cart</button>

</form>
 
 
<?php
   if(isset($_GET['med_id'])){ 
  // echo " <table border='2'><tr> ";
 echo "<label  style='font-size:22px;'>".$image."</label>";
 // echo "<hr style='width:70%;color:blue;'>";
   echo " <br>";
   ?><div style="border:groove #e3e8ef;margin-left:15px;width:70%;background-color: rgb(11 12 233 / 18%);border-radius:1%;font-family: initial;"><?php
  
 echo "<label style='font-size:22px;'>"."<label style='color:blue;font-size:22px;'>Type:</label>".$Type."</label>";
  echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Description: </p>".$Description."</label>";
//echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Benefits: </p>".$benefits."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Directions: </p>".$directions."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Safety: </p>".$safety."</label>";
 echo " <br>";
 echo "<label style='font-size:22px;'><p style='color:blue;font-size:22px;'> Side_Effect: </p>".$side_effect."</label>";
 
 ?></div><?php
   }
  ?>
  <?php
 
if(isset($_POST['add_to_cart'])){
	      $Delivery_date=$_POST['deliverydate'];	
          $Delivery_time=$_POST['deliverytime'];
		  $Delivery_options=$_POST['Delivery_Options'];
          $Customer_city=$_POST['Customer_city']; 
	      $Customer_address=$_POST['Customer_address'];
	 $Mobile_num=$_POST['Mobile_Number'];
	 $quantity=$_POST['quantity'];
	 $Price=$Price1 * $quantity;
	// $quantity=2;
	// echo NOW();
	// echo " <script>alert('3SUCCESSFULLY SUMMITED ');<script>";
//$query1=" INSERT INTO 'customer_order' ('Customer_id', 'Drug_name', 'Comapany_name', 'Price', 'Type', 'invoice_no', 'Date')VALUES ('$id', '$Drug_name', '$Comapany_name', '$Price', '$Type', '$invoice', NOW());";
//$query2="INSERT INTO `customer_order` (`Customer_id`, `Drug_name`, `Comapany_name`, `Price`, `quantity`,`Type`, `invoice_no`, `Date`) VALUES ('$id', '$Drug_name', '$Comapany_name', '$Price', '$quantity', '$Type', '$invoice', NOW());";
//$query2 = "INSERT INTO `customer_order` (`Customer_id`, `Drug_name`, `Comapany_name`, `Price`, `quantity`, `Type`, `invoice_no`, `Date`) VALUES ('$id', '$Drug_name', '$Comapany_name', '$Price', '$quantity', '$Type', '$invoice', NOW())";
//$query2="INSERT INTO `customer_order` (`Customer_id`, `med_id`,`Drug_name`, `Comapany_name`, `Price`, `quantity`, `Type`, `invoice_no`, `Date`,`presc_image`,`presc1_image`) 
//VALUES ('$id','$med_id' ,'$Drug_name', '$Comapany_name', '$Price', '$quantity', '$Type', '$invoice', NOW(),'$folder','$folder1');";

$query2="INSERT INTO `customer_order` (`Customer_id`, `med_id`,`Drug_name`, `Comapany_name`, `Price`, `quantity`, `Type`, `invoice_no`, `Date`,`presc_image`,`presc1_image`,`Delivery_date`,`Delivery_time`,`Delivery_options`,`Customer_city`,`Customer_address`,`Payment_image`,`Prescription`,`Mobile_num`) 
VALUES ('$id','$med_id' ,'$Drug_name', '$Comapany_name', '$Price', '$quantity', '$Type', '$invoice', NOW(),' ',' ','$Delivery_date','$Delivery_time','$Delivery_options','$Customer_city','$Customer_address','$folder1','no','$Mobile_num');";

$run=mysqli_query($conn,$query2);

if($run > 0){
	 
 echo '<script type="text/javascript"> alert (" YOUR ORDER HAS BEEB SUCCESSFULLY SUMMITED ")</script>';
 
 echo "<br>";
 echo "<tr>"; 
 echo "<label style='font-size:22px;'><label style='color:blue;font-size:22px;'> Price:</label></label>";
 echo "<label style='font-size:22px;'>".$Price1."</label>";
 echo "<label style='font-size:22px;'>"." * "."</label>";
 echo "<label style='font-size:22px;'>".$quantity."</label>";
 echo "<label style='font-size:22px;'>"." = "."</label>";
 echo "<label style='font-size:22px;'>".$Price."</label>";  
 echo "</tr>";
 echo "</table>"; 
 
 $query3=" UPDATE `customer_order` SET `Action` = 'Finished' WHERE `customer_order`.`invoice_no` = '$invoice' ";
 $run1=mysqli_query($conn,$query3);
 if($run1 > 0){
	// echo '<script type="text/javascript"> alert (" YOUR ORDER HAS BEEN NO Prescription ")</script>';
 }
 ?> 

 <?php
}else{
  //echo "  <script>alert('  NOT ORDER TRY PLEASE ');<script>";	
 echo '<script type="text/javascript"> alert (" NOT ORDER TRY PLEASE ")</script>';

}
  
}?>
<?php
//$query_sum=" select sum('price') from customer_order where Customer_id='$id' AND Action='pending' ";
 
?>
 <?php
 echo "<br><br>";
// $query_del="delete from customer_order where med_id='$id'";
 $result=mysqli_query($conn,"SELECT * FROM customer_order where Customer_id='$id' AND ( Action='pending' OR Action='Finished' )   ")or die(mysqli_error());

		 echo "<table border='' cellpadding='5' align='center' > ";
		  echo "<tr><th style='width: max-content;display: inherit;'>Your order List</th></tr>";
		  echo "<tr style='background:#0082e6;color:white;'><th>Drug Name</th><th>Quantity</th><th>Comapany Name </th><th>Price </th><th>Type </th><th>Status </th><th>Delete </th></tr>";
		$count=1;
		while($row=mysqli_fetch_array($result)){
		
			$count++; 
			$Total=0;
			  
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
		
        echo '<td style="font-size:22px;">'.$row['Drug_name'].'</td>';	
        echo '<td style="font-size:22px;">'.$row['quantity'].'</td>';		
		echo '<td style="font-size:22px;">'.$row['Comapany_name'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Price'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Type'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Status'].'</td>';?>
<td>&nbsp;&nbsp;&nbsp;<a href="delete_order.php?NO2=<?php echo $row['NO2']?>" alt="delete" style="color:white;margin:5px;background:blue;padding:5px;" ><span class="fa fa-trash-o"> </span></a></td>		
		
	<?php	// $Total=$Total + $row['Price'];

	
				}else{
				echo "<tr style='background:#0082e600'>";
		
        echo '<td style="font-size:22px;">'.$row['Drug_name'].'</td>';
        echo '<td style="font-size:22px;">'.$row['quantity'].'</td>';		
		echo '<td style="font-size:22px;">'.$row['Comapany_name'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Price'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Type'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Status'].'</td>';?>
<td>&nbsp;&nbsp;&nbsp;<a href="delete_order.php?NO2=<?php echo $row['NO2']?>" alt="delete" style="color:white;margin:5px;background:blue;padding:5px;justify-item:center;item-align:center;" ><span class="fa fa-trash-o"> </span></a></td>		 
	<?php
		
		// $Total=$Total + $row['Price'];
		}}
		?>

 <script type="text/javascript">
var width=100;
var difference=100;
var intervalId=0;
function increase(){
	clearInterval(intervalId);
	intervalId=setInterval(expand,10);
}
function decrease(){ onmouseover()
	clearInterval(intervalId);
	intervalId=setInterval(shrink,10);
}
function expand()
{
	if(width < 1200)
	{
		width=width+difference;
		document.getElementById("img1").style.width=width;
	}
	else{
		clearInterval(intervalId);
	}
}
function shrink()
{
	if(width > 700)
	{
		width=width - difference;
		document.getElementById("img1").style.width=width;
	}
	else{
		clearInterval(intervalId);
	}
}
</script>
 















	  
 
 
	



 





