﻿<?php 
include "baglanti.php";
?>
<?php
	$etkinlik_ismi = $_POST['isim'];
	$yer = $_POST['yer'];
	$etkinlik_ekip = $_POST['ekip'];
    $tarih = $_POST['tarih'];
	$hakkinda = $_POST['hakkinda'];
	$sehir=$_POST['sehir'];
	
	$hakkinda = preg_replace("/'/", "\'", $hakkinda);
	$etkinlik_ismi = preg_replace("/'/", "\'", $etkinlik_ismi);
	
//Seçilen dosyaya ait bilgilerin karşilanması
$kaynak=$_FILES["fileToUpload"]["tmp_name"];//Dosyanın alındığı geçici dizin
$dosyaismi= $_FILES["fileToUpload"]["name"];// Dosya adı
$dosyatipi=$_FILES["fileToUpload"]["type"]; // Dosya tipi
$dosyaboyutu=$_FILES["fileToUpload"]["size"]; // Dosya boyutu


$uploadOk = 1;

// Sunucuya atılacak dosya için yeni isim üretilmesi
$isim= sha1(uniqid(rand()));

// Sunucuya atılacak dosyanın uzantısının alınması
$dizi=pathinfo($dosyaismi);
$uzanti=$dizi['extension'];

// Dosya adı ve uzantısının birleştirilmesi
$yeniad=$isim.".".$uzanti;

$yuklenecekklasor="etkinlik_resimler/";
$yeni_resimyolu=$yuklenecekklasor.$yeniad;


$imageFileType = strtolower(pathinfo($yeni_resimyolu,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sadece JPG, JPEG, PNG & GIF dosyası olmalı. <br>";
    $uploadOk = 0;
}
// Dosyanın sunucuda belirlenen klasöre gönderilmesi
if($uploadOk == 1)
{
	$dosyakopyala=move_uploaded_file($kaynak,$yeni_resimyolu);

	// Dosya kopyalandımı kontrolü
	if($dosyakopyala){
	echo "Resim/Fotoğraf yüklendi. </br>";
	 
	$uploadOk = 1;
	}
	else{
	echo "Resim/Fotoğraf yüklenemedi.!! </br>";
	$uploadOk = 0;

	}
}else{
	echo "Hata!! </br>";
	$uploadOk = 0;

	}


	if($uploadOk == 0)
	{
		echo "Etkinlik yüklenemedi!! </br>";
		echo "Sayfa yeniliyor lütfen bekleyiniz..";
		header("refresh:2;url=ekleme.php" );
	}
	else
	{

			$sqlekle="INSERT INTO ayarlar( id, etkinlik_isim ,yer, etkinlik_ekibi,tarih,hakkinda,resim_yolu,sehir) 
			VALUES (NULL,' $etkinlik_ismi','$yer','$etkinlik_ekip', '$tarih','$hakkinda','$yeni_resimyolu','$sehir')";
			 
			$sonuc=mysqli_query($baglanti,$sqlekle);
			
			if ($sonuc==0)
			{
				echo "Bilgiler eklenemedi, bilgileri kontrol ediniz";	
			}
			else
			{
				echo "Başarıyla eklendi.</br>  ";
				echo "Sayfa yeniliyor lütfen bekleyiniz..";
				header("refresh:2;url=adminpanel.php" ); 
			}
	}
 ?>










