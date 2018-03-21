<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
	<?php
	//get category ID
	$cat= $_GET['cat'];
	//get countryname
	$cat= $_GET['country'];
		echo'
	<title>Delectamenti ~ Recipes from ' . $country . '</title>
	<meta name="DC.Title" content="Recipes from ' . $country . '">
	';
	?>
	<meta name="DC.Creator" content="Martyn Dewar / Callum Hayden">
	<meta name="DC.Subject" content="F28CD Coursework - Delectamenti">
	<meta name="DC.Description" content="A website gathering recipes and helping to teach people how to cook.">
	<meta name="DC.Publisher" content="Martyn Dewar &amp; Callum Hayden, MACS, Heriot-Watt University">
	<meta name="DC.Language" content="en-GB">
	<meta name="DC.Date" content="2018">
    <link rel="stylesheet" media="screen and (min-width: 550px)" href="style.css"></link>
    <link rel="stylesheet" media="screen and (max-width: 550px)" href="smallstyle.css"></link>
</head>
<body>
<div class = "wrapper" id="wrapper">
  <div class = "socialsearch" id="socialsearch">
    <a href=https://www.instagram.com/delectamentiuk><img src="Image/instagram.png" alt="Instagram link" width="25" height="25"></img></a>
    <a href=https://twitter.com/DelectamentiUk><img src="Image/twitter.png" alt="Twitter link" width="25" height="25"></img></a>
    <a href=https://www.pinterest.co.uk/delectamenti/pins/><img src="Image/pinterest.png" alt="Pinterest link" width="25" height="25"></img></a>
    <a href=https://www.facebook.com/DelectamentiUK/><img src="Image/facebook.png" alt="Facebook link" width="25" height="25"></img></a>
  </div>
  <div class = "search" id="search">
    <form>
      <input type="text" name="search" placeholder="Search.."></input>
    </form>
  </div>
  <div class = "logo" id="logo">
    <a href="index.html"><h1>Delectamenti</h1></a>
  </div>
  <div class = "nav" id="myNav">
    <?php include 'includes/nav.php';?>
  </div>
  <div class = "textArea" id="textArea">
    Try some of our <?php echo $country ?> food! Feel free to use the search bar if you can't find anything that takes your fancy.
  </div>
  <div class = "catalogue" id="catalogue">
    <?php include 'rlist.php?cat='$cat;?>
  </div>
<footer>
  <div class ="footer" id="footer">
    <?php include 'includes/footer.php';?>
  </div>
</footer>
</body>
</html>
