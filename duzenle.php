<?php 
include ('baglan.php');
?>
<html>
<head>
<title>Dosya Duzenle</title>
</head>
<body style="background-image:url('images/demo/backgrounds/03.jpg');">
<div class='tasi' style="margin:auto;; width: 250px; height;250px; margin-top:150px;color:#FFFFFF; background-color:rgba(37,37,37,.9);">
<?php 
if (isset($_POST['submit'])){
$dokuman_ad = $_POST ['dokuman_ad'];
$dokuman_url = $_POST ['dokuman_url'];
$dokuman_ack = $_POST['dokuman_ack'];
$id = $_POST ['dokuman_id'];
$sql = "Update dokuman set 
		dokuman_ad = '$dokuman_ad',
		dokuman_url = '$dokuman_url'
		dokuman_ack = '$dokuman_ack' where dokuman_id=$id";
	$sonuc = mysqli_query($conn,$sql);
	echo "<script language = 'Javascript'>window.location.href='admin.php'</script>";
	}
	else {
	$id = $_GET['islem_no'];
	$sorgu = mysqli_query($conn,"select * from dokuman where dokuman_id=$id");
	$satir = mysqli_fetch_array($sorgu);
?>
<center>
<form name="dokuman_duzenleme" method="POST" action="duzenle.php">
<p>Düzenlenecek Ders Adı: <input type="text" value="<?php echo $satir['dokuman_ad']; ?>" name="dokuman_ad"></p>
<p>Düzenlenecek Pdf: <input type="text" value="<?php echo $satir['dokuman_url']; ?>" name="dokuman_url"></p>	
<p>Düzenlenecek Açıklama: <input type="text" value="<?php echo $satir['dokuman_ack']; ?>" name="dokuman_ack"></p>	
<input type="hidden" value="<?php echo  $id;   ?>" name="dokuman_id">
<p><input type="submit" name="submit" value="Duzenle"></p>
</form>
</center>
<?php
}
?>


<?php 
if (isset($_POST['submit'])){
$kitap_adi = $_POST ['kitap_adi'];
$kitap_url = $_POST ['kitap_url'];
$id = $_POST ['kitap_id'];
$sql = "Update kitap set 
		kitap_adi = '$kitap_adi',
		kitap_url = '$kitap_url' where kitap_id=$id";
	$sonuc = mysqli_query($conn,$sql);
	echo "<script language = 'Javascript'>window.location.href='admin.php'</script>";
	}
	else {
	$id = $_GET['islem_no'];
	$kitsor = mysqli_query($conn,"select * from kitap where kitap_id=$id");
	$satir = mysqli_fetch_array($kitsor);
?>
<center>
<form name="dokuman_duzenleme" method="POST" action="duzenle.php">
<p>Düzenlenecek Kitap Adı: <input type="text" value="<?php echo $satir['kitap_adi']; ?>" name="kitap_adi"></p>
<p>Düzenlenecek Url: <input type="text" value="<?php echo $satir['kitap_url']; ?>" name="kitap_url"></p>	
<input type="hidden" value="<?php echo  $id;   ?>" name="kitap_id">
<p><input type="submit" name="submit" value="Duzenle"></p>
</form>
</center>
<?php
}
?>
</div>
</body>
</html>



