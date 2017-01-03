<?php
session_start();

if(isset($_SESSION['usr_id'])=="") {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sleep | Daily Driver</title>


        <!-- iPad/iPhone specific css below, add after your main css >
        <link rel="stylesheet" media="only screen and (max-device-width: 1024px)" href="ipad.css" type="text/css" />		
        <link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="iphone.css" type="text/css" />		
        -->
        <!-- If your application is targeting iOS BEFORE 4.0 you MUST put json2.js from http://www.JSON.org/json2.js into your www directory and include it here -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
            <link rel="shortcut icon" href="images/ico/favicon.ico">
        <script type="text/javascript" charset="utf-8" src="js/phonegap-1.4.1.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/jquery.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/jquery.mobile-1.0.1.min.js"></script>
        <script type="text/javascript">
            // If you want to prevent dragging, uncomment this section
            /*
            function preventBehavior(e) 
            { 
            e.preventDefault(); 
            };
            document.addEventListener("touchmove", preventBehavior, false);
            */

            /* If you are supporting your own protocol, the var invokeString will contain any arguments to the app launch.
            see http://iphonedevelopertips.com/cocoa/launching-your-own-application-via-a-custom-url-scheme.php
            for more details -jm */
            /*
            function handleOpenURL(url)
            {
            // TODO: do something with the url passed in.
            }
            */

            function onBodyLoad()
            {		
                document.addEventListener("deviceready", onDeviceReady, false);
            }

            /* When this function is called, PhoneGap has been initialized and is ready to roll */
            /* If you are supporting your own protocol, the var invokeString will contain any arguments to the app launch.
            see http://iphonedevelopertips.com/cocoa/launching-your-own-application-via-a-custom-url-scheme.html
            for more details -jm */
            function onDeviceReady()
            {
                // do your thing!
                //navigator.notification.alert("PhoneGap is working")
            }
            
            $( document ).bind( "mobileinit", function() {
                               // Make your jQuery Mobile framework configuration changes here!
                               
                               $.mobile.allowCrossDomainPages = true;
                               });

        </script>

    </head>
    <body onload="onBodyLoad()">
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
                        <li class="active"><a href="Sleep.php">Sleep</a></li>     
                        <li><a href="logout.php" class="btn btn-info" role="button">Log Out</a></li>                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
        <!-- Index -->
                <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Sleep Cycles</h2>
					<center>
							<img src="images/Sleep.jpg" class="img-responsive" alt=""> 
			</center>
    	        <p>On average a sleep cycle is about 1 hour 30 minutes long.</p>
                <p>An average human being requires 5-6 sleep cycles to have a good night sleep and be alert during the day.</p><br/><br/>
                <a class="btn btn-primary active" href="now.html" data-role="button" id="sleep_now">I want to sleep now</a>
                <a class="btn btn-primary active" href="late.html" data-role="button" id="sleep_later">I am sleeping later</a>
                </div>
</div> 
                    </div>		
            </section>

        <script type="text/javascript">
            $("#sleep_now").click(function(){ 
                                $("#wakeupTime").empty(); 
                                });
            $("#sleep_now").click(function(){ 
                                  $("#sleepDisplay").show();
                                  $("#wakeupTime2").empty(); 
                                  $("#newTime").hide(); 
            });
            $("#newTime").click(function(){ 
                                $("#sleepDisplay").show();
                                $("#wakeupTime2").empty(); 
                                $("#newTime").hide(); 
            });
            
            $("#wakeUp").click(function(){ 
                // do your thing!
                var currentTime = new Date();
                wakeupEarly = new Date(currentTime);
                wakeupModerate = new Date(currentTime);
                wakeupLate = new Date(currentTime);
                
                wakeupEarly.setMinutes(currentTime.getMinutes() + 360);
                wakeupModerate.setMinutes(currentTime.getMinutes() + 450);
                wakeupLate.setMinutes(currentTime.getMinutes() + 540);
                
               earlyHours = wakeupEarly.getHours();
               earlyMinutes = wakeupEarly.getMinutes();
               if (earlyMinutes < 10){
                    earlyMinutes = "0" + earlyMinutes;
               }
                               
               moderateHours = wakeupModerate.getHours();
               moderateMinutes = wakeupModerate.getMinutes();
               if (moderateMinutes < 10){
                    moderateMinutes = "0" + moderateMinutes;
               }
                               
               lateHours = wakeupLate.getHours();
               lateMinutes = wakeupLate.getMinutes();
               if (lateMinutes < 10){
                    lateMinutes = "0" + lateMinutes;
               }
               
               var ampm = (earlyHours > 11 ? "PM" : "AM");
               earlyTime = earlyHours + ":" + earlyMinutes + " " + ampm;
               var ampm = (moderateHours > 11 ? "PM" : "AM");
               moderateTime = moderateHours + ":" + moderateMinutes + " " + ampm;
               var ampm = (lateHours > 11 ? "PM" : "AM");
               lateTime = lateHours + ":" + lateMinutes + " " + ampm;
                               
                var times = earlyTime + "<br/>" + moderateTime + "<br/>" + lateTime;
                               
                //var times = currentTime + "<br/>" + wakeupEarly + "<br/>" + wakeupModerate + "<br/>" + wakeupLate;
                $("#wakeupTime").html(times);
                 
            });
                
            $("#laterTime").click(function(){ 
                      var hour = $("#hour").val();
                      var hour_milli_sec = hour * 3600000;
                      var minute = $("#minute").val();
                      var minute_milli_sec = minute * 60000;
                      var d = new Date();
                      var n = d.getTime();
                      
                      var total_time = n + hour_milli_sec + minute_milli_sec;
                      var futureTime = new Date(total_time);
                      
                      wakeupEarly = new Date(futureTime);
                      wakeupModerate = new Date(futureTime);
                      wakeupLate = new Date(futureTime);
                    
                      wakeupEarly.setMinutes(futureTime.getMinutes() - 360);
                      wakeupModerate.setMinutes(futureTime.getMinutes() - 450);
                      wakeupLate.setMinutes(futureTime.getMinutes() - 540);
                      
                      earlyHours = wakeupEarly.getHours();
                      earlyMinutes = wakeupEarly.getMinutes();
                      if (earlyMinutes < 10){
                      earlyMinutes = "0" + earlyMinutes;
                      }
                      
                      moderateHours = wakeupModerate.getHours();
                      moderateMinutes = wakeupModerate.getMinutes();
                      if (moderateMinutes < 10){
                      moderateMinutes = "0" + moderateMinutes;
                      }
                      
                      lateHours = wakeupLate.getHours();
                      lateMinutes = wakeupLate.getMinutes();
                      if (lateMinutes < 10){
                      lateMinutes = "0" + lateMinutes;
                      }
                      
                      var ampm = (earlyHours > 11 ? "PM" : "AM");
                      earlyTime = earlyHours + ":" + earlyMinutes + " " + ampm;
                      var ampm = (moderateHours > 11 ? "PM" : "AM");
                      moderateTime = moderateHours + ":" + moderateMinutes + " " + ampm;
                      var ampm = (lateHours > 11 ? "PM" : "AM");
                      lateTime = lateHours + ":" + lateMinutes + " " + ampm;
                      
                      var times = earlyTime + "<br/>" + moderateTime + "<br/>" + lateTime;
                      $("#sleepDisplay").hide();
                      $("#newTime").show();
                      $("#wakeupTime2").html(times);
                      
            });
        </script>
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
    </body>
</html>
