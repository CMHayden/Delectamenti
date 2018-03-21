<?php
$servername = "mysql-server-1";
$username = "cmh1";
$password = "abccmh1354";
$DB_Name = "cmh1";
// category ID
$cat= $_GET['cat'];
// record ID
$rid= $_GET['rid'];

// Create connection
$conn = new mysqli($servername, $username, $password, $DB_Name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ingredient_name FROM Ingredients WHERE recipe_id = '$rid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo
      '<li>' .$row["ingredient_name"].'</li>';
    }
  }else{
    echo'
    No' . $cat . 'recipes found';
  }

$conn->close();
?>
