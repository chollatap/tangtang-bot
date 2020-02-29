<?php // callback.php

$access_token = 'XIGfeOi56hMqF/zd60jKU5wT6b8ADXtLGV6ulG9V5LOJbkk026aK48Ue2kmozKABc86eBm8pucaoN1FJBiZC11fnzHSK83kspjFmar8dwu1YbRbb4SyZ9LZDnumcTmUuJnQ1fqlkgsEM6O+5MqoAAwdB04t89/1O/w1cDnyilFU=';
// Get POST body content


$url = 'https://api.line.me/v2/bot/message/push';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
