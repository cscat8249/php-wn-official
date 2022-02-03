<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "브랜드"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "우리집놀러와 소개"; //커스텀페이지의 타이틀을 입력합니다.
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


<div class="daon_content_wrap" style="padding:70px 0;">
	<div class="daon_page_title" >
		<h1 class="sub_tit"><span class="fc_pointer">24시간</span>함께하는 밀키트<span class="fc_pointer">우리집놀러와</span></h1>
		<h2 class="sub_txt">언제 어디서나 함께 즐겨는 사랑해요. 밀키트.</h2>
	</div>

	<div class="vision_type1">
		<!-- <h2 class="title">
			다온테마의 목표와 핵심 가치, 다온테마 Credo
		</h2> -->
		<span class="stitle">외식산업의 장기 침체로 영세업자, 1인 소상공인의 특별한 밀키트와 중소형 프랜차이즈의 프로세스,</br>
		디지털 스마트 세일즈 방식으로 결합하고 광고 플랫폼 및 IOT(Internet of Things;사물인터넷) 전문 기업으로
		새로운 방향, 새로운 경험의 Food 패러다임을 만나보세요</span>
		<div class="img_cont wow fadeInUp" style="padding:0 0 20px 0;"><img src="../image/img_1200.jpg"></div>
		<ul>
			<li>
				<div class="icon"><i class="far fa-clock"></i></div>
				<p>24시간 무인시설</p>
				<span>
					1인 운영이 가능한 무인시스템으로<br>
					최소비용의 점포운영을 실현
				</span>
			</li>
			<li>
				<div class="icon"><i class="far fa-handshake"></i></div>
				<p>유명 맛집과의 협업</p>
				<span>
					전국 유명 대형 프렌차이즈 맛집과<br>
					단독협업으로 메뉴의 신뢰성
				</span>
			</li>
			<li>
				<div class="icon"><i class="fas fa-recycle"></i></div>
				<p>매장운영의 다각화</p>
				<span>
					1인 무인운영부터 간편조리 및<br>
					조리배달방식 / 샵인샵등의 사업다각화
				</span>
			</li>
			<li>
				<div class="icon"><i class="fas fa-balance-scale"></i></div>
				<p>윤리경영</p>
				<span>
					사회를 위한 서비스 공급을 통해<br>
					공동체에 기여한다.
				</span>
			</li>
			<li>
				<div class="icon"><i class="fas fa-globe"></i></div>
				<p>미래경영</p>
				<span>
					글로벌 네트워크의 지속적인 투자와 <br>
					R&amp;D를 통해 고객과 시장의 NEEDS 해결책 및<br>
					탁월한 가치를 부여한다.
				</span>
			</li>
			<li>
				<div class="icon"><i class="fas fa-users"></i></div>
				<p>인재경영</p>
				<span>
					고객의 건강과 안전은<br>
					타협할 수 없는 가치이다.
				</span>
			</li>
		</ul>
		
	
		</div>
</div>

	
	
	
	




<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>