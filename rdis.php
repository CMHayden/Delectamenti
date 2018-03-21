<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
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

// get category ID
$cat= $_GET['cat'];
// get recipe ID
$rid= $_GET['rid'];

$sql = "SELECT recipe_id, recipe_name, recipe_image FROM Recipe WHERE recipe_id = '$rid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $title = $row["recipe_name"];
	  $imgsrc = $row["recipe_image"];
    }
  }else{
    echo'
    No' . $cat . 'recipes found';
	die;
  };

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A website gathering recipes and helping to teach people how to cook.">
    <meta name="keywords" content="Delectamenti. Food. Eat. Cook. Recipe."> <!-- used by search engines -->
    <meta name="author" content="Callum M Hayden & Martyn Dewar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- used for RWD -->
    <link rel="stylesheet" media="screen and (min-width: 550px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 550px)" href="smallstyle.css">
		<link rel="stylesheet" href="temp.css">
	<link rel="stylesheet" href="https://use.typekit.net/iew2fuc.css">
	<!-- specify title -->	
	<?php echo'
	<title>Delectamenti ~ ' . $title . '</title>
	<meta name="DC.Title" content="Recipe for ' . $title . '">';
	?>
	<meta name="DC.Creator" content="Martyn Dewar / Callum Hayden">
	<meta name="DC.Subject" content="F28CD Coursework - Delectamenti">
	<meta name="DC.Description" content="A website gathering recipes and helping to teach people how to cook.">
	<meta name="DC.Publisher" content="Martyn Dewar &amp; Callum Hayden, MACS, Heriot-Watt University">
	<meta name="DC.Language" content="en-GB">
	<meta name="DC.Date" content="2018">
    <script>
    function myFunction() {
        window.print();
    }
    </script>

</head>
<body>	<!--start social media and sharing code -->
		<script src="//platform-api.sharethis.com/js/sharethis.js#property=5ab1d5f2b33883001365505d&product=inline-share-buttons"></script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<!-- end social media and sharing code -->
<div class = "wrapper" id="wrapper">
  <div class = "socialsearch" id="socialsearch">
    <a href=https://www.instagram.com/delectamentiuk><img src="Image/instagram.png" alt="Instagram link" width="25" height="25"></a>
    <a href=https://twitter.com/DelectamentiUk><img src="Image/twitter.png" alt="Twitter link" width="25" height="25"></a>
    <a href=https://www.pinterest.co.uk/delectamenti/pins/><img src="Image/pinterest.png" alt="Pinterest link" width="25" height="25"></a>
    <a href=https://www.facebook.com/DelectamentiUK/><img src="Image/facebook.png" alt="Facebook link" width="25" height="25"></a>
  </div>
  <div class = "search" id="search">
    <form>
      <input type="text" name="search" placeholder="Search..">
    </form>
  </div>
  <div class = "logo" id="logo">
    <a href="index.php"><h1>Delectamenti</h1></a>
  </div>
  <div class = "nav" id="myNav">
    <nav>
		<?php include 'includes/nav.php';?>
	  </nav>
  </div>
    <div class = "recipe">
	<section aria-label="recipe" id="recipe">
		<?php

      echo
      '<h2>' . $title .'</h2>';
		// build elements
		echo '        <div align="center" class ="center">
            <a href="rdis.php?rid='.$rid.'&cat='.$cat.'><img src="'. $imgsrc . '" alt="'. $title. '"  width="220" height="170"></img>
            <p> '. $row["recipe_name"]. ' </p></a>';
      echo '
	  <div class="recipe.ingredients">
			<h3>What you will need&#8230;</h3>
						  <ol>'; include 'includes/get_ingredients.php'; echo'
			  </ol>
			</div>
			<div class="recipe.method">
			<h3>What to do:</h3>
			
			  <ol>'; include 'includes/get_steps.php'; echo'
			  </ol>
        </div>
      ';
    	
		?>
		
		
		</div>
	</section>
      <!--<button onclick="myFunction()">Print this recipe</button>-->
		<div class="sharethis-inline-share-buttons"></div>
    </div>
	<section><h3></h3>
		<div class="fb-comments" data-href="http://www2.macs.hw.ac.uk/~md46/F28CD/cw/Delectamenti/rdis.php?rid=<?php echo $rid ?><" data-numposts="5"></div>	
	</section>
    <footer>
      <div class ="footer" id="footer">
		<?php include 'includes/footer.php';?>
      </div>
    </footer>
</div>
  </body>
</html>
