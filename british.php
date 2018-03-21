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

$sql = "SELECT recipe_name, recipe_image FROM Recipe WHERE food_category_id = 'british'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '
        <div align="center" class ="center">
            <a href="'. $row["recipe_name"]. '"><img src="'. $row["recipe_image"]. '" alt="'. $row["recipe_name"]. '"  width="220" height="170"></img>
            <p> '. $row["recipe_name"]. ' </p></a>
        </div>
      ';
    }
  }else{
    echo'
    No british recipes found';
  }

$conn->close();
?>
