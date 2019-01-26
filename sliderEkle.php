﻿<?php 
include "baglanti.php";
include("admin.php");

?>


<?php include"admin_panel_ustMenu.php"; ?>
  <br>


  <form action="slider_resim.php"  method="post" id="userform"  enctype="multipart/form-data" >
	<div>
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
	   	Sıra:
		</div>
		<input style="margin:15px 0px 0px 0px" name="id" type="text" > <br> <br>
	  </div>
	
		<br>
		
		<div style="border-bottom:1px solid grey; width:1000px; height:50px;">
		<div style="margin:0px 0px 10px 0px;" class="col-md-3">
		Yüklenecek resmi seçiniz:
		</div>
		<input style="margin:10px 0px 0px 0px" type="file" name="fileToUpload" id="fileToUpload">
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
