<?php //include("travel_guide.php") ?>

<main class="page-main">
    
<div class="container">


    <div class="row">
        <!-- <div class="col-12 mt-5">
            <div class="section-title uk-text-center text_head_index5"><span>ท่องเที่ยวชุมชนคุณธรรมฯนครปฐม</span> 
            <p class=" text_head_index1"> <?php echo $thispage['title'] ;?> </p>
            </div>
        </div> -->
        <div class="col-12">  
            <div class="row"> 
                <div class="col-12 travel-half">
                    <p class="text_ta1"><?php echo $commname;?></p>
                </div>
                <div class="col-12 travel-half">
                    <p class="text_ta2"><a href="<?php echo $link_tab; ?>"><?php echo $subcommname; ?></a></p>
                </div>  
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="frist_tabdetail">
                    
              
                
                    <div class="row ">
                        <div class="col-6 col-sm-4 ft_margin"> 
                            <div class="row">
                                <div class="col-6"> 

                                    <!-- <div class="display_mobile">
                                        <a class="btn btn_navi" id="link_navigate4" target="_blank"> 
                                            <img src="img/navi_icon2.png" > &nbsp; นำทางทั้งหมด
                                        </a>
                                    </div> -->
                                    <!-- <div class="display_web text-right">
                                        <a class="btn btn_navi" id="link_navigate4" target="_blank"> 
                                            <img src="img/navi_icon2.png" > &nbsp; นำทางทั้งหมด
                                        </a>
                                    </div> -->


                                    <?php 
                                    if($thispage['path']){
                                        $k=0;
                                        foreach( $thispage['path'] as $k1 => $v1) {
                                            $k++; 
                                            ?>
                                            <div id="box_<?php echo $k;?>">
                                                    <p class="text_tab2 text-right"><?php echo $v1['title'];?> </p>
                                                    <div class="text-right"><i class="fa fa-map-marker-alt"></i></span><span class="text_tab1 ml-2"> <span class="place<?php echo $k;?>">...</span></span></div> 
                                                    <div class="text-center img_pointdetail9_1_2" ><img class="box_img" id="box_img<?php echo $k;?>" src="img/number_point/number_<?php echo $k;?>_d.png" onclick="setImgActive('<?php echo $k;?>');"></div>
                                                </div> 
                                            <?php
                                        }
                                    }
                                    ?>  
                                </div>

                                <?php 
                                $box_1 = '';
                                $box_2 = 'img_pointdetail_6';
                                if( $thispage  == $data_route[1][0] ){
                                    $box_1 = 'img_point15';
                                    $box_2 = 'img_pointdetail_9';
                                }
                                if( $thispage  == $data_route[1][1] ){
                                    $box_1 = '';
                                    $box_2 = 'img_pointdetail_4'; 
                                }
                                if( $thispage  == $data_route[1][2] ){
                                    $box_1 = '';
                                    $box_2 = 'img_pointdetail_5'; 
                                }
                                if( $thispage  == $data_route[2][0] ){
                                    $box_1 = '';
                                    $box_2 = 'img_pointdetail_8'; 
                                }
                                if( $thispage  == $data_route[2][1] ){
                                    $box_1 = '';
                                    $box_2 = 'img_pointdetail_2'; 
                                }
                                if( $thispage  == $data_route[2][2] ){
                                    $box_1 = '';
                                    $box_2 = 'img_pointdetail_8'; 
                                }
                                if( $thispage  == $data_route[0][2] ){
                                    $box_1 = '';
                                    $box_2 = 'img_pointdetail_2'; 
                                }
                                if( $thispage  == $data_route[0][1] ){
                                    $box_1 = '';
                                    $box_2 = 'img_pointdetail_4'; 
                                }
                                
                             

                                
                                
                                ?>
                                <div class="col-6 text-center"> 
                                    <div class="text-center img_point16 <?php echo $box_1;?>" ><img src="img/Vector79.png"></div> 
                                    <div class="text-center <?php echo $box_2;?>" ><img src="img/Vector70.png"></div> 
                                    <div class="text-center img_point15" ><img src="img/Vector79.png"></div> 
                              
                                    
                                </div>  
                                
                                <!-- 
                                <div class="col-6">
                                    <div class="text-center img_point15" ><img src="img/Vector79.png"></div> 
                                    <div class="text-center img_pointdetail_9" ><img src="img/Vector70.png"></div>
                                    <div class="text-center img_point15" ><img src="img/Vector79.png"></div> 
                                </div> 
                                -->


                            </div>
                        </div>
                               

                        <?php 
                            if($thispage['path']){
                                $k=0;
                                $setbox = 'box_none';
                                foreach( $thispage['path'] as $k1 => $v1) {
                                    $k++; 
                                    if($k=='1'){
                                        $setbox = 'box_active';
                                    }else{
                                        $setbox = 'box_none';
                                    }
                                    ?>
                                    <div class="col-6 col-sm-8 ft_margin <?php echo $setbox;?> box_content" id="box_content_<?php echo $k;?>"> 
                                        <div class="row">
                                            <div class="col-12 text_tab4"> 
                                                <i class="fa fa-car icon-car"></i>  
                                                <span class="text_ta7">จุดที่ <?php echo $k;?> <?php echo $v1['title'];?></span>  
                                                <p class="mt-1 text_tab3"><?php echo $v1['detail'];?> </p>  
                                                
                                                <div class="text_tab3"><i class="fa fa-map-marker-alt"></i><span class=" ml-3"><?php echo $v1['contact']['address'];?></span></div>
                                                
                                                <!-- <div class="mt-2 text_tab3"><i class="fa fa-phone"></i><span class=" ml-3">
                                                    <a href="tel:<?php echo $v1['contact']['tel'];?>" class="linknone"> <?php echo $v1['contact']['tel'];?> </a>
                                                     <?php echo $v1['contact']['tel'];?> 

                                                    <?php 
                                                    if ($v1['contact']['tel2']){  
                                                    ?>
                                                    , <a href="tel:<?php echo $v1['contact']['tel2'];?>" class="linknone"> <?php echo $v1['contact']['tel2'];?> </a>
                                                    , <?php echo $v1['contact']['tel2'];?>
                                                    <?php } ?>
                                                    
                                                    </span>
                                                </div> -->
                                                
                                                <?php if($v1['contact']['line']){ ?>
                                                <div class="mt-2 text_tab3"><img src="img/image 1.png"><span class=" ml-2">  <?php echo $v1['contact']['line'];?></span></div> 
                                                <?php } ?>
                                                <div class="mt-4 text_tab3">
                                                    <a class="btn btn_navi" id="link_navigatesub_<?php echo $k;?>" target="_blank"> <i class="fas fa-location-arrow icon-size"></i> &nbsp; นำทาง </a>
                                                </div> 
                                            </div> 
                                            
                                            <?php 
                                                if($v1['images']){
                                                    foreach( $v1['images'] as $k2 => $v2){
                                                        ?>
                                                        <div class="col-12 w100 mt-5"> 
                                                            <div class="entry-thumbnail">
                                                                <img src="<?php echo $v2;?>" onerror="src='img/img_defalt.png';"> 
                                                            </div> 
                                                        </div>  
                                                        <?php 
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                }
                            }
                        ?>  
                    </div> 


                </div> 
            </div> 

        </div>
    </div>
</div>
 

</main> 



  <?php  include ('footer.php');  ?> 

<?php 

echo '<script type="text/javascript">' ;
echo 'var arr_Destination = [';

if($thispage['path']){
$k=0;
$setbox = 'box_none';
foreach( $thispage['path'] as $k1 => $v1) {
    echo "{title:'".$v1['title']."',lat:".$v1['lat'].", lng:".$v1['long']."}," ;
}
}

echo '];'; 
echo '</script>' ; 
?> 

<?php  include ('inc.map.php');  ?>
