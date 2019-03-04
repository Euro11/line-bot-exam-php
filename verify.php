<?php
$access_token = '/86mgHD+mZF2QIUZ9m3d/rNFrnJfTdZlFHmRDSeIwU56ZbH5d5x2hE6GDL/iR5Z1mJNurDeZcHQmLYjofqhCTzO4ktlEabRlNg7/KxRS9iumc538AZxYrAk9zO4fCh1snDjAtOkAcyNeZfjfMPiyAgdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
