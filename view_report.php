<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&((isset($_SESSION['Cashier_id']))||(isset($_SESSION['manager_id'])))){
//$id=$_SESSION['Cashier_id'];
//$user=$_SESSION['Username'];
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
 </header>
<?php 
$mcount=0;
$conn=mysqli_connect("localhost","root","","drug");
//$query1=" select count(med_id) from customer_order where Action='pending' "; 
/* $query1=" select * from customer_order where Action='Finished'  ";
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
} */

?>

 
<div class="span"  id="span">

<a href="logout_cash.php"><label style="background:#30a4ffd1;margin-left:14%;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout&nbsp;</label></a>
<form method="post" action="pharmacist.php">
</form>
 
</div>
 

<div style="overflow-x:scroll;">
<?php 
$count=0;
//if(isset($_POST['count_ord'])){
	//if(isset($_POST['count_ord'])){
		
 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn," SELECT * FROM view_report ")or die(mysqli_error());
		 echo "<table border='1' id='myTable' cellpadding='3' align='center'> ";
		 echo "<tr><th>Branch_code</th><th>transaction_date </th><th>transaction_time </th><th>transaction_ref_no  </th><th>Reciver_name </th><th>Account_number </th><th>Account_holder </th><th>Deposited_amount </th><th>Deposited_by</th><th>status</th></tr>";
		
		while($row=mysqli_fetch_array($result)){
			
			$count++; 
			  
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
        echo '<td>'.$row['Branch_code'].'</td>';		
		echo '<td>'.$row['transaction_date'].'</td>';
		echo '<td>'.$row['transaction_time'].'</td>';
		echo '<td>'.$row['transaction_ref_no'].'</td>';
		echo '<td>'.$row['Reciver_name'].'</td>';
		echo '<td>'.$row['Account_number'].'</td>';
		
		echo '<td>'.$row['Account_holder'].'</td>';
		
		echo '<td>'.$row['Deposited_amount'].'</td>';
		echo '<td>'.$row['Deposited_by'].'</td>';
		//echo '<td>'.$row['Action'].'</td>';		 
		
		?>
	<!--td>&nbsp;&nbsp;&nbsp;<a href="update_ph.php?pharmacist_id=<?php// echo $row['pharmacist_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td-->
	 
<td>&nbsp;&nbsp;&nbsp;<a href="view_report_deital.php?transaction_ref_no=<?php echo $row['transaction_ref_no']?>  " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1125ff; padding:10px;padding-left:29px;text-align:center;" >Show &nbsp; </a></td></tr>	
	 
		
	<?php 	}
		else{
			echo "<tr style='background:#0082e600'>";        
        echo '<td>'.$row['Branch_code'].'</td>';		
		echo '<td>'.$row['transaction_date'].'</td>';
		echo '<td>'.$row['transaction_time'].'</td>';
		echo '<td>'.$row['transaction_ref_no'].'</td>';
		echo '<td>'.$row['Reciver_name'].'</td>';
		echo '<td>'.$row['Account_number'].'</td>';
		
		echo '<td>'.$row['Account_holder'].'</td>';
		
		echo '<td>'.$row['Deposited_amount'].'</td>';
		echo '<td>'.$row['Deposited_by'].'</td>';
		//echo '<td>'.$row['Action'].'</td>';	
		
		?>
	<!--td>&nbsp;&nbsp;&nbsp;<a href="update_ph.php?pharmacist_id=<?php// echo $row['pharmacist_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td-->
  
<td>&nbsp;&nbsp;&nbsp;<a href="view_report_deital.php?transaction_ref_no=<?php echo $row['transaction_ref_no']?> " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1125ff; padding:10px;padding-left:29px;text-align:center;" >Show &nbsp; </a></td></tr>	
		<?php
	}}
		?>
	  </div> 
	  
<footer>
<?php //include('footer.php'); ?>
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
 


 
 




<?php// header('location:login.php');?>
</html>