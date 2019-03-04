<?php



require "vendor/autoload.php";

$access_token = '/86mgHD+mZF2QIUZ9m3d/rNFrnJfTdZlFHmRDSeIwU56ZbH5d5x2hE6GDL/iR5Z1mJNurDeZcHQmLYjofqhCTzO4ktlEabRlNg7/KxRS9iumc538AZxYrAk9zO4fCh1snDjAtOkAcyNeZfjfMPiyAgdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'e5d9d2ddc635d0bf425d6300521ded3d';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







