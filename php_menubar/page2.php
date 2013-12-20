<!DOCTYPE html>

<?php
$thisPage = "page2";
?>

<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title> Projects </title>
		<meta name="description" content="" />
		<meta name="author" content="ByungHoLee" />

		<meta name="viewport" content="width=device-width"/>

		<link href="basicstyle.css" rel="stylesheet"/>

		<!--[if lt IE 9]>
		<script src="html5shiv.js"></script>
		<![endif]-->
		
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" /> -->
	</head>

	<body class="page2">
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
				<h3> From School: </h2>
				
				<div class="projectElement">
					<h4>Java Project from Cypress College: Airline Reservation System</h3>
					<p> 
						Coded a GUI simple airline reservation system that allow reservation 
						from multiple desks at the same time.	
					</p>
				</div>
				
				<div class="projectElement">
					<h4>Java Project from Cypress College: Networked Tic-Tac-Toe </h3>
					<p> 
						Coded a GUI Tic-Tac-Toe game using server and client. 
					</p>
				</div>
				
				
				
			</div>

			<footer id="footer">
				<p>
					&copy; Copyright  by Byung Ho Lee
				</p>
			</footer>
		</div>
	</body>
</html>
