<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!--BOOTSTRAP CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!--Other and custom CSS-->
		<link rel="stylesheet" href="css/style1.css"/>
		<!--slick from jsDeliver.cdn-->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>
		<!--Slick styling for Carousel-->
		<link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
		<!--Slick default styling new slick-theme.css-->
		<link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>

		<!--Optional Javascript links-->
		<!--link to Bootstrap javascript dependencies-->
		<!--(Put it here, but if it is a heavy site, put this block just below the closing body tag)-->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<!--Slick Carousel js-->
		<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<!--link to initialization script for slick carousel-->
		<script type="text/javascript" src="js/portfolio.js"></script>
		<!--Font Awesome CDN-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<title>Anna Khamsamran</title>

	</head>
	<body>
		<!--Header info - name, subtitle, logo-->
		<header>
			<!--<nav class="navbar navbar-light bg-white">
				<a class="navbar-brand" href="#">
					<img src="images/annakhamsamran-blue-blue.svg" class="align-top  text-center" alt="Anna Khamsamran logo">
				</a>
			</nav>-->

				<div class="container pt-4 pb-5 text-center">
					<div class="row">
						<div class="col-12 d-inline-block align-top pb-4">
							<img src="images/annakhamsamran-blue-blue.svg" alt="Anna Khamsamran logo"/>
						</div>
					</div>
				</div>


		</header>

		<!--the div for the main part of the website-->
		<main>



			<!--the div for Tech capabilities, should align left-ish when larger than sm, then go to center when sm-->
			<div class="container text-left pt-4 mt-3 mb-3">
				<div class="row">
					<div class="col-md-4"><img src="images/wordcloud.svg" alt="Tech Capablities includes HTML CSS PHP MySQL JavaScript AdobePhotoshop CorelDRAW SVG Scalable Vector Graphic Database Design" class="d-inline-block align-top" ></div>
					<div class="col-md-8"></div>
				</div>
			</div>
			<!--the div for Creative Philosophy, should align right-ish when larger-->
			<div class="container text-center mb-3">
				<div class="row">
					<div class="col-md-8"></div>
					<div class="col-md-4">
						<h5>Philosophy</h5>
						<p>Easy access to well organized information improves business and customer experience. My goal is to build systems and tools that remove obstacles through elegant structure and design.</p>
					</div>
				</div>
			</div>
			<div class="container text-left mt-3 mb-5">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-8"><img src="images/jack-r.svg" alt="jackfish" >
					</div>
				</div>
			</div>


			<!--the div for portfolio carousel, should align center in all sizes-->
			<div class="carousel container-fluid mt-5 text-center text-dark">
				<h2>Portfolio:</h2>
				<!--Carousel Wrapper-->
				<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
					<!--Indicators-->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-2" data-slide-to="1"></li>
						<li data-target="#carousel-example-2" data-slide-to="2"></li>
					</ol>
					<!--/.Indicators-->
					<!--Slides-->
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="view hm-black-strong">
								<img class="d-block w-100" src="images/webdev.svg" alt="First slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption ">
								<h4 class="h4-responsive d-block d-md-none">Websites</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Website Development</h2>
									<h5>Responsive design from mobile to desktop</h5>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-light">
								<img class="d-block w-100" src="images/database.svg" alt="Second slide">
							</div>
							<div class="carousel-caption">
								<h4 class="h4-responsive d-block d-md-none">Database Design</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Database Design</h2>
									<h5>MySQL and Microsoft Access</h5>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/portraits.svg" alt="Third slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h4 class="h4-responsive d-block d-md-none">Portraits & Personal Branding</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Portraits & Personal Branding</h2>
									<h5>Realistic to iconic </h5>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/pitbull.svg" alt="Fourth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h4 class="h4-responsive d-block d-md-none">Dog Study</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Dog Study</h2>
									<h5>Design from wireframe to finished art</h5>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/tractor-card.svg" alt="Fourth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h4 class="h4-responsive d-block d-md-none">Party Invitation</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Party Invitation</h2>
									<h5>Card made to order for an event</h5>
								</div>
							</div>
						</div>

						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/lizards.svg" alt="Sixth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h4 class="h4-responsive d-block d-md-none">Lizard Mandala</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Mandala Project</h2>
									<h5>Scalable Vector Graphic lizards</h5>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/fishbanner.svg" alt="Seventh slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h4 class="h4-responsive d-block d-md-none">Custom Banners</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Custom Banners</h2>
									<h5>Fish banners made for a website</h5>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/bluefin.svg" alt="Eighth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h4 class="h4-responsive d-block d-md-none">Custom graphics</h4>
								<div class="carousel-caption d-none d-md-block mb-5 pb-5">
									<h2>Graphics-to-order</h2>
									<h5>Part of set of logos and artwork for a speedboat company</h5>
							</div>
						</div>
					</div>
					<!--/.Slides-->
					<!--Controls-->
					<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					<!--/.Controls-->
				</div>
				<!--/.Carousel Wrapper-->
			</div>
			</div>
			<!--the div for About Me-->
			<div class="container text-left mt-5">
				<div class="row">
					<h3>About me:</h3>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p>At eighteen, I set off towards Nepal with the intention of volunteering in a women’s shelter for a few months before going to college. On the way there, I stopped in Thailand, went to an island, got caught in a typhoon, and missed my flight onwards. I became a scuba diving instructor and ended up living in Thailand for the next eighteen years.</p>
					</div>
					<div class="col-sm-4">
						<p>Upon my return to the US, I worked for a small non-profit, degree-granting college supporting the apprenticeship model of midwifery education. I have continuously sought to improve my skills and capabilities.  I designed set up systems and tools that greatly improved the business, and was able to rise to the position of Chief Operations Officer </p>
					</div>
					<div class="col-sm-4">
						<p>Working in digital development provides me with the exciting opportunity to be creative and pursue my passion.  Organizing and designing databases. It is enormously satisfying to set up systems that work elegantly and allow streamlined function. The adventure has just begun! </p>
					</div>
				</div>
			</div>


			<!--Contact Form-->
			<div class="container p-1">
				<div class="row">
					<div class="col-md-6 text-left">
				<h3>Contact Me:</h3>
			<form id="contact-form" action="php/mailer.php" method="post">
				<div class="form-group">
					<label for="name">Your Name <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Your Email <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-pencil-alt" aria-hidden="true"></i>
							</span>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</span>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="(2000 characters max)"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6Ldn_UcUAAAAAB9VXKqeP6ZR14GIW9-TJF3bvZtB"></div>

				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>
				<!--some fish:-->
				</div>
					<div class="col-md-6 text-right pt-5 mt-5">
						<img src="images/jack-wireframe2.svg" class="img-fluid" alt="jackfish"/>
					</div>
				</div>
			<!--empty area (form error/success output)-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>


			</div>
		</main>
		<!--the div for Footer should align center always, stick to bottom-->
		<footer>
			<div class="container-fluid p-2 mt-2 bg-light text-primary rounded text-center">
				<div class="row">
					<div class="col-md-4 text-center">
<a href="https://github.com/akhamsamran"><i class="fab fa-github fa-1x"></i></a>
						<a href="https://www.linkedin.com/in/anna-khamsamran/"><i class="fab fa-linkedin-in fa-1x"></i></a>
						<a href="https://twitter.com/AKhamsamran"><i class="fab fa-twitter fa-1x"></i></a>
						<a href="https://www.cafepress.com/fishindeep"><i class="fas fa-shopping-cart fa-1x"></i></a>
						<span><i class="fas fa-phone fa-1x "></i>(575)779-1619</span>
					</div>
					<div class="col-md-4 text-center">
					</div>
					<div class="col-md-4 text-center">
						<img src="images/annakhamsamran-blue-blue.svg" alt="Anna Khamsamran logo"/> 2018
					</div>
					</div>
				</div>
		</footer>




	</body>
</html>