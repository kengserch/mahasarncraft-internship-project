<?php 
include("inc.head.php");
include("inc.header.php");
include("array.php");

	$product_id = $_GET['id'];
	$key = array_search($product_id, array_column($product, 'id'));

	
?>
 
	<!-- ========== Main ========== -->

	<main class="about-us-page_02">
		
		<div class="container banner-gallery">
			<div style="margin-top:20px;"></div>
			<div class="about-intro_02 close-gallery mm-top">
				<img src="<?php echo $product[$key]['image_gallery'];?>" alt="" class="img-responsive img-drop-shadow">
				<a href="gallery.php"><i style="margin-left:10px; cursor:pointer;" class="fa fa-times text-gallery-detail"></i></a>
			</div> <!-- /.about-intro_02 -->

			<div class="about-detail-font" style="display:flex;">
           <a href="productshop_detail.php?id=<?php echo $_GET['id'] ?>">  <h1 class="text_header_gallery"><?php echo $product[$key]['group_name'];?></h1></a>
				<div style="margin-left:auto; margin-top:2%;">
					<a href="gallery_detail.php?id=
							<?php 
								if( $_GET['id'] <= 1 ){
									echo $_GET['id'] = 1 ;
								}else{
									echo $_GET['id'] - 1 ;
								}
							 ?>"> 
						<i class="fa fa-chevron-left text-gallery-detail"></i> 
					</a>
				    <a href="gallery_detail.php?id=
							<?php 
								if( $_GET['id'] >= 21 ){
									echo $_GET['id'] = 21 ;
									//header("Location: ../gallery.php");
								}else{
									echo $_GET['id'] + 1 ;
								}
							?>">
						<i style="padding-left:20px;" class="fa fa-chevron-right text-gallery-detail"></i></a>
				</div>
			</div> <!-- /.about-us_05 -->

			

		</div> <!-- /.container -->

		

	</main> <!-- /.about-us -->

	
	
		

	

	


</body>
</html>


<script> 
	function relocate(){
		window.location.href = '/gallery.php';
	}
</script>

<?php 
include("inc.footer.php");
include("inc.script.php");

?>

