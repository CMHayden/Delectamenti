<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook."></meta>
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."></meta> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta> <!-- used for RWD -->
	  <title>About</title>
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
  <div class ="textArea">
	  <h2>Delect-a-what?</h2>
    <p
    Delectamenti (latin for <i>delicious</i>) was born from a simple idea - people want to eat well, but, sometimes they need to know
    how to make their favourite dish.
    <br /><br />
    <b>Example:</b> What if there was a website that could tell you how to make a nutritious meal quickly, using the ingredients you already
    have and, at the same time, help to reduce your carbon footprint by reducing food waste?
    <br /><br />
    Well, now there is. Welcome to Delectamenti - we hope you find our service useful!
	  </p>
<iframe frameborder="0" width="560" height="315" src="https://biteable.com/watch/embed/delectamenti-1806598" allowfullscreen="true"></iframe><p><a href="https://biteable.com/watch/delectamenti-1806598">delectamenti</a> on <a href="https://biteable.com">Biteable</a>.</p>
  </div>
</body>
<footer>
  <div class ="footer" id="footer">
    <?php include 'includes/footer.php';?>
  </div>
</footer>
</html>
