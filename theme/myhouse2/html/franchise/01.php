<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "FRANCHISE"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "창업경쟁력"; //커스텀페이지의 타이틀을 입력합니다.
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
		

		<div class="bg_vline"></div>
		<p class="eng">창업경쟁력</p>
		<p class="stitle">독보적인 기술력과 차별화된 경쟁력으로 꾸준히 성장해 가고 있습니다.</p>


		<div class="franchise_type1">
		<ul>
			<li>
				<div class="con_img" style="background-image:url(<?php echo G5_THEME_URL;?>/html/franchise/image/01_1.jpg);"></div>
				<div class="con_txt">
				<dl>
					<dt>폭 넓고 다양한 메뉴</dt>
					<dd>간략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
					<dd>략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
				</dl>
				</div>
			</li>
			<li>
				<div class="con_img" style="background-image:url(<?php echo G5_THEME_URL;?>/html/franchise/image/01_2.jpg);"></div>
				<div class="con_txt">
				<dl>
					<dt>쾌적하고 깔끔한 인테리어</dt>
					<dd>간략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
					<dd>략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
				</dl>
				</div>
			</li>
			<li>
				<div class="con_img" style="background-image:url(<?php echo G5_THEME_URL;?>/html/franchise/image/01_3.jpg);"></div>
				<div class="con_txt">
				<dl>
					<dt>매장 시스템 및 보안시스템</dt>
					<dd>간략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
					<dd>략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
				</dl>
				</div>
			</li>
			<li>
				<div class="con_img" style="background-image:url(<?php echo G5_THEME_URL;?>/html/franchise/image/01_4.jpg);"></div>
				<div class="con_txt">
				<dl>
					<dt>체계적인 물류시스템</dt>
					<dd>간략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
					<dd>략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
				</dl>
				</div>
			</li>
			<li>
				<div class="con_img" style="background-image:url(<?php echo G5_THEME_URL;?>/html/franchise/image/01_5.jpg);"></div>
				<div class="con_txt">
				<dl>
					<dt>브랜드 마케팅을 통한 상생 홍보 전략</dt>
					<dd>간략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
					<dd>략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..략한 설명글이 들어갈자리..간략한 설명글이 들어갈자리..</dd>
				</dl>
				</div>
			</li>
		</ul>		
		</div>

		<div class="motto_area">
			<div class="circle_area">
				<div class="circle_box wow fadeInUp">
					<p class="txt">
						<i class="fa fa-hands-helping" aria-hidden="true"></i>
						<span>가맹점과의<br>신뢰도 우선</span>
					</p>
				</div>
				<div class="circle_box wow fadeInDown">
					<p class="txt">
						<i class="fa fa-comments" aria-hidden="true"></i>
						<span>소비자와의<br>원활한 소통</span>
					</p>
				</div>
				<div class="circle_box wow fadeInUp">
					<p class="txt">
						<i class="fa fa-running" aria-hidden="true"></i>
						<span>항상 노력하는<br>임직원</span>
					</p>
				</div>
			</div>
		</div>






	</div>

<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>