<?php

$db_host = "mysql2.serv00.com";
$db_user = "m11265_dexptuba3";
$db_pass = "Dysonp2013";
$db_name = "m11265_loogle";

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $protocol = 'https';  
} elseif (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    $protocol = 'https';  
} else {
    $protocol = 'http';   
}

$host = $_SERVER['HTTP_HOST'] ?? '';

if (strpos($host, 'kspc.jawed2005.serv00.net') !== false) {
    $siteurl = $protocol . "://kspc.jawed2005.serv00.net";  
} elseif (strpos($host, 'kspc.jawed2005.serv00.net') !== false) {
    $siteurl = $protocol . "://kspc.jawed2005.serv00.net";  
} else {

    header('HTTP/1.0 400 Bad Request');
    exit;  
}

$logFile = __DIR__ . '/server_log.txt';  
$logContent = "Host: " . $host . "\nProtocol: " . $protocol . "\nSite URL: " . $siteurl . "\n";
file_put_contents($logFile, $logContent, FILE_APPEND);  
?>
