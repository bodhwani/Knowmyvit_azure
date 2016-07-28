<!DOCTYPE html>
<html lang="en">

<head>
<?php echo $__env->yieldContent('title'); ?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">


<!-- Loading third party fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
<link href="<?php echo e(URL::to("fonts/font-awesome.min.css")); ?>" rel="stylesheet" type="text/css">

<!-- Loading main css file -->
<link rel="stylesheet" href="<?php echo e(URL::to("src/css/style.css")); ?>">

    <script src="<?php echo e(URL::to("js/ie-support/html5.js")); ?>"></script>
    <script src="<?php echo e(URL::to("js/ie-support/respond.js")); ?>"></script>

</head>






<body>

 
<div id="site-content">
    <header class="site-header">
        <div class="container">
            <a href='<?php echo e(route('logged_in')); ?>' id="branding">
                <img src="<?php echo e(URL::to("images/logo.png")); ?>" alt="" class="logo">
                <div class="logo-copy">

                    <h1 class="site-title">Company Name</h1>
                    <small class="site-description">Tagline goes here</small>
                </div>
            </a> <!-- #branding -->

            <div class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                   
                    <li class="menu-item"><a href='<?php echo e(route('logged_in')); ?>'
                        >Home</a></li>
                    <li class="menu-item"><a href='<?php echo e(route('about')); ?>'
                        >About</a></li>
                    <li class="menu-item current-menu-item"><a href='<?php echo e(route('review')); ?>'
                        >Movie reviews</a></li>
                    <li class="menu-item"><a href='<?php echo e(route('joinus')); ?>'
                        >Join us</a></li>
                    <li class="menu-item"><a href='<?php echo e(route('contact')); ?>'
                        >Contact</a></li>
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
        
                        <?php echo $__env->yieldContent('content'); ?>
        
                <div class="breadcrumbs">
                    <a href='<?php echo e(route('logged_in')); ?>'>Home</a>
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
                        <figure class="movie-poster"><img src="http://www.hdwallpapers.in/thumbs/justice_league_2017_movie-t1.jpg" alt="#"></figure>
                        <div class="movie-title"><a href="single.html">Maleficient</a></div>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src="https://wallpaperscraft.com/image/minions_2015_cartoon_100453_300x168.jpg" alt="Slide 2" alt="#"></figure>
                        <div class="movie-title" value="<?php echo e($movie->text); ?>"><a href="single.html">The adventure of Tintin</a></div>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster">
                        <img src="https://wallpaperscraft.com/image/godfather_marlon_brando_don_vito_corleone_black_rose_740_300x168.jpg" alt="#"></figure>
                        <div class="movie-title"><a href="single.html">Hobbit</a></div>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src="https://wallpaperscraft.com/image/gi_joe_retaliation_dwayne_johnson_adrianne_palicki_bruce_willis_98582_300x168.jpg" alt="Movie 2" alt="#"></figure>
                        <div class="movie-title"><a href="single.html">Exists</a></div>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src="https://wallpaperscraft.com/image/gi_joe_retaliation_dwayne_johnson_adrianne_palicki_bruce_willis_98582_300x168.jpg" alt="Movie 2" alt="#"></figure>
                        <div class="movie-title"><a href="single.html">Drive hard</a></div>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src="https://wallpaperscraft.com/image/godfather_marlon_brando_don_vito_corleone_black_rose_740_300x168.jpg" alt="#"></figure>
                        <div class="movie-title"><a href="single.html">Robocop</a></div>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src="https://wallpaperscraft.com/image/godfather_marlon_brando_don_vito_corleone_black_rose_740_300x168.jpg" alt="#"></figure>
                        <div class="movie-title"><a href="single.html">Life of Pi</a></div>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem doloremque.</p>
                    </div>
                    <div class="movie">
                        <figure class="movie-poster"><img src="https://wallpaperscraft.com/image/edge_of_tomorrow_bill_cage_rita_vrataski_tom_cruise_emily_blunt_93079_300x168.jpg" alt="#"></figure>
                        <div class="movie-title"><a href="single.html">The Colony</a></div>
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
                            <li>Lorem ipsum dolor</li>
                            <li>Sit amet consecture</li>
                            <li>Dolorem respequem</li>
                            <li>Invenore veritae</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Help Center</h3>
                        <ul class="no-bullet">
                            <li>Lorem ipsum dolor</li>
                            <li>Sit amet consecture</li>
                            <li>Dolorem respequem</li>
                            <li>Invenore veritae</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Join Us</h3>
                        <ul class="no-bullet">
                            <li>Lorem ipsum dolor</li>
                            <li>Sit amet consecture</li>
                            <li>Dolorem respequem</li>
                            <li>Invenore veritae</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Social Media</h3>
                        <ul class="no-bullet">
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Google+</li>
                            <li>Pinterest</li>
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



<script src="<?php echo e(URL::to("js/jquery-1.11.1.min.js")); ?>"></script>
<script src="<?php echo e(URL::to("js/plugins.js")); ?>"></script>
<script src="<?php echo e(URL::to("js/app.js")); ?>"></script>
</body>

</html>





