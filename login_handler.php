<?php
require "config.php";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

if (isset($_GET['username'])){
    $username = $_GET['username'];
}

if (isset($_GET['password'])){
    $password = $_GET['password'];
}

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$stmt = $conn->query($sql);
$info = $stmt->fetch();
if (gettype($info) == "boolean"){
    $info = null;
}

if ($info == null){
    header("location: login.php");
}
if($info !== null){
    header("location: index.php?username=$username");
}


?>