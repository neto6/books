<?php

$servername = getenv('MYSQLHOST');
$username = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$dbname = getenv('MYSQLDATABASE');
$dbport = getenv('MYSQLPORT');


$conn = new mysqli($servername, $username, $password, $dbname, $dbport);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
