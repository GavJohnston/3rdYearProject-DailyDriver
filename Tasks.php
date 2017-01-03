<?php
session_start();

if(isset($_SESSION['usr_id'])=="") {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    
    
    <style type="text/css">
table
        {
            position: relative;
    left: 300px;
background-color: #c42d2d;
            
        }
body {
  margin: 0;
  min-width: 200px;
}


* {
  box-sizing: border-box;
}


ul1 {
  margin: 0;
  padding: 0;
}


ul1 li1 {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 980px;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;


  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

ul1 li1:nth-child(odd) {
  background: #f9f9f9;
}


ul1 li1:hover {
  background: #ddd;
}

ul1 li1.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}


ul1 li1.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 30px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}


.close {
  position: absolute;
  right: 5;
  top: 0;
  padding: 12px 16px 12px 16px
}

.close:hover {
  background-color: #f44336;
  color: white;
}


.header {
  background-color: #f44336;
  width:100%;
  height:300px;
  color: white;
  text-align: center;
  position:absolute;
  top:275px;
  left:0px;
}

.header:after {
  content: "";
  display: table;
  clear: both;
}


input {
  border: none;
  width: 35%;
  padding: 10px;
  float: left;
  font-size: 16px;
position:absolute;
top:25px;
left:35%;
}


.addBtn{
  padding: 10px;
  width: 15%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
 position:absolute;
top:25px;
left:70%;
}

.addBtn:hover {
  background-color: #bbb;
}  
p4{
    position: absolute;
    left:center;
    top:530px ;
width: 1000px;
   }    


footer{
       position:absolute;  
           left:0px;
           top:1000px;
    width: 100%;

}
carousel-slider{
       position:absolute;  
           top:200px;
           left:0px;
    width: 100%;

}
p3{
       position:absolute;  
           top:900px;
           left:0px;
    width: 100%;

}

    </style>
    


    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tasks | Daily Driver</title>
    
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
                    <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="logo2"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="Commute.php">Commute</a></li>
                        <li><a href="dailycosts.php">Daily Costs</a></li>                        
                        <li><a href="Meals.php">Meals</a></li>
                        <li class="active"><a href="Tasks.php">Tasks</a></li> 
                        <li><a href="Sleep.php">Sleep</a></li>     
                        <li><a href="logout.php" class="btn btn-info" role="button">Log Out</a></li>                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="blog" class="container">
        <div class="center">
            <h2>Tasks</h2>

        </div>
        <p4>
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
							<img src="images/january.png" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/February1.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/march1.png" class="img-responsive" alt=""> 
					   </div>
					    <div class="item">
							<img src="images/April1.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/may1.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/june1.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/july.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/august.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/september.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/october.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/November.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/december.png" class="img-responsive" alt=""> 
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
</p4>






<body>
<div id="myDIV" class="header">
  <h2 style="margin:3px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul1 id="myUL1">

</br>
</ul1>


<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI1");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul1');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI1') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li1 = document.createElement("li1");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li1.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL1").appendChild(li1);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li1.appendChild(span);
li1.appendChild(document.createElement("br"));
li1.appendChild(document.createElement("br"));

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

<p3>
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
</p3>
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