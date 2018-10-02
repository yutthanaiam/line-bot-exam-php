<?php



require "vendor/autoload.php";

$access_token = '5wkGqtW7/6dOw++pcRZZdR8wIBeZ8n4z/S+P0oV0wggFUp30P0zJh3s587cpc8VFriavsvRziAKmdJd6YWGrmphZTrnL/NpJzMVmOw72m5WiCWgoxg5yFrwh+NgtswDhMYVJquHFqpS//RAlzdGgXwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f1205ae43da6353e326f4ce53c6611b9';

$pushID = 'U947ea2bf8af0a5ce2b3af46a6a52239d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







