<?php
session_start();
  include_once('connect_db.php');
if(isset($_SESSION['Username'])&(isset($_SESSION['Admin_id']))){
$id=$_SESSION['Admin_id'];
$user=$_SESSION['Username'];
}
else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}  
?>
  
<html lang="en-US">
<head>
<?php include('header.php'); ?>
<div class="span" >
<div class="dropdown">
<a class="dropbtn"><i class="fa fa-bars"></i>&nbsp;<label>Menu</label></a>
<div class="dropdown-content">
<a href="pharmacist_signup.php"><i class="fa fa-prescription-bottle-alt"></i>&nbsp;Pharmacist</a>
<a href="admin_signup_signup.php">Admin</a>
<a href="manager_signup.php"><i class="fa fa-user-cog"></i>&nbsp;Manager</a>
<a href="cashier_signup_signup.php"><i class="fa fa-cash-register"></i>&nbsp;Cashier</a>
<a href="customer_admin.php">customer</a>
<a href="strco_signup_signup.php">St_cordinator</a>
<!--a href="strco_signup.php"><i class="fa fa-database"></i>&nbsp;Local Data</a>
<a href="strco_signup.php"><i class="fa fa-server"></i>&nbsp;Global Data</a-->
<a href="logout_admin.php" style="background:crimson;"><i class="fa fa-power-off"></i>&nbsp;Logout</a>
</div>
</div>
<label class="mn">&nbsp Dashboard &nbsp;</label>
<a href="backup.php"><label style="background:crimson;" class ="bk" >BACKUP</label></a>
</div>
<link rel="stylesheet" href="style_dropdown.css" media="all">
 
</head>

<style>
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
.grid7{
	display:inline-block;
	width:100%;
	height:100%
	
	position:absolute;
	justify-content: center;
   float:right;
   position:relative;
}
.dashboard-module{
	  
	width: 3%;
    height: 3%;
    justify-content: center;
    display: inline-grid;
    float: right;
    position: relative;
    margin: 41px;
    margin-right: 75px;
    margin-bottom: 96px;
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
</style>

<body style="height:100%;">
 
 <!--a href="logout.php"  ><label class="login" id="logout1" style="background-color:#1b9bff;border-radius:10px;cursor:pointer;a:hover:blink;" for="Logout" >&nbsp;Logout</label> </a--> 

<!--ul>
			
			<li><a href="admin.php"><i class="fa fa-home"></i>&nbsp; Dashboard</a></li>
			<li><a href="admin_pharmacist.php"><i class="fa fa-prescription-bottle-alt"></i>&nbsp;&nbsp; Pharmacist</a></li>
			<li><a href="admin_manager.php"><i class="fa fa-user-cog"></i>&nbsp;Manager</a></li>
			<li><a href="admin_cashier.php"><i class="fa fa-cash-register"></i>&nbsp; Cashier</a></li>
			<li><a href="admin_localdata.php"><i class="fa fa-database"></i>&nbsp; Local Data</a></li>
			<li><a href="admin_globaldata.php"><i class="fa fa-server"></i>&nbsp; Global Data</a></li>
			<li><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp; Logout</a></li>
		</ul-->
		<div id="main">
    
 <!-- Dashboard icons -->
            <div class="grid7" style="margin-bottom:95px;margin-top:65px;"><center>
            	
			<a href="admin.php" class="dashboard-module">
                	<img src="images/admin_icon.png"  width="96" height="96" alt="edit" />
                	<span>Dashboard</span>
                </a>	
			<a href="admin_pharmacist.php" class="dashboard-module">
                	<img src="images/ph_icon.png"  width="96" height="96" alt="edit" />
                	<span>Pharmacist</span>
                </a>
                
                <a href="admin_manager.php" class="dashboard-module">
                	<img src="images/manager_icon.png"  width="96" height="96" alt="edit" />
                	<span>Manager</span>
                </a>
                  
                <a href="admin_cashier.php" class="dashboard-module">
                	<img src="images/cashier_icon.png" width="96" height="96" alt="edit" />
                	<span>Cashier</span>
                </a>
				<!--a href="admin_localdata.php" class="dashboard-module">
                	<img src="images/localdata_icon.png" width="96" height="96" alt="edit" />
                	<span>Local Data</span>
                </a>
				<a href="admin_globaldata.php" class="dashboard-module">
                	<img src="images/globaldata_icon.png" width="96" height="96" alt="edit" />
                	<span>Global Data</span-->
                </a>
				<a href="admin_globaldata.php" class="dashboard-module">
                	<img src="images/users.png" width="96" height="96" alt="edit" />
                	<span>Customer</span>
                </a>
				<a href="admin_globaldata.php" class="dashboard-module">
                	<img src="images/download.png" width="96" height="96" alt="edit" />
                	<span>St_cordinator</span>
                </a>
</center>				
			</div>
</div>
</body>
<footer>
<?php include('footer.php'); ?>
</footer>
</html>