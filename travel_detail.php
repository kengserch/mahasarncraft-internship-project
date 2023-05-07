<?php 
include("inc.head.php");
include("inc.header.php");
include("array.php");


	$travel_id = $_GET['id'];
	$key = array_search($travel_id, array_column($travel, 'id'));
	//echo ("The key is: ".$key);
	// echo "<hr/>";
	// echo "<hr/>";
	// echo "<hr/>";
	//echo "<pre>".print_r( $travel[$key] , true)."</pre>";

?>

	<!-- ========== Main ========== -->

	<main class="single-project_04">

		<div class="container">

			<div class="project-intro_03" style="width:100%;">
				
				<a class="content-subheader-detail"><?php echo $travel[$key]['travel_type'];?></a>
				<div class="content-header-detail"><?php echo $travel[$key]['title'];?></div>
				<div class="content-subheader-detail"><?php echo $travel[$key]['travel_detail'];?></div>

			</div> <!-- /.project-intro_03 -->

			<div class="clearfix"></div>

			
				<ul class="project-details_02 travel-left-detail" style="width:60%; float:left; margin-bottom:20px;">
					<li>ที่ตั้ง : <span><?php echo $travel[$key]['location'];?></span></li>
					<li>เวลาเปิด-ปิด : <span><?php echo $travel[$key]['oc-time'];?></span></li>
					<li>อัตราค่าเข้า : <span><?php echo $travel[$key]['et-fee'];?></span></li>
				</ul> <!-- /.project-details_01 -->

			
				<ul class="project-details_01 travel-right-detail" style="width:40%; float:right; position:relative; height:120px;"  >
					<!-- <a href="travel_guide.php" style="position: absolute; right: 0; bottom:0;"  class="btn btn-icon btn-rounded btn-travel-detail"><i class="fas fa-car"></i>เส้นทางเที่ยว</a> -->
				</ul> <!-- /.project-details_01 -->
				
				<!-- <?php 
					foreach( $travel[$key]['image_detail'] as $v1  ){
						// echo $v1;
						//margin: 20px 0px 20px 0px;
          		?>
				<div class="img-full" style="margin-bottom: 200px"  >
					<img src="<?php echo $v1;?>" alt="" class="img-cover img-drop-shadow">
				</div> 

				<?php  }  ?>  -->


				<div class="img-full img-travel-detail1" style="<?php echo $travel[$key]['style'];?>"  >
					<img src="<?php echo $travel[$key]['image_detail']['img_detail1'];?>" alt="" class="img-cover img-drop-shadow">
				</div> <!-- /.img-full -->

				<div class="img-full img-travel-detail2"  >
					<img src="<?php echo $travel[$key]['image_detail']['img_detail2'];?>" alt="" class="img-cover img-drop-shadow">
				</div> <!-- /.img-full -->

				<div class="img-full">
					<img src="<?php echo $travel[$key]['image_detail']['img_detail3'];?>" alt="" class="img-cover img-drop-shadow">
				</div> <!-- /.img-full -->

			
				
		
			
			
			

			


            <hr style="margin-top: 40px;">

            <div style="position : relative; width:100%; height:80px;"> 
				<a href="travel_detail.php?id=<?php 
								if( $_GET['id'] <= 1 ){
									echo $_GET['id'] = 1 ;
								}else{
									echo $_GET['id'] - 1 ;
								}
							 ?>"><p class="text-next" style="position: absolute; left: 0; bottom:0;">ย้อนกลับ</p></a>
				<a href="travel_detail.php?id=<?php 
								if( $_GET['id'] >= 18 ){
									echo $_GET['id'] = 18 ;
								}else{
									echo $_GET['id'] + 1 ;
								}
							?>"><p class="text-next" style="position: absolute; right: 0; bottom:0;">หน้าถัดไป</p></a>
			</div>

			<p class="text-title-btm"><?php echo $travel[$key+1]['title'];?></p>
			
		</div> <!-- /.container -->

        
		
    </main>	

	
	

	


</body>
</html>


<?php 
include("inc.footer.php");
include("inc.script.php");

?>

