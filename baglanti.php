<?php

$sunucu="188.121.44.187:3306";
$kullanici="hector";
$parola="Sananededim$998";
$veritabani="gezginpanda";
$baglanti=@mysqli_connect($sunucu,$kullanici,$parola) or die("Veritabanı sunucusuna bağlanılamadı");
mysqli_query($baglanti,"SET NAMES 'utf8'");
mysqli_query($baglanti,"SET CHARACTER SET utf8_general_ci"); 
$vt=mysqli_select_db($baglanti,$veritabani) or die("Veritabanına Ulaşılamadı");
?>












