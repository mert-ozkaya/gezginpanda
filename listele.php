<?php include "baglanti.php"; 
setlocale(LC_TIME, "turkish"); //başka bir dil içinse burada belirteceksin.
		setlocale(LC_ALL,'turkish'); //başka bir dil içinse burada belirteceksin.
			date_default_timezone_set('Europe/Istanbul');
include("admin.php");
?>
<?php include"admin_panel_ustMenu.php"; ?>
  <br>

</div>


  
  <div class="container">
  <table class="table">
    <thead>
      <tr class="info">
        <th>ID</th>
        <th>Etkinlik İsmi</th>
        <th>Yer</th>
        <th>Etkinlik Ekibi</th>
      </tr>
    </thead>
<?php
$sonuc=mysqli_query($baglanti,"SELECT * FROM `ayarlar` ORDER BY `ayarlar`.`tarih` ASC"); 
$tarihh=date("Y-m-d");

while($satir=mysqli_fetch_array($sonuc))
{		
	if($satir["tarih"]>=$tarihh)
	{
		echo '<tr>';
		echo '<td>'.$satir['id'].'</td>';
		echo '<td>'.$satir['etkinlik_isim'].'</td>';
		echo '<td>'.$satir['yer'].'</td>';
		echo '<td>'.$satir['etkinlik_ekibi'].'</td>';

		echo '<td>
	 
			<button> <a href="sil.php?id='.$satir['id'].'" onclick=\"return uyari();\">Sil</a> </button> &nbsp;
			<button> <a href="guncellemesayfasi.php?id='.$satir['id'].'">Güncelle</a> </button> &nbsp;
			<button> <a href="cekilis_ekle.php?id='.$satir['id'].'">Etkinliğe Çekiliş Ekle</a> </button>
			</td>';
		echo '</tr> ';
	}
	
}

?>
<?php
$sonuc=mysqli_query($baglanti,"SELECT * FROM `ayarlar` ORDER BY `ayarlar`.`tarih` ASC");

		echo '<tr>';
		echo "<td> <h1 color=\"red\">Geçmiş Etkinlikler </h1></td>";
		echo '<tr>';
		
while($satir=mysqli_fetch_array($sonuc))
{
	if($satir["tarih"]<$tarihh)
	{
		echo '<tr>';
		echo '<td>'.$satir['id'].'</td>';
		echo '<td>'.$satir['etkinlik_isim'].'</td>';
		echo '<td>'.$satir['yer'].'</td>';
		echo '<td>'.$satir['etkinlik_ekibi'].'</td>';

		echo '<td>
	 
			<button> <a href="sil.php?id='.$satir['id'].'" onclick=\"return uyari();\">Sil</a> </button> &nbsp;
			<button> <a href="guncellemesayfasi.php?id='.$satir['id'].'">Güncelle</a> </button> &nbsp;
			<button> <a href="cekilis_ekle.php?id='.$satir['id'].'">Etkinliğe Çekiliş Ekle</a> </button>
			</td>';
		echo '</tr> ';
	}
	
		
		
}
	
	





?>

</table>
</div>
</body>
</html>
