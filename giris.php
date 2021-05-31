
<html>
<head>
<title>Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Author" content="Burçin AKAN">
<link href="stil.css" rel="stylesheet" type="text/css" media="all">	
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">	
</head>

<body>

<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
     
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="#">MatBil.Doc</a></h1>
      </div>
    </header>
	 </div>
	 <div class="tasiyici" style="height:550px; margin-top:50px;">
	 <div class="login-left" style="width:450px; margin-left:450px;height:250px;">
<h3>Giriş Yap</h3>
<form method="post" action="giris_kontrol.php">
<center>
Kullanıcı Adı : 
<input type="text" name="kullanici_adi" size="7"  style="color:black">
<p>
Sifre :  
<input type="password" name="kullanici_sifre" size="7"  style="color:black">

<p><br>
<input type="submit" value="Giris Yap" size="7"  style="color:black">
</center>
</form> 
</div>

<div class="login-right"style="width:450px; margin-left:450px; height:250px;">
<h3>Kayıt Ol</h3>
<form method="post" action="giris_kayit.php">
<center>
Kullanıcı Adı : 
<input type="text" name="kullanici_adi" size="7"  style="color:black">
<p>
Sifre :  
<input type="password" name="kullanici_sifre" size="7"  style="color:black">

<p><br>
<input type="submit" value="Kayıt Ol" size="7"  style="color:black">
</center>
</form> 
</div>
 </div>

</body>
</html>
<?php 

include('footer.php')

?>