<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=800">
	
	<!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="..img/favicon.ico" />
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <link rel="apple-touch-icon" href="../img/favicon.png" />

    <!-- Css -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugins/animate.css" rel="stylesheet" type="text/css" />
	
	<!-- JQUERY UI DEPENDENCIES FOR SLIDER -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all"/>
	
	<!-- BOOTSTRAP CSS STYLES FOR GOOD LOOKING -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	
	<!-- DEMO CUSTOM STYLES -->
	<link rel="stylesheet" href="css/demo.css">
	
	<!-- HERE IS THE MAGIC ... -->
	<script src="js/JIC.js" type="text/javascript"></script>
	<script src="js/rawdeflate.js" type="text/javascript"></script>
	<script src="js/demo.js" type="text/javascript"></script>
	<meta charset="utf-8" />
    <title>Condense - Upload</title>
    <meta name="description" content="" />
    <meta name="keywords" content="condense, compression, deflate, inflate" />
    <meta name="author" content="in-house">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

</head>
<body class="wow-animate">
  <!-- Site preloader -->
    <section id="preloader">
        <div class="site-spinner"></div>
    </section>
    <!-- End Site preloader -->

    <!-- Page Wraper -->
    <div id="page-wraper">

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-inner">

                <!-- Logo -->
                <div class="logo">
                    <a href="../index.html">
                        <img class="logo-light" src="../img/logo-light.png" alt="Apollo" />
                        <img class="logo-dark" src="../img/logo-dark.png" alt="Apollo" />
                    </a>
                </div>
                <!-- End Logo -->

                <!-- Mobile Navbar Icon -->
                <div class="nav-mobile nav-bar-icon">
                    <span></span>
                </div>
                <!-- End Mobile Navbar Icon -->

                <!-- Navbar Navigation -->
                <div class="nav-menu">
                    <ul class="nav-menu-inner">
                        <li>
                            <a href="../index.html">Home</a>
                        </li>
                        <li>
                            <a href="../about.html">About</a>
                        </li>
                        <li>
                            <a href="index.php">Compression</a>
                        </li>
						<li>
							<a href="string.html">String Compression</a>
						</li>
                        <li>
                            <a href="../team.html">Team</a>
                        </li>
						<li>
						    <a href="../faq.html">FAQ</a>
						</li>
                        <li>
                            <a href="../contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- End Navbar Navigation -->

            </div>
        </header>
        <!-- End Header -->

        <!-- Page Intro -->
        <section id="inner-intro" class="inner-intro bg-image overlay-dark40 dark-bg parallax parallax-background2" data-background-img="../img/full/13.jpg">

            <div class="container">
                <div class="intro-content">
                    <div class="intro-content-inner">
                        <h1 class="">Compression</h1>                       
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Intro -->
    </div>
	<br><br><br>
	<div class="container text-right">	
	
	<?php
		if ( isset($_FILES['upload'])===true)
		{
			$zip= new ZipArchive();
			$zip->open("ZippedFile.zip",ZipArchive::CREATE);
			$files=$_FILES['upload'];
			for($i=0;$i<count($files['name']);$i++){
			$tmp=$files['tmp_name'][$i];
			$filename=$files['name'][$i];
			move_uploaded_file($tmp,$filename);
			$zip->addFile($filename) ;
		}
		$zip->close();
		}
	?>
	<div class="container text-center">
	<form action="" method="post" enctype="multipart/form-data">
		<table>
		<tr>
		<td>
		<input type="file" name="upload[]" multiple>
		</td>
		<td>
		<input  class="btn btn"type="submit" value="Archive">
		</td></tr>
	</form>
	</div>
	</table>
	
	<br><br><br>
	</div>
	 <!-- Footer Section -->
        <footer id="footer" class="footer gray-bg">
            <div class="container text-center">
                <ul class="social mb-60 wow fadeInUp" data-wow-duration="1.5s">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
                <p class="copyright">
                    <a class="copy-link scroll-top" href="#">&copy; Condense 2016</a><br />
                    All Rights Reserved, <a target="_blank" href="http://condense.com/"><b>Condense</b></a>
                </p>
            </div>
        </footer>
        <!-- End Footer Section -->
<body>

    <!-- JS Script -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.easing.js" type="text/javascript"></script>
    <script src="js/plugins/SmoothScroll.js" type="text/javascript"></script>
    <script src="js/plugins/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugins/wow.min.js" type="text/javascript"></script>
    <script src="js/plugins/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.appear.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.countTo.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.simple-text-rotator.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.backstretch.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.singlePageNav.min.js" type="text/javascript"></script>
    <script src="js/plugins/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/send-subscribe.js" type="text/javascript"></script>
    <script src="js/contact-form.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>

</html>