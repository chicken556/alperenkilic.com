<?php
$url = 'https://translate.google.com/';
$proxyauth = 'userass';
$proxy = '88.45.44.55';
$proxyPort = '8080';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//proxy suport
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxyPort);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
//https
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 100);

$output = curl_exec($ch);
curl_close($ch);
?>
