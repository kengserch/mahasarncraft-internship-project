<?php  

include ('header.php');  
include "array.php" ; 

$link_tab = "travel_guide_1.php";


$commname = $data_comm[1]['title'] ;
$subcommname = $data_comm[1]['subtitle'];
$thispage = $data_route[1][0] ;

$linkweb =  $data_linkweb.$thispage['linkdata'] ; 
$meta_title =  $thispage['title'] ;
$meta_desc = $data_meta_desc ;  

include ('inc.tourway.php');  

?> 

