<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php 
	if(!preg_match("/index\.php/",$_SERVER['PHP_SELF']) && $title_view != "no"){ // if문을 수정하지 마십시오.
?>
	</div>
</section>
<?php }?>

<?php 
	if(!preg_match("/index\.php/",$_SERVER['PHP_SELF'])){ // if문을 수정하지 마십시오.
?>

<?php }?>

	<footer>
		<section id="footer">
			<div class="copy_bar">
				<div>
				<br>
                    <a><img src="<?php echo G5_THEME_URL;?>/html/image/footer_logo.png"></a><br>
					<p class="copy_menu"><a href="<?php echo get_pretty_url('content', "privacy")?>" >개인정보처리방침</a>  &nbsp;&nbsp;&nbsp; <a href="<?php echo get_pretty_url('content', "provision")?>" >이용약관</a> &nbsp;&nbsp;&nbsp; <a href="<?php echo get_pretty_url("notice")?>" alt="공지사항" title="공지사항">공지사항</a></p>
				</div>
			</div>
			<div class="copy_area">
				<div class="copyright">
					<p>
						<span>우리집놀러와</span>
						<span>대표 : 이승민</span>
						<span>주소 : 부산광역시 </span>
						<span>사업자등록번호 : 000-00-00000</span><br class="pc_br">
						<span>대표전화 : 1566-1563</span>
						<span>개인정보책임관리자 : 이승민</span><br class="pc_br">
						<span>Copyright 2021 All Rights Reserved.</span>
					</p>
				</div>
			</div>


		</section>
	</footer>

	
	
<section id="footer_online">
	<div class="inner">
		<div class="inquiry_wrap">	
			<div class="online_area">						
				<form name="on_form_daonb" id="on_form_daonb" method="post" action="<?php echo G5_THEME_URL;?>/online_form_update.php" enctype="multipart/form-data" target="bnk_ifr_aa" onsubmit="return fwrite_submit_daonb(this);">
				<?php  //폼 이름, id의 on_form_daonb 를 절대 변경하지 마십시오.?>
				<input type="hidden" name="bo_table" class="bo_table" value="quick_inquiry"> <?php  // quick_inquiry 대신 관리자에서 생성한 게시판 테이블명을 넣습니다. 게시판을 생성하실 때 권한은 글쓰기만 1, 나머지는 모두 10으로 생성하셔야 합니다. ?>
				<input type="hidden" name="w" value="">
				<input type="hidden" value="html1" name="html">				
				<input type="hidden" value="on_form_daonb" name="fname"> <?php  //on_form_daonb 를 절대 변경하지 마십시오.?>
				<input type="hidden" value="상담접수" name="ca_name"> <?php  // 게시판을 생성하실때 분류 사용에 체크하시고  상담접수|처리완료  로 입력하십시오.  ?>

				<div class="online_info">							
					<dl class="wn">
						<dt>이름</dt>
						<dd><input type="text" name="wr_name" placeholder="이름을 입력해주세요." required></dd>
					</dl>
					<dl class="wn">
						<dt>연락처</dt>
						<dd><input type="hidden" name="wr_1_su" value="연락처"><input type="text" name="wr_1" placeholder="ex) 02-1234-5678" required></dd>
					</dl>
					<dl style="display:none;">
						<dt>상담지역</dt>
						<dd><input type="hidden" name="wr_2_su" value="상담지역">
							<select name="wr_2" >
								<option value="">선택하세요</option>
								<option value="서울특별시">서울특별시</option>
								<option value="인천광역시">인천광역시</option>
								<option value="대전광역시">대전광역시</option>
								<option value="대구광역시">대구광역시</option>
								<option value="부산광역시">부산광역시</option>
								<option value="광주광역시">광주광역시</option>
								<option value="울산광역시">울산광역시</option>
								<option value="세종자치시">세종자치시</option>
								<option value="경기도">경기도</option>
								<option value="강원도">강원도</option>
								<option value="충청북도">충청북도</option>
								<option value="충청남도">충청남도</option>
								<option value="경상북도">경상북도</option>
								<option value="경상남도">경상남도</option>
								<option value="전라북도">전라북도</option>
								<option value="전라남도">전라남도</option>
								<option value="제주특별자치도">제주특별자치도</option>
							</select></dd>
					</dl>
					<dl style="display:none;">
						<dt>제목</dt>
						<dd><input type="text" name="wr_subject" placeholder="제목을 입력해주세요." required value="빠른 상담"></dd>
					</dl>
					<dl >
						<dt>문의내용</dt>
						<dd><input type="text" name="wr_content" placeholder="100자이내로 입력해주세요." required></dd>
					</dl>
					<div style="float:left; width:100%; text-align:center; margin-top:5px; color:#aaa;">
						<input type="checkbox" required id="r1">&nbsp;<label for="r1">개인정보 수집 및 이용에 동의</label>
						<a href="<?php echo get_pretty_url('content', "privacy")?>" style="color:#aaa;" target="_blank"> [자세히보기]</a>
					</div>
					<div style="clear:both;"></div>
					<input type="submit" class="btn_online"  id="btn_online_daonb" value="문의하기">
				</div>				
				
				</form>
			</div>
		</div>
	</div>
</section>
	
	
	

		<div class="q-menu" id="backtotop">
		<nav>
			<div><a href="<?php echo G5_BBS_URL;?>/login.php"><i class="fa fa-user"></i><span>점주님공간</span></a></div>
			<div><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=all_menu"><i class="fa fa-utensils"></i><span>메뉴안내</span></a></div>
			<div><a href="#top"><i class="fa fa-angle-up"></i><span>Top</span></a></div>
		</nav>
	</div>
	  
	



	<script src="<?php echo G5_THEME_URL;?>/html/css_js/common.js"></script>


	<script>

	$(function() {
		$("#top_btn").on("click", function() {
			$("html, body").animate({scrollTop:0}, '500');
			return false;
		});
	});
	</script>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");