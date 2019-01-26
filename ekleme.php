﻿<?php 
include "baglanti.php";
include("admin.php");
?>



<?php include"admin_panel_ustMenu.php"; ?>
  <br>


  <form action="upload.php"  method="post" id="userform"  enctype="multipart/form-data" >
	<div>
		<select name="sehir" size="4" style="width:200px; font-size:15pt;">
			 <option value="Ankara" > Ankara </option>
			 <option value="İstanbul" > İstanbul </option>
			 <option value="İzmir" > İzmir </option>
		</select>
	
	  <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
	   	Etkinlik ismi: 
		</div>
		<input style="margin:15px 0px 0px 0px" name="isim" type="text" > <br> <br>
	  </div>
	  
	  <br>
	  
	  <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
		Yer: 
		</div>
		 <input style="margin:15px 0px 0px 0px" name="yer" type="text" > <br> <br>
		</div>
		
		<br>
		
		
		<div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
			Etkinlik ekibi:
		</div>
		 <input style="margin:15px 0px 0px 0px" name="ekip" type="text" > <br> <br>
		</div>
		
		<br>
		
		
		 <div style="border-bottom:1px solid grey; width:1000px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
		Tarih: 
		</div>
			<input type="date" name="tarih" name="bday" min="2017-01-01" style="width:200px"><br> <br/> <br>
		</div>
		
		<br>
		
		<div style="border-bottom:1px solid grey; width:1000px; height:200px;">
		<div style="margin:15px 0px 0px 0px;" class="col-md-3">
		Hakkında: 
		</div>
		<textarea rows="8" cols="100" name="hakkinda" form="userform">
		</textarea>
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
