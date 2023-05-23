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
        form{

            width: 500px;
            margin-left: 500px;
            margin-top: 150px;
        }

        label{
            margin: 20px;
            margin-bottom: 5px;
            padding: 10px;
            padding-bottom: 5px;


            width: 100px;
            border-radius: 10px;
        }
        .form-control{
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        p{
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
        }
    </style>
</head>
<body>
<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
        <img src="ns.png" style="width: 100px; height: 50px; border-radius: 60px;" >
        <button class="btn btn-primary"><a href="index.php" style="color: white">terug naar de homepage</a></button>
        <p>al een account klik <a href="login.php">hier</a> om in te loggen</p>
    </div>
</div>


<form action="register_handler.php" method="get">

    <div class="form-control">
        <h2>registreer je hier!</h2>

    <label>username</label>
    <input type="text" placeholder="user" name="username" class="form-control">

    <label>password</label>
    <input type="password" placeholder="password" name="password" class="form-control">

    <label>e-mail</label>
    <input type="email" placeholder="email" name="email" class="form-control">

        <button type="submit" class=" btn btn-success" style="width: 150px; margin-top: 10px" >submit</button>
    </div>

</form>



</body>

</html>




<?php
