<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
	  <title>Contact us</title>
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
<div class="display" id="myDisplay">
  To get in contact with me please fill out this form and I will get back to you as soon
  as possible.
  <br /><br /><br /><br />
  <form name="contactform" method="post" action="send_form_email.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."></input>
    <br />
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."></input>
    <br />
    <label for="country">Email</label>
    <input type="text" id=email name="email" placeholder="Your email address.."></input>
    <br />
    <label for="subject">Message</label>
    <textarea id="subject" name="subject" maxlength="1000" cols="25" rows="6"placeholder="Your message.." style="height:200px"></textarea>
    <br />
    <input type="submit" value="Submit"></input>
  </form>
</div>
</body>
<footer>
  <div class ="footer" id="footer">
    <?php include 'includes/footer.php';?>
  </div>
</footer>
</html>
