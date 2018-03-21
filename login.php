<?php
$servername = "mysql-server-1";
$username = "cmh1";
$password = "abccmh1354";
$DB_Name = "cmh1";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB_Name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['user_name']; // required
$password = $_POST['passwd']; // required

$sql = "SELECT user_name, passwd FROM Users WHERE user_name ='$username' AND passwd ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$cookie_name = "delectamenti.user";
	$cookie_value = $username;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        echo '
        <html>
        <head>
            <meta charset="UTF-8"></meta>
            <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
            <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
            <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
        	  <title>Logged in</title>
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
          <div class = "nav" id="myNav">';
			include 'includes/nav.php'; echo'
          </div>
          <div class = "display">
            Login succesfull!
          </div>
        </body>
        <footer>
          <div class ="footer" id="footer">';
			include 'includes/footer.php'; echo'
          </div>
        </footer>
        </html>';
} else {
    echo'
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8"></meta>
        <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
        <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
        <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
    	  <title>Login</title>
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
      <div class = "nav" id="myNav">';
			include 'includes/nav.php'; echo'
      </div>
      <div class = "display">
        Username and password combination incorrect. Please try again or use the forgot password option
        if you are not sure of your password. <br /><br />
        <form name="login" method="post" action="login.php">
          <label for="username">Username</label>
          <input type="text" id="user_name" name="user_name" placeholder="Your username.."></input>
          <br />
          <label for="lname">Password</label>
          <input type="password" id="passwd" name="passwd" placeholder="Your password..."></input>
          <br />
          <input type="submit" value="Log In"></input>
          <input type="button" value="Sign Up" onclick="window.location.href="signup.html"></input>
          <input type="button" value="Forgot Password" onclick="window.location.href="forgotpassword.html"></input>
        </form>
      </div>
    </body>
    <footer>
      <div class ="footer" id="footer">';
			include 'includes/footer.php'; echo'
      </div>
    </footer>
    </html>';
}
$conn->close();
?>
