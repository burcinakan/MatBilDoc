<?php 
$conn=mysqli_connect("localhost","root","","matbildoc");
if (mysqli_connect_error() ){
echo "Baglanti basarisiz.".mysqli_connect_error();
die();}
else {

}
mysqli_query($conn,"SET NAMES'utf8'");
?>