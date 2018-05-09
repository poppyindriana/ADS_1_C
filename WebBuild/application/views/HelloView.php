<html>
<head><title>SISTEM INFORMASI PEMESANAN GAUN PENGANTIN</title>
    <link href = "<?php echo base_url(); ?>assets/css/Css_code.css" rel="stylesheet" type = "text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<header>
		<div class="header">
			<div class = "headerIcon">
				<img src="assets/image/logo.jpg" style="width:100%; height:100%;">
			</div>
			<div class = "headerMenu">
				<a href="#"><button class="btn">
					HOME
				</button></a>
				<button class="btn">
					PRODUCT
				</button>
				<button class="btn">
					CONTACT
				</button>
			</div>
		</div>
	</header>

	<slider class="slider" >
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="assets/image/Slider1.jpg" style="width:100%; height:100%;" >
			</div>
			<div class="mySlides fade">
				<img src="assets/image/Slider2.jpg" style="width:100%; height:100%;">
			</div>
			<div class="mySlides fade">
				<img src="assets/image/Slider3.jpg" style="width:100%;  height:100%;">
			</div>
			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			<!-- The dots/circles -->
			<div class = "dotPlace"style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		</div>
		<br>
		
		
	</slider>
	<nav>
		<div class="nav">
			<!-- textImage and imagePicture-->
			<div class="Image_picture" style="text-align: center">
				<img src="assets/image/login.png" >
			</div>
			<a href="index.php/auth/login" style= "text-decoration: none"><div class="Nav_btn" >
				<br>Log In
			</div></a>
			<a href="#Menu2" style= "text-decoration: none"><div class="Nav_btn" >
				<br>Sign Up
			</div></a>
		</div>
	</nav>

	<content>
		<div class="content">
			<div class = "contentText">
			READY PRODUCTS
			</div>
			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunA.jpg" >
			  </a>
			  <div class="desc">Gaun A <br> Rp 1.7xx.xxx</div>
			</div>

			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunB.jpg" >
			  </a>
			  <div class="desc">Gaun B <br> Rp 2.xxx.xxx</div>
			</div>

			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunC.jpg" >
			  </a>
			  <div class="desc">Gaun C <br> Rp 3.xxx.xxx</div>
			</div>

			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunD.jpg" >
			  </a>
			  <div class="desc">Gaun D <br> Rp 2.5xx.xxx</div>
			</div>

			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunE.jpg" >
			  </a>
			  <div class="desc">Gaun E <br> Rp 2.7xx.xxx</div>
			</div>

			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunF.jpg" >
			  </a>
			  <div class="desc">Gaun F <br> Rp 3.5xx.xxx</div>
			</div>


			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunG.jpg" >
			  </a>
			  <div class="desc">Gaun G <br> Rp 1.5xx.xxx</div>
			</div>

			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunH.jpg" >
			  </a>
			  <div class="desc">Gaun H <br> Rp 2.2xx.xxx</div>
			</div>

			<div class="gallery">
			  <a href="#">
			    <img src="assets/image/GaunI.jpg" >
			  </a>
			  <div class="desc">Gaun I <br> Rp 2.9xx.xxx</div>
			</div>
		</div>
	</content>

	<footer>
		<div class="footer">
			<br><br>
			<div class="footerText">
				SIGAP
			</div>
			<div class ="footerBox">
				<a href="#AboutUs" style="text-decoration: none; color:white;">ABOUT US</a><br><br>
				<a href="#Careers" style="text-decoration: none; color:white;">CAREERS</a><br><br>
				<a href="#ContactUs" style="text-decoration: none; color:white;">CONTACT US</a><br><br>
				<a href="#MediaCenter" style="text-decoration: none; color:white;">MEDIA CENTER</a>
			</div>
			<div class ="footerBox1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOLLOW US</a><br><br>
			</div>
			<div id="map">
				
			</div>
		</div>
	</footer>
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}

	function initMap() {
	var uluru = {lat: -7.9622455, lng: 112.6139245};
	var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 4,center: uluru});
	var marker = new google.maps.Marker({
	position: uluru,map: map});
	}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
</body>
</html>