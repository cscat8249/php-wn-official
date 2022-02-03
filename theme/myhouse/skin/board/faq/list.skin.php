<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<div id="" class="container py-10">


 <?php if ($is_category) { 
		$csql = "select bo_table, bo_category_list from g5_board where bo_table = '$bo_table' ";
		$crow = sql_fetch($csql);
		$calist = explode('|',$crow['bo_category_list']);
		?>
		<div class="text-center col-sm-12">
			<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>" class="vbtn vbtn-square vbtn-<?php if($sca){?>outline-<?php }?>primary mx-1 font-size-lg">전체</a>
		<?php for($c=0; $c<count($calist); $c++){?>
			<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>&sca=<?php echo $calist[$c];?>" class="vbtn vbtn-square vbtn-<?php if($sca!==$calist[$c])echo 'outline-';?>primary mx-1 font-size-lg"><?php echo $calist[$c];?></a>
		<?php }?>
		</div>
    <?php } ?>

	<div class="space-single">
	</div>




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



    <!-- } 게시판 페이지 정보 및 버튼 끝 -->
	<div class="panel-group accordion " id="accordion"> 


		<?php
        for ($i=0; $i<count($list); $i++) {
		?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> 
				  <?php if ($is_checkbox) { ?>
				  <div class="position-absolute right-0 top-0">
				<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" style="z-index:99;">
				</div>
				<?php } ?>
				  <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $list[$i]['wr_id'] ?>">
				  <label class="mr-5">Q.</label> <?php echo $list[$i]['subject'] ?></a> </h4>
                </div>
                <div id="<?php echo $list[$i]['wr_id'] ?>" class="panel-collapse collapse ">
                  <div class="panel-body">
				  <label class="mr-5">A.</label><?php echo  nl2br($list[$i]['wr_content']); ?>
					<?php if ($admin_href) { ?>
					  <div class="mt-5 ">
						<a href="<?php echo $list[$i]['href'] ?>" class="vbtn vbtn-outline-primary vbtn-square">수정</a>
					  </div>
					  <?php }?>

				  </div>
                </div>
              </div>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<div class="text-center">게시물이 없습니다.</div>'; } ?>

    </div>
	
    </form>
	


<div class="row">
		<div class="paging col-sm-12 text-center">
			<?php echo $write_pages; ?>
		</div>

		<div class=" col-sm-6 ">
			<a  class="vbtn vbtn-primary vbtn-square btn_bo_sch font-size-lg" title="검색">검색</a>
		</div>

		<div class="col-sm-6 text-right">
			<?php if ($list_href || $is_checkbox || $write_href) { ?>
				<?php if ($is_checkbox) { ?>
				<label for="chkall" class="m-0 vbtn vbtn-primary vbtn-square font-size-lg">
				<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="m-0 p-0 mr-1">
				전체선택
				</label>
				<?php } ?>

			<?php if ($admin_href) { ?>
			<a href="<?php echo $admin_href ?>" class="vbtn vbtn-primary vbtn-square font-size-lg" title="관리자">관리자</a>
			<?php } ?>
            <?php if ($rss_href) { ?>
			<a href="<?php echo $rss_href ?>" class="vbtn vbtn-primary vbtn-square font-size-lg" title="RSS">RSS</a>
			<?php } ?>
		   <?php if ($write_href) { ?>
		   <a href="<?php echo $write_href ?>" class="vbtn vbtn-primary vbtn-square font-size-lg" title="글쓰기">글쓰기</a>
		   <?php } ?>
        <?php } ?> 
		</div>
		</form>
		<div class="col-lg-12 text-center hiddened bo_sch_wrap  ">
			<div class="border-top mt-5 pt-5">
				<form name="fsearch" method="get">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sop" value="and">
				<div class="col-sm-6 p-0  text-center bg-dark" style="float:none; margin: 0 auto;">
					<div class="">
						<div class="col-sm-4  px-0">
							<select name="sfl" id="sfl" class="form-control w-100 h-40px border rounded-0   ">
								<?php echo get_board_sfl_select_options($sfl); ?>
							</select>
						</div>
						<div class="col-sm-8 px-0 position-relative">
							<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="w-100 form-control  h-40px border rounded-0" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
							<button type="submit" value="검색" class="vbtn vbtn-primary vbtn-square w-40px h-40px position-absolute right-0 top-0"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
				<div class="">
				</div>
				</form>
			</div>
		</div>
	</div>



    <script>
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').hide();
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
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
