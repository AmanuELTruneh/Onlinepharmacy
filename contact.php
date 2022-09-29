<html>
<header>
<?php include('header.php'); ?>
<div class="span"  id="span">

<a href="login.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-user"></i>&nbsp;Login</label></a>
</div>

</header>
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
#contact{
	
	text-align:center;
	width:100%;
	margin-bottom:100px;
	 
	  
}
.contact_container{
	display:block;
	position:relative;
	display:inline;
	
}
</style>
<section id="contact">
    <div class="contact_container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="./img/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+251 234 123 1234</h2>
            <h2>+251 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="./img/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@gmail.com</h2>
            <h2>abcd@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="./img/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Ethiopia, Debre Markos, DMU</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
  <?php include('footer.php'); ?>
  </footer>