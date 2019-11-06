<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="#">WebSiteName</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Page 1-1</a></li>
				<li><a href="#">Page 1-2</a></li>
				<li><a href="#">Page 1-3</a></li>
			  </ul>
			</li>
			<li><a href="#">Page 2</a></li>
			<li><a href="#">Page 3</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
  
	<div class="container">
	  <h3>Collapsible Navbar</h3>
	  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
	  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small mdb-color lighten-3 pt-4">

	  <!-- Footer Links -->
	  <div class="container text-center text-md-left">

		<!-- Grid row -->
		<div class="row">

		  <!-- Grid column -->
		  <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

			<!-- Content -->
			<h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
			<p>Here you can use rows and columns to organize your footer content.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
			  esse
			  quasi, veritatis totam voluptas nostrum.</p>

		  </div>
		  <!-- Grid column -->

		  <hr class="clearfix w-100 d-md-none">

		  <!-- Grid column -->
		  <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

			<!-- Links -->
			<h5 class="font-weight-bold text-uppercase mb-4">About</h5>

			<ul class="list-unstyled">
			  <li>
				<p>
				  <a href="#!">PROJECTS</a>
				</p>
			  </li>
			  <li>
				<p>
				  <a href="#!">ABOUT US</a>
				</p>
			  </li>
			  <li>
				<p>
				  <a href="#!">BLOG</a>
				</p>
			  </li>
			  <li>
				<p>
				  <a href="#!">AWARDS</a>
				</p>
			  </li>
			</ul>

		  </div>
		  <!-- Grid column -->

		  <hr class="clearfix w-100 d-md-none">

		  <!-- Grid column -->
		  <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

			<!-- Contact details -->
			<h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

			<ul class="list-unstyled">
			  <li>
				<p>
				  <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
			  </li>
			  <li>
				<p>
				  <i class="fas fa-envelope mr-3"></i> info@example.com</p>
			  </li>
			  <li>
				<p>
				  <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
			  </li>
			  <li>
				<p>
				  <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
			  </li>
			</ul>

		  </div>
		  <!-- Grid column -->

		  <hr class="clearfix w-100 d-md-none">

		  <!-- Grid column -->
		  <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

			<!-- Social buttons -->
			<h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

			<!-- Facebook -->
			<a type="button" class="btn-floating btn-fb">
			  <i class="fab fa-facebook-f"></i>
			</a>
			<!-- Twitter -->
			<a type="button" class="btn-floating btn-tw">
			  <i class="fab fa-twitter"></i>
			</a>
			<!-- Google +-->
			<a type="button" class="btn-floating btn-gplus">
			  <i class="fab fa-google-plus-g"></i>
			</a>
			<!-- Dribbble -->
			<a type="button" class="btn-floating btn-dribbble">
			  <i class="fab fa-dribbble"></i>
			</a>

		  </div>
		  <!-- Grid column -->

		</div>
		<!-- Grid row -->

	  </div>
	  <!-- Footer Links -->

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3">&copy; 2019 Copyright:
		<a href="#"> Mathtest.com</a>
	  </div>
	  <!-- Copyright -->

	</footer>
	<!-- Footer -->
</body>
</html>