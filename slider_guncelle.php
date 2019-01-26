﻿<?php 
include "baglanti.php";
?>

<?php
$id=$_GET["id"];

$sorguekle="SELECT * FROM `slider_resimler` WHERE `id` = ".$id." ORDER BY `id` DESC;";
$sonuc=mysqli_query($baglanti,$sorguekle) or die("Sorgu Hatalı");
$satir=mysqli_fetch_array($sonuc);
?>


<?php include"admin_panel_ustMenu.php"; ?>

  <form action="slider_update.php"  method="post" id="userform"  enctype="multipart/form-data" >
	<div>
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
	   	Sıra: 
		</div>
		<input style="margin:15px 0px 0px 0px" value="<?php echo $satir["siralama_id"];?>" name="siralama_id" type="text" > <br> <br>
		<input type="hidden" value="<?php echo $satir["id"];?>" name="id">
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
