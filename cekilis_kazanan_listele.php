<?php include "baglanti.php"; ?>
<?php include"admin_panel_ustMenu.php"; ?>
  <br>

</div>
<?php
$id=$_POST['cekilis'];


$sorgu="SELECT * FROM `ayarlar` WHERE id=".$id."";
						$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çalışmadı");
						
		if($satir=mysqli_fetch_array($sonuc))
		{

			echo"<h1 style=\"text-align:center\" >".$satir["etkinlik_isim"]." </h5>";

		}
		echo "<h3 style=\"margin-left:250px\"> KAZANANLAR </h3> 



  
  <div class=\"container\">
  <table class=\"table\">
    <thead>
      <tr class=\"info\">
        <th>isim</th>
        <th>soyisim</th>
		<th style=\"text-align:center;\">İşlemler</th>
      </tr>
    </thead>
	";
	
$sonuc=mysqli_query($baglanti,"SELECT * FROM `cekilisler` WHERE etkinlik_id=".$id.""); 
while($satir=mysqli_fetch_array($sonuc))
{			
	echo '<tr>';
	echo '<td>'.$satir['isim'].'</td>';
	echo '<td>'.$satir['soyisim'].'</td>';

	echo '<td> 
	    <button> <a href="cekilis_kazanan_sil.php?rand_id='.$satir['rand_id'].'">Sil</a> </button> &nbsp;
		<button> <a href="cekilis_kazanan_guncelle.php?rand_id='.$satir['rand_id'].'">Güncelle</a> </button> &nbsp;
		</td>';
	echo '</tr>';
}


echo"
</table>
<br>
<br>
		<h3 style=\"margin left:200px;\">Kişi Ekle </h3>
		
		<form action=\"cekilis_upload.php?id=".$id."\"  method=\"post\"  enctype=\"multipart/form-data\" >
	<div>
			<br>
			"
	?>
		
	  <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
	   	İsim: 
		</div>
		<input style="margin:15px 0px 0px 0px" name="isim" type="text" > <br> <br>
	  </div>
	  
	  <br>
	  
	  <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
		Soyisim: 
		</div>
		 <input style="margin:15px 0px 0px 0px" name="soyisim" type="text" > <br> <br>
		</div>
			
				
		<br>
		<input style="float:right;width:200px;margin-right:130px;" class="btn btn-info" type="submit" value="KAYDET" >
		<br>
		<br>
		<br>
		<br>
		
	</div>
	
  </form>
</div>
</body>
</html>
