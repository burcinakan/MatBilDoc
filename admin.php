
<?php 
include('baglan.php');
?>
<html>

<head>
<title>Veri Tabanı Bağlantısı</title>
	<link href="admin.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="yanMenu" >
<h3 style="color:white; margin-bottom:8px; ">Kategoriler</h3>
<ul style="height:1000px; ">
  <li><a href="index.php" style="padding-top:20px; padding-bottom:20px;">Ana sayfa</a></li>
  <li><a class="drop" href="#" style="padding-top:20px; padding-bottom:20px;  background-color: #89888C; color:white">Düzeltilen Sayfalar:</a>
            <ul>
              <li><a href="döküman.php" style="padding-top:20px; padding-bottom:20px; color:black">Dökümanlar</a></li>
              <li><a href="kitap.php" style="padding-top:20px; padding-bottom:20px; color:black">Kitaplar</a></li>
            </ul>
          </li>
  <li><a href="giris.php" style="padding-bottom:20px;">Giriş Yap</a></li>
</ul>
</div>

<?php 
$sonuc = mysqli_query($conn,"Select * from dokuman order by dokuman_ad asc");
$say = mysqli_num_rows($sonuc);
?>
<center>
<h1>Döküman Verileri</h1>
<table width=300; height=500 ;>
<tr >
<td ><h1>Dersler:<h1></td>
<td ><h1>Dökümanlar:<h1></td>
<td ><h1>Açıklama:<h1></td>
<td align=center ><h1>Düzenle<h1></td>
<td align=center ><h1>Sil<h1></td>
<td align=center ><h1>Ekle<h1></td>
</tr>
<?php 
if ( $say > 0 ) {
while ( $satir = mysqli_fetch_array($sonuc) ) {
echo "<tr>";
echo "<td >".$satir['dokuman_ad']."</td>";
echo "<td>".$satir['dokuman_url']."</td>";
echo "<td>".$satir['dokuman_ack']."</td>";
echo "<td align=center style=background-color:white><a href='duzenle.php?islem_no=".$satir['dokuman_id']."'><img src='images/duzen.jpg' ></td>";
echo "<td align=center style=background-color:white><a href='sil.php?islem_no=".$satir['dokuman_id']."'><img src='images/del.jpg'></td>";
echo "<td align=center style=background-color:white><a href='ekle.php?islem_no=".$satir['dokuman_id']."'><img src='images/ek.png'></a>";
echo "</tr>";
}}
?>
</table>

</center>

<?php 
$sonuc = mysqli_query($conn,"Select * from kitap order by kitap_adi asc");
$say = mysqli_num_rows($sonuc);
?>
<center>
<h1 >Kitap Verileri</h1>
<table width=900; height=300>
<tr>
<td ><h1>Kitap Adı:<h1></td>
<td ><h1>Kitap Url:<h1></td>
<td align=center ><h1>Düzenle<h1></td>
<td align=center ><h1>Sil<h1></td>
<td align=center ><h1>Ekle<h1></td>
</tr>
<?php 
if ( $say > 0 ) {
while ( $satir = mysqli_fetch_array($sonuc) ) {
echo "<tr>";
echo "<td>".$satir['kitap_adi']."</td>";
echo "<td>".$satir['kitap_url']."</td>";
echo "<td align=center style=background-color:white><a href='duzenle.php?islem_no=".$satir['kitap_id']."'><img src='images/duzen.jpg'></td>";
echo "<td align=center style=background-color:white><a href='sil.php?islem_no=".$satir['kitap_id']."'><img src='images/del.jpg'></td>";
echo "<td align=center style=background-color:white><a href='ekle.php?islem_no=".$satir['kitap_id']."'><img src='images/ek.png'></a>";
echo "</tr>";
}}
?>
</table>

</center>


</body>
</html>
