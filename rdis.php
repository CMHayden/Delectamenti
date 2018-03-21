<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook.">
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- used for RWD -->
    <link rel="stylesheet" media="screen and (min-width: 550px)" href="style.css"></link>
    <link rel="stylesheet" media="screen and (max-width: 550px)" href="smallstyle.css"></link>
		<link rel="stylesheet" href="temp.css">
	<link rel="stylesheet" href="https://use.typekit.net/iew2fuc.css">
	<title>Delectamenti ~ Vegetable pad Thai</title> <!-- specify title -->
	<meta name="DC.Title" content="Vegetable pad Thai">
	<meta name="DC.Creator" content="Martyn Dewar / Callum Hayden">
	<meta name="DC.Subject" content="F28CD Coursework - Delectamenti">
	<meta name="DC.Description" content="A website gathering recipes and helping to teach people how to cook.">
	<meta name="DC.Publisher" content="Martyn Dewar &amp; Callum Hayden, MACS, Heriot-Watt University">
	<meta name="DC.Language" content="en-GB"><meta name="DC.Date" content="2018">
    <script>
    function myFunction() {
        window.print();
    }
    </script>
	<!--start social media and sharing code -->
		<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ab1d5f2b33883001365505d&product=inline-share-buttons"></script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<!-- end social media and sharing code -->
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
    <a href="index.php"><h1>Delectamenti</h1></a>
  </div>
  <div class = "nav" id="myNav">
    <nav>
		<a                  href="index.php">    Home    </a>
		<a></a>
		<a                  href="about.html">    About   </a>
		<a></a>
		<a                  href="contact.html">  Contact </a>
		<a></a>
		<a                  href="login.html">    Login   </a>
	  </nav>
  </div>
    <div class = "recipe">
	<section aria-label="recipe" id="recipe">
		<h2>RECIPE TITLE H2</h2>
		  <img src="Image/vegetablepadthai.png" alt="Vegetable pad Thai" height="155px" width="220px" padding="15px" align = "left"></img>
		<div class="recipe.ingredients">
			<h3>What you'll need&#8230;</h3>
			  200g (7oz) flat rice noodles<br />
			  4 tbsp tamarind sauce<br />
			  2 tbsp fish sauce<br />
			  1 tbsp brown sugar<br />
			  1/2-1 tsp tsp chilli flakes<br />
			  2 tbsp vegetable oil<br />
			  2 garlic cloves, finely chopped<br />
			  2 large eggs, lightly beaten<br />
			  1 x 320g pack vegetable and beansprout stir fry<br />
			  50g (2oz) roasted peanuts, roughly chopped<br />
			  1 lime, quartered<br />
		</div>
		  <br />
		<div>
			<h3>What to do:</h3>
			  <ol>
				<li>Soak the noodles in freshly boiled water for 12 minutes. Strain and set aside. While the
				  noodles are soaking, mix the tamarind, fish sauce, sugar and chilli flakes together.</li>
				<li>Heat the vegetable oil in a large frying pan and add the garlic. Cook briefly, watching it
				  doesn’t burn, then add the tamarind and fish sauce mixture. Let this bubble for a minute,
				  then transfer to a bowl.</li>
				<li>In the same pan, on medium-high heat, add the beaten eggs. Let them set for a minute,
				  without stirring. Once set, break vigorously with a wooden spoon.</li>
				<li>Add the stir fry vegetables and cook for 2 minutes, stirring from time to time. Then
				  add the noodles, pour over the sauce, stir well and cook for another minute or two. Serve
				  sprinkled with chopped peanuts and a squeeze of lime.</li>
			  </ol>
		</div>
	</section>
      <!--<button onclick="myFunction()">Print this recipe</button>-->
		<div class="sharethis-inline-share-buttons"></div>
      <br />
      <br />
    </div>
	<section>
		<div class="fb-comments" data-href="http://www2.macs.hw.ac.uk/~md46/F28CD/cw/Delectamenti/rdis.php?rid=" data-numposts="5"></div>	
	</section>
    <footer>
      <div class ="footer" id="footer">
		<?php include 'includes/footer.php';?>
      </div>
    </footer>
  </body>
</html>
