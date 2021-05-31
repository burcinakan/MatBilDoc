
<html>
<body style="background-image:url('images/demo/backgrounds/03.jpg');">
<div class='tasi' style="margin:auto;; width: 250px; height;250px; margin-top:150px;color:#FFFFFF; background-color:rgba(37,37,37,.9);">
<?php 
include ('baglan.php');
$i = $_GET['islem_no'];
$sorgu = mysqli_query($conn,"delete from dokuman where dokuman_id=$i");
$kitsor = mysqli_query($conn,"delete from kitap where kitap_id=$i");
echo "
<script language='Javascript'>
window.location.href='admin/admin.php'</script>"; ?>
</div>
</body>
</html>

