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
<?php $conn=mysqli_connect("localhost","root","","drug"); 
  

$ld=mysqli_insert_id($conn);
$code=rand(992999,9103999);
$userid=$code."-".$ld;

?>
 <?php  
if(isset($_POST['Register_drug'])){
 $med_id1="med_id-";
$med_id=$med_id1.$userid;
$Drug_name=$_POST['Dname'];
$Comapany_name=$_POST['cp_name'];
$Number_drug=$_POST['no_drug'];
$Product_date=$_POST['prd_date'];
$Expire_date=$_POST['exp_date'];
$Price=$_POST['price'];
$Type=$_POST['Type'];
$Description=$_POST['Description'];
$Benefits=$_POST['Benefits'];
$Directions=$_POST['Directions'];
$Safety=$_POST['Safety'];
$Side_Effect=$_POST['Side_Effect'];
$prescription=$_POST['prescription'];
     $conn=mysqli_connect("localhost","root","","drug");
     $sql = mysqli_query($conn," SELECT *  FROM register_drug WHERE Drug_name='$Drug_name'")or die(mysqli_error($conn));
	
 if(($row=mysqli_fetch_array($sql)) > 0)
		{	

echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}
		
		else{

			  $filename = $_FILES["uploadfile"]["name"];
             $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "images/".$filename;	 
		   move_uploaded_file($tempname,$folder);

  //$query=" INSERT INTO register_drug (Image, Drug_name, Comapany_name, Number_drug, Product_date, Expire_date, Price, Type, Date, Time, Description,Benefits,Directions,Safety,Side_Effect,) VALUES 
//('$folder', '$Drug_name', '$Comapany_name', '$Number_drug', '$Product_date', '$Expire_date', '$Price', '$Type', NOW(), NOW(), '$Description','fffsd','ffffd','ff','$Side_Effect')";
 $query= "INSERT INTO `register_drug` (`Image`, `Drug_name`, `Comapany_name`, `Number_drug`, `Product_date`, `Expire_date`, `Price`, `Type`, `Date`, `Time`, `Description`, `Benefits`, `Directions`, `Safety`, `Side_Effect`, `Prescription`) 
 VALUES ('$folder', '$Drug_name', '$Comapany_name', '$Number_drug', '$Product_date', '$Expire_date', '$Price', '$Type', NOW(), NOW(), '$Description', '$Benefits', '$Directions', '$Safety', '$Side_Effect', '$prescription');";
		  $run=mysqli_query($conn,$query);
		}
		  if($run > 0){
		echo '<script type="text/javascript"> alert ("  Inserted SUCCESSFULLY  ")</script>';
		}
		else{
	echo '<script type="text/javascript"> alert (" Not inserted ")</script>';		
	}  
	  
}
 
?>

<script>
function clr(){
document.getElementById("Dname").value="";
document.getElementById("cp_name").value="";
document.getElementById("no_drug").value="";
document.getElementById("prd_date").value="";
document.getElementById("exp_date").value="";
document.getElementById("price").value="";
document.getElementById("Type").value="";
document.getElementById("Description").value="";
document.getElementById("Benefits").value="";
document.getElementById("Directions").value="";
document.getElementById("Safety").value="";
document.getElementById("Side_Effect").value="";
//document.getElementById("Mname").value="";
//document.getElementById("Fname").value="";
}
</script>
<html lang="en-US" style="overflow-x:hidden">
<header>
<?php include('header.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	 <script src="function.js" type="text/javascript"></script>
	 <link rel="stylesheet" href="stylef1.css" media="all" >
	 <title>Drug Inventory System</title>
<!--a href="logout.php"  ><label class="login" id="login1" style="background-color:#1b9bff;border-radius:10px;cursor:pointer;a:hover:blink;" for="login" >&nbsp;Logout</label> </a--> 	 
<div class="span"  id="span" >
<a href="logout_strcord.php"><label style="margin-left:7px; background:#30a4ffd1;" class ="bk" ><i class="fa fa-user"></i>&nbsp;Logout</label></a>
<form method="post" action="store_cordinator.php">
<div style="border:2px solid #30a4ffd1;position:absolute; justify-content:center;">
<input type="submit" name="search" for="search" style="cursor:pointer;float:right;border:1px solid #30a4ffd1;font-weight: bold;font-size:20px;color:white;background:#30a4ffd1;height:30px;" value="&nbsp;Search"/>
<i style="justify-content:center;justify-items:center; font-size:20px;color:white;background:#30a4ffd1;height:30px;" class="fa fa-search"></i><input type="text" id="search" placeholder=''  name="search" style="border:1px solid #30a4ffd1;color:black; float:right;width:190px;height:30px; border-radius:5px;" />
</div>
</form>
</div>
</header>

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

<ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">VIEW</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">ADD</a></li>  
              
        </ul>
 <div id="content_2" style="margin-right: 22%;margin-top:.5%;" > 
     
            <br>
              <br>
			  
			  <form enctype="multipart/form-data"  action=" " method="post" style="margin: 2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div><label for="formsingup" style="font-weight: bold; font-size:22px;text-align:center; color: #000000;"> <span>Register New </span><span>  Drug</span> </label></div>
			   <br>
			   <div>
			<label class="signup"  for="img" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;"> Image:</label>   
			   <input type="file" id="uploadfile" name="uploadfile" style="width:50%;height:30px; border-radius:5px;"  />
			   </div><br>
			  <div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Drug Name:</label>
			  <input type="text" id="Dname" name="Dname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  <div  > 
				<label class="signup" for="cp_name" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Company Name:</label>
				<input type="Text"   id="cp_name" name="cp_name" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			   <div><label class="signup"  for="no_drug" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Number of drugs:</label>
			  <input type="number" id="no_drug" name="no_drug" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>	  
			  <div  >
				<label class="signup" for="prd_date" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">product Date:</label>
				<input type="date" id="prd_date"   name="prd_date" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div  >
				<label class="signup" for="exp_date" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Expire Date:</label>
				<input type="date"  id="exp_date"  name="exp_date" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div>
				<label class="signup" for="price" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Price:</label>
				<input type="numeric"  id="price"  name="price" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div>
				<label class="signup" for="Type" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Type:</label>
				<!--input type="Text" option="solid,liquid,syrup" id="Type"  name="Type" style="width:50%;height:30px; border-radius:5px;" required-->
				  <select id="Type" name="Type" style="width:50%;height:30px; border-radius:5px;"  >
    <option value="solid">Solid</option>
    <option value="liquid">Liquid</option>
    <option value="solid(tablet)">Solid(tablet)</option>
    <option value="liquid(injection)">Liquid(injection)</option>   
    <option value="liquid(syrup)">Liquid(syrup)</option>    
  </select> 
			  </div><br>
			 
			  <div>
				<label class="signup" for="Description" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Description:</label>
				<textarea type="Text"  id="Description"  name="Description" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" required></textarea>
			  </div><br>
			 
			  <div>
				<label class="signup" for="Benefits" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Benefits:</label>
				<textarea type="Text"  id="Benefits"  name="Benefits" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" required></textarea>
			  </div>
			  <br>
			 
			  <div>
				<label class="signup" for="Directions" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Directions:</label>
				<textarea type="Text"  id="Directions"  name="Directions" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" required></textarea>
			  </div>
			  <br>
			 
			  <div>
				<label class="signup" for="Safety" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Safety:</label>
				<textarea type="Text"  id="Safety"  name="Safety" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" required></textarea>
			  </div>
			  <br>
			 
			  <div>
				<label class="signup" for="Side_Effect" style=" font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Side_Effect:</label>
				<textarea type="Text"  id="Side_Effect"  name="Side_Effect" style=" font-size:17px;overflow-y:scroll;width:50%;height:100px; border-radius:5px;" required></textarea>
			  </div>
			  
			   <!--div>
				<label class="signup" for="date" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Date:</label>
				<input type="date"    name="date" style="width:50%;height:30px;border-radius:5px;" required>
			  </div><br>
			    <div >
				<label class="signup" for="time" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Time:</label>
				<input type="time"    name="time" style="width:50%;height:30px;border-radius:5px;" required>
			  </div--><br>
			  <label for="update"  style="font-weight:bold;font-size:14px;color:#000000;margin-bottom:2px;">Prescription:</label>
			   <select id="prescription" name="prescription"  >
    <option value="yes">yes</option>
    <option value="no">No</option>    
  </select>
			   <br> <br><br>
			   <button  type="submit" id="Register_drug" name="Register_drug" style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Insert</button>
               <button value="Clear" onclick="clr()" type="button"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:45px;color: #000000;padding:3px;  border-radius:5px;">Clear</button>			   
			  <br><br>
			    
			  			 
			  <!--label style="font-weight: bold;font-size:22px;color: #000000;">If a drug exist!  </label><br>
			  <a href="#" style="font-weight:bold;decoration:underline; color: blue;font-size:20px;">Update Drug</a><br><br>
			  <label style="font-weight: bold;font-size:22px;color: #000000;"> or If expired drug exist!  </label><br>
			  <a href="#" style="font-weight:bold;decoration:underline; color: blue;font-size:20px;">Delete Drug</a--><br>
			</form><br>
  
			  </div>
			 
			  <div id="content_1">
			  

<?php     
              if(!isset($_POST['search'])){
				  ?> 
				  <div style="overflow-x:scroll;width:100%;">
				  <?php
          $count=1;
		 //include_once('connect_db.php');
		 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn,"SELECT * FROM register_drug")or die(mysqli_error());
		 echo "<table overflow-x='scroll'  border='1' id='myTable' cellpadding='2' align='center'> ";
		 echo "<tr><th>Photo</th><th>Drug_name </th><th>Comapany_name </th><th>Product_date </th><th>Expire_date </th><th>Price </th><th>Type </th><th>Number of drug </th><th>Availability </th><th>Update </th></tr>";
		while($row=mysqli_fetch_array($result)){  
		$count++;
		$qunt=$row['Number_drug'];
		$med_id2=$row['med_id'];
		$date=date_create(date('Y-m-d'));
        $ex=date_create($row['Expire_date']);
		
	if(($qunt >= 1) && ($date < $ex)){
		if($count%2){
		echo "<tr style='background:#0b72c226;' >";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		
		if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:10px;padding:7px;text-align:center;background:#1b9bff;">'.$row['Status'].'</td>';
		?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php
		
		}
		else{
			echo "<tr style='background:#0082e95e;'>";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		
		if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:10px;padding:7px;text-align:center;background:#1b9bff;">'.$row['Status'].'</td>';?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php 
		}
	}else{
$result4=mysqli_query($conn," UPDATE `register_drug` SET `Status` = 'Not_Available' WHERE `register_drug`.`med_id` = '$med_id2' ")or die(mysqli_error());		
if($count%2){
		echo "<tr style='background:#0b72c226;' >";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		
		if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:7px;text-align:center;background:#99a4ad;">'.$row['Status'].'</td>';
		?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php
		
		}
		else{
			echo "<tr style='background:#0082e95e;'>";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		
		if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:10px;padding:7px;text-align:center;background:#99a4ad;">'.$row['Status'].'</td>';?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php 
		}		
		
	} 
		?>
	  
	<?php	
		}
echo "</table>";
			  }
?>
<?php 
	/* if($row['Status']=='Available')
	{ ?>
	   	
<a href="register_drug.php?med_id =<?php echo $row['med_id']?> & Status='not_Available' " style="color:white;background:blue;position:relative;padding:11px;padding-right:28px;" > Available</a>
 
  <?php 
    
  }else{ ?> 
<a href="register_drug.php?med_id =<?php echo $row['med_id']?>  & Status=1 "  style="color:white;background:red;position:relative;padding:12px;" > Diactivate</a>    
	<?php 
	} */
	?>
</div>
			  </div>
			  <?php
$count=1;

if(isset($_POST['search'])){
	?><div style="overflow-x:scroll;width:100%;"><?php
	$Drug_name=$_POST['search'];
	
	$conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn," SELECT * FROM register_drug where Drug_name='$Drug_name' OR Comapany_name='$Drug_name' ")or die(mysqli_error());		 
		 echo "<table  border='1' id='myTable' cellpadding='2' align='center'> ";
		 echo "<tr><th>Photo</th><th>Drug_name </th><th>Comapany_name </th><th>Product_date </th><th>Expire_date </th><th>Price </th><th>Type </th><th>Number of drug </th><th>Availability </th><th>Update </th></tr>";
		while($row=mysqli_fetch_array($result)){  
		$count++;
		$qunt=$row['Number_drug'];
		$med_id2=$row['med_id'];
		$date=date_create(date('Y-m-d'));
        $ex=date_create($row['Expire_date']);
	if(($qunt >= 1) && ($date < $ex)){
		if($count%2){
		echo "<tr style='background:#0b72c226;' >";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		
		if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:10px;padding:7px;text-align:center;background:#1b9bff;">'.$row['Status'].'</td>';
		?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php
		
		}
		else{
			echo "<tr style='background:#0082e95e;'>";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		
		if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:10px;padding:7px;text-align:center;background:#1b9bff;">'.$row['Status'].'</td>';?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php 
		}
	}else{
$result4=mysqli_query($conn," UPDATE `register_drug` SET `Status` = 'Not_Available' WHERE `register_drug`.`med_id` = '$med_id2' ")or die(mysqli_error());		
if($count%2){
		echo "<tr style='background:#0b72c226;' >";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		
		if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:7px;text-align:center;background:#99a4ad;">'.$row['Status'].'</td>';
		?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php
		
		}
		else{
			echo "<tr style='background:#0082e95e;'>";
		echo '<td><img style="object-fit:contain;width:50px;height:50px;" src="' .$row['Image'].'"  /></td>';
        echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Product_date'].'</td>';
		echo '<td>'.$row['Expire_date'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';
		 
		 if($qunt <= 40){
			echo '<td style="background:#b54040;border-radius:10px;">'.$row['Number_drug'].'</td>';
		}else{
			echo '<td>'.$row['Number_drug'].'</td>';
		}
		 
		echo '<td style="display: -webkit-inline-box;min-width:120px;border-radius:10px;margin:16px;width:120px;color:white;padding:10px;padding:7px;text-align:center;background:#99a4ad;">'.$row['Status'].'</td>';?>
		
		<td> &nbsp;&nbsp;&nbsp;<a href="update_drug.php?med_id=<?php echo $row['med_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a> </td>
	
	
		<?php 
		}		
		
	}
		
		}
		}
echo "</table>";

?>
</div>
</body>
<footer>
<?php include('footer.php'); ?>
</footer>
<script id="rendered-js">
 


var $table = document.getElementById("myTable"),

$n = 5,
$rowCount = $table.rows.length,

$firstRow = $table.rows[0].firstElementChild.tagName,

$hasHead = ($firstRow === "TH"),
 
$tr = [],
 
$i,$ii,$j = ($hasHead)?1:0,
 
$th = ($hasHead?$table.rows[(0)].outerHTML:"");
 
var $pageCount = Math.ceil($rowCount / $n);
 
if ($pageCount > 1) {
	 
	for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
		$tr[$ii] = $table.rows[$i].outerHTML;
	 
	$table.insertAdjacentHTML("afterend","<div id='buttons'></div");
	 
	sort(1);
}

 
function sort($p) {
	 
	var $rows = $th,$s = (($n * $p)-$n);
	for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
		$rows += $tr[$i];
	
	 
	$table.innerHTML = $rows;
	 
	document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
 
	document.getElementById("id"+$p).setAttribute("class","active");
}


 
function pageButtons($pCount,$cur) {
	 
	var	$prevDis = ($cur == 1)?"disabled":"",
		$nextDis = ($cur == $pCount)?"disabled":"",
		 
		$buttons = "<input type='button' value='&lt;&lt; Prev' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
	for ($i=1; $i<=$pCount;$i++)
		$buttons += "<input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
	$buttons += "<input type='button' value='Next &gt;&gt;' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
	return $buttons;
}

</script>
</html>