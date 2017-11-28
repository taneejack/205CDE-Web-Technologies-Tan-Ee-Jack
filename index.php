<?php
	require('header.php');
?>
<style>
.parallax { 
    background-image: url("image/komtar.jpg");
    height: 100%; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax2 { 
    background-image: url("image/gurney.jpg");
    height: 100%; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.parallax3 { 
    background-image: url("image/queens.jpg");
    height: 100%; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#hotspot {
	background: white; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(white, gray); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(white, gray); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(white, gray); /* For Firefox 3.6 to 15 */
    background: linear-gradient(white, gray); /* Standard syntax */
}

* {box-sizing:border-box}

.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
  margin-top:1%;
  
}

.mySlides {
    display: none;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor:pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  margin-bottom:1%;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 100s;
  animation-name: fade;
  animation-duration: 100s;
}

@-webkit-keyframes fade {
  from {opacity: 2} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 2} 
  to {opacity: 1}
}
.centered{
	max-width: 800px;
    margin: auto auto;
    border: 3px solid black;
    padding: 1%;
	margin-top:35%;
	opacity:0.8;
	
}
.centered h1{
	text-align:center;
}

.centered h2{
	text-align:center;
}


</style>
<!-- Home page parallax style, still image at the background and when moving up or down the image will stay still-->	
	<div class="parallax">
	<div class="container">
<!-- Title of the website -->
			<div class="centered" style="background: linear-gradient(to right, gray , white);">
				<h1>Welcome To Travelsmart Vacation</h1>
				<h2>Your One Stop Travel Services</h2>
			</div>
			
		</div>

	</div>
	<div id="hotspot">
<!-- Gallery to showcase some of the photos -->		
		<h3 style="text-align:center;">Gallery</h3>
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="image/komtar.jpg" style="width:100%">
				<div class="text">Komtar</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="image/gurney.jpg" style="width:100%">
				<div class="text">Gurney</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="image/sq.jpg" style="width:100%">
				<div class="text">Strait Quay</div>
			</div>
<!--Using javascript to make the gallery next and previous function -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
<!-- The small dot aligned right at the bottom part of the gallery to allow user to select which photo they want to see instead of using previous and next button -->
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>
<!-- Javascript for the gallery above -->	
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
<!-- Youtube video -->	
	<div class="parallax2">
	<iframe width="1200" height="700" style="margin-top:7%; margin-left:18.5%;" src="https://www.youtube.com/embed/sCvw_cghTKA" frameborder="0" allowfullscreen></iframe>
	</div>
	<div id="services">
<!-- List of services using html -->		
		<div style="height:320px;background-color:white;font-size:36px">
			<div class="services">
				<h2 style="text-align:center;">Our Services</h2>
					

					<div class="service1" style="background-color: lightgrey; width: 350px; height:250px; border: 5px solid gray; padding: 10px; margin-left:18.5%; margin-right:0%; float:left;">
						<h3 style="text-align:center;">Penang Tour Package</h2>
						<h4 style="text-align:center;">Let the local help you to arrange your memorable holiday here, include hotel booking, tour arrangement, meals, and etc.</h4>
					</div>
					
					<div class="service2" style="background-color: lightgrey; width: 350px; height:250px; border: 5px solid gray; padding: 10px; margin-left:4%; margin-right:0%; float:left;">
						<h3 style="text-align:center;">Penang Day Tour</h2>
						<h4 style="text-align:center;">Want a relax day tour or half day tour around Penang Island. You can join us at Penang heritage tour, Penang round island tour, Penang nature tour, Penang culinary tour, durian tour and many more.</h4>
					</div>
					
					<div class="service3" style="background-color: lightgrey; width: 350px; height:250px; border: 5px solid gray; padding: 10px; margin-left:4%; margin-right:0%; float:left;">
						<h3 style="text-align:center;">Penang Airport Transfer</h2>
						<h4 style="text-align:center;">We are providing point to point transfer services, either departing from Penang airport or any points in Penang island. We will definitely your first choice of transfer service.</h4>
					</div>
				
				

			</div>
		</div>		
			
			
	</div>
<?php
	require('footer.php');
?>