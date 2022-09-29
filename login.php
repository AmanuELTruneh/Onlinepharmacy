<?php include_once 'connect_db.php'; ?>

<?php 

     //if($row=mysqli_fetch_array($sql)){
		//$row=mysqli_fetch_array($sql);
 //	mysqli_fetch_array($conn,"SELECT * FROM admin_table WHERE Username='$username' AND Password='$password'")
     if(isset($_POST['Login'])){
	$username=$_POST['uname'];
	$password1=$_POST['upass'];
	  
	$password=base64_encode($password1);
	//$sql2="";
 $conn = mysqli_connect ("localhost","root","","drug");	
	$sql = mysqli_query($conn," SELECT Admin_id ,Username FROM admin_table WHERE Username ='$username' AND Password='$password' AND Status=1 ");
	$sql2 = mysqli_query($conn," SELECT pharmacist_id ,Username FROM pharmacist_table WHERE Username='$username' AND Password='$password' AND Status=1 ");
	$sql3 = mysqli_query($conn," SELECT manager_id ,Username FROM manager_table WHERE Username='$username' AND Password='$password' AND Status=1 ");
	$sql4 = mysqli_query($conn," SELECT Customer_id ,Username FROM customer_table WHERE Username='$username' AND Password='$password' AND Status=1 ");
	$sql5 = mysqli_query($conn," SELECT Cashier_id ,Username FROM cashier_table WHERE Username='$username' AND Password='$password' AND Status=1 ");
	$sql6 = mysqli_query($conn," SELECT St_cordinator_id ,Username FROM store_cordi_table WHERE Username='$username' AND Password='$password' AND Status=1 ");
		
		if(($row=mysqli_fetch_array($sql)) > 0)
		{	
session_start();
$_SESSION['Admin_id']=$row[0];	
$_SESSION['Username']=$row[1];
	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");	
 	exit();
		}else if(($row=mysqli_fetch_array($sql2)) > 0){
session_start();
$_SESSION['pharmacist_id']=$row[0];
$_SESSION['Username']=$row[1];
 	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/pharmacist.php");	
 exit();
		}else if(($row=mysqli_fetch_array($sql3)) > 0){ 
session_start();
$_SESSION['manager_id']=$row[0];
$_SESSION['Username']=$row[1];
		header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/manager.php");  
		exit();
		 }else if(($row=mysqli_fetch_array($sql4)) > 0){ 
session_start();
$_SESSION['Customer_id']=$row[0];
$_SESSION['Username']=$row[1];
		header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/customer.php");
exit();		
		 }else if(($row=mysqli_fetch_array($sql5)) > 0){ 
session_start();
$_SESSION['Cashier_id']=$row[0];
$_SESSION['Username']=$row[1];
		header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/cashier.php"); 
exit();		
		 }else if(($row=mysqli_fetch_array($sql6)) > 0){ 
session_start();
$_SESSION['St_cordinator_id']=$row[0];
$_SESSION['Username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/Store_Cordinator.php"); 
exit();
		 }	   
		 else{
echo '<script type="text/javascript"> alert (" INVALID LOGIN TRY AGAIN")</script>';			 
	 }}  
  
?>
 <script>
 function clr(){
document.getElementById("uname").value="";
document.getElementById("upass").value="";

}
</script>
<html lang="en-US">
<header>
<?php include('header.php'); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <!--link rel="stylesheet" href="style.css"--> 
  <link rel="stylesheet" href="style_dropdown.css">
  
  <title>Drug Inventory System</title>
   
</header>
<div class="span"  id="span">

<a href="login.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-user"></i>&nbsp;Login</label></a>
</div>
<body>
 <style>
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
 .alpha{
	 filter: alpha(opacity=60);
	 opacity:0.9;
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
	 
 }
    span {
	
	color:deepskyblue;
	
}
form{
	margin: 2%;
	background-color: rgba(80, 173, 150, 0.3);
	border: 1px #e3e8ef;
	border-radius: 5%; 
	
	
	text-align: center;
	margin-left: 35%;
	padding-top: 2%;
	padding-bottom: 2%;
	box-shadow: 5px 10px #989ba0;
	
}
.icon {
  background-color:white;
  float:left;
    border:1px solid #ff00ff;"
  <!--   background-size: 20px;
  padding-left: 25px;-->
} 
 
.cimg{
	margin-bottom:10px;
	margin-top:10px;
	color:#FFFF33;
	opacity:20;
	float:center;
	align-items:center;
	items-align:center;
	width:150px;
	height:150px;
	position:relative;
	display:inline-flex;
}
.usertype1{
	 border:3px groove deepskyblue;
	 position:relative;
	 border-box:box-sizing;  
	 border-radius:7px;
}
<div style="border: 1px solid #DDD;">
    <img src="icon.png"/>
    <input style="border: none;"/>
</div>
 </style>
 <!--    bottom         <img src="img/drug-icon-2316244_640.png"  height="160" width="160">     <br>-->
  <!--img src="img/105569.png"  height="200" width="200" action=" " -->
 	  
		<div style="margin-right: 22%;margin-top:.5%;" > 
     
            <br>             
			<form  method="post" style="">
			<div><label for="wlcm" style="font-weight: bold;margin-bottom:55px;font-size:25px;text-align:center;color:deepskyblue;">  Welcome </label></div>
			
			<div><img class="cimg" src="img/smile.png"   ></div>
			
			  <div><label for="uname" style="font-weight: bold;margin-bottom:55px;font-size:25px;text-align:center; "><span> Sign In to Your Account </span></label></div>
			  <div  ><br><br>
				<label for="uname" style="font-weight: bold;font-size:25px; color: #000000;" >Username:<i class="fa fa-user" aria-hidden="true"></i></label>
				<input   type="text" placeholder="username"  id="uname" name="uname" style="width:55%;height:30px;margin-left: 2%;border-radius:15px;" required> 
			  </div><br>
			  <div  >
				<label for="pwd" style="font-weight: bold;font-size:25px;color: #000000;" >Password:<i class="fa fa-key" aria-hidden="true"></i></label>
				<input placeholder="password" type="password" id="upass"   name="upass" style="width:55%;height:30px;margin-left: 2%;border-radius:15px;" required>
			  </div><br>  
			 
			   <!--h1 style="text-align:center;"  >Login As..</h1><br>
			    <div class="usertype" >
			   <label for="myradioid" class="radio" >
			   <input type="radio" name="myradiofield" id="myradioid" value="Admin"  class="radio__input">Admin </label>
			   <label for="myradioid2"  class="radio">
			   <input type="radio" name="myradiofield" id="myradioid2" value="Pharmacist" class="radio__input">Pharmacist</label>
			   <label for="myradioid3" class="radio">
			   <input type="radio" name="myradiofield" id="myradioid3" value="Manager" class="radio__input">Manager</label>
			   <label for="myradioid4" class="radio">
			   <input type="radio" name="myradiofield" id="myradioid4" value="Custemer" class="radio__input" checked>Custemer</label>
			   <label for="myradioid5" class="radio">
			   <input type="radio" name="myradiofield" id="myradioid5" value="Cashier" class="radio__input">Cashier</label>
			   <label for="myradioid6" class="radio">
			   <input type="radio" name="myradiofield" id="myradioid6" value="Store_Cordinator" class="radio__input">Store_Cordinator</label> 
			  </div-->
			   <br>
			   <input value="Login" name="Login"  type="submit"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:10px;"> 
               <input value="Clear" onclick="clr()" type="button"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:45px;color: #000000;padding:3px;  border-radius:10px;"/>	<br> 	   
			 
			 <!--br><label style="font-weight: bold;font-size:18px;color: #000000;"><a href="foregot_password">Foregot Password?</a></label--><br>
			  <br>
			  <label style="font-weight: bold;font-size:18px;color: #000000;">Don't have an account?</label>
			  <br>	
      		 
			  <a href="signup.php" style="font-weight:bold;decoration:underline; color: blue;font-size:20px;">Sign Up</a>
			</form>
 
</body>
<br>
		       
		</div>
		 <footer>
		<?php include('footer.php'); ?>
		
		</footer>
		</html>