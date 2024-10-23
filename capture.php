<?php

// url redirect
header('Location: http://www.example.com');

// capture ip address
$ip = $_SERVER['REMOTE_ADDR'];

// capture user agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// capture time and date
$dateTime = date('Y-m-d H:i:s'); // Format: YYYY-MM-DD HH:MM:SS

// write data to file
$fo = fopen("log.txt", "a");
$fw = fwrite($fo, "$dateTime \t $ip \t $userAgent\n");
fclose($fo);

?>
