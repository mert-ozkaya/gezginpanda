﻿<?php include "baglanti.php"; 
include("admin.php");

?>
<?php include"admin_panel_ustMenu.php"; ?>
  <br>

</div>


  
  <div class="container">
  <table class="table">
    <thead>
      <tr class="info">
        <th>Sıra</th>
        <th>Resim Yolu</th>
      </tr>
    </thead>
<?php
$sonuc=mysqli_query($baglanti,"select * from slider_resimler"); 
while($satir=mysqli_fetch_array($sonuc))
{
	echo '<tr>';
	echo '<td>'.$satir['siralama_id'].'</td>';
	echo '<td>'.$satir['resim_yolu'].'</td>';

	echo '<td> <a href="slider_sil.php?id='.$satir['id'].'" onclick=\"return uyari();\">Sil</a> &nbsp;
	
		<a href="slider_guncelle.php?id='.$satir['id'].'">Güncelle</a> </td>';
	echo '</tr>';
}
?>


</table>
</div>
</body>
</html>
