<?php
function datacek($url, $proxy)
{
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $oturum = curl_init();
    curl_setopt($oturum, CURLOPT_URL, $url);
    if (preg_match('|https\:|isU', $url)) { curl_setopt ($oturum, CURLOPT_SSL_VERIFYPEER, false); }
    if ($proxy) {
        curl_setopt($oturum, CURLOPT_HTTPPROXYTUNNEL, 0);
        curl_setopt($oturum, CURLOPT_PROXY, $proxy);
    }
    curl_setopt($oturum, CURLOPT_USERAGENT, $browser);
    curl_setopt($oturum, CURLOPT_HEADER, 0);
    curl_setopt($oturum, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($oturum, CURLOPT_CONNECTTIMEOUT, 33);
    $cekilendatalar = curl_exec($oturum);
    curl_close($oturum);
    return $cekilendatalar;
}
 
?>
<?php 
datacek('http://www.instagram.com/', '212.156.147.26:3128');
?>
