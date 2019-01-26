﻿<?php 
include "baglanti.php";

include("admin.php");
?>

<?php
$id=$_GET["id"];

$sorguekle="SELECT * FROM `ayarlar` WHERE `id` = ".$id." ORDER BY `id` DESC;";
$sonuc=mysqli_query($baglanti,$sorguekle) or die("Sorgu Hatalı");
$satir=mysqli_fetch_array($sonuc);
?>

<?php include"admin_panel_ustMenu.php"; ?>

  <br>


  <form action="cekilis_ekle_guncelle.php"  method="post" >
	<div>
		<input name="id" type="hidden" value="<?php echo $satir["id"]; ?>" > 
	
		<div style="border-bottom:1px solid grey; width:1000px;">
		<?php
		
		if($satir["cekilisBoolean"]==1){
		?>
		<input type="radio" name="cekilisBoolean" value="1" checked> Çekilişi Ekle<br>
		<input type="radio" name="cekilisBoolean" value="0"> Çekilişi Kaldır<br>
		<?php
		}else{
		?>
		<input type="radio" name="cekilisBoolean" value="1"> Çekilişi Ekle<br>
		<input type="radio" name="cekilisBoolean" value="0" checked> Çekilişi Kaldır<br>
		  <br>
		</div>
		
		<?php
		}
		?>
		
		<br>
	
	  <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
	   	Çekiliş Tarihi (örn:30 Mart 2018): 
		</div>
		<input style="margin:15px 0px 0px 0px" name="sonkatilim" type="text" value="<?php echo $satir["son_katilim"]; ?>" > <br> <br>
	  </div>
	  
	  <br>
	  
	  
		
		
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
			Çekiliş Linki:
		</div>
		 <input style="margin:15px 0px 0px 0px" name="cekilislink" type="text" value="<?php echo $satir["cekilis_link"]; ?>" > <br> <br>
		</div>
			
				
		<br>
		
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
			Çekiliş Listesi:
		</div>
		 <input style="margin:15px 0px 0px 0px" name="cekilislist" type="text" value="<?php echo $satir["cekilis_list"]; ?>" > <br> <br>
		</div>
		
		<br>
		
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
			Detaylar:
		</div>
		<textarea rows="8" cols="100" name="detaylar" value="<?php echo $satir["detaylar"]; ?>" >
		<?php echo nl2br($satir["detaylar"]); ?>
		</textarea>
		<br>
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
