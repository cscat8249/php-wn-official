<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

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

<?php if($_OS_ == "pc"){?>
<script src="<?php echo G5_THEME_URL;?>/html/css_js/wow.min.js"></script> 
<script> new WOW().init(); </script>
<?php }?>

<?php if($is_admin){?>
	<style>
		.btn_top_admin_bt{position:fixed; right:15px; top:10px; z-index:999999; color:red; font-weight:700; }
		@media all and (max-width:1100px){	
			.btn_top_admin_bt{bottom:80px; top:auto; right:20px;}
		}
	</style>
	<a href="<?php echo G5_ADMIN_URL?>/" target="_blank" class="btn_top_admin_bt" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="">관리자</span></a>
<?php }?>

<iframe name="bnk_ifr_aa" id="bnk_ifr_aa" style="display:none;"></iframe>

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. 