<?php
include_once('./_common.php');
$ptitle='사이트 설정';
include_once(G5_THEME_PATH.'/head.php');
if(!$is_admin){
	alert('관리자 로그인 필요!',G5_URL);
	return;
}
if($reset=='ok'){
	$sql = " DROP TABLE snw_theme";
	sql_query($sql);
	alert('초기화가 완료 되었습니다.',G5_URL);
}
$smenu = array(
	"기본설정"=>"local",
	"메인 슬라이더"=>"mslider",
	"협력사"=>"partner"
);
?>
			<div class="">
				<div class=" mb-5 mt-10 text-center border-bottom pb-10">
				<?php foreach($smenu as $title=>$link ){
					$aclass = 'vbtn-outline-dark';
					if($link==$slink) $aclass = 'vbtn-dark';
					?>
					<a href="<?php echo G5_THEME_URL;?>/_set.php<?php if($link){?>?slink=<?php echo $link;?><?}?>" class="vbtn   vbtn-square vbtn-lg font-14px <?php echo $aclass;?>"><?php echo $title;?></a>
				<?php }?>
					<a id="" class="reset vbtn vbtn-square vbtn-lg font-14px vbtn-outline-dark">
					테마리셋
					</a>
				</div>
				<?php if($slink=='local')	include_once('./_default.php');?>
				<?php if($slink=='mslider')	include_once('./_mslider.php');?>
				<?php if($slink=='partner')	include_once('./_partner.php');?>
				<?php if($slink=='familysite')	include_once('./_familysite.php');?>
			</div>
<script>
jQuery( document ).ready(function( $ ) {

	$('.reset').on('click', function () {
		var result = confirm('테마를 새로 설치 하겠습니까?');
			if(result) { //yes 
				location.replace('_set.php?reset=ok'); 
			} else { //no 

			}
	});

	$('html, body').animate({
		scrollTop: $('.setbox').offset().top
	}, 'slow');

	
});
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>