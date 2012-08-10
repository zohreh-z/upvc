<?php
	//if(!isset($_GET['debug']))  header('Location: under-construction.html');
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>EMIK COMPANY</title>
	<link type="text/css" rel="stylesheet" href="reset.css" />
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link rel="stylesheet/less" type="text/css" href="style.less" />
	<link type="text/css" rel="stylesheet" href="newstyle.css" />
	<script src="scripts/less.js" type="text/javascript"></script>
	<!--[if IE]>
		<script type="text/javascript" src="scripts/html5shiv-printshiv.js"></script>
	<![endif]-->
	<script type="text/javascript">
		document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>');
	</script>

	<script type="text/javascript" src="scripts/script.js"></script>
	<script type="text/javascript">
		window.onload = function(){
			document.body.className = '';
			setTimeout(function(){
				document.getElementById('loading').style.display='none';
			},1500)
		}
	</script>

</head>
<body class="preload">
	<div id="loading">
		<div class="con">
			<div class="circle"></div>
			<div class="circle1"></div>
		</div>
	</div>
	<header>
	<section class="nav-container">
	
		<div class="nav">
			<div class="logo mla mra">
				<h1>EMIK COMPANY</h1>
			</div>
			<ul class="mla">
				<li class="home-li"><a href="#">خانه</a></li>
				<li class="about-li"><a href="about.html">درباره ما</a></li>
				<li class="port-li"><a href="document.html">گواهینامه ها</a></li>
				<li class="contanct-li"><a href="project.html">پروژه ها </a></li>
				<li class="contanct-li"><a href="#"> خدمات</a></li>
				<li class="contanct-li"><a href="#"> پیوند ها</a></li>
				<li class="contanct-li"><a href="contact.html"> تماس با ما</a></li>
			</ul>		
<!--			<div class="bot-bg"></div>-->
		</div>
				
	</section>
	</header>
	<section class='slideshow'>
		<div class="noise"></div>
		<section class="backimg">

			<script type="text/javascript">
				for(var i=1;i<5;i++) document.write('<div class="slideshow" style="background-image :url(images/gallery/'+i+'.jpg);"></div>');
			</script>

		</section>
	</section>
	<footer>
		<div class="desc mr12">
			<p class="left">social links:</p>
			<div class="social ml2">
			<div class="google">
				<div class="tooltip">google plus</div>
			</div>
			<div class="foresst">
				<div class="tooltip">foresst</div>
			</div>
			<div class="drible">
				<div class="tooltip">drible</div>
			</div>
			<div class="clear"></div>
		</div>
	</footer>
</body>
</html>