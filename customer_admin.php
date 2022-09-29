<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&(isset($_SESSION['Admin_id']))){
$id=$_SESSION['Admin_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
  <html lang="en-US" style="overflow-x:hidden;">
<head>
<?php include('header.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	 
	 
	  
<script src="function.js" type="text/javascript"></script>
	 <title>Drug Inventory System</title>
<div class="span" >
<div class="dropdown">
<a class="dropbtn">&nbsp;Menu &nbsp;<i style="color:white;" class="fa-solid fa-circle-chevron-down"></i></a>
<div class="dropdown-content">
<a href="pharmacist_signup.php"><i class="fa fa-prescription-bottle-alt"></i>&nbsp;Pharmacist</a>
<a href="admin_signup_signup.php">Admin</a>
<a href="manager_signup.php"><i class="fa fa-user-cog"></i>&nbsp;Manager</a>
<a href="cashier_signup_signup.php"><i class="fa fa-cash-register"></i>&nbsp;Cashier</a>
<a href="customer_admin.php">customer</a>
<a href="strco_signup_signup.php">St_cordinator</a>

<a href="logout_admin.php" style="background:crimson;"><i class="fa fa-power-off"></i>&nbsp;Logout</a>
</div>
</div>
<label class="mn" style="position:absolute;">&nbsp Manage Costomer &nbsp;</label>
<a href="backup.php"><label style="background:crimson;" class ="bk" >BACKUP</label></a>
</div>
<link rel="stylesheet" href="style_dropdown.css" media="all">
<link rel="stylesheet" href="stylef1.css" media="all" >
 
</head>
 <style>
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
 </style>
 <body style="background-color:#0082e640;"  >
 <div style="overflow:scroll;">
 <?php
		//@$no_table=$_POST['no_table'];
		$count=0;
		 //include_once('connect_db.php');
		 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn,"SELECT * FROM customer_table")or die(mysqli_error());
		 echo "<table border='' cellpadding='5' align='center'> ";
		 echo "<tr><th>Customer_id </th><th>First_name </th><th>Middle_name </th><th>Last_name </th><th>Email </th><th>Username  </th><th>Password  </th><th>Phone </th><th>Sex </th><th>Age </th><th>Date </th><th>Time</th><th>Status</th></tr>";
		
		while($row=mysqli_fetch_array($result)){
			
			$count++; 
			
			//switch($no_table){
				//case '2':
				// if($count < 3 ){
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
        echo '<td>'.$row['Customer_id'].'</td>';		
		echo '<td>'.$row['First_name'].'</td>';
		echo '<td>'.$row['Middle_name'].'</td>';
		echo '<td>'.$row['Last_name'].'</td>';
		echo '<td>'.$row['Email'].'</td>';
		echo '<td>'.$row['Username'].'</td>';
		
		echo '<td>'.$row['Password'].'</td>';
		
		echo '<td>'.$row['Phone'].'</td>';
		echo '<td>'.$row['Sex'].'</td>';
		echo '<td>'.$row['Age'].'</td>';
		echo '<td>'.$row['Date'].'</td>';
		echo '<td>'.$row['Time'].'</td>';
		
		?>
	 <td>
	<?php 
	if($row['Status']==1)
	{ ?>
	   	
<a href="status_customer.php?Customer_id=<?php echo $row['Customer_id']?> & Status=0 " style="color:white;background:blue;position:relative;padding:11px;padding-right:28px;" > Activate</a>
 
  <?php 
    
  }else{ ?> 
<a href="status_customer.php?Customer_id=<?php echo $row['Customer_id']?>  & Status=1 "  style="color:white;background:red;position:relative;padding:12px;" > Diactivate</a>    
	<?php 
	}
	?>
	</td>
		
	<?php 	}
		else{
			echo "<tr style='background:#0082e661'>";
        echo '<td>'.$row['Customer_id'].'</td>';		
		echo '<td>'.$row['First_name'].'</td>';
		echo '<td>'.$row['Middle_name'].'</td>';
		echo '<td>'.$row['Last_name'].'</td>';
		echo '<td>'.$row['Email'].'</td>';
		echo '<td>'.$row['Username'].'</td>';
		
		echo '<td>'.$row['Password'].'</td>';
		
		echo '<td>'.$row['Phone'].'</td>';
		echo '<td>'.$row['Sex'].'</td>';
		echo '<td>'.$row['Age'].'</td>';
		echo '<td>'.$row['Date'].'</td>';
		echo '<td>'.$row['Time'].'</td>';
		
		?>
	 
	<td>
	<?php 
	if($row['Status']==1)
	{ ?>
	   	
<a href="status_customer.php?Customer_id=<?php echo $row['Customer_id']?> & Status=0 " style="color:white;background:blue;position:relative;padding:11px;padding-right:28px;" > Activate</a>
 
  <?php 
    
  }else{ ?> 
<a href="status_customer.php?Customer_id=<?php echo $row['Customer_id']?>  & Status=1 "  style="color:white;background:red;position:relative;padding:12px;" > Diactivate</a>    
	<?php 
	}
	?>
	</td>
		
	<?php 	}	 
			 
		?>
	
	</tr>	
	<!--td>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-trash fa-2x" style="color:red"></i></a></td--> 
	<?php	
		}
echo "</table>";
  
?> 
		 
		</div>
		
		</section>
		</body>
		<footer>
		<?php include('footer.php'); ?>
		
		</footer>
		</html>
		