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

$sql = "SELECT ingredient_name FROM Ingredients WHERE recipe_id = '$rid'";
$result = $conn->query($sql);
      echo '
      <div class = "recipe">
        <p>Full British breakfast</p><br/>
        <img src="Image/fryup.png" alt="Full British Breakfast" height="155px" width="220px" padding="15px" align = "left"></img>
        Ingredients: <br></br>
      ';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo
        $row["ingredient_name"].'<br />';
    }
  }else{
    echo'
    No' . $cat . 'recipes found';
  }

$conn->close();
?>
