<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
	  <title>British</title>
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
    <a                  href="index.html">    Home    </a>
    <a></a>
    <a                  href="about.html">    About   </a>
    <a></a>
    <a                  href="contact.html">  Contact </a>
    <a></a>
    <a                  href="login.html">    Login   </a>
  </div>
  <div class = "textArea" id="textArea">
    Try some of our British food! Feel free to use the search bar if you can't find anything that takes your fancy.
  </div>
  <div class = "catalogue" id="catalogue">
    <?php include 'rlist.php';?>
  </div>
</body>
<footer>
  <div class ="footer" id="footer">
    Copyright © 2018 Delectamenti. Delectamenti is not responsible for any allergic reactions caused by the consumption of our recipes. <a href="https://www.fda.gov/Food/ResourcesForYou/Consumers/ucm079311.htm"> Please check this FDA document on food allergies if unsure. </a>
    Recipes for this website have been used under the non-commercial research and private study exception to the Copyright. All recipes originally sourced from BBC Food.
    Any enquiries please use the contact form or email us at <a href="mailto:delectamentiuk@gmail.com?Subject=Enquiry" target="_top">DelectamentiUK@gmail.com</a> .
  </div>
</footer>
</html>
