 <html>
 <head>
 <!--link rel="stylesheet" href="style.css"-->
 <?php include('header.php'); ?>
 </head>
 <div class="span"  id="span">

<a href="login.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-user"></i>&nbsp;Login</label></a>
</div>

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
 #about{
	  display:block;
 }
 .about_img{
	 float:left;
	 width:25%;
	  
	  position:relative;
 }
.about_img img{
	
	 max-height:25%;
 }
 .col-right{
	 float:right;
	  
 }
 </style>
 <body>
 <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about_img">
          <!--img src="./img/medicines.png" alt="img" -->
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title"> <span>About</span></h1>
        
         
        <a href="#" class="cta">
		
		
		online pharmacies offer 
		with increased access, lower transaction and product costs,
		convenience and greater anonymity for consumers. 
		They offer accessibility to people with limited mobility and 
		people in remote areas.
		
		
		
		</a>
      </div>
    </div>
  </section>
  
   <!-- About Section -->
  
  <!-- End About Section -->
  </body>
  <section>
  <footer>
   <?php include('footer.php'); ?>
  </footer>
  </section>
  </html>
  </html>