<?php
    function chs(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.mehmetmutlu.com.tr/ip.php");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST,true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 
        //http://hidemyass.com/proxy-list/
        curl_setopt($ch, CURLOPT_PROXYPORT, '8080');
        curl_setopt($ch, CURLOPT_USERAGENT, "bots");
        curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
        curl_setopt($ch, CURLOPT_PROXY,'12.174.27.73');
        curl_setopt($ch, CURLOPT_PROXYUSERPWD,'');
         
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    print_r(chs());
 
?>
