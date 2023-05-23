<?php
require "config.php";



$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://gateway.apiportal.ns.nl/virtual-train-api/api/vehicle?',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Ocp-Apim-Subscription-Key: 3d226619b175425194953e4eca460c87'
    ),
));


    $response = curl_exec($curl);
    $responseJSON = json_decode($response);



curl_close($curl);



$trains = $responseJSON->payload->treinen;


$aantalbussen = 0;
$aantaltreinen = 0;

?>

<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>treinen in nederland!</title>
    <link rel="icon" href="data:image/png;base64,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">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        body {
            background: lightgray;
        }

        thead {
            background-color: black;
            color: white;
        }

        #map_canvas {
            width: 880px;
            height: 410px;
            margin: 0px;
            display: inline-block;
        }

        #current {
            padding-top: 25px;
        }

        .map {
            border-radius: 10px;
            padding: 1.5px;
            display: flex;
            flex-direction: row;
            margin-top: 10px;
            margin: 15px;
            margin-left: 30px;
        }

        #statistieken_bus {
            box-shadow: 15px 15px 15px gray;
            background-color: blue;
            border: 3px solid black;
            border-radius: 20px;
            height: 200px;
            margin-left: 25px;
            padding: 5px;
            margin-top: 10px;
            font-size: x-large;
            color: lightgray;

        }

        #statistieken_trein {
            box-shadow: 15px 15px 15px gray;
            background-color: yellow;
            border: 3px solid black;
            border-radius: 20px;
            height: 200px;
            margin-left: 25px;
            padding: 5px;
            margin-top: 15px;
            font-size: x-large;
        }

        #h3_stat {
            margin-left: 210px;
        }

        #h3_map {
            margin-left: 200px;
        }


        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: lightgray;
        }

        #login_button {
            margin-right: 30px;
            background-color: transparent;
            border-radius: 2em;
            width: 100px;
            border: purple 2px solid;
        }

        #login_button:hover {
            scale: 1.1;
        }

        #statistieken_trein:hover,
        #statistieken_bus:hover {
            transform: scale(1.05);
            transition-duration: 0.7s;
        }

        .more_info:hover {
            transform: scale(1.1);
        }

        #logged_in {
            color: purple;
            text-decoration: underline;
            margin-right: 30px;
        }
    </style>


</head>

<body onload="initMap()">
<header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <img src="ns.png" style="width: 100px; height: 50px; border-radius: 60px;">
        </div>
        <?php if ($_GET == null or $_GET["username"] == null) {

            echo '<button id="login_button"><a href="login.php" >login</a></button>';
        } else {
            $username = $_GET['username']
            ?>
            <a id='logged_in' href='profiel.php?username=<?php echo $username ?>'> <?php echo $_GET['username'] ?></a>
        <?php } ?>
    </div>
    <?php
    $bus_snelheden = [];
    $trein_snelheden = [];
    foreach ($trains  as $train) {
        if ($train->type == "BUS") {
            $aantalbussen += 1;
            $bus_snelheden[] = $train->snelheid;
        }
        if ($train->type !== "BUS") {
            $aantaltreinen += 1;
            $trein_snelheden[] = $train->snelheid;
        }
    }
    rsort($trein_snelheden);
    rsort($bus_snelheden);
    ?>



    <div class="map">
        <div>
            <h3 id="h3_map">alle treinen die nu in nederland rijden!</h3>
            <div id="map_canvas"></div>
        </div>
        <div id="statistieken">
            <h3 id="h3_stat">statistieken</h3>
            <div id="statistieken_trein">
                <p>hoogste snelheid treinen: <?php echo $trein_snelheden[0]; ?> km/u</p>
                <p>hoeveelheid actieve treinen in nederland: <?php echo $aantaltreinen; ?></p>
            </div>

            <div id="statistieken_bus">
                <p>hoogste snelheid bussen: <?php echo $bus_snelheden[0]; ?> km/u</p>
                <p>hoeveelheid actieve bussen in nederland: <?php echo $aantalbussen; ?></p>
            </div>
        </div>
    </div>
    <table class="table thead-dark table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">trein nummer</th>
            <th scope="col">richting in graden</th>
            <th scope="col">snelheid in km/u</th>
            <th scope="col"><wbr> </th>

        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($trains as $train) : ?>
            <?php
            $info = explode(':', $train->ritId);
            $richting = $train->richting;
             ?>
                <tr>
                    <th scope="row"><?= $info[0] ?></th>
                    <td><?= $richting ?></td>
                    <td><?= round($train->snelheid, 1) ?></td>
                    <td><a href="train_info.php?id=<?php echo $train->ritId ?>"><button class="btn btn-info more_info">meer info over deze trein</button></a></td>
                </tr>
            
        <?php endforeach; ?>
        </tbody>
    </table>


</header>













<script>
    const redMarkerIcon = L.icon({
        iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        iconSize: [15, 21],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
    });


    function initMap() {
        const map = L.map('map_canvas').setView([52.31376, 4.997082], 7.77);


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map)

        const trains = <?php echo json_encode($trains); ?>;

        trains.forEach(train => {

            if (train.type !== "BUS") {
                const marker = L.marker([train.lat, train.lng], {
                    icon: redMarkerIcon
                }).addTo(map);
                marker.bindPopup("trein " + train.treinNummer + " met een snelheid van " + train.snelheid.toFixed(2) + "km/u");
                map.invalidateSize();

            }
        });
    }
</script>

</body>

</html>