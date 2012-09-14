<?php
	//if(!isset($_GET['debug']))  header('Location: Albenunder-construction.html');
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>Alben</title>
	<link type="text/css" rel="stylesheet" href="reset.css" />
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link rel="stylesheet/less" type="text/css" href="style.less" />
	<link type="text/css" rel="stylesheet" href="newstyle.css" />
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
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
			document.getElementById('loading').style.display='none';
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
			
			<ul class="mla">
				<li><a href="./">خانه</a></li>
				<li><a href="about.php">درباره ما</a></li>
				<li><a href="document.php">گواهینامه ها</a></li>
				<li><a href="project.php">پروژه ها </a></li>
				<li><a href="#"> خدمات</a></li>
				<li><a href="#"> پیوند ها</a></li>
				<li><a href="contact.php"> تماس با ما</a></li>
			</ul>
            		
		</div>
				
	</section>
	</header>
	<section class='slideshow'>
    	<div class="logo mla mra">
				<h1>ALBEN COMPANY</h1>
			</div>
		<div class="noise"></div>
		<section class="backimg">
        
			<script type="text/javascript">
				for(var i=1;i<5;i++) document.write('<div class="slideshow" style="background-image :url(images/gallery/'+i+'.jpg);"></div>');
			</script>

		</section>
	</section>
	<?php
		include "inc/footer.php";
	?>
</body>
</html>