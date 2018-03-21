<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook.">
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."><!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- used for RWD -->
    <link rel="stylesheet" media="screen and (min-width: 550px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 550px)" href="smallstyle.css">
	<link rel="stylesheet" href="temp.css">
	<link rel="stylesheet" href="https://use.typekit.net/iew2fuc.css">
	<title>Delectamenti ~ Home</title> <!-- specify title -->
	<meta name="DC.Title" content="Delectamenti Recipe website">
	<meta name="DC.Creator" content="Martyn Dewar / Callum Hayden">
	<meta name="DC.Subject" content="F28CD Coursework - Delectamenti">
	<meta name="DC.Description" content="A website gathering recipes and helping to teach people how to cook.">
	<meta name="DC.Publisher" content="Martyn Dewar &amp; Callum Hayden, MACS, Heriot-Watt University">
	<meta name="DC.Language" content="en-GB"><meta name="DC.Date" content="2018">
</head>
<body>
<div class = "wrapper" id="wrapper">
  <div class = "socialsearch" id="socialsearch">
    <a href=https://www.instagram.com/delectamentiuk><img src="Image/instagram.png" alt="Instagram link" width="25" height="25"></a>
    <a href=https://twitter.com/DelectamentiUk><img src="Image/twitter.png" alt="Twitter link" width="25" height="25"></a>
    <a href=https://www.pinterest.co.uk/delectamenti/pins/><img src="Image/pinterest.png" alt="Pinterest link" width="25" height="25"></a>
    <a href=https://www.facebook.com/DelectamentiUK/><img src="Image/facebook.png" alt="Facebook link" width="25" height="25"></a>
  </div>
  <div class = "search" id="search">
    <form>
      <input type="text" name="search" placeholder="Search.."></input>
    </form>
  </div>
  <div class = "logo" id="logo">
    <a href="index.php"><h1>Delectamenti</h1></a>
  </div>
  <div class = "nav" id="myNav">
	<?php include 'includes/nav.php';?>
  </div>
  <div class = "textArea" id="textArea">
    Try something new from some of our favourite categories, or explore all catagories
  </div>
  <div class = "catalogue" id="catalogue">
    <div align="center" class ="center">
      <a href="countrydisp.php?country=Britain&cat=0"><img src="Image/fryup.png" alt="Full British breakfast"  width="220" 
height="170">
      <p> British food </p></a>
    </div>
    <div align="center" class ="center">
      <a href="countrydisp.php?country=Italy&cat=2"><img src="Image/spaghettiallacarbonara.png" alt="Spaghetti 
alla 
Carbonara" width="220" height="170">
      <p> Italian food </p></a>
    </div>
    <div align="center" class ="center">
      <a href="vegetarian.html"><img src="Image/vegetablepadthai.png" alt="Vegetable pad Thai" width="220" height="170">
       <p> Vegetarian friendly </p></a>
    </div>
    <div align="center" class="center">
      <a href="desserts.html"><img src="Image/chocolatevolcano.png" alt="Chocolate volcano cake" width="220" height="170">
      <p> Desserts </p></a>
    </div>
<div class="recipe">
  <p>Our recommended recipe to try today:
  Full British Breakfast </p><br />
  <img src="Image/fryup.png" alt="Full British Breakfast" width="220" height="170" align="left">
    Ingredients: <br></br>
    4 English Pork Sausages<br />
    4 slices Back Bacon<br />
    6 ounces Mushrooms, Sliced<br />
    1 cup Canned Beans in Tomato Sauce<br />
    2 Ripe Tomatoes, Cut in half<br />
    pinch of Salt, Small<br />
    2 slices Black Pudding<br />
    2 slices White Bread<br />
    4 large Eggs<br />
    <br />
    <a href="fryup.html">Read more...</a>
</div>
</div>
</body>
<footer>
  <div class ="footer" id="footer">
    <?php include 'includes/footer.php';?>
  </div>
</footer>
</html>
