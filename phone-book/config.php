<?php
$servername = "34.87.25.71";
$username = "peet";
$password = "10042541_Pol";

// $servername = "localhost";
// $username = "root";
// $password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=project;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
