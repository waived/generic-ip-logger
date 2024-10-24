<?php

// url redirect
header('Location: http://www.example.com');

// capture ip address
$_ip = $_SERVER['REMOTE_ADDR'];

// capture user agent
$u_agent = $_SERVER['HTTP_USER_AGENT'];

// capture time and date [YYYY-MM-DD HH:MM:SS]
$_now = date('Y-m-d H:i:s');

// append to log
$fo = fopen("log.txt", "a");
$fw = fwrite($fo, "$_now \t $_ip \t $u_agent\n");
fclose($fo);

?>
