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
  
<?php include_once 'connect_db.php'; ?>

<?php $conn=mysqli_connect("localhost","root","","drug"); 
  

$ld=mysqli_insert_id($conn);
$code=rand(101999,102999);
$userid=$code."-".$ld;

?>
 <?php  
if(isset($_POST['SignUp'])){
$Cusid="STRCOR-";
$strcordId=$Cusid.$userid;
$First_name=$_POST['Fname'];
$Middle_name=$_POST['Mname'];
$Last_name=$_POST['Lname'];
$Email=$_POST['St_cord_email'];
$UserName=$_POST['uname'];
$Password=base64_encode($_POST['upass']);
$Phone=$_POST['phone'];
$Sex=$_POST['sex'];
$Age=$_POST['age'];
//$Date=$_POST['date'];
//$Time=$_POST['time'];

     //$conn=mysqli_connect("localhost","root","","drug");
     $sql = mysqli_query($conn," SELECT Admin_id  FROM admin_table WHERE Username='$UserName' AND Password='$Password'")or die(mysql_error());
	 $sql2 = mysqli_query($conn," SELECT pharmacist_id  FROM pharmacist_table WHERE Username='$UserName' AND Password='$Password'")or die(mysql_error());
	 $sql3 = mysqli_query($conn," SELECT manager_id FROM manager_table WHERE Username='$UserName' AND Password='$Password'")or die(mysql_error());
	 $sql4 = mysqli_query($conn," SELECT Customer_id FROM customer_table WHERE Username='$UserName' AND Password='$Password'")or die('Could not Connect My Sql:' .mysql_error());
	 $sql5 = mysqli_query($conn," SELECT Cashier_id FROM cashier_table WHERE Username='$UserName' AND Password='$Password'")or die(mysql_error());
	 $sql6 = mysqli_query($conn," SELECT St_cordinator_id  FROM store_cordi_table WHERE Username='$UserName' AND Password='$Password'")or die(mysql_error());  
     $sql7 = mysqli_query($conn," SELECT * FROM user_table WHERE  ID='$strcordId' AND Email='$Email' ")or die(mysql_error());
    $sql8 = mysqli_query($conn," SELECT * FROM user_table WHERE Phone='$Phone' ")or die(mysql_error());	
 if(($row=mysqli_fetch_array($sql4)) > 0)
		{	
 
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql)) > 0)
		{	
 
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql2)) > 0)
		{	
 
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql3)) > 0)
		{	
 
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql5)) > 0)
		{	
 
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql6)) > 0)
		{	

echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql7)) > 0)
		{	
 
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql8)) > 0)
		{	
 
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}
		else{
			
	  $query=" INSERT INTO store_cordi_table (St_cordinator_id, First_name, Middle_name, Last_name, Email, Username, Password, Phone, Sex, Age, Date, Time) 
		VALUES ('$strcordId', '$First_name', '$Middle_name', '$Last_name', '$Email', '$UserName', '$Password', '$Phone', '$Sex', '$Age', NOW(), NOW())";	
   $query1= "INSERT INTO user_table (ID, Email, Username, Password, Phone) VALUES ('$strcordId', '$Email', '$UserName', '$Password', '$Phone')";	
	  // $run=mysqli_query($conn,"INSERT INTO customer_table (Customer_id, First_name, Middle_name, Last_name, Email, Username, Password, Phone, Sex, Age, Date, Time) VALUES ('$CustomerId', '$First_name', '$Middle_name', '$Last_name', '$Email', '$UserName', '$Password', '$Phone', '$Sex', '$Age', '$Date', '$Time')");
	    $run=mysqli_query($conn,$query);
		  $run=mysqli_query($conn,$query1);
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
document.getElementById("age").value="";
document.getElementById("sex").value="";
document.getElementById("phone").value="";
document.getElementById("upass").value="";
document.getElementById("uname").value="";
document.getElementById("St_cord_email").value="";
document.getElementById("Lname").value="";
document.getElementById("Mname").value="";
document.getElementById("Fname").value="";
}
</script>

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
<label class="mn" style="position:absolute;">&nbsp Manage Store Cordinator &nbsp;</label>
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

<ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">VIEW</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">ADD</a></li>  
              
        </ul>
		
	<div id="content_2" style="margin-right: 22%;margin-top:.5%;" > 
     
            <br>
              <br>
			 
			 
			<form   action=" " method="post" style="margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div><label for="formsingup" style="font-weight:bold; font-size:22px;text-align:center; color: #000000;"> <span>Store Cordinator Sign  </span><span>  Up Form</span> </label></div>
			   <br>
			 <div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">First Name:</label>
			  <input type="text" id="Fname" name="Fname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  <div><label class="signup"  for="Mname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Middle Name:</label>
			  <input type="text" id="Mname" name="Mname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  <div><label class="signup"  for="Lname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Last Name:</label>
			  <input type="text" id="Lname" name="Lname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  <div  > 
				<label class="signup" for="St_cord_email" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Email:</label>
				<input type="email"   id="St_cord_email" name="St_cord_email" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div  >
				<label class="signup" for="uname" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">User Name:</label>
				<input type="text" id="uname"   name="uname" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div  >
				<label class="signup" for="upass" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Password:</label>
				<input type="password"  id="upass"  name="upass" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div>
				<label class="signup" for="phone" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Phone:</label>
				<input type="number" id="phone"   name="phone" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div >
				<label class="signup" for="sex" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Sex:</label>
				<input type="text"  id="sex"  name="sex" style=" width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div >
				<label class="signup" for="age" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Age:</label>
				<input type="number" id="age"   name="age" style="width:50%;height:30px;border-radius:5px;" required>
			  </div><br>
			    
			   
			   <br> 
			   <button  type="submit" name="SignUp"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Sign Up</button>
               <input value="Clear" type="button" onclick="clr()"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:45px;color: #000000;padding:3px;  border-radius:5px;"/>		   
			  <br><br>
			    <br>
			  			 
			 
			  <a href="login.php" style="font-weight:bold;decoration:underline; color: blue;font-size:20px;">Go back to login!</a>
			</form><br>
  
			
            <div  > 
             <!--img src="img/105569.png"  height="200" width="200"-->
            </div>    
		</div>
		<section class="scroll1">
		<div id="content_1">
		<div class="t1" style="margin:3px;" >
<form method="post" action="ph_signup.php">
	<!--select style="font-size:15px;margin:3px;padding:6px;background-color:#0082e640;" name="no_table" >
<option>No of rows:</option>
<option>2</option>
<option>3</option>
<option>ALL</option>

</select>


<input style="background-color:#0082e640;" type="submit" value="click" -->
  
</form>
</div>
		<?php
		//@$no_table=$_POST['no_table'];
		$count=0;
		 //include_once('connect_db.php');
		 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn,"SELECT * FROM store_cordi_table")or die(mysqli_error());
		 echo "<table border='' cellpadding='5' align='center'> ";
		 echo "<tr><th>St_cordinator_id </th><th>First_name </th><th>Middle_name </th><th>Last_name </th><th>Email </th><th>Username  </th><th>Password  </th><th>Phone </th><th>Sex </th><th>Age </th><th>Date </th><th>Time</th><th>UPDATE</th><th>Status</th></tr>";
		
		while($row=mysqli_fetch_array($result)){
			
			$count++; 
			
			//switch($no_table){
				//case '2':
				// if($count < 3 ){
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
        echo '<td>'.$row['St_cordinator_id'].'</td>';		
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
	<td>&nbsp;&nbsp;&nbsp;<a href="update_strcordinator.php?St_cordinator_id=<?php echo $row['St_cordinator_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td>
	<td>
	<?php 
	if($row['Status']==1)
	{ ?>
	   	
<a href="status_str_cord.php?St_cordinator_id=<?php echo $row['St_cordinator_id']?> & Status=0 " style="color:white;background:blue;position:relative;padding:11px;padding-right:28px;" > Activate</a>
 
  <?php 
    
  }else{ ?> 
<a href="status_str_cord.php?St_cordinator_id=<?php echo $row['St_cordinator_id']?>  & Status=1 "  style="color:white;background:red;position:relative;padding:12px;" > Diactivate</a>    
	<?php 
	}
	?>
	</td>
		
	<?php 	}
		else{
			echo "<tr style='background:#0082e661'>";
        echo '<td>'.$row['St_cordinator_id'].'</td>';		
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
	<td>&nbsp;&nbsp;&nbsp;<a href="update_strcordinator.php?St_cordinator_id=<?php echo $row['St_cordinator_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td>
	<td>
	<?php 
	if($row['Status']==1)
	{ ?>
	   	
<a href="status_str_cord.php?St_cordinator_id=<?php echo $row['St_cordinator_id']?> & Status=0 " style="color:white;background:blue;position:relative;padding:11px;padding-right:28px;" > Activate</a>
 
  <?php 
    
  }else{ ?> 
<a href="status_str_cord.php?St_cordinator_id=<?php echo $row['St_cordinator_id']?>  & Status=1 "  style="color:white;background:red;position:relative;padding:12px;" > Diactivate</a>    
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
 //$conn=mysqli_connect("localhost","root","","drug");
//if(isset($_GET['pharmacist_id'])){
	//$id=$_GET['pharmacist_id'];
	//$_SESSION['pharmacist_id']=$id;
	/* $sql21="select * from pharmacist_table where pharmacist_id= $id ";
	$result=mysqli_query($conn,$sql21);
	if($result > 0){
		$row=mysqli_fetch_array($result);
		$First_name=$row['First_name'];
       $Middle_name=$row['Middle_name'];
       $Last_name=$row['Last_name'];
      $Email=$row['Email'];
      $UserName=$row['Username'];
      $Password=$row['Password'];
      $Phone=$row['Phone'];
       $Sex=$row['Sex'];
      $Age=$row['Age'];
       $Date=$row['Date'];
        $Time=$row['Time'];
echo '<script type="text/javascript"> alert ("  Inserted SUCCESSFULLY  ")</script>';
	} */  
//} 
?>


		 
		</div>
		
		</section>
		</body>
		<script>
 function ageValidation() 
{
     var x = document.getElementById("age").value;
     if (x > 18 && x < 200)
     {
            alert("enter age between 18 to 200")
			return false;
     }
	 return true;
}
 </script>
		<footer>
		<?php include('footer.php'); ?>
		
		</footer>
		</html>
		