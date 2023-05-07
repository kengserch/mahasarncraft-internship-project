<?php 
include("inc.head.php");
include("inc.header.php");
include("array.php");

	$product_id = $_GET['id'];
	$key = array_search($product_id, array_column($product, 'id'));
    // echo ("The key is: ".$key);
    // echo "<hr/>";
    // echo "<hr/>";
    // echo "<hr/>";
    
    // echo "<pre>".print_r( $product[$key] , true)."</pre>";

?>

<main class="single-project_04">

		<div class="container">

			<div class="project-intro_03">
				
				<a class="content-subheader-detail">อำเภอ<?php  echo $product[$key]['district'];?></a>
				<div class="content-header-detail"><?php echo $product[$key]['group_name'];?></div>
				<div class="content-subheader-detail"><?php echo $product[$key]['text'];?></div>

			</div> <!-- /.project-intro_03 -->

			<ul class="project-details_01 product-detail">
				<li>ผลิตภัณฑ์ :<span><?php echo $product[$key]['product_name'];?></span></li>
				<!-- <li>เบอร์โทรศัพท์ :<span><?php echo $product[$key]['phone'];?></span></li> -->
			</ul> <!-- /.project-details_01 -->

			<div class="clearfix"></div>

			<!-- <div class="img-full">
				<img src="<?php echo $product[$key]['image'];?>" alt="" class="img-cover img-drop-shadow">
			</div> 

			<div class="img-halves">
				
				<div class="item">
					<img src="<?php echo $product[$key]['image'];?>" alt="" class="img-cover img-drop-shadow">
				</div>

				<div class="item">
					<img src="<?php echo $product[$key]['image'];?>" alt="" class="img-cover img-drop-shadow">
				</div>

				<div class="clearfix"></div>

			</div> 

			<div class="img-full">
				<img src="<?php echo $product[$key]['image'];?>" alt="" class="img-cover img-drop-shadow">
			</div>  -->

			<!-- <div class="row">
				<div class="col-12" style=" height:700px; width:100%; margin-bottom:25px;">
					<img src="<?php echo $product[$key]['image_detail']['img_detail1'];?>" alt="" class="img-cover img-drop-shadow">
				</div>
				<div class="col-6" style=" height:700px; width:50%;  margin-bottom:25px;" >
					<img src="<?php echo $product[$key]['image_detail']['img_detail2'];?>" alt="" class="img-cover img-drop-shadow">
				</div>
				<div class="col-6" style=" height:700px; width:50%;  margin-bottom:25px;">
					<img src="<?php echo $product[$key]['image_detail']['img_detail3'];?>" alt="" class="img-cover img-drop-shadow">
				</div>
				<div class="col-12" style=" height:700px; width:100%; ">
					<img src="<?php echo $product[$key]['image_detail']['img_detail4'];?>" alt="" class="img-cover img-drop-shadow">
				</div>
    		</div> -->


			
			<div class="row">
				<?php 
					foreach( $product[$key]['image_detail'] as $v1  ){
					//echo $v1['img'];
					//echo $v1['class'];
					//echo $v1['style'];	
				?>
					<div class="<?php echo $v1['class'];?> image-mobile" style="<?php echo $v1['style'];?>">
						<img src="<?php echo $v1['img'];?>" alt="" class="img-cover img-drop-shadow">
					</div>

				<?php  }  ?>
				<div class="clearfix"></div>
    		</div>
			
			

            <hr style="margin-top: 10px; ">

            <!-- <div class="position : relative; width:100%; height:100px;">
				<a href="productshop_detail.php?id=
							<?php 
								if( $_GET['id'] <= 1 ){
									echo $_GET['id'] = 1 ;
								}else{
									echo $_GET['id'] - 1 ;
								}
							?>">
							<p class="text-next-detail" style="position: absolute; left: 0; bottom:0;">ย้อนกลับ</p> 
				
				</a>
				<a href="productshop_detail.php?id=
							<?php 
								if( $_GET['id'] <= 1 ){
									echo $_GET['id'] = 1 ;
								}else{
									echo $_GET['id'] - 1 ;
								}
							?>">
							<p class="text-next-detail" style="position: absolute; right: 0; bottom:0;">หน้าถัดไป</p> 
				
				</a>
            	<p class="text-title-btm"><?php echo $product[$key]['group_name'];?></p>
            </div> -->

			<div style="position : relative; width:100%; height:80px;"> 
				<a href="productshop_detail.php?id=<?php 
								if( $_GET['id'] <= 1 ){
									echo $_GET['id'] = 1 ;
								}else{
									echo $_GET['id'] - 1 ;
								}
							 ?>"><p class="text-next" style="position: absolute; left: 0; bottom:0;">ย้อนกลับ</p></a>
				<a href="productshop_detail.php?id=<?php 
								if( $_GET['id'] >= 21 ){
									echo $_GET['id'] = 21 ;
								}else{
									echo $_GET['id'] + 1 ;
								}
							?>"><p class="text-next" style="position: absolute; right: 0; bottom:0;">หน้าถัดไป</p></a>
			</div>

			<p class="text-title-btm"><?php echo $product[$key+1]['group_name'];?></p>
			

			
		</div> <!-- /.container -->

        
		
</main>	

    <?php 
include("inc.footer.php");
include("inc.script.php");

?>