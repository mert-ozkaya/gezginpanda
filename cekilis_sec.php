﻿<?php 
include "baglanti.php";

include("admin.php");
?>


<?php include"admin_panel_ustMenu.php"; ?>
  <br>


  <form action="cekilis_kazanan_listele.php"  method="post" id="userform"  enctype="multipart/form-data" >
	<div>
	
		<select name="cekilis" size="15" style="width:500px; font-size:15pt;">
		
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
		<input style="float:right;width:200px;margin-right:130px;" class="btn btn-info" type="submit" value="Etkinlik Sec" >
		<br>
		<br>
		<br>
		<br>
		
	</div>
	
  </form>

</div>

</body>
</html>
