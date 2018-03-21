<?php setcookie("delectamemnti.user", "", time() - 3600); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
	  <title>Delectamenti - You are now logged out</title>
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
  <div class = "display">
	  <h2>You are now logged out!</h2>
	  <p>If you wish to log back in, please fill in your details... </p>
    <form name="login" method="post" action="login.php">
      <label for="username">Username</label>
      <input type="text" id="user_name" name="user_name" placeholder="Your username.."></input>
      <br />
      <label for="lname">Password</label>
      <input type="password" id="passwd" name="passwd" placeholder="Your password..."></input>
      <br />
      <input type="submit" value="Log In"></input>
      <input type="button" value="Sign Up" onclick="window.location.href='signup.php'"></input>
      <input type="button" value="Forgot Password" onclick="window.location.href='forgotpassword.php'"></input>
    </form>
  </div>
</body>
<footer>
  <div class ="footer" id="footer">
    <?php include 'includes/footer.php';?>
  </div>
</footer>
</html>
