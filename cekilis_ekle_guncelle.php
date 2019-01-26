﻿<?php  include "baglanti.php"; ?>


<?php

$id=$_POST["id"];
$cekilisBoolean=$_POST["cekilisBoolean"];
$sonkatilim=$_POST["sonkatilim"];
$cekilislink=$_POST["cekilislink"];
$cekilislist=$_POST["cekilislist"];
$detaylar=$_POST["detaylar"];
$detaylar = preg_replace("/'/", "\'", $detaylar);

$sorguguncelle="UPDATE `ayarlar` SET `son_katilim` = '".$sonkatilim."', `cekilisBoolean` = '".$cekilisBoolean."', `cekilis_link` = '".$cekilislink."', `cekilis_list` = '".$cekilislist."' , `detaylar` = '".$detaylar."' WHERE `ayarlar`.`id` = '".$id."' ";
$gsonuc=mysqli_query($baglanti,$sorguguncelle);

if($gsonuc) 
{
	echo "Başarıyla güncellendi.</br>  ";
	echo "Sayfa yeniliyor lütfen bekleyiniz..";
	header('Location: http://www.gezginpanda.com/listele.php');
}
else echo "Kayıt Güncellenemedi"; 
	
?>