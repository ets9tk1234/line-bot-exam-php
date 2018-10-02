<?php


$access_token = 'fG1iHH7gHsyP6MmfQLf8kcFABPsLJnf5ypgrJKU/VE2fkrskAJNpNaBpfuzT451PmVO+pdRDdiObfFtQb2Ax827X2N3Q/NuhlcMQ6s8oLBh1tHos6q7QHXywsKoyZgYPjHyMm6JaS9U5LYitTHDIAgdB04t89/1O/w1cDnyilFU=';

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

