<?php

include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Music Magic</title>
<!-- custom-theme -->
<link rel="icon" href="images/logo2.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Symphony Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		  <!-- Script -->
<script type='text/javascript'>
$(document).ready(function(){

 // Intialize gallery
 var gallery = $('.gallery a').simpleLightbox();

});
</script>
<link href='simplelightbox-master/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/mystyles.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Music<span>Magic</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="rj_regi.php" class="menu__link">RJ Registration</a></li>
							<li class="menu__item menu__item--current"><a href="music.php" class="menu__link">Music</a>
							</li>
							<li class="menu__item">
								<a href="acc.php" class="menu__link">Account</a>
							</li>
							<li class="menu__item"><a href="mail.php" class="menu__link">Mail Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->	
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
				<ul>
					<li><a href="index.php">Home</a><i>/</i></li>
					<li>Music</li>
				</ul>
			</div>
			<div class="w3_agile_breadcrumbs_right">
				<h2>Music</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- gallery -->
					<div class="m_s_cont container"> 
							<div class="gall">
						<?php
						$count = 1;
						$row = mysqli_query($conn,"select * from music");
					while($r = mysqli_fetch_array($row))
					{
						echo '<a href=mp.php?song='.$r['Id'].'>
							<img src='. $r['Image'].' class=img-responsive';
						echo ' style= height:300px;width:300px;padding:5px;position:relative;left:20px; />';
						echo '</a>';
						if($count%9 == 0)
						{
							break;
						}
       				 	$count++;
       				}
       			?>
			</div>
		</div>
<!-- //gallery -->	
<!-- gallery-pop-up -->
<!-- //gallery-pop-up -->
<!-- footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->
<!-- copy-right -->
<!-- //copy-right -->
<!-- bootstrap-pop-up -->
<!-- //bootstrap-pop-up -->
<!-- start-smooth-scrolling -->
 <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script> 
<!-- //here ends scrolling icon -->