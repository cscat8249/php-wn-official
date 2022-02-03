<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "가맹안내"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$g5['title'] = "가맹시스템"; //커스텀페이지의 타이틀을 입력합니다.
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
		<p class="eng">개설절차 및 비용</p>
		<p class="stitle">개설절차 및 비용을 안내해 드립니다</p>



		<div class="step_box">
		<ul>
			<li>
				<div>
					<em>01</em>
					<strong>가맹상담</strong>
					<p>상담 및<br>신청/접수</p>
				</div>
			</li>
			<li>
				<div>
					<em>02</em>
					<strong>상권분석</strong>
					<p>상권 및 입지분석 후<br>매장선정</p>
				</div>
			</li>
			<li>
				<div>
					<em>03</em>
					<strong>점포·가맹 계약</strong>
					<p>임대차계약 및<br>가맹계약체결</p>
				</div>
			</li>
			<li>
				<div>
					<em>04</em>
					<strong>매장실측 및 도면설계</strong>
					<p>현장 점검 및<br>설계를 확정하고 시공</p>
				</div>
			</li>
			<li>
				<div>
					<em>05</em>
					<strong>인허가 신고</strong>
					<p>인허가 서류 발급 장비 및<br>집기류 발주</p>
				</div>
			</li>
			<li>
				<div>
					<em>06</em>
					<strong>시공</strong>
					<p>시공기간 약 00일<br>(현장 상황에 따라 변동가능)</p>
				</div>
			</li>
			<li>
				<div>
					<em>07</em>
					<strong>가맹점주 교육</strong>
					<p>본사교육 및 현장교육<br>(약 2~3주)</p>
				</div>
			</li>
			<li>
				<div>
					<em>08</em>
					<strong>GRAND OPEN</strong>
					<p>사전 리허설<br>진행 후 오픈</p>
				</div>
			</li>
		</ul>
		</div>







		<h3 class="con_title"></h3>
		<table class="price_tbl">
		<colgroup>
		<col style="width:5%">
		<col style="width:20%">
		<col style="width:20%">
		<col style="width:55%">    
		</colgroup>
		<thead>
		<tr>
			<th>No.</th>
			<th>구&nbsp;&nbsp;분</th>   
			<th>금&nbsp;&nbsp;액</th> 
			<th>비&nbsp;&nbsp;고 (기준평수 50㎡/15평  VAT포함)</th> 
		</tr>    
		</thead>
		<tbody>
		<tr>
			<td class="txt_c">1</td>
			<td>가입비</td>    
			<td class="txt_r">1,000</td>  
			<td>계약/매뉴얼 제공, 오픈지원(인력, 정보, 자료제공 등) - 소멸성</td>  
		</tr>
		<tr>
			<td class="txt_c">2</td>
			<td>보증금</td>    
			<td class="txt_r">1,000</td>  
			<td>계약이행 및 손해배상액의 지급담보(해지시 환급) - VAT 없음</td>  
		</tr>
		<tr>
			<td class="txt_c">3</td>
			<td>교육비</td>    
			<td class="txt_r">500</td>  
			<td>점주 포함 2인 교육</td>  
		</tr>
		<tr>
			<td class="txt_c">4</td>
			<td>인테리어 (3.3㎡ 당 242만)</td>    
			<td class="txt_r">300</td>  
			<td>기본공사 (내부 벽체 마감공사, 천정공사, 바닥공사, 2차급배수, 2차전기, 조명공사 등)</td>  
		</tr>
		<tr>
			<td class="txt_c">5</td>
			<td>주방기기</td>    
			<td class="txt_r">2,000</td>  
			<td>냉장/냉동고, 제빙기, 실링기, 커피머신, 티컨테이너, 티작업대 등</td>  
		</tr>
		<tr>
			<td class="txt_c">6</td>
			<td>간판 및 사인</td>    
			<td class="txt_r">400</td>  
			<td>메뉴사인, 액자, 메인간판, 라이트패널 등</td>  
		</tr>
		<tr>
			<td class="txt_c">7</td>
			<td>의탁자</td>    
			<td class="txt_r">700</td>  
			<td>13석 기준</td>  
		</tr>
		<tr>
			<td class="txt_c">8</td>
			<td>초도물품</td>    
			<td class="txt_r">1,500</td>  
			<td>원부자재 및 주방집기류, 비품류</td>  
		</tr>
		<tr>
			<td class="txt_c">9</td>
			<td>POS시스템</td>    
			<td class="txt_r">2,500</td>  
			<td>메인포스, 듀얼 모니터, 프린터, 라벨프린터</td>  
		</tr>
		<tr>
			<td class="txt_c">10</td>
			<td>로열티</td>    
			<td class="txt_r">월300</td>  
			<td></td>  
		</tr>
		</tbody>
		</table>





	</div>

<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>