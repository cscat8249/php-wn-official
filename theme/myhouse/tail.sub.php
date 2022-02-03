<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<script src="<?php echo G5_THEME_URL;?>/plugin/pluginsvery.js" type="text/javascript"></script> 
<script src="<?php echo G5_THEME_URL;?>/plugin/bootstrap.min.js"></script>
<script src="<?php echo G5_THEME_URL;?>/plugin/parallax.min.js" type="text/javascript"></script> 
<script src="<?php echo G5_THEME_URL;?>/plugin/sticky.js" type="text/javascript"></script> 
<script src="<?php echo G5_THEME_URL;?>/js/mapinline-1.js" type="text/javascript"></script>  
<!-- slider revolution  -->
<script type="text/javascript" src="<?php echo G5_THEME_URL;?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo G5_THEME_URL;?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- very JS -->
<script src="<?php echo G5_THEME_URL;?>/js/very.js" type="text/javascript"></script>
<script src="<?php echo G5_THEME_URL;?>/js/nav.js" type="text/javascript"></script>
<script src="<?php echo G5_THEME_URL;?>/js/plugin-rev.js" type="text/javascript"></script>

<!-- Jarallax -->
<script src="<?php echo G5_THEME_URL;?>/js/ofi.min.js"></script>

<script src="<?php echo G5_THEME_URL;?>/js/jarallax.js"></script>
<script src="<?php echo G5_THEME_URL;?>/js/jarallax-video.js"></script>

<script type="text/javascript">
	objectFitImages();
	jarallax(document.querySelectorAll('.jarallax'));
</script>

<?php
	if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
<!-- } 하단 끝 -->
<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>