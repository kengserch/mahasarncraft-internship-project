<?php  

include "storage.php" ; 

$link_tab = "product_tourway.php?tab=2";


$commname = $data_comm[1]['title'] ;
$thispage = $data_route[1][0] ;

$linkweb =  $data_linkweb.$thispage['linkdata'] ; 
$meta_title =  $thispage['title'] ;
$meta_desc = $data_meta_desc ;  

 
include ('header.php');  


include ('inc.tourway.php');  

?> 

