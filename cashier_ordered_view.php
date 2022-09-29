
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
<head>
<?php include('head_cashi.php'); ?>
<div class="span"  id="span">

<a href="logout_cash.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
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
		$med_id=$_GET['med_id'];
		$NO2=$_GET['NO2'];
$conn=mysqli_connect("localhost","root","","drug");
if(isset($_GET['invoice_no'])){ 
       $invoice_no=$_GET['invoice_no'];
	   $Action=$_GET['Action'];
	   
$result= mysqli_query($conn," SELECT * FROM customer_order where invoice_no='$invoice_no' ")or die(mysqli_error());

 
if($result){
	//echo " <script>alert('q3SUCCESSFULLY SUMMITED ');<script>";
	// $invoice_no1=rand(101199,181199);
    //$invoice=$invoice_no1;
	  	
   /*     $status="pending";
      $invoice=mt_rand();*/
       $row=mysqli_fetch_array($result);
         $Delivery_date=$row['Delivery_date'];           
		 $Delivery_time=$row['Delivery_time']; 		
		 $Delivery_options=$row['Delivery_options']; 
		  $Customer_city=$row['Customer_city'];
         $Customer_address=$row['Customer_address'];	
          $invoice_no=$row['invoice_no'];
		  $Price=$row['Price'];
		   
	     $quantity=$row['quantity'];
           $mobile_number=$row['Mobile_num']; 		 
		// $Type=$row['Type']; 
      // $image= '<td><img style="width:80px;height:80px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>'; 		 
        $image= '<td><img id="img1" onmouseover="expand1()" onmouseout="shrink1()" style="object-fit:contain;width:550px;height:550px;" src="' .$row['Payment_image'].'"  /></td>';
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
 //@$filename1 = $_FILES["Payment_image"]["name"];
            // @$tempname1 = $_FILES["Payment_image"]["tmp_name"];
			 //$folder1=" mook ";
           // $folder1 = "payment_image/".$filename1;	 
		  // move_uploaded_file($tempname1,$folder1); 
		   ?>
<form action="" enctype="multipart/form-data" method="post" style="min-width:420px; float:right; margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:30%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 10%;">
 <div><label   for="quantity" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Drug Quantity:</label>
			  <input value="<?php echo $quantity ?>" type="number" id="quantity" name="quantity" style="padding-left:10px;width:60px;height:30px; border-radius:5px;" readonly required>
			 <br>
			  </div><br>
			  <fieldset>
			 <legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Delivery Date(M/D/Y) And Time:</legend><br>
		<!--label for="cars"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">Order Available for 48:00 hours Only:</label-->	 
			  <input value="<?php echo $Delivery_date ?>" readonly type="date" id="deliverydate" name="deliverydate" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
			  <input value="<?php echo $Delivery_time ?>" readonly type="time" id="deliverytime" name="deliverytime" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
			  </fieldset><br>
			   
			   <fieldset>
	<legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Delivery Options:</legend>
<input value="<?php echo $Delivery_options ?>" readonly type="text" id="deliverytype" name="deliverytype" placeholder="delivery type" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
 
	 </fieldset>
			   
			   <br>
   <fieldset>
	<legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Address:</legend>
	<input value="<?php echo $Customer_city ?>" readonly type="text" id="Customer_city" name="Customer_city" placeholder="city" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
    <input value="<?php echo $Customer_address ?>" readonly type="text" id="Customer_address" name="Customer_address" placeholder="Street address,apartement,floor" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
	
	 </fieldset><br>
	 <fieldset>
	<legend  style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Invoice Number:</legend>
    <input value="<?php echo $invoice_no ?>" readonly type="text" id="Invoice_Number" name="Invoice_Number" placeholder="Invoice Number" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
	
	 </fieldset>
	<br>
	<fieldset>
	<legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Mobile Number:</legend>
<input value="<?php echo "+".$mobile_number ?>" readonly type="text" id="Customer_mobile" name="Customer_mobile" placeholder="Mobile Number" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
 
	 </fieldset>
<fieldset>
	<legend style="font-weight:bold;font-size:15px;color:#000000;margin-bottom:2px;">Price:</legend>
<input value="<?php echo $Price ?>" readonly type="text" id="Customer_price" name="Customer_price" placeholder="Customer price" style="padding-left:10px;width:50%;height:30px; border-radius:5px;"  />
 
	 </fieldset>	 
			  
 
</form>
 
 
<?php
   if(isset($_GET['invoice_no'])){ 
  // echo " <table border='2'><tr> ";
 echo "<label  style='font-size:22px;'>".$image."</label>";
 // echo "<hr style='width:70%;color:blue;'>";
   echo " <br>";
   ?><label style="background-color:#0082e6;"><div style="border:groove #e3e8ef;margin-left:15px;width:98%;background-color: rgb(11 12 233 / 18%);border-radius:1%;font-family: initial;"></div><?php ?>
  <center><form action="" enctype="multipart/form-data" method="post" style="min-width:420px;  margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:43%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 10%;">
 <div><label   for="quantity" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">CASH DEPOSITE </label><br><br><br>
		</div><hr>	    
			  </label><br> <!-- THIS RECEIPT IS NOT VALID UNLESS IT BEARS STAMP OF THE BANK AND  SIGNATURE OF THE AUTHORIZED PERSONNEL  -->
			    <label for="BARANCH_CODE"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">BARANCH CODE:</label><br>
			   <input type="text" id="BARANCH_CODE" name="BARANCH_CODE" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="TRANSACTION_DATE"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">TRANSACTION DATE:</label><br>
			   <input type="date" id="TRANSACTION_DATE" name="TRANSACTION_DATE" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="TRANSACTION_TIME"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">TRANSACTION TIME:</label><br>
			   <input type="time" id="TRANSACTION_TIME" name="TRANSACTION_TIME" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="TRANSACTION_REFE_NO"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">TRANSACTION REFERENCE NO:</label><br>
			   <input type="text" id="TRANSACTION_REFE_NO" name="TRANSACTION_REFE_NO" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="RECIVER_NAME"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">RECIVER NAME:</label><br>
			   <input type="text" id="RECIVER_NAME" name="RECIVER_NAME" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="ACCOUNT_NUMBER"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">ACCOUNT NUMBER:</label><br>
			   <input type="text" id="ACCOUNT_NUMBER" name="ACCOUNT_NUMBER" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="ACCOUNT_HOLDER"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">ACCOUNT HOLDER:</label><br>
			   <input type="text" id="ACCOUNT_HOLDER" name="ACCOUNT_HOLDER" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="DEPOSITED_AMOUNT"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">DEPOSITED AMOUNT:</label><br>
			   <input type="text" id="DEPOSITED_AMOUNT" name="DEPOSITED_AMOUNT" style="width:50%;height:30px; border-radius:5px;" required /><br><br>
			    <label for="DEPOSITED_BY"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">DEPOSITED BY:</label><br>
			   <input type="text" id="DEPOSITED_BY" name="DEPOSITED_BY" style="width:50%;height:30px; border-radius:5px;" required /><br>
		<br><br> 	  
<button  type="submit" id="add_to_cart" id='insert_deposite' name="insert_deposite"  style="background: #0082e6;font-weight:bold;margin-right:25px;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;"> INSERT </button> 
<button  type="button" id="add_to_cart" id='clear' name="clear"  style="background: #0082e6;font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;"> Clear </button>
<button  type="button" id="add_to_cart" id='cancel_deposite' name="cancel_deposite" onclick="windows.cashier.php" style="background: #0082e6;font-weight:bold;margin-left:25px;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;"> Cancel </button> 

</form></center>
<?php

?>

<?php



//$query7=" UPDATE `register_drug` SET `Number_drug` = '9' WHERE `register_drug`.`med_id` = 37 ";


?>
 
<?php
   }
  ?>
  <?php
 
if(isset($_POST['insert_deposite'])){
	      $BARANCH_CODE=$_POST['BARANCH_CODE'];	
          $TRANSACTION_DATE=$_POST['TRANSACTION_DATE'];
		  $TRANSACTION_TIME=$_POST['TRANSACTION_TIME'];
          $TRANSACTION_REFE_NO=$_POST['TRANSACTION_REFE_NO']; 
	      $RECIVER_NAME=$_POST['RECIVER_NAME'];
	      $ACCOUNT_NUMBER=$_POST['ACCOUNT_NUMBER'];
		  $ACCOUNT_HOLDER=$_POST['ACCOUNT_HOLDER']; 
	      $DEPOSITED_AMOUNT=$_POST['DEPOSITED_AMOUNT'];
	      $DEPOSITED_BY=$_POST['DEPOSITED_BY'];
	  

$query2="INSERT INTO `view_report` (`Branch_code`, `transaction_date`, `transaction_time`, `transaction_ref_no`, `Reciver_name`, `Account_number`, `Account_holder`, `Deposited_amount`, `Deposited_by`)
VALUES ('$BARANCH_CODE', '$TRANSACTION_DATE', '$TRANSACTION_TIME', '$TRANSACTION_REFE_NO', '$RECIVER_NAME', '$ACCOUNT_NUMBER', '$ACCOUNT_HOLDER', '$DEPOSITED_AMOUNT', '$DEPOSITED_BY')";

$run=mysqli_query($conn,$query2);

if($run > 0){
	 
  
 
 $query3=" UPDATE `customer_order` SET `Action` = 'payed' WHERE `customer_order`.`invoice_no` = '$invoice_no' ";
 $run1=mysqli_query($conn,$query3);
 
 if($run1 > 0){
	 echo '<script type="text/javascript"> alert (" SUCCESSFULLY INSERTED VALUES ")</script>';
	//echo "location.cashier.php";  
 }
 ?> 

 <?php
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
  $result=$quantity - $quantity4; 
 }else{
	echo '<script type="text/javascript"> alert (" NOT Recorded Drug Exist ")</script>'; 
 }
  $query7=" UPDATE `register_drug` SET `Number_drug` = '$result' WHERE `register_drug`.`med_id` = '$med_id' ";
 $run9=mysqli_query($conn,$query7);
 
}else{
  //echo "  <script>alert('  NOT ORDER TRY PLEASE ');<script>";	
 echo '<script type="text/javascript"> alert (" NOT Recorded ")</script>';

}
  
//}
/* else{
   
 echo '<script type="text/javascript"> alert (" transaction number exist ")</script>';

} */
}
?>
<?php
//$query_sum=" select sum('price') from customer_order where Customer_id='$id' AND Action='pending' ";
 
?>
 <?php
 
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
 <footer>
 <?php include("footer.php") ?>
 </footer>















	  
 
 
	



 





