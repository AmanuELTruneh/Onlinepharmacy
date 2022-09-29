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
<div class="span"  id="span">

<a href="logout_ph.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
</div>
</head>
<?php 
if(isset($_GET['Customer_id'])){ 
$Customer_id=$_GET['Customer_id'];
}
else{
echo " <script type='javascript/text'>alert('Customer_id ...');</script> ";	 ;	 
}
if(isset($_GET['med_id'])){ 
$med_id=$_GET['med_id'];
}
else{
echo " <script type='javascript/text'>alert('med_id ...');</script> ";	 ;	 
}
?>
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
$conn=mysqli_connect("localhost","root","","drug");
$NO=$_SESSION['NO'];
$query2=" select prec_Image1 from customer_prescription where NO='$NO' ";
$run1=mysqli_query($conn,$query2);
if($run1){
	$row=mysqli_fetch_array($run1);
	$prec_Image1=$row['prec_Image1'];
}
?>
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
            $folder = "prescription_order/".$filename;		
		// $folder = " kool "; 
		 move_uploaded_file($tempname,$folder);*/
	  /* @$filename1 = $_FILES["uploadimage1"]["name"];
             @$tempname1 = $_FILES["uploadimage1"]["tmp_name"];
			 //$folder1=" mook ";
            $folder1 = "prescription/".$filename1;	 
		   move_uploaded_file($tempname1,$folder1);  */
	 // }
	?>
 
 
<form action="" enctype="multipart/form-data" method="post" style=" float:right;min-width:320px; margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;width:30%;border-radius: 5%; text-align: center;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-right: 10%;">
 <div><label   for="quantity" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Drug Quantity:</label>
			  <input value=1 type="number" id="quantity" name="quantity" style="width:60px;height:30px; border-radius:5px;"required>			 
			  </div><br>
<div>
				<label class="signup" for="comment" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Comment:</label><br>
				<textarea type="Text"  id="comment"  name="comment" style="width:90%; font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" required></textarea>
			  </div>
			  <br>		  
<button  type="submit" id="send_to_customer" name="send_to_customer"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Send To Customer</button>

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
 
if(isset($_POST['send_to_customer'])){
	
	 $quantity=$_POST['quantity'];
	 $Price=$Price1 * $quantity;
	 $comment=$_POST['comment'];
	 $folder=$_SESSION['NO'];
	 //echo $folder;
	// $quantity=2;
	// echo NOW();
	// echo " <script>alert('3SUCCESSFULLY SUMMITED ');<script>";
//$query1=" INSERT INTO 'customer_order' ('Customer_id', 'Drug_name', 'Comapany_name', 'Price', 'Type', 'invoice_no', 'Date')VALUES ('$id', '$Drug_name', '$Comapany_name', '$Price', '$Type', '$invoice', NOW());";
//$query2="INSERT INTO `customer_order` (`Customer_id`, `Drug_name`, `Comapany_name`, `Price`, `quantity`,`Type`, `invoice_no`, `Date`) VALUES ('$id', '$Drug_name', '$Comapany_name', '$Price', '$quantity', '$Type', '$invoice', NOW());";
//$query2 = "INSERT INTO `customer_order` (`Customer_id`, `Drug_name`, `Comapany_name`, `Price`, `quantity`, `Type`, `invoice_no`, `Date`) VALUES ('$id', '$Drug_name', '$Comapany_name', '$Price', '$quantity', '$Type', '$invoice', NOW())";
//$query2="INSERT INTO `customer_order` (`Customer_id`, `med_id`,`Drug_name`, `Comapany_name`, `Price`, `quantity`, `Type`, `invoice_no`, `Date`,`presc_image`,`presc1_image`) 
//VALUES ('$id','$med_id' ,'$Drug_name', '$Comapany_name', '$Price', '$quantity', '$Type', '$invoice', NOW(),'$folder','$folder1');";

$query2=" INSERT INTO `tmp_order_customer` (`presc_Image`, `Drug_name`, `Quantity`, `Company_name`, `Price`, `Type`, `comment`, `Customer_ID`, `med_id`)
VALUES ('$prec_Image1', '$Drug_name', '$quantity', '$Comapany_name', '$Price', '$Type', '$comment', '$Customer_id', '$med_id')";
$run=mysqli_query($conn,$query2);
if($run > 0){
	
  
 echo '<script type="text/javascript"> alert (" YOUR ORDER HAS BEEN SUCCESSFULLY SUMMITED TO CUSTOMER")</script>';
 
  
 
 echo "<br>";
 echo "<tr>"; 
 /* echo "<label style='font-size:22px;'><label style='color:blue;font-size:22px;'> Price:</label></label>";
 echo "<label style='font-size:22px;'>".$Price1."</label>";
 echo "<label style='font-size:22px;'>"." * "."</label>";
 echo "<label style='font-size:22px;'>".$quantity."</label>";
 echo "<label style='font-size:22px;'>"." = "."</label>";
 echo "<label style='font-size:22px;'>".$Price."</label>";  
 echo "</tr>"; */
 echo "</table>"; ?> 

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
 $result=mysqli_query($conn,"SELECT * FROM customer_order where Customer_id='$Customer_id' AND ( Action='pending' OR Action='Finished' )  ")or die(mysqli_error());

		 echo "<table border='' cellpadding='5' align='center' > ";
		  echo "<tr><th style='width: max-content;display: inherit;'>Customer Firstly Ordered</th></tr>";
		  echo "<tr style='background:#0082e6;color:white;'><th>prescription_image </th><th>Drug Name</th><th>Quantity</th><th>Comapany Name </th><th>Price </th><th>Type </th><th>Date </th></tr>";
		$count=1;
		while($row=mysqli_fetch_array($result)){
$image2= '<img  style="object-fit:contain;width:70px;height:70px;" src="' .$row['presc_image'].'"  />';
//$image3= '<img  style="object-fit:contain;width:70px;height:70px;" src="' .$row['presc1_image'].'"  />';			
			$count++; 
			$Total=0;
			  
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
		echo '<td style="font-size:22px;">'.$image2.'</td>';/****/
        echo '<td style="font-size:22px;">'.$row['Drug_name'].'</td>';	
		echo '<td style="font-size:22px;">'.$row['quantity'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Comapany_name'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Price'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Type'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Date'].'</td>';?>
 
		
	<?php	// $Total=$Total + $row['Price'];

	
				}else{
				echo "<tr style='background:#0082e600'>";
		echo '<td style="font-size:22px;">'.$image2.'</td>';/****/		
        echo '<td style="font-size:22px;">'.$row['Drug_name'].'</td>';		
		echo '<td style="font-size:22px;">'.$row['quantity'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Comapany_name'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Price'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Type'].'</td>';
		echo '<td style="font-size:22px;">'.$row['Date'].'</td>';?>
  
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
 















	  
 
 
	



 





