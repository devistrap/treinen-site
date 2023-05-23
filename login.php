<?php
require "config.php";



?>


<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
    <style>
        body{
            background-color: lightgray;
        }

        #login{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 150px;
        }
        #username, #password{
            width: 300px;
            margin: 40px;
            margin-top: 0px;
        }
        label{
            font-size: x-large;
        }
        h2{
           padding-left: 200px;
            width: 500px;
            border: 1px solid gray;
        }
        #login{
            margin-left: 500px;
            width: fit-content;
            border: 3px solid gray;
        }

        .submit{
            width: 200px;
            font-size: larger;
            margin:10px;
        }

        .submit:hover{
            transform: scale(1.1);
            transition-duration: 1s;
        }

        #password:hover, #username:hover{
        transform: scale(1.1);
            transition-duration: 1s;
        }

        .register{
            color: white;
        }

        .register:hover{
            color: white;
        }

        .btn-primary:hover{
            scale: 1.1;
        }

    </style>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">

            <img src="ns.png" style="width: 100px; height: 50px; border-radius: 60px;">
            <button class="btn btn-primary"><a href="index.php" style="color: white">terug naar de homepage</a></button>
        </div>
    </div>

<div class="login_form">

    <form method="get" action="login_handler.php?username=<?php echo $username ?>&password=<?php echo $password ?>">
        <div id="login" class="form-group">
        <h2>log in</h2>
        <label for="username" class="form-label form-label-lg">username</label>
        <input type="text" id="username" name="username" placeholder="username" class="form-control form-control-lg" required>

        <label for="password" class="form-label form-label-lg">password</label>
        <input type="password" id="password" name="password" placeholder="password" class=" form-control form-control-lg" required>

            <button type="submit" class="btn btn-secondary submit">log in</button>
    </form>
            <button class=" btn btn-primary"><a href="register.php" class="register">nog geen lid? registreer hier!</a></button>

        </div>



</div>



<?php
