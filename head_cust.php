<!DOCTYPE html>
<html lang="en">

<head style="overflow-x:hidden;">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style7.css">
  
  <title>Drug Inventory System</title>
</head>
<style>
 
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
#login1{
	float:right;
}

.search{
	font-size:1rem;
	outline:none;
	float:right;
	margin-right:5px;
	 
	display:flex;
	<!--justify-content:space-between;>
	border-radius:15px;
	 
	 
}
.s1{
	<!--white-space: nowrap;pre -->
	 
	 <!-- justify-content:space-between; --> 
}
</style>
<body>
  <!-- Header -->
  <section style="position:relative;background-color:#0082e6;"" id="header">
    <div class="header container" style="background-color:#0082e6;">
      <div class="nav-bar" style="background-color:#0082e6;">
        <div class="brand" style="background-color:#0082e6;">
          <a href="#hero">
            <h1>Online Pharmacy</h1>
          </a>
        </div>
        <div  class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul id="a1">
            
<li class="active" >
<i style="color:white;font-size:20px;" class="fa fa-home"></i>
<a href="index.php">Home</a></li>

<li><i style="color:white;font-size:20px;" class="fa fa-info-circle" aria-hidden="true"></i>
<a href="about.php">About</a></li>

<li><i style="color:white;font-size:20px;" class="fa fa-list-alt" aria-hidden="true"></i>
<a href="view_product.php">View Drugs</a></li>

<li><i style="color:white;font-size:20px;" class="fa fa-phone" aria-hidden="true"></i>
<a href="contact.php">Contact</a></li>

<li><i style="color:white;font-size:20px;" class="fa fa-question-circle" aria-hidden="true"></i>
<a href="FAQ.php">FAQ</a></li>

 <li><i style="color:white;font-size:20px;" class="fa fa-medkit" aria-hidden="true"></i>
<a href="order_drug_prescription.php">Presc Drugs</a></li>
 <li><i style="color:white;font-size:20px;" class="fa fa-question-circle" aria-hidden="true" ></i>
<a href="help_drug_prescription.php">ORDER DRUG</a></li>
<li><i style="color:white;font-size:20px;" class="fa fa-question-circle" aria-hidden="true" ></i>
<a href="Profile.php">Profile</a></li>
	<div class="login">
<!--a href="login.php"  ><label id="login1" style="background-color:#1b9bff;border-radius:10px;cursor:pointer;a:hover:blink;" for="login" > <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</label> </a>   
 &nbsp;<!--input  type="text" placeholder="Search" name="search" />
 <button type="submit"><i style="background-color:white;size:1rem;" class="fa fa-search"></i></button-->
  </div>
 
          </ul>
        </div>
      </div>
	<a href="customer.php">  <label style="    color: white;
    font-size: 18px;
    padding: 5px;
    display: inline-flex;
    background: #1b9bff;
    border-radius: 3px;font-weight:bold;
    justify-content: space-between;
    align-items: center;
    margin:22px;cursor:pointer;margin-bottom:75px;" >Shopping&nbsp;<i style="font-size:22px;" class="fa fa-shopping-cart"></i></label></a>
    </div>
  </section>
  <!-- End Header -->
<script src="./app.js"></script>
</body>
</html>