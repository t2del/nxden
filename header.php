<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>NxDen - Website Design and Development</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/styles.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Header -->
					<header id="header">
						<h1>Nxden</h1>
						<?php quotes($conn); ?>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="#header" class="scrolly">Home</a></li>
							<li><a href="#about" class="scrolly">About Us</a></li>
							<li><a href="#portfolio" class="scrolly">Projects</a></li>
							<li><a href="#services" class="scrolly">Services</a></li>
							<li><a href="#footer" class="scrolly">Contact</a></li>
						</ul>
						</ul>
						<ul class="icons">
							<?php echo socials($conn); ?>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">