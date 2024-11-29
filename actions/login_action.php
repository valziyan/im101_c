<?php

// post data
$username = $_POST['username'];
$password = $_POST['password'];

// server credentials
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "im101_c";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "SELECT username, password FROM user WHERE username='$username' AND password='$password'";
    $conn->exec($sql); 
    echo "User Login!";
    

} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}