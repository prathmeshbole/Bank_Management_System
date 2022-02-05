<?php

$servername = "localhost";
$username = "vaibhav";
$password = "Balveer@12345";
$dbname = "avp";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
