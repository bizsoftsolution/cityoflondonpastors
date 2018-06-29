<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'citypastor';
$dbPassword = 'test123!@#';
$dbName = 'citypastor';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>