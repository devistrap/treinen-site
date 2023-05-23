<?php
require "config.php";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);


if (isset($_GET['username'])){
    $username = $_GET['username'];
}

$sql = "DELETE FROM users WHERE username = '$username'";
$conn->exec($sql);

header("location: index.php");
