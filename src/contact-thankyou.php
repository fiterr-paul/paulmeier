<?php
if($_POST["submit"]) {
    $recipient="paul@fiterr.com";
    $subject="Contact Form Submission";
		$senderFistname=$_POST["senderFirstname"];
		$senderSurname=$_POST["senderSurname"];
		$senderEmail=$_POST["senderEmail"];
		$senderPhone=$_POST["senderPhone"];
    $message=$_POST["senderEnquiry"];

    $mailBody="Name: $senderFistname $senderSurname\n\nEmail: $senderEmail\n\nPhone: $senderPhone\n\n\n$message";

		mail($recipient, $subject, $mailBody, "From: $senderFistname $senderSurname <$senderEmail>");
	}
?>

<!DOCTYPE php>
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<head>

<!-- Title and Meta
================================================== -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Contact | Paul Meier</title>
<meta name="author" content="Paul Anthony Meier">
<link rel="icon" type="image/png" href="images/favicon.png">

<!-- Mobile Specific Meta
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale = 1, maximum-scale=1, user-scalable=no" />

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/global.css">

</head>

<!-- Body
================================================== -->
<body id="body-background-contact">
	<div id="body-overlay">
		<main role="main">

			<!-- Sect: Header / Navigation
			================================================== -->	
			<div class="main-container">
				<div class="container-top">
					<div class="container-top-nav lg-col-12 md-col-12 sm-col-12">
							<div class="container-top-nav-left lg-col-4 md-col-5 sm-col-9">
								<a id="site-logo-top-link" href="http://www.paulmeier.com.au">
									<div class="site-logo-top">
										<div class="site-logo"></div>
									</div>
									<div class="site-title-top">
										<div class="site-title-top-font site-title-top-font-none"><span class="sm-hide">web developer • strength coach • entrepreneur</span>
										</div>
										<div class="site-title-top-font-sm">
											<div class="">web developer</div>
											<div class="">strength coach</div>
											<div class="">entrepreneur</div>
										</div>
									</div>
								</a>
							</div> 
						<div class="container-top-nav-right lg-col-8 md-col-7 sm-col-3">
							<div class="nav">
								<ul>
									<li class="nav-btn first"><a href="http://www.paulmeier.com.au">home</a></li>
									<li class="nav-btn"><a href="./developer.html">dev</a></li>
									<li class="nav-btn"><a href="./coach.html">coach</a></li>
									<li class="nav-btn"><a href="./entrepreneur.html">entrepreneur</a></li>
									<li id="current" class="nav-btn last"><a href="./contact.php">contact</a></li>
								</ul>
								<div class="nav-mobile dropdown md-hide lg-hide">
									<input type="checkbox" id="nav-toggle">
									<label for="nav-toggle" class="nav-mobile-btn">
										<i class="fas fa-bars"></i>
									</label>
									<ul class="nav-mobile-menu">
										<a class="nav-mobile-menu-item" href="http://www.paulmeier.com.au"><li>home</li></a>
										<a class="nav-mobile-menu-item" href="./developer.html"><li>developer</li></a>
										<a class="nav-mobile-menu-item" href="./coach.html"><li>coach</li></a>
										<a class="nav-mobile-menu-item" href="./entrepreneur.html"><li>entrepreneur</li></a>
										<a class="nav-mobile-menu-item" href="./contact.php"><li>contact</li></a>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Sect: Page Content
			================================================== -->	
			<div class="main-container-content">
				<div class="container-content lg-col-12 md-col-12 sm-col-12">
					<div class="container-content-left lg-col-8 md-col-7 sm-col-12">
						<div class="page-title-h1">thank you,
							<span style="text-decoration: underline;"><?php echo "$senderFistname" ?></span>
						</div>
						<div class="section-text">
							<p>Your enquiry has been sent successfully!<br/>
							I will do my best to get back to you as soon as possible.</p>
						</div>
						<div class="section-text">
							<p style="margin-top: 10px;">Kind Regards,</p>
						</div>
						<div class="section-text">
							<div class="contact-form-avatar"><img src="./images/profile-paul-1240x1240.jpg" alt="Paul Meier" style="height:54px;width:54px;"></div>
							<div class="contact-form-signature"><img src="./images/paul-signature-white.png" alt="Paul Meier" style="height:34px;"></div>
						</div>
					</div>
					<div class="container-content-right lg-col-4 md-col-5 sm-col-12">
						<div class="page-title-h1">other contacts</div>
						<div class="container-content-right-section">
							<div class="section-title">join paul on social media:</div>
							<div class="contact-social-links"><a href="https://linkedin.com/in/paulanthonymeier/" target="_blank"><i class="fab fa-linkedin"></i><span class="">linkedin</span></a></div>
							<div class="contact-social-links"><a href="https://facebook.com/paulanthonymeier/" target="_blank"><i class="fab fa-facebook"></i><span class="">facebook</span></a></div>
							<div class="contact-social-links"><a href="https://instagram.com/fitpaulm/" target="_blank"><i class="fab fa-instagram"></i><span class="">instagram</span></a></div>
						</div>
						<div class="container-content-right-section container-content-right-section-additional">
							<div class="section-title">additional contacts:</div>
							<div class="contact-social-links"><a href="https://github.com/fiterr-paul/" target="_blank"><i class="fab fa-github-square"></i><span class="">gitHub</span></a></div>
							<div class="contact-social-links"><a href="tel:0422050590" target=""><i class="fas fa-mobile-alt"></i><span class="">0422 050 590</span></a></div>
							<div class="contact-social-links"><a href="mailto:paul@paulmeier.com.au" target=""><i class="far fa-envelope"></i><span class="">paul@paulmeier.com.au</span></a></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer
			================================================== -->	
			<div class="main-container">
				<div id="footer-homepage" class="container-bottom cylon_eye">
					<div class="container-footer lg-col-12 md-col-12 sm-col-12">
						<div class="container-footer-left lg-col-3 md-col-4 sm-col-12">
							<div class="footer-text">paul meier &copy; copyright 2019</div>
						</div>
						<div class="container-footer-right lg-col-9 md-col-8 sm-col-12">
							<div class="footer-links"><a href="tel:0422050590" target=""><i class="fas fa-mobile-alt"></i><span class="">&nbsp;0422 050 590</span></a></div>
							<div id="footer-links-email" class="footer-links"><a href="mailto:paul@paulmeier.com.au"><i class="far fa-envelope"></i>&nbsp;paul@paulmeier.com.au</a></div>
							<div class="footer-social">
								<div class="footer-social-links"><a href="https://github.com/fiterr-paul/" target="_blank"><i class="fab fa-github-square"></i><span class="sm-hide md-hide">&nbsp;GitHub</span></a></div>
								<div class="footer-social-links"><a href="https://linkedin.com/in/paulanthonymeier/" target="_blank"><i class="fab fa-linkedin"></i><span class="sm-hide md-hide">&nbsp;LinkedIn</span></a></div>
								<div class="footer-social-links"><a href="https://facebook.com/paulanthonymeier/" target="_blank"><i class="fab fa-facebook"></i><span class="sm-hide md-hide">&nbsp;Facebook</span></a></div>
								<div class="footer-social-links"><a href="https://instagram.com/fitpaulm/" target="_blank"><i class="fab fa-instagram"></i><span class="sm-hide md-hide">&nbsp;Instagram</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer End -->
		</main>
	</div>
</body>
</html>
