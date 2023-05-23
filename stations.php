<?php

require "config.php";


if (isset($_GET["username"])){
    $username = $_GET["username"];
}

if (isset($_GET["password"])){
    $password = $_GET["password"];
}

if (isset($_GET["email"])){
    $email = $_GET["email"];
}

$sql = "INSERT INTO users (username, password, email) values ('$username', '$password','$email')";
$conn->query($sql);


header("Location: index.php?username=$username&password=$password&email=$email");