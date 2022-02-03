<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(!$theme_license) exit("<center><span style='color:red; font-size:15px;'><b>Warning: DAONTHEME License is Missing!</b></span><br>You are an unauthorized user.<BR>E-MAIL : daontheme@daum.net</center>");

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 6;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div id="store_map">
	<div class="con_left">
		<div class="map_area">
			<div class="map-bgimg"><img src="<?php echo $board_skin_url?>/image/store_map.png"></div>
			<div class="map_point">
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=서울"><div class="dot dot-01 <?php if($sca=="서울") echo "on";?>"><span>서울</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=인천"><div class="dot dot-02 <?php if($sca=="인천") echo "on";?>"><span>인천</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=경기"><div class="dot dot-03 <?php if($sca=="경기") echo "on";?>"><span>경기</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=강원"><div class="dot dot-04 <?php if($sca=="강원") echo "on";?>"><span>강원</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=충북"><div class="dot dot-05 <?php if($sca=="충북") echo "on";?>"><span>충북</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=충남"><div class="dot dot-06 <?php if($sca=="충남") echo "on";?>"><span>충남</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=세종"><div class="dot dot-07 <?php if($sca=="세종") echo "on";?>"><span>세종</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=대전"><div class="dot dot-08 <?php if($sca=="대전") echo "on";?>"><span>대전</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=경북"><div class="dot dot-09 <?php if($sca=="경북") echo "on";?>"><span>경북</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=대구"><div class="dot dot-10 <?php if($sca=="대구") echo "on";?>"><span>대구</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=전북"><div class="dot dot-11 <?php if($sca=="전북") echo "on";?>"><span>전북</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=광주"><div class="dot dot-12 <?php if($sca=="광주") echo "on";?>"><span>광주</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=전남"><div class="dot dot-13 <?php if($sca=="전남") echo "on";?>"><span>전남</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=울산"><div class="dot dot-14 <?php if($sca=="울산") echo "on";?>"><span>울산</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=부산"><div class="dot dot-15 <?php if($sca=="부산") echo "on";?>"><span>부산</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=경남"><div class="dot dot-16 <?php if($sca=="경남") echo "on";?>"><span>경남</span></div></a>
				<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $bo_table?>&sca=제주"><div class="dot dot-17 <?php if($sca=="제주") echo "on";?>"><span>제주</span></div></a>
			</div>
		</div>
	</div>
	<div class="con_right">
		<div class="con_tit">
			<p><i class="fas fa-map-marked-alt"></i></p>
			<strong>전국 매장을 검색해 보실 수 있습니다.<br><p><br class="sview">가까운 곳에서 만나보세요!</p></strong>
			<span class="s_tit">
				<br>
				지도에서 해당 지역을 클릭하시거나<br class="sview"> 지역명 또는 매장명을 입력해 주세요.
			</span>
		</div>

		<form name="fsearch" method="get">
		<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
		<input type="hidden" name="sop" value="and">
		<div class="map_search_form">
		<ul>
			<li class="search1">
				<?php 
					if ($board['bo_use_category']) {
				?>
				<select name="sca" class="select"  >
					<option value="">전체</option>
				<?php 
				  $categoriesa = explode('|', $board['bo_category_list']); // 구분자가 , 로 되어 있음
					for ($i=0; $i<count($categoriesa); $i++) {
						 $categorya = trim($categoriesa[$i]);
						 if ($categorya=='') continue;
				?>		
					<option value="<?php echo $categorya?>" <?php  if ($categorya==$sca) echo "selected";?>><?php echo $categorya?></option>
					<?php }?>
					
				</select>	
				<?php }?>
			</li>
			<li class="search2"><input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="store_search_input" size="15"></li>
			<li class="search3"><button type="submit" class="store_search_submit">검색 <i class="fas fa-search"></i></button></li>
		</ul>
		</div>
		</form>
		<?php if($sca){?><script>document.fsearch.sca.value='<?php echo $sca?>';</script><?php }?>
	</div>
</div>


<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate" class="mnone" style="display:none;">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
	<div class="select_bo_cate mview" style="display:none;">
		<a class="sel" rel="선택"><?php if($sca) echo $sca; else echo "전체";?></a>
		<ul style="display:none;">
			<?php echo $category_option ?>
		</ul>
	</div>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->
    
    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
        	<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
            <!-- <li>
            	<button type="button" class="btn_bo_sch btn_b01 btn" title="게시판 검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">게시판 검색</span></button>
            </li> -->
            <!-- <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fas fa-pencil-alt"></i><span class="sound_only">글쓰기</span></a></li><?php } ?> -->
        	<?php if ($is_admin == 'super' || $is_auth) {  ?>
        	<li>
        		<button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
        		<?php if ($is_checkbox) { ?>	
		        <ul class="more_opt is_list_btn">  
		            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fas fa-trash-alt"></i>선택삭제</button></li>
		            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i>선택복사</button></li>
		            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fas fa-arrows-alt-h"></i>선택이동</button></li>
		            <li><button type="button" value="닫기" class="more_opt_close"><i class="fas fa-times"></i>메뉴닫기</button></li>
		        </ul>
		        <?php } ?>
        	</li>
        	<?php }  ?>
        </ul>
        <?php } ?>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->
        	
    <div class="tbl_head01 tbl_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <td scope="col" class="all_chk chk_box">
            	<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                <label for="chkall">
                	<span></span>
                	<b class="sound_only">현재 페이지 게시물  전체선택</b>
				</label>
            </td>
            <?php } ?>
            <th scope="col" class="lview">번호</th>
            <th scope="col" style="width:10%;">지역</th>
            <th scope="col">매장명</th>
            <th scope="col" class="lview">주소</th>
            <th scope="col" class="">전화</th>
            <th scope="col" style="width:120px;" class="snone">보기</th><!-- 
            <th scope="col" class="lview">글쓴이</th>
            <th scope="col" class="lview"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회 </a></th>
            <?php if ($is_good) { ?><th scope="col" class="lview"><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천 </a></th><?php } ?>
            <?php if ($is_nogood) { ?><th scope="col" class="lview"><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천 </a></th><?php } ?>
            <th scope="col" class="lview"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜  </a></th> -->
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
        	if ($i%2==0) $lt_class = ""; //even
        	else $lt_class = "";
		?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> <?php echo $lt_class ?>">
            <?php if ($is_checkbox) { ?>
            <td class="td_chk chk_box">
				<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
            	<label for="chk_wr_id_<?php echo $i ?>">
            		<span></span>
            		<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
            	</label>
            </td>
            <?php } ?>
            <td class="td_num2 lview">
            <?php
            if ($list[$i]['is_notice']) // 공지사항
                echo '<strong class="notice_icon">공지</strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">열람중</span>";
            else
                echo $list[$i]['num'];
             ?>
            </td>
			<td class="td_num2">
				<?php echo $list[$i]['ca_name'] ?>
			</td>

            <td class="td_subject" style="text-align:center;">
               
                <div class="bo_tit">
                    <a href="<?php echo $list[$i]['href'] ?>">
                        <?php echo $list[$i]['icon_reply'] ?>                        
                        <?php echo $list[$i]['subject'] ?>						
                    </a>
					
                    <?php
                    if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">new<span class=\"sound_only\">새글</span></span>";
					// if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                    // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                    //if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);					
                   // if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                    //if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                    ?>
                    <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><span class="cnt_cmt">+ <?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span><?php } ?>
                </div>
				<div class="mview">
					<div class="gall_info">
                        <?php echo $list[$i]['wr_1']?>
                    </div>					
				</div>
            </td>
			<td class="lview" style="text-align:center;">
				<?php echo $list[$i]['wr_1']?>
			</td>
			<td class="" style="text-align:center;">
				<?php echo $list[$i]['wr_2']?>
			</td>
			<td class="snone" style="text-align:center;">
				<a href="<?php echo $list[$i]['href'] ?>" class="btn btn_b011"><span>자세히 보기</span></a>
			</td>
            <!-- <td class="td_name sv_use lview"><?php echo $list[$i]['name'] ?></td>
            <td class="td_num lview"><?php echo $list[$i]['wr_hit'] ?></td>
            <?php if ($is_good) { ?><td class="td_num lview"><?php echo $list[$i]['wr_good'] ?></td><?php } ?>
            <?php if ($is_nogood) { ?><td class="td_num lview"><?php echo $list[$i]['wr_nogood'] ?></td><?php } ?>
            <td class="td_datetime lview"><?php echo $list[$i]['datetime'] ?></td> -->

        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">매장이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>
	<!-- 페이지 -->
	<?php echo $write_pages; ?>
	<!-- 페이지 -->
	
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
        	<!-- <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_b011 btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="">관리자</span></a></li><?php } ?>
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b011 btn" title="RSS" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i><span class="">RSS</span></a></li><?php } ?> -->
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b011 btn" title="글쓰기"><i class="fas fa-pencil-alt"></i><span class="">글쓰기</span></a></li><?php } ?>
        </ul>	
        <?php } ?>
    </div>
    <?php } ?>   
    </form>

    <!-- 게시판 검색 시작 { -->
    <!-- <div class="bo_sch_wrap" style="display:none;">
        <fieldset class="bo_sch">
            <h3>SEARCH</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">검색대상</label>
            <select name="sfl" id="sfl">
                <?php echo get_board_sfl_select_options($sfl); ?>
            </select>
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
                <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div> -->
    <script>
    jQuery(function($){
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").fadeToggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').fadeOut();
        });
    });
    </script>
    <!-- } 게시판 검색 끝 --> 
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
	 $(".more_opt_close").on("click", function (e) {
       $(".more_opt.is_list_btn").hide();
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
