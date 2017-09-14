<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
    
function yui_doc ()
{
	echo 'doc1';
}
   
function yui_secondary_column ()
{
	echo 'yui-t4';
}

function waiting_pagination($range = 9){
 global $paged, $wp_query;
 if ( !$max_page ) {
 $max_page = $wp_query->max_num_pages;
 }
 if($max_page > 1){
 if(!$paged){
 $paged = 1;
 }
 echo "<div class='pagination'>";
 if($paged != 1){
 echo "<a href='" . get_pagenum_link(1) . "' title='跳转到首页'> 返回首页 </a>";
 }
 previous_posts_link(' 上一页 ');
 if($max_page > $range){
 if($paged < $range){
 for($i = 1; $i <= ($range + 1); $i++){
 echo "<a href='" . get_pagenum_link($i) ."'";
 if($i==$paged)
 echo " class='current'";
 echo ">$i</a>";
 }
 }
 elseif($paged >= ($max_page - ceil(($range/2)))){
 for($i = $max_page - $range; $i <= $max_page; $i++){
 echo "<a href='" . get_pagenum_link($i) ."'";
 if($i==$paged)
 echo " class='current'";
 echo ">$i</a>";
 }
 }
 elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
 for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
 echo "<a href='" . get_pagenum_link($i) ."'";
 if($i==$paged)
 echo " class='current'";
 echo ">$i</a>";
 }
 }
 }
 else{
 for($i = 1; $i <= $max_page; $i++){
 echo "<a href='" . get_pagenum_link($i) ."'";
 if($i==$paged)
 echo " class='current'";
 echo ">$i</a>";
 }
 }
 next_posts_link(' 下一页 ');
 if($paged != $max_page){
 echo "<a href='" . get_pagenum_link($max_page) . "' title='跳转到最后一页'> 最后一页 </a>";
 }
 echo "</div>\n";
 }
}

?>