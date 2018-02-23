<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!--BOOTSTRAP CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!--Other and custom CSS-->
		<link rel="stylesheet" href="css/style1.css"/>
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
		<script type="text/javascript" src="slick/slick/slick.min.js"></script>
		<!--link to initialization script for slick carousel-->
		<script type="text/javascript" src="js/portfolio.js"></script>
		<!--Font Awesome CDN-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<title>Anna Khamsamran</title>

	</head>
	<body>
		<!--Header info - name, subtitle, logo-->
		<header>

				<div class="container pt-4 pb-5 text-right">
					<div class="row">
						<div class="col d-inline-block align-top pb-4">
							<span><img src="images/annakhamsamran-blue-blue.svg" alt="Anna Khamsamran logo"> Data, Design, Development</span>
						</div>
					</div>
				</div>

		</header>

		<!--the div for the main part of the website-->
		<main>


			<!--the div for Tech capabilities, should align left-ish when larger than sm, then go to center when sm-->
			<div class="container text-left">
				<div class="row">
					<div class="col-sm-4 mt-5"><img src="images/wordcloud.svg" alt="Tech Capablities includes HTML CSS PHP MySQL JavaScript AdobePhotoshop CorelDRAW SVG Vector Graphic Database Design" class="d-inline-block align-top" ></div>
					<div class="col-8"></div>

				</div>
			</div>
			<!--the div for Creative Philosophy, should align right-ish when larger than sm, then go to center when sm-->
			<div class="container text-right">
				<div class="row">
					<div class="col-sm-8"></div>
					<div class="col-sm-4">
						<p>Philosophy:</p>
						<p>My approach is to let the project speak to me and is based in empowerment, clarity and flexibility.
						Clearing obstacles from success involves focusing on the end purpose, learning the systems used by
							the team to reach them, and discovering how to streamline this for the most elegant and useful outcome</p>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>
			<!--the div for portfolio carousel, should align center in all sizes-->
			<div class="container-fluid bg-light text-center">
				<!--Carousel Wrapper-->
				<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
					<!--Indicators
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-2" data-slide-to="1"></li>
						<li data-target="#carousel-example-2" data-slide-to="2"></li>
					</ol>-->
					<!--/.Indicators-->
					<!--Slides-->
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="view hm-black-strong">
								<img class="d-block w-100" src="images/webdev.svg" alt="First slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-light">
								<img class="d-block w-100" src="images/database.svg" alt="Second slide">
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/portraits.svg" alt="Third slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/pitbull.svg" alt="Fourth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/tractor-card.svg" alt="Fourth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
							</div>
						</div>

						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/lizards.svg" alt="Sixth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/fishbanner.svg" alt="Seventh slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
							</div>
						</div>
						<div class="carousel-item">
							<!--Mask color-->
							<div class="view hm-black-slight">
								<img class="d-block w-100" src="images/bluefin.svg" alt="Eighth slide">
								<div class="mask"></div>
							</div>
							<div class="carousel-caption">
								<h3 class="h3-responsive"></h3>
								<p></p>
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

			<!--the div for About Me-->
			<div class="container text-left">
				<div class="row">
					<p>About me:</p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p>At eighteen, I set off towards Nepal with the intention of volunteering in a women’s shelter for a
							few months before going to college. On the way there, I stopped in Thailand, went to an island
							and took a scuba diving course, got caught in a typhoon, and missed my flight to Nepal. I never
							went on to Nepal, never went back to college, and ended up living in Thailand for the next eighteen
							years. During that time, I found I could pursue my interests for the sheer joy of learning and
							adventure. </p>
					</div>
					<div class="col-sm-4">
						<p>I realized that my hard work and perseverance could bring me success. I pushed through
							the self-doubt that comes from following the unbeaten path, and managed to teach myself to
							speak Thai, start several businesses, provide services to clients from all over the world, and learned
							how to flourish in a different culture. When my daughter was thirteen, I took what might have
							been my hardest challenge, which was to return to the US, to ensure she could pursue her education.
							Since my return, I have worked for a small non-profit, degree-granting college supporting the
							apprenticeship model of midwifery education. I have continuously sought to improve my skills and
							capabilities,  </p>
					</div>
					<div class="col-sm-4">
						<p>and have been able to rise to the position of Chief Operations Officer. During my
							time there, I was able to look at the outcome we were seeking, and implement structural systems
							changes that have allowed this school to increase student matriculation from less than 20 to over
							160, while keeping expenses and staffing needs low. I realized we needed a new website and
							database, so learned how to make these, and then made them for the College. I am overjoyed to
							be able to step away from the College and move forward in my education to learn full-stack
							coding and digital development - an area which has called to me since Thailand, when I was designing t-
							shirts and brochures for my businesses. The adventure has just begun! </p>
					</div>
				</div>

			</div>
			<!--the div for Contact Form, should left when larger than sm, then center when sm
			<div class="container text-center">
				<h3>Email me:</h3>
				<form>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
						<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" id="message" rows="3"></textarea>
						  </div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</main>
		-->
			<!--Contact Form-->
			<div class="container p-1">
				<div class="row">
					<div class="col-md-6 text-center">
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

			<!--empty area (form error/success output)-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>

					</div>
					<div class="col-md-6 text-center pt-5">
						<img src="images/snorkeler-white-fish.svg" alt="jackfish"/>
					</div>
				</div>
			</div>
		<!--the div for Footer should align center always, stick to bottom-->
		<footer>
			<div class="base-bar">
			<div class="container-fluid p-3 mt-2 bg-light text-primary rounded text-center">
				<div class="row">
					<div class="col-md-6 text-center">
						<img src="images/annakhamsamran-blue-blue.svg" alt="Anna Khamsamran logo"/> 2018
					</div>
					<div class="col-md-6 text-center">
<a href="https://github.com/akhamsamran"><i class="fab fa-github fa-2x"></i></a>
						&nbsp <a href="https://www.linkedin.com/in/anna-khamsamran/"><i class="fab fa-linkedin-in fa-2x"></i></a>
						&nbsp <a href="https://twitter.com/AKhamsamran"><i class="fab fa-twitter fa-2x"></i></a>
						<a href="https://www.cafepress.com/fishindeep"><i class="fas fa-shopping-cart fa-2x"></i></a>
						&nbsp<span><i class="fas fa-phone fa-1x "></i>(575)779-1619</span>
					</div>
					</div>
				</div>
			</div>
		</footer>




	</body>
</html>