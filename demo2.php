<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$server = '184.107.41.83';
$username = 'jinchenc_db';
$password = 'Zh102657';
$database = '353projj';
 
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt", NULL, NULL);
mysqli_real_connect($con, "localhost3306.mysql.database.azure.com", "localhost3306", "zh102657.", "353projj", 3306, MYSQLI_CLIENT_SSL);
// Check for errors
if(mysqli_connect_errno()){
 echo mysqli_connect_error();
}
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
