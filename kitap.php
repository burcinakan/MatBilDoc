
<?php 

include ('header.php')

 ?>
		
<html>
<body>



		<?php 
			 $conn=mysqli_connect("localhost","root","","matbildoc");
			 $kitsorgu = mysqli_query($conn,"Select * from kitap");
			 while ($kitcek=mysqli_fetch_assoc($kitsorgu)){ ?>
			<div class="wrapper row3">
				<section class="hoc container clear"> 
				<div class="sectiontitle">
				</div>
					<div class="group" >
					<article class="one_third first"><a href="#"><img class="btmspace-30" src="images/demo/ktp.png" alt=""></a>
					<h3 class="heading"><?php echo $kitcek['kitap_adi'];?></h3>
					<footer class="nospace"><a href="<?php echo $kitcek['kitap_url'];?>">Kitap Örneğine gitmek için tıklayınız. &raquo;</a></footer>
					</article>
				    </div>
			   </section>
			</div>
			  <?php 
					  }
					  ?>


</body>
</html>



  <?php 

include ('footer.php')

 ?>

 		

 
 