<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$sql = " select * from {$g5['board_table']} where bo_table = '{$bo_table}' ";
$board = sql_fetch($sql);

if ($options)	list($width, $height, $wrap_width, $content_length) = explode(',', $options);
if (!$width) $width = 600;
if (!$height) $height = 400;
if (!$content_length) $content_length = 120;

add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>


<link rel="stylesheet" type="text/css" href="<?php echo $latest_skin_url?>/jcarousel.responsive.css">
<script type="text/javascript" src="<?php echo $latest_skin_url?>/vendor/jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo $latest_skin_url?>/dist/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo $latest_skin_url?>/jcarousel.responsive.js"></script>



<div class="jcarousel-wrapper">
    <div class="jcarousel">
	<ul>
<?php
for ($i=0; $i<count($list); $i++) {
	
	$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $width, $height);
	?>
	<li><a href="<?php echo $list[$i]['href']?>"><img src="<?php echo $thumb['src']?>"></a></li>
	
<?php
	}

if (count($list) == 0) { //게시물이 없을 때  ?>
		게시물이 없습니다.
<?php }  ?>

	</div>
	<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
    <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
    <p class="jcarousel-pagination"></p>
	
</div>
