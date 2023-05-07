<?php 
include("inc.head.php");
include("inc.header.php");
include("array.php");
?>
	
	<!-- ========== Header ========== -->
	
    <header class="main-header header-default">

    </header> <!-- /.main-header -->


	<!-- ========== MAIN ========== -->

	<main class="photography" style="margin-bottom:40px; margin-top:-35px;"> 

		<div class="photography-carousel owl-carousel">
		<?php 
          if($product)
          foreach($product as $v1 ){
          ?>

			<a href="gallery_detail.php?id=<?php echo $v1['id'] ?>">
				<div class="photo-category">
					<img src="<?php echo $v1['image_gallery'] ?>" alt="" class="img-cover img-drop-shadow">
					<div class="photo-category-overlay">
						<h2><?php echo $v1['group_name'] ?></h2>
					</div>
				</div>
			</a>

		<?php }  ?> 
	
		</div> <!-- /.photography-carousel -->

	</main> <!-- /.main -->

	

	


    <?php 
include("inc.footer.php");
include("inc.script.php");

?>



