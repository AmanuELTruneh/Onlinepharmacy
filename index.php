 
<html lang="en-US">
<head>
<?php include('header.php'); ?>
	<!--meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /-->
   
  <link rel="stylesheet" href="slideviewstyle.css">
</head>
<div class="span"  id="span">

<a href="login.php"><label style="background:#30a4ffd1;" class ="bk" ><i class="fa fa-user"></i>&nbsp;Login</label></a>
</div>
<style>
#span{
	 display:fixed;
 }
 .span{
	 
	    display: inline-block;
    position: relative;
    background-color:#1b9bff;
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
#img4 {
  max-inline-size: 100%;
  block-size: auto;
  aspect-ratio: 2/1;
  
  
  
  object-fit: contain;
  decoding="sync"
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
h2{
	font-size:20px;
}
</style>
<script>
var counter=1;
setInterval(function(){
	document.getElementById('radio'+counter).checked=true;
	counter++;
	if(counter>4){
		counter=1;
	}
},2500)
</script>
<body style="background:#0082e63d;" >
<section class="myclass">
 <!--image slide start -->
<div class="slider">
<div class="slides" >
<!-- dadio button start -->
<input type="radio" name="radio-btn" id="radio1">
<input type="radio" name="radio-btn" id="radio2">
<input type="radio" name="radio-btn" id="radio3">
<input type="radio" name="radio-btn" id="radio4">
<!-- radio button close -->
<!--image start -->
<div  class="slide first">
<img id="img4" src="img/med15.png" alt="">
</div>
<div class="slide">
<img id="img4" src="img/nutrition.jpg" alt="">
</div>
<div class="slide">
<img id="img4" src="img/medicines.png" alt="">
</div>
<div class="slide">
<img id="img4" src="img/med8.png" alt="">
</div>
 
<!--image close  -->
<!-- Automatic navigaiton start -->
<div class="navigation-auto">
<div class="auto-btn-1"></div>
<div class="auto-btn-2"></div>
<div class="auto-btn-3"></div>
<div class="auto-btn-4"></div>
</div>
<!-- Automatic navigaiton close -->
</div>
<!-- manual navigaiton start -->
<div class="navigaiton-manual">
<label for="radio1" class="manual-btn"></label>
<label for="radio2" class="manual-btn"></label>
<label for="radio3" class="manual-btn"></label>
<label for="radio4" class="manual-btn"></label>
</div>
<!-- manual navigation close -->
</div>
<!--image slider close -->
</section>

 <div>
        <h1 class="section-title">Most <span>salled</span></h1>
      </div>
<section id="contact">
    <div class="contact_container">
      
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med11.png" /></div>
          <div class="contact-info">
            <h1>Azista Spice Sip Refreshing Spice Tea</h1>
            <h2>Discription:Spice Sip - Natural Immunity Booster Wellness Tea for All Adults Kids..</h2>
             
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med13.png" /></div>
          <div class="contact-info">
            <h1>Dettol Antiseptic Liquid, 60 ml</h1>
            <h2>Discription:Dettol Antiseptic Liquid protects you and your family from.. </h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med14.png" /></div>
          <div class="contact-info">
            <h1>Regrowee 5% Gel</h1>
            <h2>Discription:Regrowee 5% Gel is generally safe and suitable for most people but may have potential side effects..</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<section id="contact">
    <div class="contact_container">
      
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med2.png" /></div>
          <div class="contact-info">
            <h1>Allegra 120mg Tablet(10s)</h1>
            <h2>Discription:ALLEGRA 120MG contains Fexofenadine which belongs to the class of medications..</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med8.png" /></div>
          <div class="contact-info">
            <h1>DrNATcURE 500 ml</h1>
            <h2>Discription:The DrNATcURE Apple Cider Vinegar consists of 100% naturally..</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med7.png" /></div>
          <div class="contact-info">
            <h1>Premence Plus Capsule (15s)</h1>
            <h2>Description: Premence Plus capsule is a nutritional supplement..</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section id="contact">
    <div class="contact_container">
      
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med10.png" /></div>
          <div class="contact-info">
            <h1>Ensure High Protein Nutrition Powd 400 gmer</h1>
            <h2>Description:Ensure High Protein Powder is a complete and balanced nutrition supplement designed for adults.. </h2>
             
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med1.png" /></div>
          <div class="contact-info">
            <h1>Amicline Tablet (10s)</h1>
            <h2>Description:used to treat worm infections like an intestinal worm and intestinal amaebiasis..</h2>
         
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img style="width:100px;height:100px;border-radius:25%" src="\Drug-I-S\img\med9.png" /></div>
          <div class="contact-info">
            <h1>Old Harbor Tea Bags - Mint Green Tea (25s)</h1>
            <h2>Description:Old Harbor Mint Green Tea is an earthy blend that.. </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<footer>
<?php include('footer.php'); ?>
</footer>
</html>