<?php  

include ('header.php');  
include "array.php" ; 

$link_tab = "travel_guide_3.php";


$commname = $data_comm[3]['title'] ;
$subcommname = $data_comm[3]['subtitle'];
$thispage = $data_route[3][0] ;

$linkweb =  $data_linkweb.$thispage['linkdata'] ; 
$meta_title =  $thispage['title'] ;
$meta_desc = $data_meta_desc ;  

include ('inc.tourway.php');  

?> 

