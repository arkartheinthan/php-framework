<?php 

// server = localhost, username, password, database

// $servername = "localhost";
// $username = "arkar";
// $password = "arkar191066";
// $db = "test";

// create connection
// $conn = mysqli_connect( $servername, $username, $password, $db );

// Check Connection
// if(!$conn)
// {
//     die("Connection Failed:" . mysqli_connect_error());
// }



// Mysqli Object-Oriented
// $conn = new mysqli($servername, $username, $password, $db);

// if($conn->connect_error)
// {
//     die("Connection Failed:" . $conn->connect_error);
// }

// echo "Connected"; 



declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors','1');

require "init.php";

// $pdo = db_connect();
// $user = query($pdo); 



echo "<pre>";
print_r($user);