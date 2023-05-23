<?php
require "config.php";


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://gateway.apiportal.ns.nl/places-api/v2/places',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Ocp-Apim-Subscription-Key: 4d11187dfff241cc8dc22add812c40ff'
    ),
));

$response = curl_exec($curl);


curl_close($curl);
$stations = json_decode($response, true);
print_r($stations[['payload'][0]['locations'][0]['stationCode']]);

?>

