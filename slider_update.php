<?php  include "baglanti.php"; ?>


<?php

$siralama_id=$_POST["siralama_id"];
$id=$_POST["id"];


$sorguguncelle="UPDATE `slider_resimler` SET `siralama_id` = ".$siralama_id." WHERE `slider_resimler`.`id` = ".$id."; ";
$gsonuc=mysqli_query($baglanti,$sorguguncelle);

if($gsonuc) 
{
	echo "Başarıyla güncellendi.</br>  ";
	echo "Sayfa yeniliyor lütfen bekleyiniz..";
	header("refresh:2;url=slider_listele.php" );
}
else echo "Kayıt Güncellenemedi"; 
	
?>