<html style="overflow-x:hidden;">  
  <?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Username'])&&($_SESSION['pharmacist_id'])){
@$id=$_SESSION['pharmacist_id'];
$user=$_SESSION['Username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login.php");
exit();
}
?>
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
	width:100px;
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
 <head>
<?php include('head_ph.php'); ?>

<div class="span"  id="span">

<a href="logout_ph.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-sign-out"></i>&nbsp;Logout</label></a>
</div>
</head>
<div style="overflow-x:scroll;">
<?php 
$count=0;
//if(isset($_POST['count_ord'])){
	if((!isset($_POST['search']))&&(!isset($_POST['count_ord']))){
 $conn=mysqli_connect("localhost","root","","drug");
		 $result=mysqli_query($conn," SELECT * FROM customer_prescription where Proceed = 1  ")or die(mysqli_error());
		 echo "<table border='1' id='myTable' cellpadding='5' align='center'> ";
		 echo "<tr><th>prescription_image </th><th>Phone</th><th>Age </th><th>Customer_id </th><th>Spacify</th></tr>";
		
		while($row=mysqli_fetch_array($result)){
$image2= '<img  style="object-fit:contain;width:60px;height:60px;" src="' .$row['prec_Image1'].'"  />';
/* $image3= '<img  style="object-fit:contain;width:40px;height:40px;" src="' .$row['prec_Image2'].'"  />';
$image4= '<img  style="object-fit:contain;width:40px;height:40px;" src="' .$row['prec_Image3'].'"  />';
 */
			$count++; 
			  
				if($count%2){
				
		echo "<tr style='background:#0082e661'>";
		echo '<td style="font-size:22px;">'.$image2.'</td>';
        echo '<td>'.$row['Phone'].'</td>';		
		echo '<td>'.$row['Age'].'</td>';
		echo '<td>'.$row['Customer_id'].'</td>';
	
		

		//echo '<td>'.$row['Action'].'</td>';		 
		
		?>
	<!--td>&nbsp;&nbsp;&nbsp;<a href="update_ph.php?pharmacist_id=<?php// echo $row['pharmacist_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td-->
	
<td>&nbsp;&nbsp;&nbsp;<a href="view_prescriped_image_detail.php?NO=<?php echo $row['NO']?> & Proceed=0 " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1125ff; padding:10px;padding-left:29px;text-align:center;" >SHOW&nbsp; </a></td>	
	  
		
	<?php 	}
		else{
			echo "<tr style='background:#0082e600'>"; 
		echo '<td style="font-size:22px;">'.$image2.'</td>';	
       echo '<td>'.$row['Phone'].'</td>';		
		echo '<td>'.$row['Age'].'</td>';
		echo '<td>'.$row['Customer_id'].'</td>';
		
		//echo '<td>'.$row['Action'].'</td>';	
		
		?>
	<!--td>&nbsp;&nbsp;&nbsp;<a href="update_ph.php?pharmacist_id=<?php// echo $row['pharmacist_id']?>"  style="color:white;background:green;position:relative;padding:10px;padding-left:29px;text-align:center;" >EDIT</a></td-->
	 
<td>&nbsp;&nbsp;&nbsp;<a href="view_prescriped_image_detail.php?NO=<?php echo $row['NO']?> & Proceed=0 " name="Taken" type="submit"  style="display: -webkit-inline-box;min-width:120px;border-radius:10px;width:120px;color:white;background:#1125ff; padding:10px;padding-left:29px;text-align:center;" >SHOW&nbsp; </a></td>	
	 
	<?php 
	 }	 
	 }
	 }
?>
</div>
<footer>

</footer>