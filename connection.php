<?php
$servername = "localhost";
$dbname = "adminpage";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(!mysqli_select_db($conn,$dbname)) {

die("database not found");

}
?>