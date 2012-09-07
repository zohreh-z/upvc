<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> گواهینامه ها</title>

	<link type="text/css" rel="stylesheet" href="reset.css" />
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<link type="text/css" rel="stylesheet" href="newstyle.css" />
	<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
	<link type="text/css" rel="stylesheet" href="mainstyle.css" />
    <link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" /> <!-- CSS for Lightbox -->
	<script src="scripts/less.js" type="text/javascript"></script>
	<!--[if IE]>
			<script type="text/javascript" src="js/html5.js"></script>
		<![endif]-->
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
    	<div class="logo mla mra">
			<h1>ALBEN COMPANY</h1>
		</div>
		<section class="nav-container">
			<div class="nav">
			
				<ul class="mla">
					<li><a href="index.php">خانه</a></li>
					<li><a href="about.php">درباره ما</a></li>
					<li><a href="#">گواهینامه ها</a></li>
					<li><a href="project.php">پروژه ها </a></li>
					<li><a href="#"> خدمات</a></li>
					<li><a href="#"> پیوند ها</a></li>
					<li><a href="contact.php"> تماس با ما</a></li>
				</ul>
                		
			</div>			
		</section>
	</header>
	<div class="con-document">
    	<div class="buttom-top"></div>
	    <div class="content-document">
    	<div class="dot"></div>
     
        <script type="text/javascript">
		for(var i = 1 ; i<14; i++){
			document.write('<a href="images/smallgavahi-png/'+i+'.jpg" rel="lightbox[group1]">');
			document.write('<img src="images/smallgavahi-png/'+i+'.png" alt="" width:100px; height:200px;/>');
			document.write('</a>');
		}
		</script>
        <div class="img-squar">
        <script type="text/javascript">
		for(var i = 14 ; i<18; i++){
			document.write('<a href="images/smallgavahi-png/'+i+'.jpg" rel="lightbox[group1]">');
			document.write('<img src="images/smallgavahi-png/'+i+'.png" alt="" width:125px; height:75px;/>');
			document.write('</a>');
		}
		</script>
        </div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/lightbox.js"></script> <!-- JavaScript for Lightbox -->
    </div>
    <div class="buttom-down"></div>
    </div>
	<?php
	  include "inc/footer.php";
	?>
</body>
</html>
