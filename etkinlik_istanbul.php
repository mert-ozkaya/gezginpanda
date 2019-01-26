﻿﻿<?php
include "baglanti.php";

setlocale(LC_TIME, "turkish"); //başka bir dil içinse burada belirteceksin.
		setlocale(LC_ALL,'turkish'); //başka bir dil içinse burada belirteceksin.
			date_default_timezone_set('Europe/Istanbul');
 ?>


	<div class="row">
		<?php
			$sorgu="SELECT * FROM `ayarlar` WHERE `sehir` LIKE 'İstanbul' ORDER BY `tarih` ASC";
			$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çalışmadı");
			$gununtarihi=date("Y-m-d");
			while($satir=mysqli_fetch_array($sonuc))
			{	
				if($satir["tarih"]>=$gununtarihi)
				{
					echo" 
						
						<div class=\"col-md-4 col-xs-12 col-sm-12\" >
						<div class=\"panel-group\">
					
							
							<div class=\"panel\" style=\"border-radius:7px;  box-shadow: 0px 0px 0px 0px;\">
							<a href=\" etkinlikpage_index.php?id=".$satir["id"]." \" target=\"_blank\"> 
							<img src=\"".$satir["resim_yolu"]."\" class=\"img-rounded\" style=\"width:100%;height:180px; border-radius:7px 7px 0px 0px\">
							</a>
							<div class=\"panel-footer\" 
							  style=\"
							  border:solid #0b97a4;
							  border-width:1px;
							  border-top-style:solid;
							  border-top-color:#0b97a4;
							  border-top-width:2px;
							  border-radius:0px 0px 10px 10px;
							  height:140px;
							  \">
							  
							  <div class=\"row\">
								  <div class=\"col-md-4 col-xs-4 col-sm-4\" style=\"border-right:solid #0b97a4 1px\">
							
								  </div>
								  
								  <div class=\"col-md-8 col-xs-7 col-sm-8\" style=\"font-size:90%; \">
										<a href=\" etkinlikpage_index.php?id=".$satir["id"]." \" target=\"_blank\"> <p style=\" color:#0b97a4\"> <b> ".$satir["etkinlik_isim"]." </b> </p> </a>
									  </div>
							  </div>
							  
							  
							  
							  
							  
								<div class=\"row\">
									<div class=\"col-md-4 col-xs-4 col-sm-4\" style=\"border-right:solid #0b97a4 1px\"> 
									  <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align:center\" > 
										<p style=\"color:#0b97a4; \"> <b>
										";
										$gecici=iconv('latin5','utf-8',strftime('%A',strtotime($satir["tarih"])));
										$gun = mb_substr($gecici, 0, 3,'UTF-8');
												echo $gun;
											echo"
										</b> </p>
									  </div>
									</div>
								
									<div class=\"col-md-8 col-xs-7 col-sm-8\" style=\"font-size:70% \">
										<p style=\"color:grey\"><b> ".$satir["yer"]." </b> </p>
									</div>
							  
								</div>
							  
							  
								<div class=\"row\">

								  <div class=\"col-md-4 col-xs-4 col-sm-4\"style=\"border-right:solid #0b97a4 1px;text-align:center\" >
									<p> <b style=\"color:grey; font-size:9pt; \">  
									";
									echo date("d ", strtotime($satir["tarih"]));
									echo iconv('latin5','utf-8',strftime('%B',strtotime($satir["tarih"])));
									
									echo" </b> </p>
								  </div>
								  
								  <div class=\"col-md-8 col-xs-7 col-sm-8\" style=\"font-size:70%; \">
									<p style=\"color:grey;\"><b> ".$satir["etkinlik_ekibi"]." </b> </p>
								  </div>
							  
								</div>
							  
							 
							  </div>
							</div>
							
					</div>
					</div>
			
					";
				}
			}
		?>
			
	
			
	</div>
	</div>
		
	

</body>




</html>