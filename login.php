
<?php 
 
include "baglanti.php";
ob_start();
session_start();
 
$kadi = $_POST['kADİ'];
$sifre = $_POST['parOLA'];

$sorgu="select * from giris_admin where kullanici_adi='".$kadi."' and parola='".$sifre."' ";
$sql_check = mysqli_query($baglanti,$sorgu) or die("hata");
 $row=mysqli_num_rows($sql_check);
 
if($row)  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:adminpanel.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>