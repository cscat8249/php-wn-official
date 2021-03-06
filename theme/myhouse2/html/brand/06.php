<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "베어밀크"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "메이킹스토리"; //커스텀페이지의 타이틀을 입력합니다.
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
		<p class="eng"><span class="fc_pointer">메이킹</span>스토리</p>
		<p class="stitle">맛과 정성으로 보답하겠습니다.</p>


		<div class="business">
		<ul>
			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/brand/image/01_1.jpg" alt="사업영역">
				<strong>원두 메이킹</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=all_menu&sca=커피＆티"><span class="btn_go">원두이야기</span></a></td>
						</tr>
					</tbody>
				</table>
			</li>
			
			<li class="wow fadeInDown">
				<img src="<?php echo G5_THEME_URL;?>/html/brand/image/02_1.jpg" alt="사업영역">
				<strong>버블 메이킹</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=all_menu&sca=밀크티"><span class="btn_go">버블티이야기</span></a></td>
						</tr>
					</tbody>
				</table>
			</li>	

			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/brand/image/03_1.jpg" alt="사업영역">
				<strong>디저트 메이킹</strong>
				<span>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.<br>
					이곳은 사업영역 간략설명글이 들어갈 자리입니다.
				</span>
				<br>
				<table class="tbl">
					<tbody>
						<tr>
							<td colspan="2" style="text-align:center;"><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=all_menu&sca=토스트＆빙수"><span class="btn_go">디저트이야기</span></a></td>
						</tr>
					</tbody>
				</table>
				
			</li>
		</ul>
		</div>




	</section>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>