﻿﻿<?php

	include "baglanti.php";
	
setlocale(LC_TIME, "turkish"); //başka bir dil içinse burada belirteceksin.
		setlocale(LC_ALL,'turkish'); //başka bir dil içinse burada belirteceksin.
			date_default_timezone_set('Europe/Istanbul');
?>

<style>

.panelDefaultStyle{
	border:solid #0b97a4;
	border-width:1px;
	border-radius:10px 10px 10px 10px;
	box-shadow:none;
    margin-top:-2px;
	

}


.panelHeadinggStyle{
	border:solid #0b97a4;
	border-width:1px;
	border-radius:10px 10px 0px 0px;
	box-shadow:none;
	margin-top:-5px;
	background-color:white;
	
}


.panelBodyStyle{
	background-color:#f2f2f2;
	border:solid #0b97a4;
	border-width:1px;
	border-top-style:solid;
	border-top-color:#0b97a4;
	border-top-width:2px;
	border-radius:0px 0px 10px 10px;
	height:auto;
	box-shadow:none;
	margin-bottom:-5px;
	

}





.myHeader:hover{
	color:white;
}
.myHeaderActive:active{
	color:#4d4dff;
}
.detaylar:hover{
color:blue;
}

.etkinlik_border{
border-style:solid;
border-color:white;
border-width:15px;
}

.yaklasan_etkinlikler{
	color:#0b97a4;
	background-color:#0b97a4;

}

.etkinlik_resim{
	width:100%;
	height:377px;
}


@media (max-width: 768px) {
  

  .etkinlik_resim{
    width:%100;
	height:170px;
	margin:auto;
  }
}


</style>
<link rel="shortcut icon" type="image/x-icon" href="http://gezginpanda.com/logosite.ico" />
<?php

$alinanID= $_GET['id'];

		$sorgu="SELECT * FROM `ayarlar` WHERE id=$alinanID";
		$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çalışmadı");
						
		if($satir=mysqli_fetch_array($sonuc))
		{
			echo"
			<title> ".$satir["etkinlik_isim"]." - Gezginpanda </title>
			";
		}
   ?>

					<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.4";
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
					</script>




</head>

<body style="background-color:#f2f2f2">




<div class="container" style="margin-top:1%">
	<div class="row">
		<div class="col-md-7 col-xs-12 col-sm-12" style="margin-bottom:50px">
		
		
		
		<?php
		
		$alinanID= $_GET['id'];
		
		
		$sorgu="SELECT * FROM `ayarlar` WHERE id=$alinanID";
		$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çalışmadı");
						
		while($satir=mysqli_fetch_array($sonuc))
		{	
		
		?>
			
			
            <img class="etkinlik_resim" src="<?php echo $satir["resim_yolu"];?> ">
			
	
			<div class="panel panel-default" style="width:100%;margin: 0px 0px 0px 0px;">
				<div class="panel-body">
				

					<div class="row">
						
						
						
						
						<div class="col-md-2 col-xs-3">
						<div class="row">
						&nbsp;
						</div>
						
						<p style="color:red;font-size:13pt;text-align:center;">
						<?php echo iconv('latin5','utf-8',strftime('%B',strtotime($satir["tarih"]))); ?> 
						</p>
						<p style="font-size:15pt; text-align:center">
						<b><?php echo date("d", strtotime($satir["tarih"])); ?></b>
						</p>
						
						</div>
						
						<div class="col-md-10 col-xs-8" style="float:left;">
							<h3> <?php echo $satir["etkinlik_isim"]; ?> </h3>	
							<p style="color:grey;"> Düzenleyen: <span style="color:#0b97a4;"> <?php echo $satir["etkinlik_ekibi"];?> </span> </p>
							
							
						</div>
						
						
					
					</div>
					
					<div class="row">
					
						
								<div class="col-md-12">
								 &nbsp;
									<div class="col-md-12" style="border-bottom:1px #DCDCDC solid">
								
									</div>
								</div>

					</div>
					
					&nbsp;
					<div class="row">
					 
						<div class="col-md-2 col-xs-2">
						&nbsp &nbsp &nbsp &nbsp
							<p style="font-size:15pt; text-align:center;color:grey;"> <span class="glyphicon glyphicon-time" ></span> </p>
							&nbsp;
							<p style="font-size:15pt; text-align:center;color:grey;"><span class="glyphicon glyphicon-map-marker"></span> </p>
						</div>
						
						
						<div class="col-md-10 col-xs-9">
						&nbsp
							<p style="font-size:14pt;"> 
							<?php 
							echo date("d ", strtotime($satir["tarih"])); 
							echo iconv('latin5','utf-8',strftime('%B ',strtotime($satir["tarih"])));  
							echo date("Y", strtotime($satir["tarih"]));
							?>
							</p>
							&nbsp;
							<p style="font-size:14pt;"> <?php echo $satir["yer"]; ?> </p>
							
							
						</div>
						
						
					
					
					</div>
					
					<div class="row">
								<div class="col-md-12">
								 &nbsp;
									<div class="col-md-12" style="border-bottom:1px #DCDCDC solid">
								
									</div>
								</div>
					
					</div>
					
					<div class="row">
								<div class="col-md-12 col-xs-12">
								
								<div style="display:inline-block;vertical-align:top;margin-top:20px;float:right">
								<a href="https://twitter.com/share" class="twitter-share-button" 
								data-url="http://www.gezginpanda.com/etkinlikpage_index.php?id=<?php echo $alinanID;?>" 
								data-text=" <?php echo $satir["etkinlik_isim"]; ?> " 
								data-via="gezginnpanda"> </a>
								<script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');
								</script>
								</div>
									<div id="fb-root"></div>
					<div class="fb-share-button" style="margin-top:20px;margin-right:5px;float:right"
					data-href="http://gezginpanda.com/etkinlikpage_index.php?id= <?php echo $alinanID; ?> " data-layout="button_count"></div>
					
					
					
					
					
								</div>
								
								
								
					
					</div>
					
					
					
			
					<div class="row">
								<div class="col-md-12">
								 &nbsp;
									<div class="col-md-12" style="border-bottom:3px #0b97a4 solid;text-align:center">
											<b style="font-size:15pt;"> Etkinlik Hakkında </b>
									</div>
									&nbsp;
									
									
								</div>
								
					</div>
					
					
					
					<div class="row">
								<div class="col-md-12">
								 &nbsp;
								<div class="col-md-12">
								<p style="font-size:13pt;">
								<?php
								echo nl2br($satir["hakkinda"]);
								?>
									</p>
									
								</div>
								</div>
								
					</div>
					
					
					
					
					
				</div>
			</div>
			
		</div>
		
		
		<?php
		
		if($satir["cekilisBoolean"]!=0){
		
		?>
		<div class="col-md-5 col-xs-12">
			
			
			<div class="panel panel-default panelDefaultStyle">
						  
				<div class="panel-heading" style="border:solid #0b97a4;
														  border-width:1px;
														  border-radius:10px 10px 0px 0px;
														  box-shadow:none;
														  margin-top:-5px;
														  background-color:white;">
					<p style="font-size:12pt; color:#0b97a4; text-align:center;margin:auto"> <b> DAVETİYE </b> </p>
						
				</div>
				<div class="panel-body panelBodyStyle" >
						
						<div class="row">
								<div class="col-md-5 col-xs-5 col-sm-4" style="border-right:solid #0b97a4 1px"> 
								  <div class="col-md-12 col-xs-12 col-sm-12" style="text-align:center;margin:auto;" > 
									<p style="color:#0b97a4;margin:auto;font-size:83%"> <b> Çekiliş Tarihi </b> </p>
								  </div>
								</div>
							
								<div class="col-md-7 col-xs-5 col-sm-8" style="font-size:80%;margin:auto; ">
									<p style="color:grey;margin:auto"><b> <?php echo $satir["son_katilim"]; ?> </b> </p>
								</div>
						  
							</div>
							
							<br>
							
							<div class="row">
								<div class="col-md-5 col-xs-5 col-sm-4" style="border-right:solid #0b97a4 1px"> 
								  <div class="col-md-12 col-xs-12 col-sm-12" style="text-align:center;margin:auto;" > 
									<p style="color:#0b97a4;margin:auto;font-size:83%"> <b> Çekiliş Linki </b> </p>
								  </div>
								</div>
							
								<div class="col-md-7 col-xs-5 col-sm-8" style="font-size:80%;margin:auto;">
									<p style="color:grey;margin:auto;"><a target="_blank" href="https://<?php echo $satir["cekilis_link"]; ?>"> 
									<?php echo $satir["cekilis_link"]; ?>  </a> </p>
								</div>
						  
							</div>
							
							<br>
							
							<div class="row">
								<div class="col-md-5 col-xs-5 col-sm-4" style="border-right:solid #0b97a4 1px"> 
								  <div class="col-md-12 col-xs-12 col-sm-12" style="text-align:center;margin:auto;" > 
									<p style="color:#0b97a4;margin:auto;font-size:83%"> <b>Çekiliş Listesi </b> </p>
								  </div>
								</div>
							
								<div class="col-md-7 col-xs-5 col-sm-8" style="font-size:80%;margin:auto; ">
									<p style="color:grey;margin:auto;"><a target="_blank" href="https://<?php echo $satir["cekilis_list"]; ?> "> 
									<?php echo $satir["cekilis_list"]; ?>  </a> </p>
								</div>
						  
							</div>
							
							
							
							<br>
							
							<div class="row">
								<div class="col-md-5 col-xs-5 col-sm-4" style="border-right:solid #0b97a4 1px"> 
								  <div class="col-md-12 col-xs-12 col-sm-12" style="text-align:center;margin:auto;" > 
									<p style="color:#0b97a4;margin:auto;font-size:83%"> <b> Katılım Şartları ve Detaylar </b> </p>
								  </div>
								</div>
							
								<div class="col-md-7 col-xs-5 col-sm-8" style="font-size:80%;margin:auto; ">
									<p style="color:grey;margin:auto;"><b>  <?php echo nl2br($satir["detaylar"]); ?> </b> </p>
								</div>
						  
							</div>
							
							
							
							
							<br>
							
							<div class="row">
								<div class="col-md-5 col-xs-5 col-sm-4" style="border-right:solid #0b97a4 1px"> 
								  <div class="col-md-12 col-xs-12 col-sm-12" style="text-align:center;margin:auto;" > 
									<p style="color:#0b97a4;margin:auto;font-size:83%"> <b>Davetiye Kazananlar </b> </p>
								  </div>
								</div>
							
								<div class="col-md-7 col-xs-5 col-sm-8" style="font-size:80%;margin:auto; ">
									<p style="color:grey;margin:auto;"><b> <ul>
							 <?php
							  
							  
							  $temp=$alinanID;
							$sorgu1="SELECT * FROM `cekilisler` WHERE etkinlik_id=$alinanID";
							$sonuc1=mysqli_query($baglanti,$sorgu1) or die("Sorgu Çalışmadı");	
							while($satir1=mysqli_fetch_array($sonuc1))
							{	
						
								if($temp==$alinanID){
								echo"						
									<li>
										".$satir1["isim"]." ".$satir1["soyisim"]."
									</li>
									";
								}
								else{
									break;
								}
							
							}	
					
							  ?>
							  </ul> </b> </p>
								</div>
						  
							</div>
						
						
						
						
						
				</div>
						
						
						
						<?php
							}
							}
						?>
			</div>
						
						
					

		
		<br>
	
			
		
		
		
		
		
		</div>
		
		
		

	 </div>
	 
	 
	
	 </div>
	
	<!--  ---------------------------------**********************--------------------------- -->
     

</body>





