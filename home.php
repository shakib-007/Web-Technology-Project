 
<html>
<head>
<title></title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
 

</head>
<body>
 
<?php include('function.php'); ?>

<?php include('top.php'); ?>
 
          <?php include('slider.php'); ?>
             
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4>Our Vision</h4>
			           <p>  we are highly committed to given our best service to our customer </p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4>Our Mission</h4>
			 <p>   make people happiness </p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4> about us</h4>
			 <p> THis is Najmul Uddin and Md shakibur Rahman are always with you, For any query contact us</p>
		 </div>
	 </div>
</div>
 
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>		 
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
		 
		 
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t1.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t2.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t3.jpg" class="img-responsive" alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t5.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t6.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t7.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t8.jpg" class="img-responsive" alt=""/></a>
							 
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  

 

<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <br>
		  <h4 style="color:#000">Plan Your Trip</h4>
		  <br>
		  <h5 style="color:#000">Our travel experts can help you book now</h5>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F"></h4>
						<p style="color:#000"><br/>
                        </p>
                        <br/>
                      </div>
				  <div class="col-md-8 contact">
                  
                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Thank You for contact us');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters   "></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers "></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	       



<?php include('bottom.php'); ?>
</body>
</html>

