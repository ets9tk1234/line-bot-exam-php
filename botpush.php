<?php



require "vendor/autoload.php";

$access_token = 'fG1iHH7gHsyP6MmfQLf8kcFABPsLJnf5ypgrJKU/VE2fkrskAJNpNaBpfuzT451PmVO+pdRDdiObfFtQb2Ax827X2N3Q/NuhlcMQ6s8oLBh1tHos6q7QHXywsKoyZgYPjHyMm6JaS9U5LYitTHDIAgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '97537402860a77d7334049fec6a8bedf';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







