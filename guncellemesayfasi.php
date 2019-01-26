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


  <form action="guncelle.php"  method="post" >
	<div>
	<input type="hidden" value="<?php echo $satir["id"];?>" name="id">
		<br>
		
		<select name="sehir" size="4" style="width:200px; font-size:15pt;">
			 <option value="Ankara" <?php if($satir["sehir"] == 'Ankara') echo "selected"; ?> > Ankara </option>
			 <option value="İstanbul" <?php if($satir["sehir"] == 'İstanbul') echo "selected"; ?> > İstanbul </option>
			 <option value="İzmir" <?php if($satir["sehir"] == 'İzmir') echo "selected"; ?> > İzmir </option>
		</select>
		
	  <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
	   	Etkinlik ismi: 
		</div>
		<input style="margin:15px 0px 0px 0px" name="isim" type="text" value="<?php echo $satir["etkinlik_isim"]; ?>" > <br> <br>
	  </div>
	  
	  <br>
	  
	  <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
		Yer: 
		</div>
		 <input style="margin:15px 0px 0px 0px" name="yer" type="text" value="<?php echo $satir["yer"]; ?>" > <br> <br>
		</div>
		
		<br>
		
		
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
			Etkinlik ekibi:
		</div>
		 <input style="margin:15px 0px 0px 0px" name="ekip" type="text" value="<?php echo $satir["etkinlik_ekibi"]; ?>" > <br> <br>
		</div>

		<br>
		
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
		Tarih: 
		</div>
			<input type="date" name="tarih" name="bday" min="2017-01-01" style="width:200px" value="<?php echo $satir["tarih"]; ?>" ><br> <br/> <br>
		</div>
		
		<br>
		
		<div style="border-bottom:1px solid grey; width:1000px; height:200px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
		Hakkında: 
		</div>
		<textarea style="resize:none;" rows="8" cols="100" name="hakkinda" value="<?php echo $satir["hakkinda"]; ?>" >
		<?php echo $satir["hakkinda"]; ?>
		</textarea>
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
