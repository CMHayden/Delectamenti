<?php
$servername = "mysql-server-1";
$username = "cmh1";
$password = "abccmh1354";
$DB_Name = "cmh1";
$cat= $_GET['cat'];

// Create connection
$conn = new mysqli($servername, $username, $password, $DB_Name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT recipe_id, recipe_name, recipe_image FROM Recipe WHERE food_category_id = '$cat'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '
        <div align="center" class ="center">
            <a href="rdis.php?rid='. $row["recipe_id"]. '"><img src="'. $row["recipe_image"]. '" alt="'. $row["recipe_name"]. '"  width="220" height="170"></img>
            <p> '. $row["recipe_name"]. ' </p></a>
        </div>
      ';
    }
  }else{
    echo'
    No' . $cat . 'recipes found';
  }

$conn->close();
?>
