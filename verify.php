<?php
$access_token = 'Mi0y1Y3KsSTTfEh5ddH11wsnax89sd5y+4y/NoF+hyG15GExwZw80HzqlaXM7XUeriavsvRziAKmdJd6YWGrmphZTrnL/NpJzMVmOw72m5XY4Mw0hnAQ+46vSCkHIxxZZ2kzn/D5VoZ+5D8OzxT5hwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
