<?php
$access_token = '1ze0vRBLXrAXO1KblvY4MruBEiQ0UYbuwmXfaZOY1X3gTOQGVa8OlwoM7RMnjCcuriavsvRziAKmdJd6YWGrmphZTrnL/NpJzMVmOw72m5VQHngOdubxRs/BCvJ7Q2Q/D6+Ad07JeFILC3EObUAthQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
