﻿<?php include "baglanti.php"; ?>


<?php
$silinecekID= $_GET['id'];

$sorgu="SELECT * FROM ayarlar WHERE id=".$silinecekID;
	$sonuc2=mysqli_query($baglanti,$sorgu) or die("Sorgu Çalışmadı");
	
		if($satir=mysqli_fetch_array($sonuc2))
		{
			$resimyolu=$satir["resim_yolu"];
			unlink($resimyolu);
		}


 $sonuc=mysqli_query($baglanti,"DELETE from ayarlar where id=".$silinecekID);
 
if($sonuc>0){
echo " <b> Başarıyla silindi</b> </br> ";

echo "Sayfa yeniliyor lütfen bekleyiniz..";
	header('Location: http://www.gezginpanda.com/listele.php');

 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
