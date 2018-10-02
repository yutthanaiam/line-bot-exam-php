<?php



require "vendor/autoload.php";

$access_token = '1ze0vRBLXrAXO1KblvY4MruBEiQ0UYbuwmXfaZOY1X3gTOQGVa8OlwoM7RMnjCcuriavsvRziAKmdJd6YWGrmphZTrnL/NpJzMVmOw72m5VQHngOdubxRs/BCvJ7Q2Q/D6+Ad07JeFILC3EObUAthQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f1205ae43da6353e326f4ce53c6611b9';

$pushID = 'U947ea2bf8af0a5ce2b3af46a6a52239d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







