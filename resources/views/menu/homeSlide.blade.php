<body>
	<div style='margin-left:220px;padding: 5px;'>
		<div class="slideshow-container" >
			<div class="mySlides fade">
				<!-- <div class="numbertext">1 / 3</div> -->
				<img src="/image/img1.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>
			<div class="mySlides fade">
				<!-- <div class="numbertext">2 / 3</div> -->
				<img src="/image/img2.jpg" style="width:100%">
				<div class="text">Caption Two</div>
			</div>
			<div class="mySlides fade">
				<!-- <div class="numbertext">3 / 3</div> -->
				<img src="/image/img3.jpg" style="width:100%">
				<div class="text">Caption Three</div>
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
	</div>
	<!-- <div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
	</div> -->
	<script>
		var slideIndex = 0;
		showSlides();
		function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}
		for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 3000); // Change image every 2 seconds
		}
	</script>
</body>