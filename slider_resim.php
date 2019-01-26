<?php 
include "baglanti.php";
?>
<?php

	$id = $_POST['id'];

			 
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

$yuklenecekklasor="slider_resimler/";
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
	
	
	if($uploadOk == 1)
	{

			
			 
			 $sql="select siralama_id from slider_resimler WHERE siralama_id='.$id'";
			$sonuc1= mysqli_query($baglanti,$sql);
			$satirsay=mysqli_num_rows($sonuc1);

			if ($satirsay>0)
			{
				echo "Bu sıralama daha önce kaydedilmiş";
				echo "Sayfa yeniliyor lütfen bekleyiniz..";
				header("refresh:2;url=sliderEkle.php" );
			} 
			else
			{
				$sqlekle="INSERT INTO slider_resimler(id,siralama_id,resim_yolu) 
				VALUES (NULL,'$id','$yeni_resimyolu')";
				 
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
			};
	}
 ?>






