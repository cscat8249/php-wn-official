<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>



<!-- article -->
<article>
	<div class="blog-simple">
		<a href="#"><img class="img-responsive" src="img/cover_bg_1.jpg" alt=""></a>
		<div class="blog-text">
			<h1 class="text-center   border-bottom  font-weight-bolder mb-0 pb-10">
				<?php echo $view['wr_subject'];?>
			</h1>
			<div class="text-center   border-bottom py-5 pt-0">
				 <?php if ($category_name) { ?>
				<span class="mb-0 pb-0  mr-5">
					<?php echo $view['ca_name']; // 분류 출력 끝 ?>
				</span>
				<?php } ?>
				<span class="user-post mb-0 pb-0"><i class="ti-user"></i><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></span>
				<span class="date-post mb-0 pb-0"><i class="ti-calendar"></i><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></span>
				<span class="comment mb-0 pb-0"><a href=""><i class="ti-comment"></i><?php echo number_format($view['wr_comment']) ?></a></span>
			</div>

			<?php
    $cnt = 0;
    if ($view['file']['count']) {
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
	?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <div class="">
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <div class="mt-3 p-3 px-10 vbtn vbtn-square vbtn-outline-primary border-left-0 border-right-0  w-100 text-left">
               	<i class="fa fa-folder-open" aria-hidden="true"></i> <b class="mr-5">파일첨부 <?php echo $i;?></b>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download" download>
                    <?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <div class="font-size-xs"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></div>
            </div>
        <?php
            }
        }
         ?>
    </div>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php if(isset($view['link']) && array_filter($view['link'])) { ?>
    <!-- 관련링크 시작 { -->
    <div id="">
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
            ?>
            <div class="mt-3 p-3 px-10 vbtn vbtn-square vbtn-outline-primary w-100 text-left border-left-0 border-right-0">
                <i class="fa fa-link" aria-hidden="true"></i> <b class="mr-5">관련링크 <?php echo $i;?></b>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <b><?php echo $link ?></b>
                </a>
                <div class="font-size-xs"><?php echo $view['link_hit'][$i] ?>회 연결</div>
            </div>
            <?php
            }
        }
        ?>
        </ul>
    </div>
    <!-- } 관련링크 끝 -->
    <?php } ?>


			<p class="text-justify">


		<?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\" class=''>\n";

            for ($i=0; $i<=count($view['file']); $i++) {
                echo get_file_thumbnail($view['file'][$i]);
            }

            echo "</div>\n";
        }
         ?>

        <!-- 본문 내용 시작 { -->
        <div class="mt-10"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>


		<!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>



        <div id="" class="text-center">
            <?php if ($good_href) { ?>
            <span class="label label-outline-primary rounded-circle  h-50px w-50px pt-5 font-size-lg text-center line-height-lg mx-1">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong> <?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="label label-outline-primary rounded-circle  h-50px w-50px pt-5 font-size-lg text-center line-height-lg mx-1">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong> <?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div class="text-center mt-10">
            <?php if($board['bo_use_good']) { ?><span class="label label-outline-primary rounded-circle  h-50px w-50px pt-5 font-size-lg text-center line-height-lg mx-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong> <?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="label label-outline-primary rounded-circle  h-50px w-50px pt-5 font-size-lg text-center line-height-lg mx-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i><span class="sound_only">비추천</span><strong> <?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- }  추천 비추천 끝 -->

		<div class="w-100 text-center mt-3">
			<?php include_once(G5_SNS_PATH."/view.sns.skin.php"); ?>
		</div>

				
			</p>
		</div>
		<!-- 버튼 시작 -->
		<div class="">
			<?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="vbtn vbtn-square vbtn-primary font-size-lg" onclick="win_scrap(this.href); return false;"><i class="fa fa-bookmark" aria-hidden="true"></i> 스크랩</a><?php } ?>
			<a href="<?php echo $list_href ?>" class="vbtn vbtn-square vbtn-primary font-size-lg" title="목록">목록</a>
			<?php if ($reply_href) { ?><a href="<?php echo $reply_href ?>" class="vbtn vbtn-square vbtn-primary font-size-lg" title="답변">답변</a><?php } ?>
			<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="vbtn vbtn-square vbtn-primary font-size-lg" title="글쓰기">글쓰기</a><?php } ?>
			<?php if($update_href || $delete_href || $copy_href || $move_href || $search_href) { ?>
			<?php if ($update_href) { ?><a href="<?php echo $update_href ?>" class="vbtn vbtn-square vbtn-primary font-size-lg" >수정</a><?php } ?>
			<?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;" class="vbtn vbtn-square vbtn-primary font-size-lg" >삭제</a><?php } ?>
			<?php if ($copy_href) { ?><a href="<?php echo $copy_href ?>" onclick="board_move(this.href); return false;" class="vbtn vbtn-square vbtn-primary font-size-lg" >복사</a><?php } ?>
			<?php if ($move_href) { ?><a href="<?php echo $move_href ?>" onclick="board_move(this.href); return false;" class="vbtn vbtn-square vbtn-primary font-size-lg" >이동</a><?php } ?>
			<?php } ?>
		</div>
	</div>
</article>
<!-- article end -->

<div class="">
    <?php if ($prev_href || $next_href) { ?>
    <div class=" row  mt-5">
        <?php if ($prev_href) { ?>
		<div class="col-sm-6 text-left ">
			<div class="w-100 vbtn  vbtn-lg vbtn-square vbtn-outline-primary font-size-lg ">
				<a href="<?php echo $prev_href ?>">
				<i class="fa fa-chevron-left mr-5" aria-hidden="true"></i> 이전글  
				<?php echo $prev_wr_subject;?>
				<span class="font-size-xs ml-5"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span>
				</a>
			</div>
		</div>
		
		<?php } ?>
        <?php if ($next_href) { ?>
		<div class="col-sm-6 text-right ">
			<div class="w-100 vbtn  vbtn-lg vbtn-square vbtn-outline-primary font-size-lg">
				<a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?>
				<span class="font-size-xs ml-5"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span>
				다음글 
				<i class="fa fa-chevron-right ml-5" aria-hidden="true"></i>
				</a>  
			</div>
		</div>
		<?php } ?>
    </div>
    <?php } ?>

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
	?>
</div>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->