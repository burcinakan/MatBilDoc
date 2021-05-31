
<?php 

include ('header.php')

 ?>
		
<html>
<body id="top">



		<?php 
			 $conn=mysqli_connect("localhost","root","","matbildoc");
			 $docsorgu = mysqli_query($conn,"Select * from dokuman");
			 while ($doccek=mysqli_fetch_assoc($docsorgu)){ ?>
			<div class="wrapper row3">
				<section class="hoc container clear"> 
				<div class="sectiontitle">
				</div>
					<div class="group">
					<article class="one_third first"><a href="#"><img class="btmspace-30" src="images/demo/hakkinda.png" alt=""></a>
					<h3 class="heading"><?php echo $doccek['dokuman_ad'];?></h3>
					<p><?php echo $doccek['dokuman_ack'];?>&hellip;</p>
					<footer class="nospace"><a href="<?php echo $doccek['dokuman_url'];?>">Ders notuna gitmek için tıklayınız. &raquo;</a></footer>
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

 		

 
 
 
