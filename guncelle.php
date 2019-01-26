<?php  include "baglanti.php"; ?>


<?php

$id=$_POST["id"];
$etkinlik_isim=$_POST["isim"];
$yer=$_POST["yer"];
$etkinlik_ekibi=$_POST["ekip"];
$tarih=$_POST["tarih"];
$hakkinda=$_POST["hakkinda"];
$sehir=$_POST["sehir"];
$hakkinda = preg_replace("/'/", "\'", $hakkinda);

$etkinlik_isim = preg_replace("/'/", "\'", $etkinlik_isim);
$etkinlik_ekibi= preg_replace("/'/", "\'", $etkinlik_ekibi);

$sorguguncelle="UPDATE `ayarlar` SET `etkinlik_isim` = '".$etkinlik_isim."', `yer` = '".$yer."', `etkinlik_ekibi` = '".$etkinlik_ekibi."',  `tarih` = '".$tarih."', `hakkinda` = '".$hakkinda."',`sehir` = '".$sehir."'   WHERE `ayarlar`.`id` = '".$id."' ";
$gsonuc=mysqli_query($baglanti,$sorguguncelle);

if($gsonuc) 
{
	echo "Başarıyla güncellendi.</br>  ";
	echo "Sayfa yeniliyor lütfen bekleyiniz..";
	header("refresh:2;url=listele.php" );
}
else echo "Kayıt Güncellenemedi"; 
	
?>