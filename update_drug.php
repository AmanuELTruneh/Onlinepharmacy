   <?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&(isset($_SESSION['St_cordinator_id']))){
$id=$_SESSION['St_cordinator_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
 
<header>
<?php include('header.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	 <script src="function.js" type="text/javascript"></script>
	 
	 <title>Drug Inventory System</title>
<!--a href="logout.php"  ><label class="login" id="login1" style="background-color:#1b9bff;border-radius:10px;cursor:pointer;a:hover:blink;" for="login" >&nbsp;Logout</label> </a--> 	 
<div class="span"  id="span" >
<a href="logout_strcord.php"><label style="margin-left:7px; background:#30a4ffd1;" class ="bk" ><i class="fa fa-user"></i>&nbsp;Logout</label></a>
<!--form method="post" action="store_cordinator.php">
<!--div style="border:2px solid #30a4ffd1;position:absolute; justify-content:center;">
<input type="submit" name="search" for="search" style="cursor:pointer;float:right;border:1px solid #30a4ffd1;font-weight: bold;font-size:20px;color:white;background:#30a4ffd1;height:30px;" value="&nbsp;Search"/>
<i style="justify-content:center;justify-items:center; font-size:20px;color:white;background:#30a4ffd1;height:30px;" class="fa fa-search"></i><input type="text" id="search" placeholder=''  name="search" style="border:1px solid #30a4ffd1;color:black; float:right;width:190px;height:30px; border-radius:5px;" />
</div >
</form-->
</div>
</header>
<?php $conn=mysqli_connect("localhost","root","","drug"); 
  $med_id ="";
  $Image="";
  $Drug_name=""; 
  $Comapany_name="";
  $Number_drug="";
  $Product_date="";
  $Expire_date="";
  $Price="";
  $Type="";
  $Date="";
  $Time="";
  $Description="";
  $Benefits="";
  $Directions="";
  $Safety="";
  $Side_Effect="";
  $Prescription="";
  $Status=""; 
 $conn=mysqli_connect("localhost","root","","drug");
 if(isset($_GET['med_id'])){ 
       $id1=$_GET['med_id'];
	   
  $sql21=" select * from register_drug where med_id= '$id1' ";
	$result=mysqli_query($conn,$sql21);
	 
	if($result){
$row=mysqli_fetch_array($result);	
  $med_id =$row['med_id'];
  $Image= '<img src="'.$row['Image'].'"/>';
  $Drug_name=$row['Drug_name']; 
  $Comapany_name=$row['Comapany_name'];
  $Number_drug=$row['Number_drug'];
  $Product_date=$row['Product_date'];
  $Expire_date=$row['Expire_date'];
  $Price=$row['Price'];
  $Type=$row['Type'];
  $Date=$row['Date'];
  $Time=$row['Time'];
  $Description=$row['Description'];
  $Benefits=$row['Benefits'];
  $Directions=$row['Directions'];
  $Safety=$row['Safety'];
  $Side_Effect=$row['Side_Effect'];
  $Prescription=$row['Prescription'];
  $Status=$row['Status'];
}
else{
	echo '<script> alert(" No Data exist ");</script>';
}
}
           
?>

<style>

  .mn{
	font-weight:bold;
	position:absolute;
	margin-left:5%;
	font-size:22px;
	 padding:3px; 
	 position:absolute; 
}
.scroll1
		{
			margin-top:7%;
            margin-left:1%; 
			overflow: scroll;
			width:100%;
		}
.scroll1 tr{
	
	font-size:15px;
}
.scroll1 th{
	background-color:#0082e6d1;
	padding:10px;
	font-weight:bold;
	font-size:18px;
}
.scroll1 td{
	background-color:#0082e63d; 
	font-size:15px;
}
  
 .signup{
	 align-items:right;
	   display:block ;
	   position:relative;
	   
 }
  
  
  
 input{
	 font-size:20px;
	 padding:2px;
	 padding-left:10px;
	 <!--color: crimson;-->
 }
   span {
	
	color:deepskyblue;
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
	padding:5px; 
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
.grid_7{
	display:inline-block;
	width:100%;
	height:100%
	
	position:absolute;
	justify-content: center;
   float:right;
   position:relative;
}
.dashboard-module{
	width:100px;
	height:100px;
	display:inline-block;
	float:right;
	position:relative;
	margin:2.3%;
	margin-right:5%;
	margin-bottom:10%;
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
.scroll{
	width="100%";
	  
}
.t1{
  float:left;
  font-weight:bold;  
  margin-left:10px;
  margin-top:20PX;
  display:inline-block;
  
  
  border-radius:5px;
}
/**************/
 #span{
	 display:fixed;
 }
 .span{
	 
	    display: inline-block;
    position: relative;
    background-color: #0082e9;
    font-size: 1.2rem;
    color: white;
    padding: 5px;
    justify-content: center;
    align-items: center;
       padding-right: 10px;
     
    padding-bottom: 2%;
    letter-spacing: 2px;
    width: 100%;
    height: 40px;
}
 .mn{
	font-weight:bold;
	position:absolute;
	margin-left:10%;
	font-size:22px;
	 padding:3px; 
	 position:absolute; 
}
.tbody{
	overflow:scroll;
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
 .mn{
	font-weight:bold;
	position:absolute;
	margin-left:5%;
	font-size:22px;
	 padding:3px; 
	 position:absolute; 
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
 .radio{
	 display:inline-flex;
	 align-items:center;
	 cursor:pointer;
	 margin-right:10px;
	 font-size:18px;
	 box-sizing:border-box;  
	  transition:transform 0.15s;
	   
 }
 .signup{
	 align-items:right;
	   display:block ;
	   position:relative;
	   
 }
 .radio__radio{
	 width:3em;
	 height:1.25em;
	 border:2px solid #d8e4e2;
	 border-radius:50%;
	 
	box-sizing:border-box;
    
 }
 .radio__radio::after{
	 content:"";
	 width:100%;
	 height:100%;
	 display:block;
	 background:#009879;
	 transform:scale(0);
	 transition:transform 0.15s;
 }
 .radio__input:checked + .radio__radio::after{
	 transform:scale(1);
 }
 .scroll1{
	        margin-top:4%;
            margin-left:1%; 
			overflow: scroll;
            width:100%;
 }
 input{
	 font-size:20px;
	 padding:2px;
	 padding-left:10px;
	 <!--color: crimson;-->
 }
   span {
	
	color:deepskyblue;
}
.tabs1{
	float:right;
}
#tab1{
	float:right;
}
</style>
<body style="background-color:#0082e640;"  >
<div id="" style="margin-right: 22%;margin-top:.5%;" > 
     
            <br>
              <br>
			  
			  <form enctype="multipart/form-data"  action=" " method="post" style="margin: 2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div><label for="formsingup" style="font-weight: bold; font-size:22px;text-align:center; color: #000000;"> <span>Update   </span><span>  Drug</span> </label></div>
			   <br>
			   <div>
			<label class="signup"  for="img" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;"> Image:</label>   
			   <input type="file" id="uploadfile" name="uploadfile" style="width:50%;height:30px; border-radius:5px;" required value="<?php  echo $Image; ?>" />
			   </div><br>
			  <div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Drug Name:</label>
			  <input type="text" id="Dname" name="Dname" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Drug_name; ?>" required>
			  </div><br>
			  <div  > 
				<label class="signup" for="cp_name" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Company Name:</label>
				<input type="Text"   id="cp_name" name="cp_name" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Comapany_name; ?>" required />
			  </div><br>
			   <div><label class="signup"  for="no_drug" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Number of drugs:</label>
			  <input type="number" id="no_drug" name="no_drug" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Number_drug; ?>" required>
			  </div><br>	  
			  <div  >
				<label class="signup" for="prd_date" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">product Date:</label>
				<input type="date" id="prd_date"   name="prd_date" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Product_date; ?>" required>
			  </div><br>
			  <div  >
				<label class="signup" for="exp_date" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Expire Date:</label>
				<input type="date"  id="exp_date"  name="exp_date" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Expire_date; ?>" required>
			  </div><br>
			  <div>
				<label class="signup" for="price" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Price:</label>
				<input type="numeric"  id="price"  name="price" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Price; ?>" required>
			  </div><br>
			  <div>
				<label class="signup" for="Type" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Type:</label>
				<input type="Text"  id="Type"  name="Type" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Type; ?>" required>
			  </div><br>
			 
			  <div>
				<label class="signup" for="Description" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Description:</label>
				<textarea type="Text"  id="Description"  name="Description" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;"   required><?php  echo $Description; ?></textarea>
			  </div><br>
			 
			  <div>
				<label class="signup" for="Benefits" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Benefits:</label>
				<textarea type="Text"  id="Benefits"  name="Benefits" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" ><?php  echo $Benefits; ?></textarea>
			  </div>
			  <br>
			 
			  <div>
				<label class="signup" for="Directions" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Directions:</label>
				<textarea type="Text"  id="Directions"  name="Directions" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;"   required><?php  echo $Directions; ?></textarea>
			  </div>
			  <br>
			 
			  <div>
				<label class="signup" for="Safety" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Safety:</label>
				<textarea type="Text"  id="Safety"  name="Safety" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;"   required><?php  echo $Safety; ?></textarea>
			  </div>
			  <br>
			 
			  <div>
				<label class="signup" for="Side_Effect" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Side_Effect:</label>
				<textarea type="Text"  id="Side_Effect"  name="Side_Effect" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;"   required><?php  echo $Side_Effect; ?></textarea>
			  </div>
			   <br>
			  <label for="update"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">Availability:</label>
			   <select id="Availability" name="Availability" value="<?php  echo $Prescription; ?>" >
    <option value="Available">Available</option>
    <option value="Not_Available">Not Available</option>    
  </select> 
  <label for="update"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">Prescription:</label>
  <select id="prescription" name="prescription" value="<?php  echo $Status; ?>" >
    <option value="yes">yes</option>
    <option value="no">No</option>    
  </select>
			   <br> <br><br>
			   <button  type="submit" id="Register_drug" name="Udate_drug" style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Update</button>
               <button value="Clear" onclick="clr()" type="button"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:45px;color: #000000;padding:3px;  border-radius:5px;">Clear</button>			   
			  <br><br>
			     
			</form><br>
  
			  </div>
<?php  
 
if(isset($_POST['Udate_drug'])){
	         $filename = $_FILES["uploadfile"]["name"];
             $tempname = $_FILES["uploadfile"]["tmp_name"];
             $folder = "images/".$filename;	 
		     move_uploaded_file($tempname,$folder);
 //$med_id =$_POST['med_id'];
//  $Image=$row['uploadfile'];
  $Drug_name=$_POST['Dname']; 
  $Comapany_name=$_POST['cp_name'];
  $Number_drug=$_POST['no_drug'];
  $Product_date=$_POST['prd_date'];
  $Expire_date=$_POST['exp_date'];
  $Price=$_POST['price'];
  $Type=$_POST['Type'];
 // $Date=$_POST['Date'];
 // $Time=$_POST['Time'];
  $Description=$_POST['Description'];
  $Benefits=$_POST['Benefits'];
  $Directions=$_POST['Directions'];
  $Safety=$_POST['Safety'];
  $Side_Effect=$_POST['Side_Effect'];
  $Prescription=$_POST['prescription'];
  $Status=$_POST['Availability'];

$sql=" UPDATE `register_drug`
SET `Image` = '$folder', `Drug_name` = '$Drug_name',
`Comapany_name` = '$Comapany_name', `Number_drug` = '$Number_drug', 
`Product_date` = '$Product_date', `Expire_date` = '$Expire_date', 
`Price` = '$Price', `Type` = '$Type', `Date` = NOW(),
`Time` = NOW(), `Description` = '$Description',
`Benefits` = '$Benefits', `Directions` = '$Directions', 
`Safety` = '$Safety', `Side_Effect` = '$Side_Effect', 
`Prescription` = '$Prescription', `Status` = '$Status'
WHERE `register_drug`.`med_id` = $med_id";

$result=mysqli_query($conn,$sql);
if($result && $med_id != ''){
	
	echo '<script type="text/javascript"> alert (" Updated Successfully ")</script>';
//header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");
//header_remove();
?>
<script><?php echo("location.href = '/Drug-I-S/store_cordinator.php'"); ?></script>

<?php exit();
}else
{
	echo '<script type="text/javascript"> alert (" Update Failed Try Again ")</script>';	
} 
}  
?>
<footer>
<?php include('footer.php'); ?>
</footer>
</body>
</html>
