<?php 

session_start();
header('location:giris.php');
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'matbildoc');

$user = $_POST['kullanici_adi'];
$pass = $_POST['kullanici_sifre'];

$sorgu = mysqli_query($conn,"select * from kayit where kullanici_adi='$user'");
$satir = mysqli_fetch_array($sorgu);

if ($satir==1){
echo "Baþarýsýz";
}
else {
$reg = "Insert into kullanicilar ( kullanici_adi , kullanici_sifre ) values ('$user', '$pass')";
mysqli_query($conn,$reg);
}
?>