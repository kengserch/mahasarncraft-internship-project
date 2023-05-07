<?php  

include ('header.php');  
include "array.php" ; 

$link_tab = "travel_guide_2.php";


$commname = $data_comm[2]['title'] ;
$subcommname = $data_comm[2]['subtitle'];
$thispage = $data_route[2][0] ;

$linkweb =  $data_linkweb.$thispage['linkdata'] ; 
$meta_title =  $thispage['title'] ;
$meta_desc = $data_meta_desc ;  

include ('inc.tourway.php');  

?> 

