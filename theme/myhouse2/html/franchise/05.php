<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "메뉴"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "베어스페셜"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //회사소개의 공통 상단을 연결합니다.

	
?>


	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>

	<section class="scontents">

		<div class="bg_vline"></div>
		<p class="eng"><span class="fc_pointer">베어밀크</span> 스페셜</p>
		<p class="stitle">베어밀크에서 준비한 특별한 시즌을 즐겨보세요.</p>


					<?php 
						$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
						echo daontheme_lastest('theme/splide', "special_menu", 5, 17);	//daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이);
					?>
		
		
	</section>




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>