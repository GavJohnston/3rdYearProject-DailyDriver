<?php
session_start();

if(isset($_SESSION['usr_id'])=="") {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Daily Driver</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/Daily-Driver-712553245587584/?skip_nax_wizard=true"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/dailydrive16"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                            
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="about-us.php">About Us</a></li>
                        <li><a href="Commute.php">Commute</a></li>
                        <li><a href="dailycosts.php">Daily Costs</a></li>
                        <li><a href="Meals.php">Meals</a></li>
                        <li><a href="Tasks.php">Tasks</a></li> 
                        <li><a href="Sleep.php">Sleep</a></li> 
                        <li><a href="logout.php" class="btn btn-info" role="button">Log Out</a></li>
                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>About Daily Driver</h2>
				<p class="center">Daily Driver is a multi-purpose app, the main aim of the app is to improve your daily lifestyle.<br>The areas that we wish to improve are the following; Daily Costs, Meals, Tasks, Sleep, Commute. Which you can access from the tabs found on the top of the webpage.</br>once inputted with the correct information from the user, will guide the user to an improved lifestyle based on them using the application over an extended period of time.</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/Silouhette.jpg" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/Hamburger.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/Sleeping.jpg" class="img-responsive" alt=""> 
					   </div>
					    <div class="item">
							<img src="images/office.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill -->
		
			

			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<p><h2>Our Team</h2></p>
					<p class="center">The team of Daily Driver aims to help its users by improving their basic lifestyle duties, from day one has been its four founders Gavin Johnston, Paul Connolly,Conor Larkin and Daniel Gilbert.</p>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/Gavin.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Gavin Johnston</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li <a>Web Designer</a></li>
										<li <a>User Interface</a></li>
										<li <a>UX</a></li>
										<li <a>Project Manager</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="https://www.facebook.com/Daily-Driver-712553245587584/?skip_nax_wizard=true"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/dailydrive16"><i class="fa fa-twitter"></i></a></li> 
									</ul>
								</div>
							</div><!--/.media -->
							<p>Hi, my name is Gavin and im one of the 4 founders of the Daily Driver app that was started in 2016.</p>
						</div>
					</div><!--/.col-lg-4 -->
					
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/Paul.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Paul Connolly</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li <a>Web Devloper</a></li>
										<li <a>Research Team</a></li>
										<li <a>UX Architect</a></li>
										<li <a>Web Strategist</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="https://www.facebook.com/Daily-Driver-712553245587584/?skip_nax_wizard=true"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/dailydrive16"><i class="fa fa-twitter"></i></a></li> 
									</ul>
								</div>
							</div><!--/.media -->
							<p>Hello, my name is Paul im one of the lead Web Developers on our team.</p>
						</div>
					</div><!--/.col-lg-4 -->					
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/Conor.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Conor Larkin</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li <a>Web Designer</a></li>
										<li <a>Research Team</a></li>
										<li <a>UX Architect</a></li>
										<li <a>Content Specialist</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="https://www.facebook.com/Daily-Driver-712553245587584/?skip_nax_wizard=true"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/dailydrive16"><i class="fa fa-twitter"></i></a></li> 
									</ul>
								</div>
							</div><!--/.media -->
							<p>Hello, my name is Conor and I am one of the lead researchers on the Daily Driver team.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/Dan.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Daniel Gilbert</h4>
									<h5>Founder and CEO</h5>
										<ul class="tag clearfix">
										<li <a>Web Designer</a></li><br>
										<li <a>Research Team</a></li>
										<li <a>UX Architect</a></li>
										<li <a>Content Specialist</a></li></br>
									</ul>
									<ul class="social_icons">
										<li><a href="https://www.facebook.com/Daily-Driver-712553245587584/?skip_nax_wizard=true"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/dailydrive16"><i class="fa fa-twitter"></i></a></li> 
									</ul>
							</div><!--/.media -->
							<p>Hi, my name is Daniel and I am one of the main Developers on the Daily Driver team.</p>
						</div>
					</div>
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	


    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="index.php">About us</a></li>
                            <li><a href="contactus.php">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4></h4>
                        <ul>
                            </br>
                            <li><a href="Sleep.php">Sleep</a></li>
                            <li><a href="Commute.php">Commute</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4></h4>
                        <ul>
                            </br>
                            <li><a href="dailycosts.php">Daily Costs</a></li>   
                            <li><a href="Meals.php">Meals</a></li>

                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4></h4>
                        <ul>
                            </br>
                            <li><a href="Tasks.php">Tasks</a></li>

                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>