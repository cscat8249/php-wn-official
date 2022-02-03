<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "베어밀크"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
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
		<p class="eng"><span class="fc_pointer">베어밀크</span>의 비전</p>
		<p class="stitle">모두의 만족을 향한 끊임없는 노력!</p>


		<div class="company">


			<div class="vision">
			<ul>
				<li class="wow fadeInUp">
					<div><i class="fas fa-hand-holding-heart"></i></div>
					<strong>고객만족</strong>
					<span>
						실패없는 메뉴선택<br>
						부담없는 가격<br>
						최선의 서비스
					</span>
				</li>
				<li class="wow fadeInDown">
					<div><i class="fas fa-store"></i></div>
					<strong>점주만족</strong>
					<span>
						효율적 운영비용<br>
						편리한 시스템
					</span>
				<li class="wow fadeInUp">
					<div><i class="fas fa-chart-line"></i></div>
					<strong>기업만족</strong>
					<span>
					   가맹점의 정착화<br>
					   기업의 안정
					</span>
				</li>
				<li class="wow fadeInDown">
					<div><i class="fas fa-users"></i></div>
					<strong>사회만족</strong>
					<span>
					    문화의 합리화<br>
					   그린환경 운영시스템				  
					</span>
				</li>
			</ul>
			</div>


		</div>


	</div>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>