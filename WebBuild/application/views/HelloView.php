<html>
<head><title>Controller, Model dan View</title>
    <link href = "<?php echo base_url(); ?>assets/css/Css_code.css" rel="stylesheet" type = "text/css">
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<header>
		<div class="header">
			<div class = "headerText">
				ADS SHOP
			</div>
			<div class = "headerMenu">
				<button class="btn">
					HOME
				</button>
				<button class="btn">
					PRODUCT
				</button>
				<button class="btn">
					CONTACT
				</button>
			</div>
		</div>
	</header>

	<slider class="slider">
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="assets/image/Slider1.jpg" style="width:100%; height:500px;" >
			</div>
			<div class="mySlides fade">
				<img src="assets/image/Slider2.jpg" style="width:100%; height:500px;">
			</div>
			<div class="mySlides fade">
				<img src="assets/image/Slider3.jpg" style="width:100%;  height:500px;">
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
			Nav
			<div class="Image_picture">
				<img src="assets/image/Detective.png" style=" width:100%; height:100%;">
			</div>
			<div class="Text_Image"> 
			Risky Perdana Adiperkasa<br>
			S1 Teknik Informatika<br>
			150535602155
			</div>
			<a href="#Menu1"><div class="Nav_menu">
				<br>Menu1
			</div></a>
			<a href="#Menu2"><div class="Nav_menu">
				<br>Menu2
			</div></a>
			<a href="#Menu3"><div class="Nav_menu">
				<br>Menu3
			</div></a>
			<a href="#Menu4"><div class="Nav_menu">
				<br>Menu4
			</div></a>
			<a href="#Menu5"><div class="Nav_menu">
				<br>Menu5
			</div></a>
		</div>
	</nav>

	<content>
		<div class="content">
			Content
		</div>
	</content>

	<footer>
		<div class="footer">
			Footer
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
</script>
</body>
</html>