<!DOCTYPE html>

<?php
$thisPage = "index";
?>

<html lang="en">
	<head>
		<meta charset="utf-8" />

		<title> Personal Homepage of Byung Ho Lee </title>
		<meta name="description" content="" />
		<meta name="author" content="ByungHoLee" />

		<link href="basicstyle.css" rel="stylesheet"/>

		<!--[if lt IE 9]>
		<script src="html5shiv.js"></script>
		<![endif]-->

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" /> -->
	</head>

	<body>
		<div id="wrapper">
			<header id="header">
				<?php include("header.php")
				?>
			</header>
			<nav id="naviContainer">
				<?php include("navigation.php")
				?>
			</nav>

			<div id="primaryContent">
				<h2> PROFILE </h2>
				<p>
					Welcome! My name is Byung Ho Lee and I am a computer science student at University California Irvine. <br/>
					Currently, this webiste is very ugly and has no contents at all. <br/>
					Feel free to enjoy. <br/>
				</p>
			</div>

			<footer id="footer">
				<p>
					&copy; Copyright  by Byung Ho Lee
				</p>
			</footer>
		</div>
	</body>
</html>
