<?php
session_start();

if(isset($_SESSION['usr_id'])=="") {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
window.sumInputs = function() {
    var inputs = document.getElementsByTagName('input'),
        result = document.getElementById('total'),
        sum = 0.00;            

    for(var i=0.00; i<inputs.length; i++) {
        var ip = inputs[i];

        if (ip.name && ip.name.indexOf("total") < 0.00) {
            sum += parseInt(ip.value) || 0.00;
        }

    }

    result.value =  sum ;
}

    </script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daily Costs | Daily Driver</title>
    
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

<style>

table, th, tr {
    border: 2px solid black;
}

table {
    position: relative;
    left: 260px;
    top:-180px ;
/*background-color: #c42d2d;
    text-shadow: 1.5px 1.5px #000000; */  
}
h3{
      position: relative;
top:-130px;    
left: 20px;   
}
.btn {
  background: #c42d2d;
  background-image: -webkit-linear-gradient(top, #c42d2d, #854141);
  background-image: -moz-linear-gradient(top, #c42d2d, #854141);
  background-image: -ms-linear-gradient(top, #c42d2d, #854141);
  background-image: -o-linear-gradient(top, #c42d2d, #854141);
  background-image: linear-gradient(to bottom, #c42d2d, #854141);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
 /* text-shadow: 2px 2px 1px #000000;*/
  font-family: Arial;
  color: #1f80cf;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #000000 3px;
  text-decoration: none;
     position: relative;
top:180px;    
left: 40px;
}

.btn:hover {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #1f80cf);
  background-image: -moz-linear-gradient(top, #000000, #1f80cf);
  background-image: -ms-linear-gradient(top, #000000, #1f80cf);
  background-image: -o-linear-gradient(top, #000000, #1f80cf);
  background-image: linear-gradient(to bottom, #000000, #1f80cf);
  text-decoration: none;
}

</style>

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
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="Commute.php">Commute</a></li>
                        <li class="active"><a href="dailycosts.php">Daily Costs</a></li>
                        <li><a href="Meals.php">Meals</a></li>
                        <li><a href="Tasks.php">Tasks</a></li> 
                        <li><a href="Sleep.php">Sleep</a></li> 
                        <li><a href="logout.php">Logout</a></li> 
                            </ul>
                     
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Daily Costs</h2>
                <p class="lead">Within this section you are asked to insert your expense each day and the cost and our application will total up the total amount spent each day</p>
            </div>
            <div class="clients-area center wow fadeInDown">


<!-- Add Your Own -->

        <div class="calculatorFormRow_header">
            <div class="calculatorFormHeader"><h3><b>Daily Costs</b></h3></div>
        </div>

        <div class="calculatorFormRow">
<table>
    <tr> 
         <th><div class="NextButton">Expense 1 €:<input name="ayo1" value=""></div></th>
          
        </div>

        <div class="calculatorFormRow_even">
        <th><div class="NextButton">Expense 6 €:<input name="ayo3" value=""></div></th>
        
        </div>
</tr>
<tr>
        <div class="calculatorFormRow">
        <th><div class="NextButton">Expense 2 €:<input name="ayo5" value=""></div></th>
        
        </div>

        <div class="calculatorFormRow_even">
        <th><div class="NextButton">Expense 7 €:<input name="ayo7" value=""></div></th>
        
        </div>
</tr>
<tr>
        <div class="calculatorFormRow">
        <th><div class="NextButton">Expense 3 €:<input name="ayo9" value=""></div></th>
        
        </div>

        <div class="calculatorFormRow">
        <th><div class="NextButton">Expense 8 €:<input name="ayo9" value=""></div></th>
        
        </div>
</tr>  
<tr>
        <div class="calculatorFormRow">
        <th><div class="NextButton">Expense 4 €:<input name="ayo9" value=""></div></th>
        
        </div>

        <div class="calculatorFormRow">
        <th><div class="NextButton">Expense 9 €:<input name="ayo9" value=""></div></th>
        
        </div>
</tr>  
    <tr>
        <div class="calculatorFormRow">
        <th><div class="NextButton">Expense 5 €:<input name="ayo9" value=""></div></th>
        
        </div>

        <div class="calculatorFormRow">
        <th><div class="NextButton">Expense 10 €:<input name="ayo9" value=""></div></th>
        
        </div>
</tr>  


<div class="calculatorFormRow">
          <a class="btn btn-primary active" href="javascript:sumInputs()">Find my Expense cost!</a>
</table>

<table>
<tr>
       <th><div>
       <b> Total €: </b><input type="text" name="total" id="total" size="64"></th>
       </div>
   </tr>
   </table>     


	</form>

</div>
        </div><!--/.container-->
    </section><!--/#feature-->


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