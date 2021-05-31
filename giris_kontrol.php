<?php
session_start();

$user = $_POST['kullanici_adi'];
$pass = $_POST['kullanici_sifre'];

if (!isset($_POST['kullanici_adi']) OR !isset($_POST['kullanici_sifre']) )
echo "<script language='Javascript'>window.location.href='giris.php'</script>";
else {

include('baglan.php');

$sorgu = mysqli_query($conn,"select * from kullanicilar where kullanici_adi='$user'");
$satir = mysqli_fetch_array($sorgu);



$pass2 = $satir['kullanici_sifre'];

if ( $pass != $pass2 ) {
echo "Lutfen bilgilerinizi kontrol ediniz";
}
else if ($user=='admin' && $pass=='1234') {
echo "<script language='Javascript'>window.location.href='admin.php'</script>";
}
else {

$_SESSION['kim'] = $user;
echo "<script language='Javascript'>window.location.href='index.php'</script>";



}


}




?>