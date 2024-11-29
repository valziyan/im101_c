<?php

// post data
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$date_now = date('d-m-Y');

// server credentials
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "im101_c";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($name) {
        $sql = "INSERT INTO user (name, username, password, date_joined) VALUES ('$name', '$username', '$password', '$date_now')";
        $conn->exec($sql);
        echo "New Registration!";
    }

} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}