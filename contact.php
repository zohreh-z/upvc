<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> تماس با ما</title>

	<link type="text/css" rel="stylesheet" href="reset.css" />
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<link type="text/css" rel="stylesheet" href="newstyle.css" />
	<link type="image/x-icon" rel="shortcut icon" href="favicon.ico" />
   	<link type="text/css" rel="stylesheet" href="mainstyle.css" />
	<script src="scripts/less.js" type="text/javascript"></script>
	<!--[if IE]>
			<script type="text/javascript" src="scripts/html5.js"></script>
		<![endif]-->
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
	<div class="logo mla mra">
		<h1>ALBEN COMPANY</h1>
	</div>
	<section class="nav-container">
	
		<div class="nav">
			<ul class="mla">
				<li><a href="index.php">خانه</a></li>
				<li><a href="about.php">درباره ما</a></li>
				<li><a href="document.php">گواهینامه ها</a></li>
				<li><a href="project.php">پروژه ها </a></li>
				<li><a href="#"> خدمات</a></li>
				<li><a href="#"> پیوند ها</a></li>
				<li><a href="#" onClick="dislpaycontact()"> تماس با ما</a></li>
			</ul>		
		</div>
				
	</section>
	</header>
	<div class="content-contact  cover">
		<div class="dot"></div>
		<div class="buttom-top"></div>
		<div class="center cover" >
			<div class="details right w20" id="detail">
				<div class="w10 left f3 left-detail">				
					<form name="contact-form" class="contact-form" action="sendmail.php" method="post">
						<div>
							<label>نام:</label><br />
							<input name="fullName" id="fullName" type="text" class="name-contact" /><br />
							<label> ایمیل:</label><br />
							<input name="mail" id="mail" type="text" class="email-contact" size="31" /><br />
							<label>پیام:</label><br />
							<textarea rows="4" cols="30" name="msg" id="msg" class="textarea"></textarea><br /> <br />
							<button type="submit" name="sub" id="sub"></button>
                            <button type="reset" name="reset" id="reset"></button>
						</div>
					</form>
				</div>			
				<div class="right-detail w9"> 
					<h1 class="f6">تماس با شرکت آلبن</h1>
					آدرس شرکت :
					مشهد ، خیابان احمد آباد ، نبش احمد آباد 11 ، جنب بانک سرمایه ، ساختمان 141 ، طبقه دوم
					<a href="#" onClick="displaymap()">(نقشه مسیر)</a><br /><br />
					تلفن : <br />
						45 75 843 – 511 - 98+  <br />
					12 02 532 – 915 - 98+  <br />
					57 96 822 – 532 - 98+  <br />
					<div class="f3 email">
						Email :<span class="img-dr"><a href="mailto:info@drPooya.com"> info@alben.ir</a></span> <br />
						Yahoo:<span class="img-yahoo"><a href="mailto:drAliPooya@yahoo.com">Albencompany</a></span> <br />
						Gmail :<span class="img-google"><a href="mailto:AliPooya44@gmail.com">omid.hoseinipoor@gmail.com </a></span>
					</div>
				</div>
			</div>
			<div class="bg-map w20" id="bgmap"></div>
		</div>
		<div class="buttom-down"></div>
	</div>
</section>
<?php
	include "inc/footer.php";
?>
</body>
</html>
