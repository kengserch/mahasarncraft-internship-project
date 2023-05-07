<?php 
include("inc.head.php");
include("inc.header.php");
include("array.php");
	//echo("<h2> PRODUCT ARRAY </h2>");
   // echo "<pre>".print_r( $product , true)."</pre>";


   	// The page to display (Usually is received in a url parameter)
	$page = intval($_GET['page']);

	// The number of records to display per page
	$page_size = 5;

	// Calculate total number of records, and total number of pages
	$total_records = count($product);
	$total_pages   = ceil($total_records / $page_size);

	// Validation: Page to display can not be greater than the total number of pages
	if ($page > $total_pages) {
		$page = $total_pages;
	}

	// Validation: Page to display can not be less than 1
	if ($page < 1) {
		$page = 1;
	}

	// Calculate the position of the first record of the page to display
	$offset = ($page - 1) * $page_size;

	// Get the subset of records to be displayed from the array
	$data = array_slice($product, $offset, $page_size);


	// variables for pagination links
	$page_first = $page > 1 ? 1 : '';
	$page_prev  = $page > 1 ? $page-1 : '';
	$page_next  = $page < $total_pages ? $page + 1 : '';
	$page_last  = $page < $total_pages ? $total_pages : '';

	$N = min($total_pages, 9);
	$pages_links = array();

	$tmp = $N;
	if ($tmp < $page || $page > $N) {
		$tmp = 2;
	}
	for ($i = 1; $i <= $tmp; $i++) {
		$pages_links[$i] = $i;
	}

	if ($page > $N && $page <= ($total_pages - $N + 2)) {
		for ($i = $page - 3; $i <= $page + 3; $i++) {
			if ($i > 0 && $i < $total_pages) {
				$pages_links[$i] = $i;
			}
		}
	}

	$tmp = $total_pages - $N + 1;
	if ($tmp > $page - 2) {
		$tmp = $total_pages - 1;
	}
	for ($i = $tmp; $i <= $total_pages; $i++) {
		if ($i > 0) {
			$pages_links[$i] = $i;
		}
	}

?>
 
	<!-- ========== Main ========== -->

	<main class="blog-list"> 
	
		<div class="container">

		<?php 
          if($data)
          foreach($data as $v1 ){
          ?>
			
			<div class="blog-post">
				<figure class="entry-thumbnail">
	                <img src="<?php echo $v1['image'];?>" alt="" class="img-cover img-drop-shadow">
	            </figure>

				<div class="post-content" style="position:relative;">
					<a href="productshop_detail.php?id=<?php echo $v1['id'] ?>" class="content-subheader" >อำเภอ<?php echo $v1['district'];?></a> 
					<h2 ><a href="productshop_detail.php?id=<?php echo $v1['id'] ?>" class="content-header"><?php echo $v1['group_name'];?></a></h2>
					<p>
						<?php echo $v1['text_short'];?>
                    </p>
                    <a href="productshop_detail.php?id=<?php echo $v1['id'] ?>" style="position: absolute; left: 0; bottom:0; display:flex;" class="btn btn-icon btn-rounded btn-product"> <i class="fas fa-caret-right"></i> <h2> ดูเพิ่มเติม </h2></a>

				</div>

				
			</div> <!-- /.blog-post -->

		<?php }  ?> 

            


			<hr>
			<div style="position : relative; width:100%; height:70px;"> 
			
				<a href="productshop.php?page=<?php echo $page_prev; ?>"><p class="text-next" style="position: absolute; left: 0; bottom:0;">ย้อนกลับ</p></a>
				<a href="productshop.php?page=<?php echo $page_next; ?>"><p class="text-next" style="position: absolute; right: 0; bottom:0;">หน้าถัดไป</p></a>
			</div>
			
            
		</div> <!-- /.container -->

	</main> <!-- main -->

	
	

	


</body>
</html>


<?php 
include("inc.footer.php");
include("inc.script.php");

?>

