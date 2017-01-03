<?php
session_start();

if(isset($_SESSION['usr_id'])=="") {
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
   <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Commute | Daily Driver</title>
    
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
        <script type="text/javascript">
        function setiFrameSource(){
            var iFrame = document.getElementById("iFrame");
            var Url = "https://www.google.com/maps/embed/v1/directions?";
            var origin = "origin=".concat(document.getElementById("origin").value).concat("&");
            var destination = "destination=".concat(document.getElementById("destination").value).concat("&");
            var key = "key=".concat(document.getElementById("key").value);
            Url = Url.concat( origin, destination, key );
            iFrame.src= Url;
        }

        function initialize() {
          // Create the autocomplete object, restricting the search
          // to geographical location types.
          origin = new google.maps.places.Autocomplete(
              /** @type {HTMLInputElement} */(document.getElementById('origin')),
              { types: ['geocode'] });
          destination = new google.maps.places.Autocomplete(
              /** @type {HTMLInputElement} */(document.getElementById('destination')),
              { types: ['geocode'] });
          // When the user selects an address from the dropdown,
          // populate the address fields in the form.
          google.maps.event.addListener(origin, 'place_changed', function() {
            fillInAddress();
          });
          google.maps.event.addListener(destination, 'place_changed', function() {
            fillInAddress();
          });
        }

        // [START region_geolocation]
        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = new google.maps.LatLng(
                  position.coords.latitude, position.coords.longitude);
              var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
              });
              autocomplete.setBounds(circle.getBounds());
            });
          }
        }
        


      

</script>
</head><!--/head-->


<body onload="initialize()">

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
                        <li class="active"><a href="Commute.php">Commute</a></li>
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

      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
            
                <h2>Commute by Public Transport</h2>
                <form method="" target="">
                    <!-- Input field to search potential db for stops -->
                    <p></p><input type="text" name="EnterStopNumberName" placeholder="Enter stop number or name" style=" width:50%;"/></p>
                    
                    <!-- Search Buttons -->
                    <div id="NextButtonWrap" class="boxTextCenter">
                        <div id="NextBusButton" class="NextButton">Find Next Bus Time</div>
                        <div id="NextLuasButton" class="NextButton">Find Next Luas Time</div>
                        <div id="NextTrainButton" class="NextButton">Find Next Train Time</div>
                    </div>
                    
                    <!-- Response Text -->
                    <p>
                        <div id="NextBusCommuteTimeTxt" class="boxTextCenter"> </div>
                        <div id="NextLuasCommuteTimeTxt" class="boxTextCenter"> </div>
                        <div id="NextTrainCommuteTimeTxt" class="boxTextCenter"> </div>
                    </p>
                </form>
            </div>
                    </div>        

            
            
            <div class="container">
           <div class="center wow fadeInDown">
                <h2>Commute</h2>
                <p>Commute helps you find the fasest and most convient way of getting to your desired location</p>
            
            <form method="get" target="iFrame">
        <br><input id="origin" style="width:50%;" placeholder="Starting Point" name="origin" type="text" onFocus="geolocate()"/></br>
		<br><input id="destination" style="width:50%;" placeholder="Finishing Point" name="destination" type="text" onFocus="geolocate()"/></br>
		<input id="key" type="hidden" name="key" value="AIzaSyDNlc65rr591c5G1JAiFKvOM1iXQNal-TI">
		<br>
		<a class="btn btn-primary active" value="Go" onclick="setiFrameSource();">Calculate</a>
		</br>
        </form>
		<br>
        <iframe id="iFrame" name="iFrame" src="https://www.google.com/maps/embed/v1/directions?origin=Hyderabad&destination=JNTU Busstop&key=AIzaSyDNlc65rr591c5G1JAiFKvOM1iXQNal-TI" style="height:500px;width:80%" ></iframe>
		</br>
		</div> 
</div>		
</section>


            




        <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="index.php">About us</a></li>
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
    
    <script>
        //
        //
        //
        // Public Transport JS 
        //
        //
        // Set the onclick target function
        document.getElementById("NextBusButton").onclick = function() {TellBusCommuteTime()};
        document.getElementById("NextLuasButton").onclick = function() {TellLuasCommuteTime()};
        document.getElementById("NextTrainButton").onclick = function() {TellTrainCommuteTime()};

        var EmptyPublicCommuteTime = "";
        
        // Set times in minutes
        var NextBusTime = "11";
        var NextLuasTime = "7";
        var NextTrainTime = "13";

        // Tell The Time Within "NextButton" Divs
        function TellBusCommuteTime() {
            // Set Time Text and Button Text
            document.getElementById("NextBusCommuteTimeTxt").innerHTML = "Your next bus is due in " + NextBusTime + " minutes";
            document.getElementById("NextBusButton").innerHTML = "Refresh next bus time";
            
             // Clear Others
            document.getElementById("NextLuasCommuteTimeTxt").innerHTML = EmptyPublicCommuteTime;
            document.getElementById("NextLuasButton").innerHTML = "Find Next Luas Time"
            
            document.getElementById("NextTrainCommuteTimeTxt").innerHTML = EmptyPublicCommuteTime;
            document.getElementById("NextTrainButton").innerHTML = "Find Next Train Time";
            
        }

        function TellLuasCommuteTime() {
             // Set Time Text and Button Text
            document.getElementById("NextLuasCommuteTimeTxt").innerHTML = "The next Luas is due in " + NextLuasTime + " minutes";
            document.getElementById("NextLuasButton").innerHTML = "Refresh next Luas time";
            
             // Clear Others
            document.getElementById("NextBusCommuteTimeTxt").innerHTML = EmptyPublicCommuteTime;
            document.getElementById("NextBusButton").innerHTML = "Find Next Bus Time"
            
            document.getElementById("NextTrainCommuteTimeTxt").innerHTML = EmptyPublicCommuteTime;
            document.getElementById("NextTrainButton").innerHTML = "Find Next Train Time";
        }

        function TellTrainCommuteTime() {
             // Set Time Text and Button Text
            document.getElementById("NextTrainCommuteTimeTxt").innerHTML = "The next Train is due in " + NextTrainTime + " minutes";
            document.getElementById("NextTrainButton").innerHTML = "Refresh next Train time";
            
             // Clear Others
             document.getElementById("NextBusCommuteTimeTxt").innerHTML = EmptyPublicCommuteTime;
            document.getElementById("NextBusButton").innerHTML = "Find Next Bus Time"
            
            document.getElementById("NextLuasCommuteTimeTxt").innerHTML = EmptyPublicCommuteTime;
            document.getElementById("NextLuasButton").innerHTML = "Find Next Luas Time"

        }

        
    </script>
    
    
</body>

</html>