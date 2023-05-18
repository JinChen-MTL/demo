<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$server = '184.107.41.83';
$username = 'jinchenc_db';
$password = 'Zh102657';
$database = '353projj';
  
 
$connection = mysqli_connect($server, $username, $password, $database);

// Check for errors
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful
echo "Connected successfully";
 
 
// Execute a query to get sample data
$Employee = "SELECT * FROM employees";
$result = $con->query($Employee);
// Output the sample data
 
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["MCN"]  . " - Name: " . $row["first_name"] . "<br>";
  }
} else {
  echo "0 results";
}
 
?>
