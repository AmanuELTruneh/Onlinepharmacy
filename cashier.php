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
<html lang="en-US" style="overflow-x:hidden;">
<style>
.no1{
	position: absolute;
	display:inline;
	margin-top:3px;
	border-radius:20px;
	border:2px groove white;
	cursor:pointer;
	color:white;
	margin-left:10px;
	width:117px;
	background:#1b9bff;
}
.search_class{
 
    position: relative;
justify-content:center;

}
#span{
	 display:fixed;
 }
 .span{
	 margin-bottom: 35px;
	    display: inline-block;
    position: relative;
    background-color:#1b9bff;
    font-size: 1.2rem;
    color: white;
    padding: 5px;
    justify-content: center;
    align-items: center;
   
    padding-right: 20px;
    padding-bottom: 5px;
    letter-spacing: 2px;
    width: 100%;
    height: 40px;
}
.ulclass{
	display:inline-flex;
}
.dropdown-content {
    display: block;
    position: relative;
    background-color: #1b9bff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
    z-index: 1;
    max-width: fit-content;
    border-radius: 1px;
	overflow-y: scroll;
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
    
    padding-right: 10px;
    padding-bottom: 2%;
    letter-spacing: 2px;
    width: 100%;
    height: 40px;
}
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
<header>
<?php include('head_cashi.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="style_dropdown_not_hove.css" media="all">	 
<script src="pagination.js" type="text/javascript"></script>
<!--a href="logout.php"  ><label class="login" id="login1" style="background-color:#1b9bff;border-radius:10px;cursor:pointer;a:hover:blink;" for="login" >&nbsp;Logout</label> </a--> 	 
<title>Drug Inventory System</title>
 
<?php 
$mcount=0;
$conn=mysqli_connect("localhost","root","","drug");
//$query1=" select count(med_id) from customer_order where Action='pending' "; 
$query1=" select * from customer_order where Action='Finished'  ";
$result=mysqli_query($conn,$query1);
if($result){
	//$row=mysqli_fetch_array($result);
	 $row=mysqli_num_rows($result);
	//$row = mysqli_fetch_assoc($result);
	 
	//$count_ord=$row['count_ord'];
	//$mcount= implode(" ",$row);
	//$count1=$count_ord;
	//$mcount= implode (null,$row);
	$mcount=$row;
}
else{
echo '<script> alert(" Not Count Data ");</script>';	
}

?>

 
<div class="span"  id="span">
<form method="post"><input style="cursor:pointer;" type='submit' class="no1" for="count_ord" id="count_ord"  name="count_ord" value="<?php echo $mcount."  Unseen" ?>" readonly/></form>
<a href="logout_cash.php"><label style="background:#30a4ffd1;margin-left:14%;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout&nbsp;</label></a>
<form method="post" action="pharmacist.php">
<div class="search_class">
<input type="submit" name="search" for="search" style="cursor:pointer;float:right;border:1px solid #30a4ffd1;font-weight: bold;font-size:20px;color:white;background:#30a4ffd1;height:30px;" value="&nbsp;Search"/>
<input type="text" id="search" placeholder="invoice_no,drug(name) ,company"  name="search" style="border:1px solid #30a4ffd1;color:black; float:right;width:330px;height:30px; border-radius:5px;" />
</div>
</form>
 
</div>
</header>


<body>



<?php 
$count=0;
//if(isset($_POST['count_ord'])){
	//if(isset($_POST['count_ord'])){
		?><div style="overflow-x:scroll;"><?php
 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn,"SELECT * FROM customer_order where Action='Finished' OR Action='payed'  ")or die(mysqli_error());
		 echo "<table border='1' id='myTable' cellpadding='5' align='center'> ";
		 echo "<tr><th>Customer_id</th><th>med_id </th><th>Drug_name </th><th>Comapany_name </th><th>Price </th><th>quantity </th><th>Type </th><th>invoice_no </th><th>Date </th><th>Action </th></tr>";
		
		while($row=mysqli_fetch_array($result)){
			
			$count++; 
			  
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
        echo '<td>'.$row['Customer_id'].'</td>';		
		echo '<td>'.$row['med_id'].'</td>';
		echo '<td>'.$row['Drug_name'].'</td>';
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['quantity'].'</td>';
		
		echo '<td>'.$row['Type'].'</td>';
		
		echo '<td>'.$row['invoice_no'].'</td>';
		echo '<td>'.$row['Date'].'</td>';
		//echo '<td>'.$row['Action'].'</td>';		 
		
		?>
	<!--td>&nbsp;&nbsp;&nbsp;<a href="update_ph.php?pharmacist_id=<?php// echo $row['pharmacist_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td-->
	 <?php
	 if($row['Action'] == 'payed')
	 { 
	 ?>
<td>&nbsp;&nbsp;&nbsp;<a href="check_cashier.php?invoice_no=<?php echo $row['invoice_no']?> & med_id=<?php echo $row['med_id']?> & NO2=<?php echo $row['NO2']?> & Action='Finished' " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1125ff; padding:10px;padding-left:29px;text-align:center;" >Payed &nbsp; </a></td>	
	 <?php
	 }
	 else if($row['Action'] == 'Finished')
	 { 
	 ?>
<td>&nbsp;&nbsp;&nbsp;<a href="cashier_ordered_view.php?invoice_no=<?php echo $row['invoice_no']?> & med_id=<?php echo $row['med_id']?> & NO2=<?php echo $row['NO2']?> & Action='Payed' " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1b9bff; padding:10px;padding-left:29px;text-align:center;" >Wating &nbsp; </a></td>
		 <?php 
		 }
		 ?>
		
	<?php 	}
		else{
			echo "<tr style='background:#0082e600'>";        
        echo '<td>'.$row['Customer_id'].'</td>';		
		echo '<td>'.$row['med_id'].'</td>';
		echo '<td>'.$row['Drug_name'].'</td>';
		echo '<td>'.$row['Comapany_name'].'</td>';
		echo '<td>'.$row['Price'].'</td>';
		echo '<td>'.$row['quantity'].'</td>';
		
		echo '<td>'.$row['Type'].'</td>';
		
		echo '<td>'.$row['invoice_no'].'</td>';
		echo '<td>'.$row['Date'].'</td>';
		//echo '<td>'.$row['Action'].'</td>';	
		
		?>
	<!--td>&nbsp;&nbsp;&nbsp;<a href="update_ph.php?pharmacist_id=<?php// echo $row['pharmacist_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td-->
<?php
if($row['Action'] == 'payed')
	 { 
	 ?>
<td>&nbsp;&nbsp;&nbsp;<a href="check_cashier.php?invoice_no=<?php echo $row['invoice_no']?> & med_id=<?php echo $row['med_id']?> & NO2=<?php echo $row['NO2']?> & Action='Finished' " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1125ff; padding:10px;padding-left:29px;text-align:center;" >Payed &nbsp; </a></td>	
	 <?php
	 }
	 else if($row['Action'] == 'Finished')
	 { 
	 ?>
<td>&nbsp;&nbsp;&nbsp;<a href="cashier_ordered_view.php?invoice_no=<?php echo $row['invoice_no']?> & med_id=<?php echo $row['med_id']?> & NO2=<?php echo $row['NO2']?> & Action='Payed' " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1b9bff; padding:10px;padding-left:29px;text-align:center;" >Wating &nbsp; </a></td>
		 <?php 
		 }
		 ?>
	<?php 
	 }	 
	 }
	 ?></div><?php
	 
?>

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
<!--div class="dropdown-content" style="display:block;height:400px;">
<ul class="ulclass"> 
<!--li  style="font-size:20px;color:white;padding-left:10px;"> &nbsp;View Order</li--> 
<!--form method="post"><li></li><!--/form-->
<!--li><a href="mg_signup.php"><i class="fa fa-user-cog"></i>&nbsp;Manager</a></li>
<li><a href="cashier_signup.php"><i class="fa fa-cash-register"></i>&nbsp;Cashier</a></li>
<li><a href="cu_signup.php">customer</a></li>
<li><a href="strco_signup.php">St_cordinator</a></li>
<li><a href="logout.php" style="background:crimson;margin-top:10px;margin-left:7px;"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li-->
<!--/ul>
</div-->
</div>

<?php
?>

 
</body>


<footer>
<?php// include('footer.php'); ?>
</footer>
<?php// header('location:login.php');?>
</html>