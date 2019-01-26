﻿<?php


	include "baglanti.php";

?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
  <meta name="description" content="Türkiye'nin etkinlik platformu.Konser, parti, tiyatro ve daha birçok etkinliğin bulunduğu eğlencenin başlıca adresi. İster popüler etkinliklere bak, istersen kendi etkinliğini oluşturup insanlarla paylaş.."/>
  <meta name="keywords" content="gezginpanda,etkinlik,,gezgin panda,parti,konser,gezgin panda"/>
  <meta name="author" content="özkaya,mert,ozkayamert97@gmail.com"/>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  		
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
	<!-- ek stiller -->
    <link href="css/style.css" rel="stylesheet">
   
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
	
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  
  <link rel="stylesheet" href="css/slider.css" >
  <link rel="shortcut icon" type="image/x-icon" href="http://gezginpanda.com/logosite.ico" />
  <?php
		$sorgu="SELECT * FROM `title` WHERE id=0";
		$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çaly?mady");
		if($satir=mysqli_fetch_array($sonuc))
		{
			echo"
			<title> ".$satir["site_title"]." </title>
			";
		}
   ?>
<style>
body {
  margin: 0;
  font-family: sans-serif;
}

header {
  width: 100%;
  background-color: black;
  color: grey;
}

#btn-menu {
  display: none;
}

header label {
  display: none;
  width: 32px;
  height: 40px;
  padding: 10px;
}

header label:hover {
  cursor: pointer;
  color:white;
}

.menu ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  justify-content: center;
}


.menu li:hover {
  background-color: rgba(0, 0, 0, 0.3);
  
}
.menu li a:hover {
  color:white;
}

.menu li a {
  display: block;
  padding: 10px 20px;
  color: grey;
  text-decoration: none;
  text-align:center;
}

@media (max-width: 768px) {
  header label {
    display: block;
	background-color:black;
	width:100%;
	padding-left:48%;
        height:40px;
  }

  .menu {
    position: static;
    background-color:black;
    width:100%;
    margin-top: -100%;
    transition: all 0.5s;
    margin-bottom:5%;
	
  }

  .menu ul {
    flex-direction: column;
  }

  .menu li {
    border-top: 1px solid #ffffff;
  }

  #btn-menu:checked ~ .menu {
    margin-top: -5px;
    background-color:black;
  }
}



</style>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46253307 = new Ya.Metrika({
                    id:46253307,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46253307" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4462754867417364",
    enable_page_level_ads: true
  });
</script>
  
  
</head>
<body>

<header style="margin-top:-20px;">





			<input type="checkbox" id="btn-menu">
			<label for="btn-menu"><span style="color:white;" class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></label>
			<nav class="menu">
				<ul>
					<li><a href="index.php">ANASAYFA</a></li>
					<?php
    		$sorgu="SELECT * FROM `ust_navbar` WHERE id=1";
    						$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çaly?mady");
    						
    		if($satir=mysqli_fetch_array($sonuc))
    		{
    			echo"
					<li><a href=\"yasam.php\">".$satir["nav_isim"]."</a></li>
					";
    		}
    		
			
			
    		echo"
					<li><a href=\"hakkimizda.php\">HAKKIMIZDA</a></li>
					
    		";
    		
    		
    		$sorgu="SELECT * FROM `ust_navbar` WHERE id=4";
    		$sonuc=mysqli_query($baglanti,$sorgu) or die("Sorgu Çaly?mady");
    						
    		if($satir=mysqli_fetch_array($sonuc))
    		{	
    		echo"
					<li><a href=\"etkinlikOlustur.php\">".$satir["nav_isim"]."</a></li>
					
					";
    		}
    		
    		?>
    		
				</ul>
			</nav>
		</header>

</body>
</html>
