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

<?php //$user=$_POST['ph_id'];
//session_start();
//$id=$_GET['edit'];

$id1=$_GET['Customer_id'];

?>
<?php 
  /* $conn=mysqli_connect("localhost","root","","drug"); 
   $sql3="select * from pharmacist_table where pharmacist_id='$user' ";
  $query=mysqli_query($conn,$sql3)or die(mysql_error());
$row=mysqli_fetch_array($query); */
        $Customer_id='';
        $First_name='';
$Middle_name='';
$Last_name='';
$Email='';
$UserName='';
$Password='';
$Phone='';
$Sex='';
$Age='';
$Date='';
$Time='';    
		$conn=mysqli_connect("localhost","root","","drug");
    if(isset($_GET['Customer_id'])){ 
       $id1=$_GET['Customer_id'];
	// $id=$_SESSION['pharmacist_id'];
	$sql21="select * from customer_table where Customer_id= '$id1' ";
	$result=mysqli_query($conn,$sql21);
	//if(isset($_SESSION['edit'])){
	if($result){
		$row=mysqli_fetch_array($result);
        $Customer_id=$row['Customer_id'];		
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

	//}
}
else{
	echo '<script> alert(" No Data exist ");</script>';
}
}
  ?>
<html>
<head>
<?php include('head_cust.php') ?>
 
<!--link rel="stylesheet" type="text/css" href="style/ms.css"-->
<link rel="stylesheet" href="style/stylef1.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
 
 </head>
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
<script>
function clr(){
document.getElementById("age").value="";
document.getElementById("sex").value="";
document.getElementById("phone").value="";
document.getElementById("upass").value="";
document.getElementById("uname").value="";
document.getElementById("ph_email").value="";
document.getElementById("Lname").value="";
document.getElementById("Mname").value="";
document.getElementById("Fname").value="";

}
</script>
 </style>
 <body style="background-color:#0082e640;"  >
  
   <div id="content_2" style="margin-right: 22%;margin-top:.5%;" >     
            <br>
              <br>			  
			<form action="" method="post" style="margin:2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div><label for="uname" style="font-weight: bold; font-size:22px;text-align:center; color: #000000;"> <span> Update  </span><span>  Form</span> </label></div>
			  <!--div><br> 
				<label class="signup" for="ph_id" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Customer Id:</label>
				<input type="text" readonly  id="email" name="ph_id" style="width:50%;height:30px;border-radius:5px;" value="<?php// echo $Customer_id; ?>"  required>
			  </div--><br>
			  <div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">First Name:</label>
			  <input type="text" id="Fname" name="Fname" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $First_name; ?>" required>
			  </div><br>
			  <div><label class="signup"  for="Mname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Middle Name:</label>
			  <input type="text" id="Mname" name="Mname" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Middle_name; ?>" required>
			  </div><br>
			  <div><label class="signup"  for="Lname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Last Name:</label>
			  <input type="text" id="Lname" name="Lname" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Last_name; ?>" required>
			  </div><br>
			  <div  > 
				<label class="signup" for="ph_email" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Email:</label>
				<input type="email"   id="ph_email" name="ph_email" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Email; ?>" required>
			  </div><br>
			  <div>
				<label class="signup" for="uname" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">User Name:</label>
				<input type="text"  id="uname"  name="uname" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $UserName; ?>" required>
			  </div><br>
			  <div  >
				<label class="signup" for="pwd" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Password:</label>
				<input type="text" id="upass"   name="upass" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo base64_decode($Password); ?>" required>
			  </div><br>
			  <div>
				<label class="signup" for="phone" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Phone:</label>
				<input type="number"  id="phone"  name="phone" style="width:50%;height:30px; border-radius:5px;" value="<?php  echo $Phone; ?>" required>
			  </div><br>
			  <div >
				<label class="signup" for="sex" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Sex:</label>
				<input type="text"  id="sex"  name="sex" style=" width:50%;height:30px; border-radius:5px;" value="<?php  echo $Sex; ?>" required>
			  </div><br>
			  <div >
				<label class="signup" for="age" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Age:</label>
				<input type="number" id="age"   name="age" style="width:50%;height:30px;border-radius:5px;" value="<?php  echo $Age; ?>" required>
			  </div><br>
			    <br>
			  <div >
				<label class="signup" for="date" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Date:</label>
				<input type="date"  id="date"  name="date" style=" width:50%;height:30px; border-radius:5px;" value="<?php  echo $Date; ?>" required>
			  </div><br>
			  <div >
				<label class="signup" for="time" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Time:</label>
				<input type="text" id="time"   name="time" style="width:50%;height:30px;border-radius:5px;" value="<?php  echo $Time; ?>" required>
			  </div><br>
			   
			   <br> 
			   <button  type="submit" name="Update"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">SAVE CHANGES</button>
               <input value="Clear" type="button" onclick="clr()"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:45px;color: #000000;padding:3px;  border-radius:5px;"/>		   
			  <br><br>
			    <br>
			  	
			</form><br>
            <div> 
             
            </div>    
		</div>
    </html>
	
	 

<?php  
   
if(isset($_POST['Update'])){
$First_name=$_POST['Fname'];
$Middle_name=$_POST['Mname'];
$Last_name=$_POST['Lname'];
$Email=$_POST['ph_email'];
$UserName=$_POST['uname'];
$Password=base64_encode($_POST['upass']);
$Phone=$_POST['phone'];
$Sex=$_POST['sex'];
$Age=$_POST['age'];
$Date=$_POST['date'];
$Time=$_POST['time'];
	 
 
//$Customer_id=$_POST['ph_id'];
echo $First_name.'<br>';
 echo $Middle_name.'<br>';
 echo $Last_name.'<br>';
 echo $Email.'<br>';
 echo $UserName.'<br>';
 echo $Password.'<br>';
 echo $Phone.'<br>';
 echo $Sex.'<br>';
 echo $Age.'<br>';
 echo $Date.'<br>';
 echo $Time;
  
   //$sql=" UPDATE customer_table SET  First_name = '$First_name', Middle_name = '$Middle_name',
 //Last_name = '$Last_name', Email = '$Email',UserName='$UserName',Password='$Password', Phone = '$Phone',Sex='$Sex', Age = '$Age',Date='$Date',Time='$Time' WHERE Customer_id ='$Customer_id' ";

  $sql=" UPDATE `customer_table` SET `First_name` = '$First_name', `Middle_name` = '$Middle_name', `Last_name` = '$Last_name', `Email` = '$Email', `Username` = '$UserName', `Password` = '$Password', `Phone` = '$Phone', `Sex` = '$Sex', `Age` = '$Age', `Date` = '$Date', `Time` = '$Time' WHERE `customer_table`.`Customer_id` = '$id1';";  
 
/* $sql=" UPDATE `customer_table` SET `First_name` = 'Mani2',`Middle_name` = 'Mani2',`Last_name` = 'Mani2', 
`Email` = 'Manvvw122@gmail.com', `Username` = 'Mani2', 
`Password` = 'Mani2', `Phone` = '56554', `Sex` = 'male',
`Age` = '55', `Date` = '2022-05-06', `Time` = '16:06:16.000000' 
WHERE `customer_table`.`Customer_id` = '$id1' "; */

$result=mysqli_query($conn,$sql);
//if($Customer_id!= ''){
	
if($result > 0){
	  
	echo '<script type="text/javascript"> alert (" Updated Successfully ")</script>';
 ?>
<script><?php  echo("location.href = '/Drug-I-S/profile.php'"); ?></script>

<?php exit();
}else
{
	echo '<script type="text/javascript"> alert (" Update Failed Try Again ")</script>';
	?><script><?php  echo("location.href = '/Drug-I-S/profile.php'"); ?></script><?php
}
//} 
}  
?>
<footer>
<?php include('footer.php'); ?>
</footer>
</body>
</html>



