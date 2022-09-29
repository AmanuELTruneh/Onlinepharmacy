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
<?php include('head_cust1.php'); ?>
 <script src="function.js" type="text/javascript"></script>
</head>
<?php
/*$conn=mysqli_connect("localhost","root","","drug");
if(isset($_SESSION['add_to_cart'])){
	if(isset($_SESSION['cart'])){
		$session_array_id=array_column($_SESSION['car'],"med_id");
		if(!in_array($_GET['med_id'],$session_array_id)){
			 $session_array=array(
	  'med_id'=$_GET['med_id'],
	  "Drug_name"=$_POST['Drug_name'],
	  "Comapany_name"=$_POST['Comapany_name'],
	  "Description"=$_POST['Description'],
	  "Price"=$_POST['Price'],
	  "Type"=$_POST['Type']	  
	  );  
    $_SESSION['cart'][]=$session_array; 
		}
	}else{
	  $session_array=array(
	  'med_id'=$_GET['med_id'],
	  "Drug_name"=$_POST['Drug_name'],
	  "Comapany_name"=$_POST['Comapany_name'],
	  "Description"=$_POST['Description'],
	  "Price"=$_POST['Price'],
	  "Type"=$_POST['Type']	  
	  );  
    $_SESSION['cart'][]=$session_array;   	  
	}
}*/
?>

<div class="span"  id="span">

<a href="logout.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
<form method="post" action="order_drug.php">
<div style="border:2px solid #30a4ffd1;position:absolute; justify-content:center;">
<input type="submit" name="search" for="search" style="cursor:pointer;float:right;border:1px solid #30a4ffd1;font-weight: bold;font-size:20px;color:white;background:#30a4ffd1;height:30px;" value="&nbsp;Search"/>
<i style="justify-content:center;justify-items:center; font-size:20px;color:white;background:#30a4ffd1;height:30px;" class="fa fa-search"></i><input type="text" id="search" placeholder=''  name="search" style="border:1px solid #30a4ffd1;color:black; float:right;width:190px;height:30px; border-radius:5px;" />
</div>
</form>
</div>

<!--div style="display:inline-flex;;justify-content: space-between;">
<a style="background:#1b9bff;float:left;color:white;margin-top:10px;margin-left:2%;font-size:25px;position:relative;border-radius:3px;display: inline-flex;position: relative;padding:2px;" href="customer.php">Click Without Prescription Drugs</a>
<a style="background:#1b9bff;float:right;color:white;margin-top:10px;margin-left:2%;font-size:25px;position:relative;border-radius:3px;display: inline-flex;position: relative;padding:2px;" href="help_drug_prescription.php">Help Prescription Drugs</a>
</div-->
<style>
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
   
    padding-right: 20px;
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
.scroll1
		{
			 
           
			overflow: scroll;
			 
		}
</style>
 
<?php
$count=1;
if(isset($_POST['search'])){
	$Drug_name=$_POST['search'];
	?><div style="overflow-x:scroll;"><?php
	$conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn," SELECT * FROM register_drug where Drug_name='$Drug_name' OR Comapany_name='$Drug_name' ")or die(mysqli_error());		 
		 echo "<table style='overflow:scroll;'  border='1' id='myTable' cellpadding='2' align='center'> ";
		 echo "<tr><th>Image</th><th>Drug_name </th><th>Comapany_name </th><th>Description </th><th>Price </th><th>Type </th><th>Buy </th></tr>";
		
		while($row=mysqli_fetch_array($result)){  
		$count++;
		if($count%2){?>
		 
			 <!--form method="post" action="order_drug.php?med_id=<?//= $row['med_id'] ?>"-->
	<?php	echo "<tr style='background:#0b72c226;' >";
		//echo '<td><img style="width:150px;height:150px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>';
    echo '<td><img style="object-fit:contain;width:150px;height:150px;" src="' .$row['Image'].'"  /></td>';   
	   echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td style="max-width:350px;font-size:19px;">'.$row['Description'].'</td>';		
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';?> 
		<!--td><input type="submit" id="add_to_cart" name="add_to_cart" value="Add to cart"/></td-->
<td>&nbsp;&nbsp;&nbsp;<a href="order_page_prescription.php?med_id=<?php echo $row['med_id']?>" name="add_to_cart" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1b9bff; padding:10px;padding-left:29px;text-align:center;" >Add to cart&nbsp; <i style="font-size:20px;" class="fa fa-shopping-cart"></i></a></td>			
		 
	<?php	}
		else{ ?>
		
			 <!--form method="post" action="order_drugphp?med_id=<?// $row['med_id'] ?>"-->
		 <?php	echo "<tr style='background:#0082e95e;'>";
		//echo '<td><img style="width:150px;height:150px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>';	
    echo '<td><img style="object-fit:contain;width:150px;height:150px;" src="' .$row['Image'].'"  /></td>';   
	   echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td style="max-width:350px;font-size:19px;">'.$row['Description'].'</td>';		
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';?>
		<td>&nbsp;&nbsp;&nbsp;<a href="order_page_prescription.php?med_id=<?php echo $row['med_id']?>" name="add_to_cart" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1b9bff; padding:10px;padding-left:29px;text-align:center;" >Add to cart&nbsp; <i style="font-size:20px;" class="fa fa-shopping-cart"></i></a></td>		
		<!--td><input type="submit" id="add_to_cart" name="add_to_cart" value="Add to cart"/></td-->
		 
		
    <?php }	 	
		  }
		
echo "</table>";
}?>
</div>
 <script src="pagination.js" type="text/javascript"></script>
 
<div style="overflow-x:scroll;">
<?php    
if(!isset($_POST['search'])){
	
         $count=1;
		 //include_once('connect_db.php');
		 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn," SELECT * FROM register_drug where Prescription='yes' ")or die(mysqli_error());
		 echo "<table style='overflow:scroll;'  border='1' id='myTable' cellpadding='2' align='center'> ";
		 echo "<tr><th>Image</th><th>Drug_name </th><th>Comapany_name </th><th>Description </th><th>Price </th><th>Type </th><th>Buy </th></tr>";
		
		while($row=mysqli_fetch_array($result)){  
		$count++;
		if($count%2){?>
		 
			 <!--form method="post" action="order_drug.php?med_id=<?//= $row['med_id'] ?>"-->
	<?php	echo "<tr style='background:#0b72c226;' >";
		//echo '<td><img style="width:150px;height:150px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>';
    echo '<td><img style="object-fit:contain;width:150px;height:150px;" src="' .$row['Image'].'"  /></td>';   
	   echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td style="max-width:350px;font-size:19px;">'.$row['Description'].'</td>';		
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';?> 
		<!--td><input type="submit" id="add_to_cart" name="add_to_cart" value="Add to cart"/></td-->
<td>&nbsp;&nbsp;&nbsp;<a href="order_page_prescription.php?med_id=<?php echo $row['med_id']?>" name="add_to_cart" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1b9bff; padding:10px;padding-left:29px;text-align:center;" >Add to cart&nbsp; <i style="font-size:20px;" class="fa fa-shopping-cart"></i></a></td>			
		 
	<?php	}
		else{ ?>
		
			 <!--form method="post" action="order_drugphp?med_id=<?// $row['med_id'] ?>"-->
		 <?php	echo "<tr style='background:#0082e95e;'>";
		//echo '<td><img style="width:150px;height:150px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>';	
        echo '<td><img style="object-fit:contain;width:150px;height:150px;" src="' .$row['Image'].'"  /></td>';
		echo '<td>'.$row['Drug_name'].'</td>';		
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td style="max-width:350px;font-size:19px;">'.$row['Description'].'</td>';		
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['Type'].'</td>';?>
		<td>&nbsp;&nbsp;&nbsp;<a href="order_page_prescription.php?med_id=<?php echo $row['med_id']?>" name="add_to_cart" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1b9bff; padding:10px;padding-left:29px;text-align:center;" >Add to cart&nbsp; <i style="font-size:20px;" class="fa fa-shopping-cart"></i></a></td>	
		<!--td><input type="submit" id="add_to_cart" name="add_to_cart" value="Add to cart"/></td-->
		 
		
    <?php }	 	
		  }
		
echo "</table>";
}?>
</div>
<?php

/*$output="";
$output="";
 if(!empty($_SESSION['cart'])){
	 foreach($_SESSION['cart'] as $key = $value){
		  
		 echo '<td><img style="width:150px;height:150px;" src="data:image/png;base64,'.base64_encode($row['Image']).'"</td>';	
        echo '<td>'.$value['Drug_name'].'</td>';		
		echo '<td>'.$value['Comapany_name'].'</td>';
		echo '<td>'.$value['Description'].'</td>';		
		echo '<td>'.$value['Price'].'</td>';
		echo '<td>'.$value['Type'].'</td>';
		  
	 }
 }*/
?>
<footer style="margin-top:200px;">
<?php include('footer.php'); ?>
</footer>
<script id="rendered-js">
var $table = document.getElementById("myTable"),

$n = 3,
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
		 
		 








 
		 
 