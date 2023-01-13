<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

// Create database
$create = "CREATE DATABASE myDB";
    if ($conn->query($create) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

//delete database
// $delete = "Drop DATABASE myDB";
//     if ($conn->query($delete) === TRUE) {
//         echo "Database deleted successfully";
//     } else {
//         echo "Error deleting database: " . $conn->error;
//     }