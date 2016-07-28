<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review</title>

		<!-- Loading third party fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700|' rel="stylesheet" type="text/css">
		<link href="{{ URL::to('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ URL::to('src/css/style.css') }}">
		<!--{{ URL::to('src/css/login.css') }}>

		<script src="{{ URL::to("js/ie-support/html5.js") }}"></script>
		<script src="{{ URL::to("js/ie-support/respond.js") }}"></script>
		<![endif]-->

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href='{{ route('logged_in') }}' id="branding">
					
						<img src="{{ URL::to("images/logo.png") }}" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">All Movies</h1>
							<small class="site-description">Tagline</small>
						</div>
					</a> 

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item">
							<a href='{{route('logged_in')}}'>Home</a></li>
							<li class="menu-item"><a href='{{ route('about')}}'>About</a></li>
							<li class="menu-item"><a href='{{ route('review')}}'>Movie reviews</a></li>
							<li class="menu-item"><a href='{{ route('joinus')}}'>Join us</a></li>
							<li class="menu-item"><a href='{{ route('contact')}}'>Contact</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" name='text' placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-3">
								<div class="slider">
									<ul class="slides">
										<li><a href="#">
										<img src="http://www.hdwallpapers.in/thumbs/justice_league_2017_movie-t1.jpg" alt="Slide 1"></a></li>
										<li><a href="#"><img src="https://wallpaperscraft.com/image/minions_2015_cartoon_100453_300x168.jpg" alt="Slide 2"></a></li>
										<li><a href="#"> 
										<img src="https://wallpaperscraft.com/image/godfather_marlon_brando_don_vito_corleone_black_rose_740_300x168.jpg" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<p>Here is the name of the movies

							DESCRIPTION HEREDESCRIPTION HEREDESCRIPTION HERE
							DESCRIPTION HERE
							DESCRIPTION HERE
							DESCRIPTION HERE
							DESCRIPTION HERE
							DESCRIPTION HERE
							DESCRIPTION HERE
								</p>
							
							</div>

						</div>
							<div class="row">
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#">
											<img src="https://wallpaperscraft.com/image/star_wars_the_force_awakens_main_characters_105940_300x168.jpg" alt="Movie 1"></a>
										</div>
									</div>
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="#"><img src="https://wallpaperscraft.com/image/gi_joe_retaliation_dwayne_johnson_adrianne_palicki_bruce_willis_98582_300x168.jpg" alt="Movie 2"></a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="https://wallpaperscraft.com/image/godzilla_gareth_edwards_2014_science_fiction_93116_300x168.jpg" alt="Movie 3"></a>
									<h1> here is my data</h1>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="https://wallpaperscraft.com/image/robocop_robo_cop_film_movie_2014_joel_kinnaman_alex_murphy_sony_pictures_metro_goldwyn_mayer_colombia_pictures_mgm_action_crime_sci_fi_thriller_police_siren_motorcycle_moto_cyborg_93076_300x168.jpg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="https://wallpaperscraft.com/image/edge_of_tomorrow_bill_cage_rita_vrataski_tom_cruise_emily_blunt_93079_300x168.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="#"><img src="https://wallpaperscraft.com/image/terminator_genisys_emilia_clarke_sarah_connor_102929_300x168.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div> <!-- .row -->
						
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">December premiere</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">November premiere</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">October premiere</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore vitae mollitia nesciunt saepe cupiditate</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Join Us</h3>
								<ul class="no-bullet">
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Sit amet consecture</a></li>
									<li><a href="#">Dolorem respequem</a></li>
									<li><a href="#">Invenore veritae</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google+</a></li>
									<li><a href="#">Pinterest</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>