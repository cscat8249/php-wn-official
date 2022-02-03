<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "STORE"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "매장정보 Type01"; //커스텀페이지의 타이틀을 입력합니다.
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
		<p class="eng">매장정보 Type01</p>
		<p class="stitle">전국매장을 안내해 드립니다.</p>




		<div class="store_wrap">
			<div class="store_img"><img src="<?php echo G5_THEME_URL;?>/html/store/image/store_img1.jpg"></div>
			<div class="store_info">
				<p class="store_name">
					종로점
				</p>
				<p class="store_txt">
					이곳은 제품 간략 설명글이 들어갈 자리입니다. 이곳은 제품 간략 설명글이 들어갈 자리입니다.
				</p>
				
				<table class="store_tbl">
					<caption>종로점</caption>
					<colgroup>
						<col style="width:25%">
						<col style="width:75%">
					</colgroup>
					<thead>
						<tr>
							<th scope="col">구분</th>
							<th scope="col">내용</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>주소</th>
							<td>서울특별시 종로구 000 <a href="#none" class="btn_style1">지도보기</a></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td>02-1234-5678</td>
						</tr>
						<tr>
							<th>운영시간</th>
							<td>10:00 - 20:00</td>
						</tr>
						<tr>
							<th>서비스</th>
							<td>주차가능, wifi</td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>


		<div class="store_wrap">
			<div class="store_img"><img src="<?php echo G5_THEME_URL;?>/html/store/image/store_img2.jpg"></div>
			<div class="store_info">
				<p class="store_name">
					압구정점
				</p>
				<p class="store_txt">
					이곳은 제품 간략 설명글이 들어갈 자리입니다. 이곳은 제품 간략 설명글이 들어갈 자리입니다.
				</p>
				
				<table class="store_tbl">
					<caption>압구정점</caption>
					<colgroup>
						<col style="width:25%">
						<col style="width:75%">
					</colgroup>
					<thead>
						<tr>
							<th scope="col">구분</th>
							<th scope="col">내용</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>주소</th>
							<td>서울특별시 강남대로 000 <a href="#none" class="btn_style1">지도보기</a></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td>02-1234-5678</td>
						</tr>
						<tr>
							<th>운영시간</th>
							<td>10:00 - 20:00</td>
						</tr>
						<tr>
							<th>서비스</th>
							<td>주차가능, wifi</td>
						</tr>
					</tbody>
				</table>
			
			</div>
		</div>

		


	</section>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>