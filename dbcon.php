<?php 
$host = "localhost";
$db_Name = "stums";
$db_Password = "mysql";
$db_Username  = "root";



// Create connection
$conn = mysqli_connect($host, $db_Username, $db_Password, $db_Name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
