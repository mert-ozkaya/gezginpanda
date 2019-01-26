﻿<?php 
include "baglanti.php";
?>


<?php include"admin_panel_ustMenu.php"; ?>

  <br>


  <form action="cekilis_upload.php"  method="post" id="userform"  enctype="multipart/form-data" >
	<div>
	
		<select name="cekilis" size="5" style="width:500px; font-size:15pt;">
		
		<?php
		
		$sonuc=mysqli_query($baglanti,"select * from ayarlar"); 
		while($satir=mysqli_fetch_array($sonuc))
		{
			
			echo " <option value=".$satir['id']." > ".$satir['etkinlik_isim']." </option> ";

			
		}
		?>
		</select>
			<br>
			<br>
	
		
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
