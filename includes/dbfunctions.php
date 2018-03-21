<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

//////////////////////////////////////////////////////////////////////////////

//first connect to the database
//this is a persistent connection, but you could also just use connect
//obviously, to connect to a different database, you need to change all the names of functions
//that start mysql
function dbConnect($username, $password) {
	$dbConn = mysqli_connect ("mysql-server-1", $username, $password, $username) ;
	if (!$dbConn )
	{
		print "<p>Cannot connect to database - check username and password<br/>";
		print mysqli_error($dbConn)."</p>";
		print "</body>";
   	print "</html>";
		exit();
	}
	return $dbConn;
}


//select the database
function dbSelect($dbConn, $dbname) {
	$db = mysqli_select_db($dbConn, $dbname);
	if (!$db)
	{
		print "<p>Cannot connect to database $dbname</br>";
		print mysqli_error($dbConn)."</p>";
		print "</body>";
   	print "</html>";
		exit("Bye");
	}
}

function insertRow($dbConn, $query) {

	$insResult = mysqli_query($dbConn, $query);
	if ($insResult)
   	print($query . " Record inserted<br/>");
	else
	//don't expect to come here unless program logic error
	//or some other problem with the database
		print $query. " " . mysqli_error($dbConn). "<br/>";   //vital to know why it failed
}

function runQuery($dbConn, $query) {

	$result = mysqli_query($dbConn, $query);
	if ($result) {
   	//print($query . "<br/>");
   	return $result;
   }
	else
	{
	//don't expect to come here unless program logic error
	//or some other problem with the database
		print $query. " " . mysqli_error($dbConn). "<br/>";   //vital to know why it failed
		print "</body>";
		print "</html>";
		exit("Bye");
	}		
}
function displayTable($result) {
	$numrows = mysqli_num_rows($result);
	if ($numrows == 0)
	{
	   print "<p>There was nothing in the table</p>";	
   	print "</body>";
      print "</html>";
   	exit();
   }
   //set up table
   print '<table border = "1">';
   
   //print headings
   $fieldCount = mysqli_num_fields($result);
   print "<tr>";
   
   for ($i=0; $i<$fieldCount; $i++) {              
       // Get the column headings
       $fieldName = mysqli_field_name($result, $i);
       print "<th>".$fieldName."</th>";
   }
   print "</tr>";
   
   // output each line
   // the fetch function gets the next row from the resultset and puts it into $row
   while ($row = fetch_row($result) )
   {
   	print ("<tr>");
      for ($i=0; $i<$fieldCount; $i++) 
   	{
   		print ("<td>". $row[$i] . "</td>") ;  
   	}
   	print ("</tr>");
   }
   print ("</table>");
}

function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}

// Count the rows in a query rsult
function num_rows($result)
{
	return mysqli_num_rows($result); 
}

// Get the next row from a query rusult
// This looks like a destructive operation
function fetch_row($result)
{
	return mysqli_fetch_row($result); 
}
?>