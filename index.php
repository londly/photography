<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="desription" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<title>Professional Photographer</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<header id="hom">
		<div class="padd_top_100"></div>
		<div class="navb">
			<ul>
				<li class="left"><button class="transparent_btn" id="home">Home</button></li>
				<li class="left"><button class="transparent_btn" id="portfolio">Portfolio</button></li>
				<li class="left" style="opacity: 0">logolog</li>
				<li class="right"><button class="transparent_btn" id="contact">Contact</button></li>
				<li class="right"><button class="transparent_btn" id="about">About</button></li>
			</ul>
		</div>
	</header>
	<!-- Mobile navbar -->
	<div class="topnav" id="myTopnav">
  <a href="#hom">Home</a>
  <a href="#port">Portfolio</a>
  <a href="#abt">About</a>
  <a href="#cont">Contact</a>
</div>
	
	<!-- Logo Place -->
	<div class="logo_place">
		<div class="logo"><h1>Logo</h1></div>
	</div>
	<!-- Content -->
	<div class="padd_top_50"></div>
	<div class="content">
		<h1>Professional</h1>
		<h1>Photographer</h1>
	</div>
	<!-- portfolio -->
	<div id="port" class="portfolio"><span>
		<!-- bootstrap carusel code link: https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_carousel -->
		<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://images.unsplash.com/photo-1517483141275-296bb15890b2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f6fb898eac03ab9abd1137fa691ebe82&auto=format&fit=crop&w=1351&q=80" alt="1" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="https://images.unsplash.com/photo-1524261399568-56d8c862aaf8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=eb319f95e1b6e9454e00526cbb0daaa4&auto=format&fit=crop&w=2001&q=80" alt="2" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="https://images.unsplash.com/photo-1522093537031-3ee69e6b1746?ixlib=rb-0.3.5&s=7ca9f6ee9bdc0b3ccaf9abe03584ed00&auto=format&fit=crop&w=1349&q=80" alt="3" width="1100" height="500">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</span>
</div>
<!-- About -->
<div id="abt" class="about">
	<div class="about_content">
		<div class="image"><img src="https://images.unsplash.com/photo-1510090896050-4005ac527060?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fc2d3a01a8ece7e65e4251b37fe9a814&auto=format&fit=crop&w=2134&q=80" alt="1">
			<div class="text">
				<h1>ABOUT OUR STUDIO</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue eu elit eget id, tristique ultricies tellus. Donec cursus convallis nunc eu gravida. In at aliquet metus etiam cursus in libero eget iaculis. Duis dictum non massa nec a eget eleifend. Mauris dapibus, orci eu sodales venenatis, dui leo semper magna, et auctor metus  vulputate convallis massa, non lobortis mi auctor sit amet. Nullam nec sem ac eros lacinia euismod. Nam nec ex vel eros tus etiam cursus in libero convallis <br/>Quisque nec tincidunt velit. Nulla lectus lacus, ultricies sed orci sed, rutrum efficitur velit. Proin eget gravida turpis. Aenean quis nibh sit amet purus malesuada varius  donec mauris diam, blandit vel neque vitae, malesuada vulputate metus aenean est ligula id elit gravida varius. Nunc imperdiet ante in est volutpat, fermentum ac rutrum lorem maximus. Nullam facilisis nisi ipsum, a tempor elit porttitor quis.</h2>
				<button id="contact_btn" class="contact_btn">CONTACT US</button>
			</div>
		</img></div>
	</div>
</div>
<!-- Contact -->
<div class="contact" id="cont">
	<div class="contact_content">
		<form id="myForm" action="mail.php" method="post" class="contact-form">
			<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="box-input mt-3" required="" type="text">
			<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="box-input mt-1" required="" type="email">
			<textarea class="box-textarea mt-1" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
			<button class="contact_btn_blue mt-3">Send Message</button>
		</form>
	</div>
</div>

<!-- END Content -->
<script>
	$(document).ready(function(){
		$("#portfolio").click(function(){
			$(".portfolio").show("slow");
			$(".content").hide("slow");
			$(".about").hide("slow");
			$(".contact").hide("slow");
		});
		$("#about").click(function(){
			$(".about").show("slow");
			$(".content").hide("slow");
			$(".portfolio").hide("slow");
			$(".contact").hide("slow");
		});
		$("#contact").click(function(){
			$(".contact").show("slow");
			$(".content").hide("slow");
			$(".portfolio").hide("slow");
			$(".about").hide("slow");
		});
		$("#contact_btn").click(function(){
			$(".contact").show("slow");
			$(".content").hide("slow");
			$(".portfolio").hide("slow");
			$(".about").hide("slow");
		});
		$("#home").click(function(){
			$(".content").show("slow");
			$(".portfolio").hide("slow");
			$(".about").hide("slow");
			$(".contact").hide("slow");
		});
	});
	$('a').on('click',function(){return false;});
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
</script>
</body>
</html>