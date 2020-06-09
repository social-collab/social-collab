<?php
$db = parse_ini_file("database.ini"); // Database Credentials in this file

$user = $db['user'];
$password = $db['password'];
$database = $db['database'];
$host = $db['host'];

try {
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; Uncomment this if having difficulties connecting to see if the connection is in fact working. This should
    // a first step to debugging instead of trying to figure out why it's not connecting, if maybe it is and you don't know it.
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>