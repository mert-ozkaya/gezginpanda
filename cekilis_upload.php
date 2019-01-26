﻿<?php include "baglanti.php"; ?>


<?php
	
	$id=$_GET["id"];
	$isim=$_POST['isim'];
	$soyisim=$_POST['soyisim'];
	

			
			$sqlekle="INSERT INTO cekilisler( rand_id, etkinlik_id , isim, soyisim) 
			VALUES (NULL,'$id','$isim','$soyisim')";
			 
			$sonuc2=mysqli_query($baglanti,$sqlekle);
			 
			if ($sonuc2==0)
			{
				echo "Bilgiler eklenemedi, bilgileri kontrol ediniz";	
			}
			else
			{
				echo "Başarıyla eklendi.</br>  ";
				echo "Sayfa yeniliyor lütfen bekleyiniz..";
				header("refresh:2;url=cekilis_sec.php" );
			}


?>