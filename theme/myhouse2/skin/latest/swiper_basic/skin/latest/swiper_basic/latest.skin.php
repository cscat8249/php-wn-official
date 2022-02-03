<?php
// swiper_basic
// Author: 휴온(2016)
// URL: www.hnbuilder.net
/* -------------------------------------------------------------
Swiper를 이용한 갤러리 최신글입니다.

[사용법]
// 옵션으로 이미지 width, height를 지정할 수 있습니다.
echo latest("swiper_basic", "gallery", 10, 0, 1, "900|500");

[plugin]
Swiper: http://idangero.us/swiper/
------------------------------------------------------------- */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// 이미지 크기
if ($options) {
	$tmp = explode("|", $options);
	$thumb_width = $tmp[0];
	$thumb_height = $tmp[1];
} else {
	$thumb_width = 600;
	$thumb_height = 400;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/swiper_basic.css">', 0);
?>
<link rel="stylesheet" href="<?php echo G5_URL ?>/plugin/swiper/css/swiper.min.css">
<?php if ($options) { ?>
<style>
.swiper-container.swiper-basic {
	width: <?php echo $thumb_width; ?>px;
	height: <?php echo $thumb_height; ?>px;
}
</style>
<?php } ?>

<!-- Swiper -->
<div class="swiper-container swiper-basic">
	<div class="swiper-wrapper">
<?php 
for ($i=0; $i<count($list); $i++) {  
	$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height);

	if($thumb['src']) {
		$thumb_url = $thumb['src'];
	} else {
		$thumb_url = $latest_skin_url."/img/no-image.gif";
	}
	
	echo "		<div class=\"swiper-slide\"  style=\"background-image:url($thumb_url)\"></div>\n";
} 
?>
	</div>
	<div class="swiper-pagination"></div>
</div>
<script src="<?php echo G5_URL ?>/plugin/swiper/js/swiper.min.js"></script>
<script>
var swiper_basic = new Swiper('.swiper-basic', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
</script>
<!-- /Swiper -->