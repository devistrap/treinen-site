

<?php
require "config.php";

?>

<html>
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
</head>
<body>
<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
        <img src="ns.png" style="width: 100px; height: 50px; border-radius: 60px;" >
        <button class="btn btn-primary"><a href="index.php" style="color: white">terug naar de homepage</a></button>
    </div>
</div>
<?php
if (isset($_GET['username'])){
    $username = $_GET['username'];
}


$sql = "SELECT * FROM users WHERE username = '$username'";
$info = $conn->query($sql);



?>
<style>
    body{
        background-color: lightgray;
    }
    .table{
        width: 500px;
        margin-top: 10px;
        border-radius: 15px;

    }
    .main{
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: white;
        margin-left: 350px;
        border: 3px solid blue;
        height: 903px;
        width: 800px;
        border-radius: 15px;
        box-shadow: 15px 15px 15px;
    }
    .main:hover{
        transform: scale(1.01);
        transition-duration: 1s;
    }

    h3{
        margin-top: 60px;
    }

    .btn:hover{
        scale: 1.1;

    }

</style>
<div class="main">
<h1>profiel</h1>
    <h5><?php echo date("h:i"); ?></h5>

    <?php $row = mysqli_fetch_assoc($info) ?>
    <h3>profiel info </h3>
<table class="table table-striped table-bordered table-hover table-dark">
    <tr>

        <td>username</td>
        <td><?php print_r($row["username"]) ?></td>
    </tr>
    <tr>
        <td>wachtwoord</td>
        <td><?php echo $row["password"] ?></td>
    </tr>
    <tr>
        <td>email-adres</td>
        <td><?php echo $row["email"] ?></td>
    </tr>



</table>
    <div>
    <button class="btn btn-danger"><a href="delete_handler.php?username=<?php echo $username?>">verwijder dit account</button>
        <button class="btn btn-info"><a href="index.php">uitloggen</a></button>
    </div>
</div>


</body>
</html>
