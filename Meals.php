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
    <title>Meals | Daily Driver</title>
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



table {
    position: relative;
    left: 200px;
    top:-230px ;
    text-shadow: 1.2px 1.2px #000000;   
    width: 80%;

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
  text-shadow: 2px 2px 1px #000000;
  font-family: Arial;
  color: #1f80cf;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #000000 3px;
  text-decoration: none;
     position: relative;
top:80px;    
left: -180px;
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
<script type="text/javascript" src="">
    $('.collapse').collapse()
</script>


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
                        <li class="active"><a href="Meals.php">Meals</a></li>
                        <li><a href="Tasks.php">Tasks</a></li> 
                        <li><a href="Sleep.php">Sleep</a></li>  
                        <li><a href="logout.php" role="button">Log Out</a></li>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    <section id="portfolio">
        <div1 class="container">
            <div1 class="center">
               <h2>Meals</h2>
               <p class="center wow fadeInDown">Within this section we give you a list of meals which you can chose from for each set meal of the day</p>
            </div1>

<table>
    <tr> 
         <th><div2 class="container1">

  <button type="button" class="NextButton" data-toggle="collapse" data-target="#demo">Breakfast</button>
    <div2 id="demo" class="collapse">
  <p1>
<TABLE BORDER="3" CELLPADDING="6" CELLSPACING="6">
           <TD>Name</TD>
           <TD>Ingredients</TD>
           <TD>Instructions</TD>
           <TD>Calories</TD>
           <TR>
           <TD valign="top" width="270">Breakfast Stuffed Peppers</TD>
           <TD valign="top" width="270"px> <UL><LI>3 bell peppers, sliced in half lengthwise and seeded (any color)</LI>
<LI>2 teaspoons extra virgin olive oil</LI>
<LI>1 red pepper, diced</LI>
<LI>1 onion, diced</LI>
<LI>2 cups baby spinach</LI>
<LI>3 eggs</LI>
<LI>3 egg whites</LI>
<LI>½ cup skim milk</LI>
<LI>½ cup reduced-fat mild cheddar shredded cheese</LI>
<LI>3 links fat-free chicken sausage links, diced</LI>
<LI>1 teaspoon garlic powder</LI>
<LI>½ teaspoon salt</LI>
<LI>⅛ teaspoon black pepper</LI></UL></TD>
<TD valign="top" width="370"px>(1.)Preheat the oven to 350° F.</br> 
(2.)line the pepper halves cut-side up place in a  baking dish.</br>
(3.)Heat a large skillet over medium heat and add the oil, diced red pepper, and onion. Cook until soft, 6-8 minutes.</br>
(4.)Add the spinach and cook until wilted, about 1 minute. Remove from the heat to cool slightly.</br>
(5.)In a large mixing bowl, whisk the eggs and egg whites together. Add the cooked vegetables, the skim milk, cheese, sausage links, garlic powder, salt, and black pepper, whisking to combine.</br>
(6.)pour the egg mixture in a liquid measuring cup and evenly pour the mixture in all 6 pepper halves.</br>
(7.)Pour enough water in the bottom of the baking dish to cover the bottom of the peppers by about 1 centimeter.</br>
(8.)Cover the dish with foil, and bake until the eggs are set and the peppers are soft, 40-45 minutes.</TD>
           <TD valign="top" width="130">163 calories</TD>
           <TR>
           <TD valign="top">Quinoa Banana Pancakes</TD>
<TD valign="top"><UL><LI>1 cup cooked quinoa, cooled</LI>
<LI>1 cup + 1 tablespoon skim milk</LI>
<LI>1⅓ cup white whole wheat flour</LI>
<LI>1 tablespoon brown sugar</LI>
<LI>2/3 cup liquid egg whites</LI>
<LI>2 bananas, mashed</LI>
<LI>1 teaspoon vanilla</LI>
<LI>1 tablespoon stevia (or your favorite sweetener)</LI>
<LI>4 tablespoon Maple Grove Farms® Sugar Free Maple Syrup</LI></UL></TD>
           <TD valign="top">(1.)Cook quinoa according to package directions. Allow it to cool slightly.</BR>
(2.)In a large bowl, combine quinoa, milk, wheat flour and brown sugar.</BR>
(3.)In a small bowl, mash bananas and stir in vanilla and stevia. Add to quinoa mixture.</BR>
(4.)In a medium-size bowl, beat egg whites on low speed until they are fluffy. This might take 2-3 minutes.</BR>
(5.)Using a spatula, fold egg whites into quinoa mixture.</BR>
(6.)Spray a medium-size skillet with nonstick cooking spray and place over medium heat.</BR>
(7.)Using a ⅓ measuring cup, pour batter into skillet. Flip each pancake after cooking for 3-4 minutes on each side or until batter starts to bubble.</BR>
(8.)Top 3 pancakes with 1 tablespoon syrup</BR></TD>
           <TD valign="top">269 Calories</TD>
           <TR>
           <TD valign="top">Crispy Potato, Chorizo, and Green Chili Hash With Avocado and Eggs Recipe</TD>
           <TD valign="top"><UL><LI>1 1/2 pounds russet or Yukon gold potatoes, cut into 3/4- to 1/2-inch dice (see note above)</LI>
<LI>2 tablespoons distilled white vinegar</LI>
<LI>Kosher salt</LI>
<LI>4 ounces Spanish chorizo, diced</LI>
<LI>1/4 cup vegetable, canola, or olive oil, divided, plus more as needed</LI>
<LI>1/2 teaspoon ground cumin</LI>
<LI>1/4 teaspoon ground paprika</LI>
<LI>Freshly ground black pepper</LI>
<LI>6 scallions, white and light green parts cut into 1-inch lengths, greens sliced and reserved separately</LI>
<LI>1 poblano pepper, cut into 1/2-inch dice</LI>
<LI>4 eggs</LI>
<LI>1/4 cup roughly chopped fresh cilantro leaves</LI>
<LI>1/2 small avocado diced</LI>
<LI>1/2 cup homemade or store-bought salsa verde for serving (optional)</LI>
<LI>12 warm corn tortillas for serving (optional)</UL></TD>
           <TD valign="top">
(1.)Preheat oven to 375°F. Place potatoes in a large saucepan and cover with 2 quarts cold water. Add vinegar and 2 tablespoons kosher salt. Bring to a boil over high heat. Reduce to a simmer and cook until barely tender, about 5 minutes after coming to a boil. Drain potatoes in a colander and let drain for 2 minutes.
</br>
(2.)Meanwhile, place chorizo chunks in a cast iron skillet and place over medium heat. Cook, stirring, until chorizo is crisp on all sides and fat has rendered out, about 10 minutes total. Remove chorizo with a slotted spoon to a large bowl, leaving fat in skillet. Set chorizo aside.
</br>
(3.)When potatoes are drained, add 3 tablespoons oil to skillet and heat over medium-high heat until shimmering. Add drained potatoes and cook, stirring and tossing occasionally, until potatoes are deep brown and crisp on all sides, about 20 minutes total. Add cumin and paprilka and cook, stirring, until fragrant, about 30 seconds. Season to taste with salt and pepper. Transfer potatoes to bowl with chorizo and set aside.
</br>
(4.)Add remaining tablespoon oil to skillet and heat over high heat until shimmering. Add scallion whites and light greens and poblano and cook, stirring occasionally, until charred, about 2 minutes. Season to taste with salt and pepper then transfer to bowl with potatoes and chorizo. Toss contents of bowl and return to skillet. Make 4 wells in potato mixture.
</br>
(5.)Carefully break 1 egg into a small bowl and slide into a fine mesh strainer over the sink. Swirl egg very gently until excess loose white drains away. Carefully add to one of the cavities in the skillet. Repeat with remaining three eggs.
</br>
(6.)Drizzly eggs with a few drops of oil, season with salt and pepper, and transfer to oven. Cook until whites are barely set but yolks are still runny, about 10 minutes. Remove from oven, garnish with sliced scallion greens, chopped cilantro, and avocado. Serve immediately with salsa and tortillas.</TD>
           <TD valign="top">330 Calories</TD>
           </TR>
           </TABLE>
  </div2></th>
    </p1>  
  </div2></th>
  
        <th><div2 class="container2">
  <button type="button" class="NextButton" data-toggle="collapse" data-target="#demo2">Lunch</button>
    <div2 id="demo2" class="collapse">
       <p2>
<TABLE BORDER="3" CELLPADDING="3" CELLSPACING="3">
           <TD>Name</TD>
           <TD>Ingredients</TD>
           <TD>Instructions</TD>
           <TD>Calories</TD>
           <TR>
           <TD valign="top" width="150">Spicy avocado wraps</TD>
           <TD valign="top" width="270"><UL><LI>½ x 300g pack Quorn chicken-style pieces (or similar vegetarian product), sliced at an angle</LI>
<LI>generous squeeze juice ½ lime</LI>
<LI>½ tsp mild chilli powder</LI>
<LI>1 garlic clove, chopped</LI>
<LI>1 tsp olive oil</LI>
<LI>2 seeded wrap</LI>
<LI>1 avocado, halved and stoned</LI>
<LI>1 roasted red pepper, from a jar<</LI>
<LI>few sprigs coriander, chopped</LI></UL></TD>
           <TD valign="top" width="280">(1.)Mix the vegetarian, chicken-style pieces with the lime juice, chilli powder and garlic.</br>
(2.)Heat the oil in a non-stick frying pan then fry the pieces for a couple of mins, while you warm the wraps following the pack instructions or if you have a gas hob, heat them over the flame to slightly char them. Do not let them dry out or they are difficult to roll.</br>
(3.)Squash half an avocado onto each wrap, add the peppers to the pan to warm them through then pile onto the wraps with the chicken-style pieces, and sprinkle over the coriander. Roll up, cut in half and eat with your fingers</br></TD>
           <TD valign="top" width="70">448 calories</TD>
           </TR>
            <TR>
           <TD valign="top">Chargrilled chicken, spinach and pasta salad</TD>
           <TD><UL><LI>4x 115g skinless chicken breasts</LI>
           <LI>2 limes</LI>
           <LI>1 tsp ground ginger and 1 tsp finely grated garlic</LI>
           <LI>3 tbsp mild curry powder</LI>
           <LI>½ red onion</LI>
           <LI>200g cherry tomatoes </LI>
           <LI>110g baby leaf spinac</LI>
           <LI>h 440g boiled wholemeal pasta shapes</LI>
           <LI>2 x 150g pots fat free natural yogurt</LI>
           <LI>2 tbsp Vanilla Müllerlight Yogurt </LI>
           <LI>6 tbsp finely chopped mint</LI>
           <LI>2 tbsp finely chopped coriander </LI>
           <LI>1 tbsp soy sauce </LI>
           <LI>Low calorie cooking spray</LI></UL> </TD>
           <TD valign="top">(1.)Cut the chicken into thin strips and place in a bowl with the lime zest and juice, ground ginger, garlic and curry powder. Toss to mix. Cover and leave to marinate in the fridge for at least 1 hour (overnight if possible).</br> 
           (2.)Thinly slice the onion and halve the tomatoes, place in a bowl with the spinach and cooked pasta and mix.</br>
           (3.)Make the dressing: place the natural yogurt, vanilla yogurt, mint, coriander and soy sauce in a food processor and blend until smooth.</br>
           (4.)Remove the chicken from the marinade. Heat a non-stick griddle pan sprayed with low calorie cooking spray. Add the chicken to the pan (in batches if necessary) and cook for 6-8 minutes, turning once, until cooked through.</br>
           (5.)Divide the salad between four serving plates, top with the chicken strips and drizzle over the dressing.</br></TD>
           <TD valign="top" width="170">400 calories</TD>
           <TR>
           <TD valign="top">Red lentil & carrot soup</TD>
           <TD valign="top"><UL><li>1 white onion, finely sliced</li>
<li>2 tsp olive oil</li>
<li>3 garlic cloves, sliced</li>
<li>2 carrots</li>
<li>scrubbed and diced</li>
<li>85g red lentils</li>
<li>1 vegetable stock cube, crumbled</li>
<li>generous sprigs parsley</li>
<li>chopped (about 2 tbsp) plus a few extra leaves</li></UL></TD>
           <TD valign="top">Put the kettle on to boil while you finely slice the onion. Heat the oil in a medium pan, add the onion and fry for 2 mins while you slice the garlic and dice the carrots. Add them to the pan, and cook briefly over the heat.</br>
Pour in 1 litre of the boiling water from the kettle, stir in the lentils and stock cube, then cover the pan and cook over a medium heat for 15 mins until the lentils are tender. Take off the heat and stir in the parsley. Ladle into bowls, and scatter with extra parsley leaves, if you like</br></TD>
           <TD>330 Calories</TD>
           </TR>
           </TR>
           
           </TABLE>
  </div2></th>
    </p2>    
        <th><div2 class="container3">

  <button type="button" class="NextButton" data-toggle="collapse" data-target="#demo3">Dinner</button>
   <div2 id="demo3" class="collapse">
   <p3>
<TABLE BORDER="3" CELLPADDING="3" CELLSPACING="3">
           <TD>Name</TD>
           <TD>Ingredients</TD>
           <TD>Instructions</TD>
           <TD>Calories</TD>
           <TR>
           <TD valign="top" width="150">Salmon-Apple Burgers</br></TD>
           <TD valign="top" width="190">1 cup apple cider</LI>
<LI>2 Golden Delicious apples, peeled and coarsely grated</LI>
<LI>3 medium shallots (or 1 small red onion), finely chopped</LI>
<LI>3 tablespoons apple cider vinegar</LI>
<LI>1 tablespoon curry powder</LI>
<LI>Kosher salt and freshly ground pepper</LI>
<LI>1/4 cup finely chopped cilantro, plus whole leaves for topping</LI>
<LI>1 1/4 pounds skinless salmon fillet, cut into 1-inch chunks</LI>
<LI>1/2 cup panko breadcrumbs</LI>
<LI>2 tablespoons mayonnaise, plus more for topping</LI>
<LI>2 teaspoons unsalted butter, plus more for the buns</LI>
<LI>4 potato buns, split and toasted</LI>
<LI>Potato chips, for serving (optional)</LI></UL>
</TD>
 <TD valign="top" width="260">(1.)Combine the cider, apples, 2 shallots, 2 tablespoons vinegar, 1 teaspoon curry powder, and salt and pepper to taste in a saucepan and bring to a boil. Cook until the liquid evaporates, about 12 minutes; let cool slightly. Stir in 2 tablespoons chopped cilantro.</br>
(2.)pulse three-quarters of the salmon in a food processor until finely ground. Add the remaining salmon; pulse until chopped. Transfer to a bowl; stir in the panko, mayonnaise and the remaining shallot, 2 tablespoons cilantro, 1 tablespoon vinegar and 2 teaspoons curry powder. Add salt and pepper. Form into four 1/2-inch-thick patties.</br>
(3.)Melt the butter in a large nonstick skillet over medium-high heat. </br>
(4.)Add the patties and cook until browned and cooked through, 2 to 3 minutes per side.</br>
(5.)Butter the buns and sandwich with the salmon burgers, mayonnaise, the apple relish and more cilantro. Serve with chips.
</TD>
           <TD valign="top" width="170">584 Calories</TD>
           </TR>
           <TR>
           <TD valign="top">Falafel-Crusted Chicken with Hummus Slaw</LI>
           <TD valign="top"><UL><LI>Cooking spray</LI>
<LI>3 skinless, boneless chicken breasts (about 1 1/4 pounds), sliced into 1/4-inch-thick strips</LI>
<LI>1 tablespoon extra-virgin olive oil</LI>
<LI>1/2 cup falafel mix</LI>
<LI>2 whole-wheat pitas, halved</LI>
<LI>6 tablespoons hummus</LI>
<LI>1 lemon</LI>
<LI>1/2 teaspoon harissa or other hot chile paste</LI>
<LI>4 cups shredded coleslaw mix</LI>
<LI>6 radishes, halved and thinly sliced</LI>
<LI>1 cup chopped fresh parsley</LI>
<LI>Kosher salt</LI></UL>
</TD>
           <TD valign="top">(1.)Preheat the oven to 425 degrees F. Set a rack on a rimmed baking sheet and coat with cooking spray. </br>
           (2.)Toss the chicken with the olive oil in a large bowl, then add the falafel mix and toss to coat.</br>
           (3.)Arrange the chicken on the rack and bake until golden and cooked through, about 10 minutes.</br> 
           (4.)While the chicken is baking, stack the pita halves and wrap them in foil; warm in the oven, about 5 minutes.</br>
(5.)mix the hummus, lemon zest and juice, harissa and 3 tablespoons water in a large bowl. Remove 2 tablespoons of the hummus sauce and reserve.</br>
(6.)Add the coleslaw mix, radishes and parsley to the remaining hummus sauce and toss. Season with salt.</br>
(7.)Divide the chicken among plates and drizzle with the reserved hummus sauce. Stuff the slaw in the pitas and serve with the chicken.</br>
(8.)Per serving: Calories 366; Fat 9 g (Saturated 1 g); Cholesterol 82 mg; Sodium 587 mg; Carbohydrate 32 g; Fiber 8 g; Protein 43 g</br>
</TD>
           <TD valign="top">543 calories</TD>
           </TR>
           <TR>
               <TD valign="top">Spicy Pasta with Tilapia</TD>
           <TD valign="top"><UL><LI>1/2 pound tilapia fillets, cut into small chunks</LI>
<LI>2 tablespoons extra-virgin olive oil</LI>
<LI>3 cloves garlic, chopped</LI>
<LI>1/2 to 3/4 teaspoon red pepper flakes</LI>
<LI>1/2 cup dry white wine</LI>
<LI>1 28 -ounce can San Marzano tomatoes, crushed by hand</LI>
<LI>1/2 cup chopped fresh basil, plus more for topping</LI>
<LI>Kosher salt</LI>
<LI>10 ounces multigrain spaghetti</LI>
<LI>2 tablespoons chopped fresh parsley</LI></ul>
</TD>
           <TD valign="top">(1.)Toss the tilapia, 1 tablespoon olive oil, 1 teaspoon of the garlic and 1/4 teaspoon red pepper flakes in a medium bowl. Cover and refrigerate.</br>
(2.)Heat the remaining 1 tablespoon olive oil in a large skillet over medium heat. Add the remaining garlic and 1/4 to 1/2 teaspoon red pepper flakes and cook, stirring, until the garlic starts to soften, about 30 seconds.</br>
(3.)Add the wine and simmer until reduced by half, about 3 minutes. Add the tomatoes, 1/4 cup basil and 1/2 cup water. Bring to a boil and cook, stirring occasionally, until the sauce is slightly thickened, about 12 minutes.</br>
(4.)Meanwhile, bring a large pot of salted water to a boil. Add the pasta and cook as the label directs.When the pasta is almost done, add the tilapia to the skillet with the tomato sauce and simmer</br>
(5.)stirring gently, until just cooked through, about 3 minutes. Stir in the parsley and the remaining 1/4 cup basil; season with salt. Drain the pasta and add it to the sauce. Divide among bowls and top with more basil.</br>
</TD>
           <TD valign="top">435 Calories</TD>
           </TR>
           </TABLE>
  </div2></th>
    </p3>  
  </div2>
  </div2>
</div2></th>
        
</tr>

</table>







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
