<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Skapa Development</title>
		<!----Font Awesome Link---->
		<script src="https://use.fontawesome.com/46c6e23a21.js"></script>
		<!----Google Fonts---->
		<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
		<!----Bootstrap Link---->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
				integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<!----Skapa Development CSS---->
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<!----Nav Bar---->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Skapa Development</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="#">How It Works</a>
					<a class="nav-item nav-link" href="#">Projects</a>
					<a class="nav-item nav-link" href="#">About Us</a>
					<a class="nav-item nav-link" href="#">Contact</a>
				</div>
			</div>
		</nav>
		<!----Banner---->
		<header class="banner">
			<div class="header-banner">
				<div class="header-content-inner">
					<p id="company">SKAPA DEVELOPMENT</p>
				</div>
			</div>
		</header>
		<!----How It Works---->
		<section id="how-it-works">
			<h4>How It Works</h4>
			<h6>Now more than ever before businesses can alleviate pain points with software solutions. Skapa Development uses a four step approach and a unique partnership model to keep the costs of a solution extremely affordable. </h6>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="circle">
							<i class="fa fa-medkit fa-3x" aria-hidden="true"></i>
						</div>
						<h5 id="work-process">Pain</h5>
						<p id="work-process">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col">
						<i class="fa fa-puzzle-piece fa-3x" aria-hidden="true"></i>
						<h5>Design</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col">
						<i class="fa fa-magic fa-3x" aria-hidden="true"></i>
						<h5>Development Magic</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col">
						<i class="fa fa-lightbulb-o fa-3x" aria-hidden="true"></i>
						<h5>Solution</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</section>
		<!----Projects---->
		<section id="projects">
			<h4>Projects</h4>
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="http://www.espn.com/" target="_blank" class="project-card">
							<div class="card">
								<img class="card-img-top" src="images/pattern.jpg" alt="Lalana">
							</div>
						</a>
						<p class="card-text">Lalana is a task tracking system being used across industries to provide clear and concise reports to management team at any time.</p>
					</div>
					<div class="col">
						<a href="http://www.espn.com/" target="_blank" class="project-card">
							<div class="card">
								<img class="card-img-top" src="images/pattern.jpg" alt="CrowdVibe">
							</div>
						</a>
						<p class="card-text">CrowdVibe is connecting people using through live event posting</p>
					</div>
					<div class="col">
						<a href="http://www.espn.com/" target="_blank" class="project-card">
							<div class="card">
								<img class="card-img-top" src="images/pattern.jpg" alt="Handoff">
							</div>
						</a>
						<p class="card-text">Handoff was developed to eliminate the pain points of the lead handoff process from SDRs to an Inside Sales team.</p>
					</div>
				</div>
		</section>
		<!----About Us---->
		<section id="about-us">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="card">
							<img class="card-img-top" src="images/about_us.jpg" alt="Lalana">
						</div>
					</div>
					<div class="col">
						<h4>About Us</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</section>
		<!----Contact Us---->
		<section id="contact-us">
			<h2>Contact Us</h2>
			<form>
				<input type="text" name="customername" placeholder="Name"><br>
				<input type="email" name="email" placeholder="Email"><br>
				<input type="tel" name="phone" placeholder="Phone"><br>
				<textarea type="text" name="message" placeholder="Message"></textarea><br>
				<input type="submit" value="Submit">
			</form>
		</section>
		<!----Footer---->
		<footer>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
					<a href="#" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
					<a href="#" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
					<a href="#" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
					<p>&copy2017 Skapa Development. All Right Reserved</p>
				</div>
				<div class="col-2"></div>
			</div>
		</footer>
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
				  integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
				  integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
				  integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
				  crossorigin="anonymous"></script>
	</body>
</html>