<?php 

	include "baglanti.php";

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>ADMİN PANEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>





<div class="container" style="margin-top:15%">

  <form class="form-horizontal" action="login.php" method="post">
    <div class="form-group">
      <label class="control-label col-md-offset-3 col-md-2">Kullanıcı Adı</label>
      <div class="col-md-3">
        <input type="text" class="form-control" name="kADİ">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-offset-3 col-md-2" for="pwd">Şifre:</label>
      <div class="col-md-3">          
        <input type="password" class="form-control" name="parOLA">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-7 col-md-10">
        <button type="submit" name="giriss" class="btn btn-primary">Giriş</button>
      </div>
    </div>
  </form>
</div>


</body>
</html>






