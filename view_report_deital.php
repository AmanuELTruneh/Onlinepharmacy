<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username']) && (isset($_SESSION['Cashier_id']) || isset($_SESSION['manager_id']) )){
$id=$_SESSION['Cashier_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
<?php

$conn=mysqli_connect("localhost","root","","drug");
$transaction_ref_no=$_GET['transaction_ref_no'];

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
<?php //include('head_cashi.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="style_dropdown_not_hove.css" media="all">	 
<script src="pagination.js" type="text/javascript"></script>
<!--a href="logout.php"  ><label class="login" id="login1" style="background-color:#1b9bff;border-radius:10px;cursor:pointer;a:hover:blink;" for="login" >&nbsp;Logout</label> </a--> 	 
<title>Drug Inventory System</title>
  
<!--div class="span"  id="span">

<a href="logout_cash.php"><label style="background:#30a4ffd1;margin-left:14%;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout&nbsp;</label></a> 
</div-->
</header>
 
 
<?php 
  
		 
 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn," SELECT * FROM view_report where transaction_ref_no='$transaction_ref_no'  ")or die(mysqli_error());
		 
		 $row=mysqli_fetch_array($result);
			 
         $Branch_code=$row['Branch_code'];		
		 $transaction_date=$row['transaction_date'];
		 $transaction_time=$row['transaction_time'];
		 $transaction_ref_no=$row['transaction_ref_no'];
		 $Reciver_name=$row['Reciver_name'];
		 $Account_number=$row['Account_number'];
		 $Account_holder=$row['Account_holder'];
		 $Deposited_amount=$row['Deposited_amount'];
		 $Deposited_by=$row['Deposited_by'];
		 		 
		
		?>
	<!--td>&nbsp;&nbsp;&nbsp;<a href="update_ph.php?pharmacist_id=<?php// echo $row['pharmacist_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td-->
	 
<!--td>&nbsp;&nbsp;&nbsp;<a href="print_report.php?print=<?php //echo $row['transaction_ref_no'] ?>  " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:crimson; padding:10px;padding-left:29px;text-align:center;" >Print &nbsp; </a></td></tr-->	
	  
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
 
 <body style="background-color:#0082e640;"  >
 
  
   <div id="print_content" style="margin-right: 22%;margin-top:.5%;" >     
            <br>
              <br>			  
			<form action="" method="post" style="margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div><label for="uname" style="font-weight: bold; font-size:22px;text-align:center; color: #000000;"> <span>REPORT  </span><span>  DEITAL</span> </label></div>
			  <div><br> 
				<label class="signup" for="ph_id" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Branch_code:</label>
				<input type="text" readonly  id="email" name="ph_id" style="min-width: fit-content;width:50%;height:30px;border-radius:5px;" value="<?php echo $Branch_code; ?>"  readonly>
			  </div><br>
			  <div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">transaction_date:</label>
			  <input type="text" id="Fname" name="Fname" style="min-width: fit-content;width:50%;height:30px; border-radius:5px;" value="<?php  echo $transaction_date; ?>" readonly>
			  </div><br>
			  <div><label class="signup"  for="Mname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">transaction_time:</label>
			  <input type="text" id="Mname" name="Mname" style="min-width: fit-content;width:50%;height:30px; border-radius:5px;" value="<?php  echo $transaction_time; ?>" readonly>
			  </div><br>
			  <div><label class="signup"  for="Lname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">transaction_ref_no:</label>
			  <input type="text" id="Lname" name="Lname" style="min-width: fit-content;width:50%;height:30px; border-radius:5px;" value="<?php  echo $transaction_ref_no; ?>" readonly>
			  </div><br>
			  <div  > 
				<label class="signup" for="ph_email" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Reciver_name:</label>
				<input type="email"   id="ph_email" name="ph_email" style="min-width: fit-content;width:50%;height:30px; border-radius:5px;" value="<?php  echo $Reciver_name; ?>" readonly>
			  </div><br>
			  <div  >
				<label class="signup" for="uname" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Account_number:</label>
				<input type="text"  id="uname"  name="uname" style="min-width: fit-content;width:50%;height:30px; border-radius:5px;" value="<?php  echo $Account_number; ?>" readonly>
			  </div><br>
			  <div  >
				<label class="signup" for="pwd" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Account_holder:</label>
				<input type="text" id="upass"   name="upass" style="min-width: fit-content;width:50%;height:30px; border-radius:5px;" value="<?php  echo $Account_holder; ?>" readonly>
			  </div><br>
			  <div>
				<label class="signup" for="phone" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Deposited_amount:</label>
				<input type="text"  id="phone"  name="phone" style="min-width: fit-content;width:50%;height:30px; border-radius:5px;" value="<?php  echo $Deposited_amount; ?>" readonly>
			  </div><br>
			  <div >
				<label class="signup" for="sex" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Deposited_by:</label>
				<input type="text"  id="sex"  name="sex" style="min-width: fit-content; width:50%;height:30px; border-radius:5px;" value="<?php  echo $Deposited_by; ?>" readonly>
			  </div><br>
			   <br>
			   
			   <br> 
			   <!--button  type="submit" name="print" onclick="key.c+key.ctrl" id="print" style="font-weight:bold;cursor:pointer;font-size:18px;color: crimson;padding:3px;  border-radius:5px;">Print</button-->
     <a href="javascript:Clickheretoprint()" style="text-decoration: none;background: aliceblue;font-weight:bold;cursor:pointer;font-size:18px;color: crimson;padding:3px;  border-radius:5px;" >Print</a>              	   
			  <br><br>
			    <br>
			  	
			</form><br>
            <div> 
             <!--img src="img/105569.png"  height="200" width="200"-->
            </div>    
		</div>
    </html>
 
 
 
 <script id="rendered-js">
  
var $table = document.getElementById("myTable"),

$n = 1,
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
 
</div>
 
</body>


<footer>
<?php// include('footer.php'); ?>
</footer>
 
</html>