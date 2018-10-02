<?php



require "vendor/autoload.php";

$access_token = '5wkGqtW7/6dOw++pcRZZdR8wIBeZ8n4z/S+P0oV0wggFUp30P0zJh3s587cpc8VFriavsvRziAKmdJd6YWGrmphZTrnL/NpJzMVmOw72m5WiCWgoxg5yFrwh+NgtswDhMYVJquHFqpS//RAlzdGgXwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







