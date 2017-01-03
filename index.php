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
    <title>Home | Daily Driver</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
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

<body class="homepage">

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
                    <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="logo2"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
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

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Your Daily Driver</h1>
                                    <h2 class="animation animated-item-2">Your Daily Driver's main aim is to improve your daily lifestyle.
</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                         

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/blogger.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Your Daily Driver</h1>
                                    <h2 class="animation animated-item-2">The areas that we wish to improve are the following; Daily Costs, Meals, Tasks, Sleep, Commute. Which you can access from the tabs found on the top of the webpage. </h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/car3.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/Veg.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Your Daily Driver</h1>
                                    <h2 class="animation animated-item-2">Once inputted with the correct information from the user, will guide the user to an improved lifestyle based on them using the application over an extended period of time.</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/run.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

  

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Daily Driver Services</h2>
                <p class="lead">Below are the services that the Daily Driver web application provide to its user base, we aim to as a developer provide a seamless UI</p>
            </div>


                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/commute.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="Commute.php">Commute</a></h3>
                                <p>The Commute page on the Daily Driver web application , will give you the user an easier commute to your preferred destination of choice</p>
                                <a class="preview" href=Commute.php ><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/euro.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="dailycosts.php">Daily Costs </a></h3>
                                <p>The Daily Costs page, offers the user the opportunity to monitor the expenses</p>
                                <a class="preview" href=dailycosts.php ><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   


                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/meals.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="Meals.php">Meals</a></h3>
                                <p>The Meals section, offers the user the abiltiy to monitor their eating through any given time, this allows the user to set targets</p>
                                <a class="preview" href=Meals.php ><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/tasks.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="Tasks.php">Tasks </a></h3>
                                <p>The Tasks page, allows the user to keep track of what tasks they need to complete, this is a great organizational tool</p>
                                <a class="preview" href=Tasks.php ><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/sleep.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="Sleep.php">Sleep </a></h3>
                                <p>The Sleep page , monitors the users sleep patterns offering suggestions on how to improve</p>
                                <a class="preview" href=Sleep.php ><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            

                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->



    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="about-us.php">About us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>