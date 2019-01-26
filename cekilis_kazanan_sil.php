<?php include "baglanti.php"; ?>


<?php
$silinecekID= $_GET['rand_id'];

 $sonuc=mysqli_query($baglanti,"DELETE from cekilisler where rand_id=".$silinecekID);
 
if($sonuc>0){
echo " <b> Başarıyla silindi</b> </br> ";

echo "Sayfa yeniliyor lütfen bekleyiniz..";
	header('Location:http://www.gezginpanda.com/etkinlik_sec.php');

 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
