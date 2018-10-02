<?php


$access_token = '5wkGqtW7/6dOw++pcRZZdR8wIBeZ8n4z/S+P0oV0wggFUp30P0zJh3s587cpc8VFriavsvRziAKmdJd6YWGrmphZTrnL/NpJzMVmOw72m5WiCWgoxg5yFrwh+NgtswDhMYVJquHFqpS//RAlzdGgXwdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

