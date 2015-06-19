<?php 
	include('read_dir.php');
	ScanDirectoryCCM('images/slide')
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<script type="text/javascript" src="jquery/jquery-1.8.3.js"></script>
	<script src="script.js" type="text/javascript"></script>
	<script type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>


<!--Thumbnails______________________________________________________________________________________-->

	<link rel="stylesheet" type="text/css" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancyBox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>






	<title>Bzh</title>
</head>
<body>
<!--##############HEADER#################-->
	<header>
		<div id="titre">
			EN BRETAGNE,<br />IL PLEUT<br />TOUT LE TEMPS !
		</div>
	</header>
<!--##############PHOTO##################-->
	<div id="contenu">
		<div id="predayPhoto">
				Photo du jour<br>
				Clic pour faire disparaitre le brouillard.
		</div>
		<div id="dayPhoto">
			<a id="fancybox-manual-c" href="javascript:;"><img src="images/dayPhoto.png" /></a>		
			 <!-- FANCYBOX http://fancybox.net/howto -->
		</div>
	</div>
<!--##############FOOTER#################-->
	<footer>
		
		<div id="sign">
			<a href="http://cadorb.fr/">Site réalisé par Blaise Cador</a>
		</div>
	</footer>





</body>
</html>