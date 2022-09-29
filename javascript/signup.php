<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en-US">
<header>
<?php include('header.php'); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	 
</header>
 <style>
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
	<div   style="background: rgba(58, 186, 201, 0.66);"> 
		<div  > 
<!--            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 48%;opacity:1.0;"> <h1 style="text-align: center;color: black">Medicine Guide</h1>-->
			<div  "> 
				<div  "> 
					<!--img src="images/logo.png" alt="" /-->
				</div>
				<div  > 
					<ul  >
						 
					</ul>
				</div>
				
			</div>
		</div>
		 
	</div>
	  
		<div style="margin-right: 22%;margin-top:10%;" > 
    
<!--             <img src="img/drug-icon-2316244_640.png"  height="160" width="160">     <br>-->
             
            <br>
             
			<form   action=" " method="post" style="margin: 2%;background-color: rgba(80, 173, 150, 0.3);border: 1px #e3e8ef;border-radius: 5%; opacity:0.8;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div><label for="uname" style="font-weight: bold; font-size:22px;text-align:center; color: #000000;"> <span>Pharmacist Sign  </span><span>  Up Form</span> </label></div>
			  <div  ><br> 
				<label class="signup" for="ph_id" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Pharmacist Id:</label>
				<input type="text"   id="email" name="ph_id" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div><label class="signup"  for="Fname" style="font-weight:bold;font-size:20px;color:#000000;margin-bottom:2px;">Pharmacist Name:</label>
			  <input type="text" id="Fname" name="Fname" style="width:50%;height:30px; border-radius:5px;"required>
			  </div><br>
			  
			  <div  > 
				<label class="signup" for="ph_email" style="font-weight: bold;font-size:20px; color: #000000;margin-bottom:2px;">Email:</label>
				<input type="email"   id="email" name="ph_email" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div  >
				<label class="signup" for="uname" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">User Name:</label>
				<input type="text"    name="uname" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div  >
				<label class="signup" for="pwd" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Password:</label>
				<input type="password"    name="upass" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div>
				<label class="signup" for="phone" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Phone:</label>
				<input type="number"    name="phone" style="width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div >
				<label class="signup" for="sex" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">Sex:</label>
				<input type="text"    name="sex" style=" width:50%;height:30px; border-radius:5px;" required>
			  </div><br>
			  <div >
				<label class="signup" for="age" style="font-weight: bold;font-size:20px;color: #000000;margin-bottom:2px;">age:</label>
				<input type="number"    name="age" style="width:50%;height:30px;border-radius:5px;" required>
			  </div><br>
			    
			   
			   <br> 
			   <button  type="submit"  style="font-weight:bold;cursor:pointer;font-size:18px;color: #000000;padding:3px;  border-radius:5px;">Sign Up</button>
               <a href="signup.php"><input value="Clear" type="button"  style="font-weight:bold;cursor:pointer; font-size:18px;margin-left:45px;color: #000000;padding:3px;  border-radius:5px;"></input> </a>			   
			  <br><br>
			    <br>
			  			 
			 
			  <a href="login.php" style="font-weight:bold;decoration:underline; color: blue;font-size:20px;">Go back to login!</a>
			</form><br>
  
			
            <div  > 
             <!--img src="img/105569.png"  height="200" width="200"-->
            </div>    
		</div>
		<footer>
		<?php include('footer.php'); ?>
		
		</footer>
		
		