﻿<?php
include "baglanti.php";

 ?>
<style>
.slider{
	width:900px;
	height:431px;
	margin:auto;
}


@media (max-width: 768px) {
  

  .slider {
    width:200px;
	height:170px;
	margin:auto;
  }
}


</style>
   
<div class="container" >
<div class="row">
	
	<div class="col-md-9 col-xs-12" style="margin:auto; margin-top:2%;">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		  
		  <ol class="carousel-indicators" style="bottom:10px;"> 
				
				<?php
				
					$sorgu="SELECT * FROM `slider_resimler` WHERE siralama_id>=0";
					$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çaly?mady");
						$first=0;	
					while($satir=mysqli_fetch_array($sonuc))
					{
						if($first==0)
						{
						echo"
							<li data-target=\"#myCarousel\" data-slide-to=\" $first\" class=\"active\"></li>
							";
							$first++;
						}
						else{
					
						 echo"
						<li data-target=\"#myCarousel\" data-slide-to=\" $first\"></li> 
						  ";
						  $first++;
						}
					}  
				 ?>
				</ol>
		  
				
			
			
			<div class="carousel-inner slider">

			<?php 
				
					$sorgu="SELECT * FROM `slider_resimler` WHERE `siralama_id` >= 0 ORDER BY `siralama_id` ASC";
					$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çaly?mady");
							
					$first=1;								
					while($satir=mysqli_fetch_array($sonuc))
					{
						if($first==1)
						{
							echo"
							<div class=\"item active\" >
							<img src=\" ".$satir["resim_yolu"]." \" style=\"height:100%;width:100%; \">
							</div>
							";
							$first=0;
							
						}
						else
						{
							echo"
							<div class=\"item\">
							<img src=\"".$satir["resim_yolu"]."\" style=\"height:100%;width:100%; \">
							</div>
							";
						}							
						
				
					  

					  
					}
			  
			  
			  ?>
			  </div> 
		
		

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background:none">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next" style="background:none">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		  
		</div>
	</div>
	<div class="col-md-1 col-xs-1">
	</div>
	</div>
</div>
  