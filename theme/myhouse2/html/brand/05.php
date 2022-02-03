<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "브랜드"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "비전"; //커스텀페이지의 타이틀을 입력합니다.
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


	<div class="scontents">
		
		<div class="bg_vline" style="padding-top=30px;"></div>
		<p class="eng"><span class="fc_pointer">우리집놀러와</span>의 비전</p>
		<p class="stitle">스마트 디지털 기반으로 지속적인 매출 성장 프로그램을 제공합니다.</p>

		<div class="motto_area">
			<div class="circle_area">
				<div class="circle_box wow fadeInUp">
					<p class="txt">
						<i class="fas fa-hand-holding-heart" aria-hidden="true"></i>
						<span>메뉴선택의 신뢰와 <br>서비스의 만족</span>
					</p>
				</div>
				<div class="circle_box wow fadeInDown">
					<p class="txt">
						<i class="fa fa-store" aria-hidden="true"></i>
						<span>가맹점과 상생함으로<br>성장과 소통</span>
					</p>
				</div>
				<div class="circle_box wow fadeInUp">
					<p class="txt">
						<i class="fa fa-chart-line" aria-hidden="true"></i>
						<span>지속적 메뉴개발과<br>가맹점의 성장</span>
					</p>
				</div>
			</div>
						
		</div>

		
		<div class="img_cont wow fadeInUp" style="padding:0 0 20px 0;"><img src="../image/img_sub1.jpg"></div>
		<div class="img_cont wow fadeInUp" style="padding:0 0 20px 0;"><img src="../image/img_sub2.jpg"></div>
         <div class="img_cont wow fadeInUp" style="padding:0 0 20px 0;"><img src="../image/img_sub3.jpg"></div>




	</div>

<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>