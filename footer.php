<!doctype html>
<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<style>
*{
	  margin:0;
	padding:0;  
	
}
html, body{
	 height:100%;  
	font-family:montserrat;
}

#myfooter .socialicon{
	display: inline-block;
	 margin-bottom: 0px; 
	 background-color:#0082e6;
	 width:100%;
	 
}
#myfooter .socialitem img{
	height:70px;
	 width:70px;
	padding: 0 2px;
	 
}
 #myfooter .socialitem img {
	filter: grayscale(0);
	transition: 0.3s ease filter;
	 
}
 #myfooter .socialitem:hover img {
	filter: grayscale(0);
	 background:#0082e6; 
	 
}
 #thisfooter{
	background:#0082e6;
	 min-height: 200px;
	padding-top: 50px; 
	 flex-direction: column;  
} 

#mycontainer{
	
}
#mymain{
	 overflow:auto; 
	padding-bottom:100px;
	/*background-color:red;*/
	/*height:2000px;*/
}
#myfooter{
	 float:bottom;
	background-color:#0082e6;
	color:white;
	position:relative;
	height:100px;
	margin-top:-100px;
	clear:both;
	text-align:center;	  
	 font-size:20px;
}
p{
	display:none;
	border:1px solid #000;
	height:30px;
	width:100px;
	margin-left:10px;
}
 
 #myfooter .socialitem:hover img  + p{
	display:block;
	 
	 
}
</style>
<body>
<div id="mycontainer"> 
<div id="mymain">
 
</div>
 
</div>
<footer id="myfooter">
<div><br>
 <h2>Online pharmacy</h2>
   <br> 
</div>
<div class="socialicon">
 <label for="facebook"  class="socialitem">
 <a href="#" ><img   src="./img/facebook-new.png" alt="facebook" title="facebook" /></a> 
 </label>
  <label for="instagram" class="socialitem">
     <a href="#"><img src="./img/instagram-new.png" alt="instagram" title="instagram" /></a> 
     </label>
      <label for="twitter" class="socialitem">
     <a href="#"><img src="./img/youtube.png" alt="youtube" title="youtube" /></a> 
        </label>
  <label for="behance" class="socialitem">
          <a href="#"><img src="./img/behance.png" alt="behance" title="behance" /></a> 
        </label><br>
		 
		</div>
		
</footer>
</body>
</html>
 