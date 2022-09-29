<?php include_once 'connect_db.php'; ?>

<?php $conn=mysqli_connect("localhost","root","","drug"); ?>
<?php 
//$tem=1;
//$temp=$Custid;
//$Custid++;
//$query11=mysqli_query($conn," SELECT max(id) FROM customer_table ")or die('Could not Connect My Sql:' .mysql_error());
//$run=mysqli_fetch_array($query11);
//$x=1;
//do{
//	$x++;
	
//}while($x <= 100);
  	
//}

$ld=mysqli_insert_id($conn);
$code=rand(1,99999);
$userid=$code."-".$ld;

?>
 <?php  
if(isset($_POST['SignUp'])){
$Cusid="CUS-";
$CustomerId=$Cusid.$userid;
$First_name=$_POST['Fname'];
$Middle_name=$_POST['Mname'];
$Last_name=$_POST['Lname'];
$Email=$_POST['cu_email'];
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
    $sql7 = mysqli_query($conn," SELECT * FROM user_table WHERE  ID='$CustomerId' AND Email='$Email' ")or die(mysql_error());
    $sql8 = mysqli_query($conn," SELECT * FROM user_table WHERE Phone='$Phone' ")or die(mysql_error());	
 if(($row=mysqli_fetch_array($sql4)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql2)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql3)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql5)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql6)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql7)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}else if(($row=mysqli_fetch_array($sql8)) > 0)
		{	
session_start();
echo '<script type="text/javascript"> alert (" Exit inserted data ")</script>';			
 	exit();
		}
		else{
			
	  $query=" INSERT INTO customer_table (Customer_id, First_name, Middle_name, Last_name, Email, Username, Password, Phone, Sex, Age, Date, Time,Status) 
		VALUES ('$CustomerId', '$First_name', '$Middle_name', '$Last_name', '$Email', '$UserName', '$Password', '$Phone', '$Sex', '$Age', NOW(), NOW(),1)";	
     $query1= "INSERT INTO user_table (ID, Email, Username, Password, Phone) VALUES ('$CustomerId', '$Email', '$UserName', '$Password', '$Phone')";		
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
document.getElementById("cu_email").value="";
document.getElementById("Lname").value="";
document.getElementById("Mname").value="";
document.getElementById("Fname").value="";
}
</script>

<html lang="en-US">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	 <div><?php include('header.php'); ?></div>
	 
<div class="span"  id="span">

<a href="login.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-user"></i>&nbsp;Login</label></a>
</div>

</head>
<script>
  
</script>
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
 </style>
<body style="background-color:white;"  >
 
		<div style="margin-right: 22%;margin-top:.5%;" > 
    
<!--             <img src="img/drug-icon-2316244_640.png"  height="160" width="160">     <br>-->
             
            <br>
             
			<form  method="post" style="margin: 2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			
			  <div><label for="formsingup" style="font-weight: bold; font-size:22px;text-align:center; color: #000000;"> <span>Customer Sign  </span><span>  Up Form</span> </label></div>
			  <!--div  ><br> 
				<label class="signup" for="cu_id" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Customer Id:</label>
				<input type="text"   id="cu_id" name="cu_id" style="width:50%;height:30px; border-radius:5px;" required>
			  </div--><br>
			  <div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">First_name:</label>
			  <input type="text" id="Fname" name="Fname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  <div><label class="signup"  for="Mname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Middle_name:</label>
			  <input type="text" id="Mname" name="Mname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  <div><label class="signup"  for="Lname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Last_name:</label>
			  <input type="text" id="Lname" name="Lname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  <div> 
				<label class="signup" for="cu_email" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Email:</label>
				<input type="email"   id="cu_email" name="cu_email" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div  >
				<label class="signup" for="uname" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">User Name:</label>
				<input type="text"   id="uname" name="uname" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div  >
				<label class="signup" for="upass" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Password:</label>
				<input type="password"  id="upass"  name="upass" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div>
				<label class="signup" for="phone" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Phone:</label>
				<input type="number"  id="phone"  name="phone" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div >
				<label class="signup" for="sex" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Sex:</label>
				
				<select id="sex" name="sex" style=" width:50%;height:30px; border-radius:5px;" required  >
    <option value="Female">Female</option>
    <option value="Male">Male</option>    
  </select>
				
			  </div><br>
			  <div >
				<label class="signup" for="age" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Age:</label>
				<input type="number" id="age"  name="age" style="width:50%;height:30px;border-radius:5px;" required>
			  </div><br>
			    <!--div >
				<label class="signup" for="date" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;" required>Date:</label>
				<input type="date"    name="date" style="width:50%;height:30px;border-radius:5px;">
			  </div><br>
			    <div >
				<label class="signup" for="time" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;" required>Time:</label>
				<input type="time"    name="time" style="width:50%;height:30px;border-radius:5px;">
			  </div>
			   
			   <br--> 
			   <button  type="submit" value="SignUp" onclick="display()" name="SignUp" style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Sign Up</button>
               <input value="Clear" onclick="clr()" type="button"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:45px;color: #000000;padding:3px;  border-radius:5px;"/>			   
			  <br><br>
			    <br>
			  			 
			 
			  <a href="login.php" style="font-weight:bold;decoration:underline; color: blue;font-size:20px;">Go back to login!</a>
			</form><br>
  
			
            <div  > 
             <!--img src="img/105569.png"  height="200" width="200"-->
            </div>    
		</div>
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
		
		