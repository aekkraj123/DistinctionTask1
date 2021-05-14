<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Aekkraj">
	<meta name="description" content="This is the webpage for the Company's About Us.">
	<title>About Us</title>
	<link rel="icon" href="images/ARLogo.png">
	<!-- Bootstrap Plugin -->
	<link href="css/styles_aboutus.css" rel="stylesheet" />
	
</head>
<body>
	<header>
		<?php include("header.php"); ?>
	</header>

	<!--Start Editing from here!-->
	<article id="AROfficeArticle">
		<!-- Header 1 : "Get to know our Story" -->
		<section class="cta">
			<div class="cta-content">
				<div class="container">
					<h2>
						Get to know Our Story.
					</h2>
				</div>
			</div>
			<div class="overlay"></div>
		</section>
		<!-- Header 2 : "It started off with an idea" -->
		<section>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 order-lg-2">
						<div class="p-5"><img class="img-fluid rounded-circle" src="images/aboutusimg1.png" alt="..." /></div>
					</div>
					<div class="col-lg-6 order-lg-1">
						<div class="p-5">
							<h2 class="display-4">It started off with an idea.</h2>
							<p>How did we get here? Our journey began in 1995 as a small group of friends, with a big goal that is to share the wonders and capabilities of Apple products to the people.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Header 3 : "Headquarters Establishment" -->
		<section>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="p-5"><img class="img-fluid rounded-circle" src="images/aboutusimg2.png" alt="..." /></div>
					</div>
					<div class="col-lg-6">
						<div class="p-5">
							<h2 class="display-4">Headquarters Establishment</h2>
							<p>In the year 2000, the founding team had moved to the capital of Malaysia, and set up the first ever AR Store in the Kuala Lumpur City Center.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Header 4 : "100 Outlets, Nationwide" -->
		<section>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 order-lg-2">
						<div class="p-5"><img class="img-fluid rounded-circle" src="images/aboutusimg3.png" alt="..." /></div>
					</div>
					<div class="col-lg-6 order-lg-1">
						<div class="p-5">
							<h2 class="display-4">100 Outlets, Nationwide.</h2>
							<p>Now, we are proud to have over 100 outlets nationwide, and with branch outlets in Singapore and Thailand - delivering our promise of quality Apple products to all.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>

	<footer>
		<?php include("footer.php"); ?>
	</footer>
</body>
</html>