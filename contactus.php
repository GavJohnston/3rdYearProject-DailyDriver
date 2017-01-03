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
    <title>Contact us | Daily Driver</title>
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

<style type="text/css">

a{
    color:#2985d6;
}

table {
    position: relative;
    left: 80px;
    top:-230px ;
    text-shadow: 1.2px 1.2px #000000;   
    width: 90%;
}



th, tr {
    position: relative;
    left: 260px;
    top:160px ;
    text-shadow: 1.2px 1.2px #000000; 

}
p1{
    position: relative;
    left: -180px;
    top:320px ;
    text-shadow: 1.1px 1.1px #000000;  
    width:1000px;
}
p2{
    position: relative;
    left: -180px;
    top:320px ;
    text-shadow: 1.1px 1.1px #000000;      
}
p3{
    position: relative;
    left: -200px;
    top:320px ;
    text-shadow: 1.1px 1.1px #000000;      
}


#rcorners1 {
   border-radius: 50px;
    border:2px solid #000000;
    background: #C42D2D;
    padding: 20px;
    width: 380px;
    height: 145px;
 position: relative;
left: 25%;
Top: 9px;
text-shadow: 1.2px 1.2px #000000;
}

#rcorners2 {
   
    border-radius: 50px;
    border:2px solid #000000;
    background: #C42D2D;
    padding: 20px;
    width: 380px;
    height: 170px;
 position: relative;
left: 25%;
Top:-0px;
text-shadow: 1.2px 1.2px #000000;
}

p5{
 position: relative;
left: 60%;   
Top: -360px;
    
}
p6{
text-shadow: 0.9px 0.9px #000000;
    
}


.social_icons,
.tag {
  list-style: none;
  padding: 0;
  margin: 10px 0;
  display: block;
}

.social_icons ,
.tag  {
  display: inline-block;
  margin-right: 5px;
}

.social_icons   a1 i{
  border-radius: 50%;
  color: #FFFFFF;
  height: 25px;
  line-height: 25px;
  font-size: 20px;
  padding: 0;
  text-align: center;
  width: 25px;
  opacity:.8;
}


.social_icons .fa-twitter:hover, 
.social_icons .fa-facebook:hover{
  transform: rotate(360deg);
  -ms-transform:rotate(360deg);
  -webkit-transform:rotate(360deg); 
  transition-duration:2s;
  transition-property: all;
  transition-timing-function: ease;
  opacity:1;
  transition: all 0.9s ease 0s;
  -moz-transition: all 0.9s ease 0s;
  -webkit-transition: all 0.9s ease 0s;
  -o-transition: all 0.9s ease 0s;
}

.team .social_icons .fa-facebook {
  background: #0182c4;
}

.post_reply p7 a1 i.fa-facebook {
  background: #0182C4;
}
.team .social_icons .fa-twitter {
  background: #20B8FF
}

.post_reply p7 a1 i.fa-twitter {
  background: none repeat scroll 0 0 #3FC1FE;
}
#wrapper {
    margin-left:auto;
    margin-right:auto;
    width:1160px;
}

</style>





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
    <section id="portfolio">
        <div1 class="container">
            <div1 class="center">
               <h2>Contact-Us</h2>
 <p class="lead">If you wish to contact us you can find us by Facebook, Twitter or by email listed below:</p>
            </div1>
<div id="wrapper"> 
<p id="rcorners1"><p7 class="social_icons"><a1 href="#"><i class="fa fa-facebook"></i></a1></p7><a href="https://www.facebook.com/Daily-Driver-712553245587584/?skip_nax_wizard=true">:Find Us on Facebook!</a> 									
</br>
<p7 class="social_icons"><a1 href="#"><i class="fa fa-twitter"></i></a1></p7><a href="https://twitter.com/dailydrive16">:Find Us on Twitter!</a></br>
Email us with your Query at DailyDriver@gmail.com</br>

</p>

<p id="rcorners2"><data-cloud9-id='46'><b data-cloud9-id='47'>Address:</b>
Daily Driver</br>
		Airside buisness park,</br>
		Swords,</br>
		Dublin</br>
<b data-cloud9-id='48'>Tel:</b>0123 456 70 90</br>
<b data-cloud9-id='49'>Email:</b>DailyDriver@gmail.com</p3></p>
</div>
    
<div id= "wrapper">
<p5>
<p6><b data-cloud9-id='50'>Where To Find US</b></p6>
<div id="map" style="width:500px;height:300px"></div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(53.445777,-6.221480);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</p5>
</div>
 
</form>
    </br>
    </br>
    </br>

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="index.php">About us</a></li>
                            <li><a href="Contact.php">Contact us</a></li>
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