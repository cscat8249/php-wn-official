<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
   
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


	 <?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}
    ?>

	<?php 
		/*
			반응형 모바일상단

			중간기기부터 모바일상단이 보여집니다.
			theme.config.php에서 메뉴를 수정 및 추가해서 사용하세요. 
		*/
	?>
	<div id="mobile_header"> 
		<div class="inner">
			<h1><a href="<?php echo G5_URL ?>/index.php"><img src="<?php echo G5_THEME_URL;?>/html/image/top_logo_m2.png" alt="로고" title="로고"></a></h1>
			<ul class="m_gnb">
				<li class="category"><a href="#none" class="qbt" title="전체메뉴열기"><i class="fa fa-outdent" aria-hidden="true"></i></a></li>
				<li class="home"><!-- <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=qa"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a> --><a href="sms:01012345678" title="휴대폰 문자전송"><i class="fas fa-envelope-open"></i></a></li>
			</ul>
		</div>
	</div>
	
	<div id="back_cover"></div>


	
	<?php 
		/*
			PC형 상단

			큰기기는  PC형 상단이 보여집니다.
			메뉴를 원하시는대로 수정해서 사용하세요.

		*/
	?>
					
	<section id="header_wrap">
		<div id="header" class="jbMenu">
			<div class="header_in">
			
				<div class="wrap_box">
					<h1 class="logo_a"><a href="<?php echo G5_URL ?>/index.php"><img src="<?php echo G5_THEME_URL;?>/html/image/top_logo2.png" alt="로고" title="로고"></a></h1>
					<div id="lnb">						
						<div class="lnb_wrap" style="position:relative;">
							
							<ul id="mainMenu">								
								<?php 
									foreach($first_menu as $k => $v){
								?>
									
									<li>
										<a href="<?php echo $v?>" target="<?php echo $first_menu_target[$k]?>"><?php echo $k?><span></span></a>
										<ul class="lnb_sub">
											
											<?php 
												// 2차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
												if(isset($second_menu[$k])){
												foreach($second_menu[$k] as $kk => $vv){
											?>
												<li><a href="<?php echo $vv?>" target="<?php echo $second_menu_target[$k][$kk]?>"><?php echo $kk?></a></li>
											<?php }
												}
											?>
										</ul>
									</li>

									<li></li>
								<?php }
								
								?>									
							</ul>
						</div>
					</div>

					<?php 
						/*
							빠른메뉴

							회원을 사용하지 않으시는 경우는 아래와 같이 메뉴를 변경하여 사용하세요.

							<a href="<?php echo G5_URL ?>/index.php">HOME</a>
							<a href="링크주소">공지사항</a>

						*/
					?>



				</div>
			</div>
		</div>
	</section>





	<?php 

		/*
			게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결

			커스텀 페이지에서는 아래 소스를 출력하지 않습니다.
			theme.config.php에서 메뉴를 수정 및 추가해서 사용하세요.

		*/

		$title_view = isset($title_view) ? $title_view : '';     if(!defined('_INDEX_') && $title_view != "no"){ // if문을 수정하지 마십시오.			

			// 게시판 타이틀 정비
			if($bo_table){
				$g5['title'] = $board['bo_subject'];
			}
			
			$fm_id = isset($fm_id) ? $fm_id : '';   //faq 타이틀 정비
			if($fm_id){
				$g5['title'] = "자주하시는 질문";
			}
			
			
	?>



		<section id="sub_visual">
			<div class="backgroundimg">
				<div class="visual_area wow pulse1" style="<?php if($SUB_BACKGROUND[$tmenu_]){?>background:url('<?php echo $SUB_BACKGROUND[$tmenu_]?>') no-repeat top center;<?php }?>"></div>
			</div>
		</section>

		<section id="sub_wrapper">
			<div id="sub_menu">		
				<div class="sub_location">
					<div>
						<div class="cen"><a href="<?php echo G5_URL ?>/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></div>
						<ul class="">
							<li>
								<span><?php echo $tmenu_?></span>								
								<ul>
									<?php 
										// 1차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.

										foreach($first_menu as $k => $v){
									?>
										<li><a href="<?php echo $v?>" target="<?php echo $first_menu_target[$k]?>"><?php echo $k?></a></li>
									<?php }
										
									?>										
								</ul>
							</li>
						</ul>
						<ul class="dep2">
							<li>
								<span><?php echo $g5['title']?></span>
								<ul>
									<?php 
										// 2차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
										if(isset($second_menu[$tmenu_])){
										foreach($second_menu[$tmenu_] as $k => $v){
									?>
										<li><a href="<?php echo $v?>" target="<?php echo $second_menu_target[$tmenu_][$k]?>"><?php echo $k?></a></li>
									<?php }
										}
									?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>

	
			<div id="sub_tit">
				<div class="path">
					<li><a href="<?php echo G5_URL ?>/index.php"><span class="ic-home"><i></i></span></a></li>
					<?php if($tmenu_ != $g5['title']){?><li><?php echo $tmenu_?></li><?php }?>
					<li><?php echo $g5['title']?></li>
				</div>
				<div class="title"><?php echo $tmenu_?></div>
				<p class="normal_txt"><?php echo $g5['so_title']?>	</p>
			</div>

			<div class="scontents">


				<div class="bg_vline"></div>
				<p class="eng"><em></em> <?php echo $g5['title']?></p>
				<p class="stitle"><?php echo $g5['so_title']?></p>



	<?php }