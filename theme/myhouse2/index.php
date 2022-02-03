<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>





	<section id="main_visual">

		<div class="swiper-container " >
			<div class="swiper-wrapper">				
				
				<?php				

					if(!$youtube_idx) $youtube_idx = ""; //유투브동영상 아이디를 넣으세요. 유투브영상 링크의 v값이 아이디입니다. https://www.youtube.com/watch?v=유투브아이디

					/*
						
						유투브 동영상 삽입 주의사항
						1. 유투브 동영상을 첫번째 컷, 마지막 컷으로 사용하실 경우	/html/css_js/main.js 의 4번째 라인 loop: true, 를 loop: false, 로 바꾸셔야 합니다.	
						2. 유투브 동영상은 여러개 불가능하며 1개만 가능합니다.

						유투브 배경이미지 안내
						1. 유투브영상은 로딩되는 시간이 필요합니다. 이는 조절할 수 있는 시간이 아닙니다.
						2. 로딩시간이 길어져 동영상이 느리게 뜰 경우를 대비해 유투브 영상의 첫 프레임을 이미지화하여 배경이미지로 사용하면 좋습니다.							
					 
					*/

					if(!$youtube_bg) $youtube_bg = ""; //유투브 배경이미지 : 직접 만드신 이미지가 있다면 이미지경로를 입력하세요.
					if(!$youtube_bg || $_OS_ == "mobile") $youtube_bg = "https://img.youtube.com/vi/{$youtube_idx}/0.jpg"; // 수정삭제 하지 마세요. 배경이미지 경로를 입력하지 않으면 유투브영상의 썸네일을 자동으로 가져옵니다. 이미지가 깨져보일 수 있으며, 첫 프레임이미지가 아닐 수 있습니다.	
					
					$youtube_position = "center,right"; //유투브 영상의 위치를 정렬합니다. 상하,좌우  로 설정하며 상하 는 top center bottom  좌우는 left center right  center,right 라면 상하중간,우측 으로 정렬
					if($_OS_ == "mobile") $youtube_position = "center,center"; //모바일일때 상하중간,좌우중간 으로 정렬

					$youtube_optimize = "true"; // true 이면 슬라이드 전체화면에 유투브를 띄우며, 이경우 영상의 상하,좌후가 잘려보일수 있습니다.   false 이면 유투브를 화면에 꽉차게 띄우지 않고 영상이 전체 보이도록 조정합니다.


				?>	
				<?php //1번째이미지?>
				<div class="swiper-slide swiper-lazy" data-swiper-autoplay="10000"> <?php  //data-swiper-autoplay="10000" 10초후 다음컷 ?>
			
					<div class="backgroundimg">
						<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual01.jpg"></div>
						<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual01_m.jpg"></div>
					</div> 
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
				<?php //1번째이미지 끝 ?>


				<?php //2번째이미지?>
				<div class="swiper-slide swiper-lazy" data-swiper-autoplay="10000"> <?php  //data-swiper-autoplay="10000" 10초후 다음컷 ?>

					<div class="backgroundimg">
						<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual02.jpg"></div>
						<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual02_m.jpg"></div>
					</div>
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
				<?php //2번째이미지 끝?>
				
				
								<?php //3번째이미지?>
				<div class="swiper-slide swiper-lazy" data-swiper-autoplay="10000"> <?php  //data-swiper-autoplay="10000" 10초후 다음컷 ?>

					<div class="backgroundimg">
						<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual03.jpg"></div>
						<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual02_m.jpg"></div>
					</div>
					<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
				</div>
				<?php //3번째이미지 끝?>
				
				<?php 
				
					//3번째이미지를 넣으시려면 위 2번째이미지 전체를 복사하여 소스를 추가하시고, 아래 링크를 참고하여 css파일을 수정해 주세요.
					//http://daontheme.cafe24.com/bbs/faq.php?fm_id=1&theme=basic_daon&stx=메인+슬라이드를+추가				
				?>

			</div>
			<div class="swiper-pagination"></div>
			 <div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<script src="<?php echo G5_THEME_URL;?>/html/css_js/main.js"></script>
		<script>
			if($('#bgndVideo').length) {
				$("#bgndVideo").YTPlayer();
				$("#bgndVideo").YTPPause();
			}
		</script>
	</section>	
	
	
		<section id="section7">
		<div class="inner">	

		</div>
	    </section>
	
		<section id="section8">
		<div class="inner">	

		</div>
	    </section>
		
		<section id="section9">
		<div class="inner">	

		</div>
	    </section>
		
		<section id="section10">
		<div class="inner">	

		</div>
	    </section>
		
		<section id="section11">
		<div class="inner">	

		</div>
	    </section>
	
		
		<section id="section1">
		<div class="inner">
			<div class="con_title">
				<h3>우리집놀러와 메뉴</h3>
			</div>	


			<?php 			
				/*
					슬라이드형 갤러리는 4개이상 진열 되면 슬라이드 됩니다.			
				*/			
			?>
			<div id="rolling_box">
				<div class="swiper-btn-wrap">
					<div class="swiper-scrollbar-wrap1">
						<div class="swiper-scrollbar2"></div>
					</div>
					<div class="swiper-scrollbar-wrap2">
						<div class="swiper-button-next2"></div>
						<div class="swiper-button-prev2"></div>				
					</div>
					<div class="swiper-pagination2"></div>
				</div>
				<div class="swiper-container2">
					<div class="swiper-wrapper" >
						<?php 
							$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
							echo daontheme_lastest('theme/daon_pic_roll', "new_menu", 9, 0); //daontheme_lastest("theme/daon_pic_roll", "게시판테이블명", 출력개수, 타이틀길이);
						?>	
					</div>
				</div>
			</div>
			<script src="<?php echo G5_THEME_URL;?>/html/css_js/g_slide.js"></script>
		</div>
	</section>
	
	
	
	
				<section id="main_about_100" style="margin-top:2px;">
			<div class="img_wrap wow fadeInLeft"></div>
			<div class="txt_wrap wow fadeInRight">
				<div class="txt_cont">
					<h2>마케팅/기술 센터</h2>
					<p class="tit">광고시스템과 운영기술의 통합서비스 지원</p>
					<span class="txt">
						우리집놀러와는 자체 광고서비스와 기술을 개발합니다.<br>
						온/오프라인 광고와 각종 컨텐츠 및 트렌드한 혁신 기술을 통하여 발전합니다.<br>
					</span>
					<a href="<?php echo G5_THEME_URL;?>/html/brand/06.php" class="btn_more">VIEW MORE</a>
				</div>
			</div>
		</section>
	
		
	

	<section id="section2">
		<div class="inner">
			<div class="con_title">
				<h3>가맹 경쟁력</h3>
				<p>합리적인 가맹시스템과 지속적인 발전으로 점주님들과 상생하는 브랜드</p>
			</div>					
			<div class="brand_wrap">
				<div class="brand_img wow fadeIn"></div>						
				<div class="con_txt">
					<div class="con_box wow fadeInLeft" >
						<div class="icon"><i class="fas fa-chart-line"></i></div>
						<div class="info">
							<h2 class="txt_tit">안정된 매출과 합리적인 창업</h2>
							<p class="txt_list">최소비용창업과 최소비용운영으로 확실하고 검증된 매출수익</p>
						</div>
					</div>

					<div class="con_box wow fadeInRight">
						<div class="icon"><i class="fas fa-utensils"></i></div>
						<div class="info">
							<h2 class="txt_tit">지속적인 메뉴개발</h2>
							<p class="txt_list">대형업체들과 협업을 통한 신선하고 새로운 메뉴를 꾸준히 개발합니다.</p>
						</div>
					</div>

					<div class="con_box wow fadeInLeft">
						<div class="icon"><i class="fas fa-truck"></i></div>
						<div class="info">
							<h2 class="txt_tit">안정적인 물류 시스템</h2>
							<p class="txt_list">확보된 물류시스템을 통하여 고객분들께 식자재를 안전하게 공급하고 있습니다.</p>
						</div>
					</div>

					<div class="con_box wow fadeInRight">
						<div class="icon"><i class="fas fa-store"></i></div>
						<div class="info">
							<h2 class="txt_tit">맞춤형 매장개설</h2>
							<p class="txt_list">입점 상권, 매장크기, 운영 컨셉에 따라 매장개설이 가능합니다.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>








	<section id="section3">
		<div class="inner">	
			<div class="con_title">
				<h3>서비스 안내</h3>

			</div>
			<div class="franchise_wrap">
			<ul>
				<li>
					<a href="<?php echo G5_THEME_URL;?>/html/brand/03.php">
						<div class="con_box">
							<div class="wow fadeInUp">
								<i class="fas fa-map-marked-alt"></i>
								<strong>데이터기반 매장추천</strong>
								<span>
									자체 구축된 데이터를 통한<br>
									최적의 매장상권 선정 및 추천
								</span>
							</div>
						</div>
					</a>
				</li>
				<li class="other_type">
					<a href="<?php echo G5_THEME_URL;?>/html/brand/02.php">
						<div class="con_box">
							<div class="wow fadeInDown">
								<i class="fas fa-chart-line"></i>
								<strong>실시간 경영</strong>
								<span>
									콘텐츠 및 키워드 분석으로<br>
									매장성과 분석 보고서 지원
								</span>
							</div>
						</div>
					</a>
				</li>
				<li class="other_type2">
					<a href="<?php echo G5_THEME_URL;?>/html/brand/02.php">
						<div class="con_box">
							<div class="wow fadeInUp">
								<i class="fas fa-project-diagram"></i>
								<strong>맞춤형 콘텐츠</strong>
								<span>
									전국 식품 브랜드를 활용하여<br>
									목적에 맞는 맞춤형 콘텐츠를 제공
								</span>
							</div>
						</div>
					</a>
				</li>
				<li class="other_type">
					<a href="<?php echo G5_THEME_URL;?>/html/brand/02.php">
						<div class="con_box">
							<div class="wow fadeInDown">
								<i class="fas fa-thumbs-up"></i>
								<strong>다양한 마케팅</strong>
								<span>
									자체 관리된 콘텐츠 결합으로<br>
									마케팅 시너지 상승 효과!
								</span>
							</div>
						</div>
					</a>
				</li>
			</ul>
			</div>
		</div>
	</section>



	<section id="section4">
		<div class="inner">
			<div class="con_title">
				<h3>매장 운영 프로세스</h3>
			</div>
			
			<div class="about_wrap">
			<ul>
				<li class="wow fadeInLeft">
						<div class="con_img"></div>
						<div class="con_txt">
							<span class="summary">Dropshipping</span>
							<p class="subject"><strong>물류/레시피 제공</strong></p>
							<p class="des">
								물류센터에서 가맹점으로<br>
								직배송을 통한 신선도/품질 유지
							</p>
						</div>
					</a>
				</li>
				<li class="wow fadeInDown">
						<div class="con_img"></div>
						<div class="con_txt">
							<span class="summary">Prepare sale</span>
							<p class="subject"><strong>판매준비</strong></p>
							<p class="des">
								운송된 신선한재료를<br>
								간단한 손질과 포장준비
							</p>
						</div>
					</a>
				</li>
				<li class="wow fadeInUp">
						<div class="con_img"></div>
						<div class="con_txt">
							<span class="summary">Refrigerate</span>
							<p class="subject"><strong>냉장보관</strong></p>
							<p class="des">
								소분포장된 재료를 매장내 비치된<br>
								각 분류의 냉장 쇼케이스 비치
							</p>
						</div>
					</a>
				</li>
				<li class="wow fadeInRight">
						<div class="con_img"></div>
						<div class="con_txt">
							<span class="summary">Around open</span>
							<p class="subject"><strong>24시 무인</strong></p>
							<p class="des">
								네트워크 키오스크를 통한<br>
								24시간 무인 운영시스템
							</p>
						</div>
					</a>
				</li>
			</ul>
			</div>
		</div>
	</section>
	
	
	
	
	<section id="section5">
		<div class="inner">	
			<div class="con_title">
				<h3>지원센터</h3>
			</div>
			<div class="con_left wow fadeInLeft">
				<div class="notice_wrap">
				<ul class="notice_list">
					<div style="height:50px; line-height:50px; background-color:#000; color:#fff; font-size:1.5em; ">뉴스</div>
					<?php 
						$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
						echo daontheme_lastest('theme/daon_simple', "notice", 3, 17);	//daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이);
					?>
				</ul>
				</div>
			</div>
			<div class="con_right wow fadeInRight">
				<div class="notice_wrap">
				<ul class="notice_list">
					<div style="height:50px; line-height:50px; background-color:#000; color:#fff; font-size:1.5em;">상담예약</div>
					<?php 
						$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
						echo daontheme_lastest('theme/daon_simple', "fran", 3, 17);	//daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이);
					?>
				</ul>
				</div>
			</div>
		</div>
	</section>








<?php
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>