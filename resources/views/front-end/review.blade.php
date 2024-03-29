<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Review</title>
		@include('layouts.frontend.icon')
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="/assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="/assets/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="/" id="branding">
						<img src="/assets/images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Company Name</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="/">Home</a></li>
							<li class="menu-item"><a href="about">About</a></li>
							<li class="menu-item current-menu-item"><a href="review">Movie reviews</a></li>
							<li class="menu-item"><a href="joinus">Join us</a></li>
							<li class="menu-item"><a href="contact">Contact</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index">Home</a>
							<span>Movie Review</span>
						</div>

						<div class="filters">
							<select name="#" id="#" placeholder="Choose Category">
								<option value="#">Action</option>
								<option value="#">Drama</option>
								<option value="#">Fantasy</option>
								<option value="#">Horror</option>
								<option value="#">Adventure</option>
							</select>
							<select name="#" id="#">
								<option value="#">2012</option>
								<option value="#">2013</option>
								<option value="#">2014</option>
							</select>
						</div>
						<div class="movie-list">
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-3.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">Maleficient</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-4.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">The adventure of Tintin</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-5.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">Hobbit</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-6.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">Exists</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-1.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">Drive hard</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-2.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">Robocop</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-7.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">Life of Pi</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="/assets/dummy/thumb-8.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single">The Colony</a></div>
								<p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
							</div>
						</div> <!-- .movie-list -->

						<div class="pagination">
							<a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
							<span class="page-number current">1</span>
							<a href="#" class="page-number">2</a>
							<a href="#" class="page-number">3</a>
							<a href="#" class="page-number">4</a>
							<a href="#" class="page-number">5</a>
							<a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			@include('layouts.frontend.footer')
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="/assets/js/jquery-1.11.1.min.js"></script>
        
        <script src="/assets/js/plugins.js"></script>
		<script src="/assets/js/app.js"></script>
		
	</body>

</html>