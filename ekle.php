<?php 
include('baglan.php');
?>

<html>
<head>
<title>Dosya Ekleme</title>
</head>
<body style="background-image:url('images/demo/backgrounds/03.jpg');">


<div class='tasi' style="margin:auto;; width: 250px; height;250px; margin-top:150px;color:#FFFFFF; background-color:rgba(37,37,37,.9);">

<?php 
if (isset($_POST['submit'])){
$dokuman_ad = $_POST ['dokuman_ad'];
$dokuman_url = $_POST ['dokuman_url'];

$sql = "Insert into dokuman ( dokuman_ad , dokuman_url ) values ('$dokuman_ad', '$dokuman_url')";
$sonuc = mysqli_query($conn,$sql);
echo "<script language = 'Javascript'>window.location.href='admin.php'</script>";
}
	else {	
?>
<center>
<form name="dokuman_ekleme" method="POST" action="ekle.php">
<p>Eklenecek Ders: <input type="text" name="dokuman_ad"></p>
<p>Eklenecek Url: <input type="text" name="dokuman_url"></p>	

<p><input type="submit" name="submit" value="Ekle"></p>
</form>
</center>
<?php 
}
?>




<?php 
if (isset($_POST['submit'])){
$kitap_adi = $_POST ['kitap_adi'];
$kitap_url = $_POST ['kitap_url'];

$sql = "Insert into kitap ( kitap_adi , kitap_url ) values ('$kitap_adi', '$kitap_url')";
$sonuc = mysqli_query($conn,$sql);
echo "<script language = 'Javascript'>window.location.href='admin.php'</script>";
}
	else {	
?>
<center>
<form name="kitap_ekleme" method="POST" action="ekle.php">
<p>Eklenecek Kitap Adı: <input type="text" name="kitap_adi"></p>
<p>Eklenecek Url: <input type="text" name="kitap_url"></p>	

<p><input type="submit" name="submit" value="Ekle"></p>
</form>
</center>
<?php 
}
?>
</div>
</body>
</html>
