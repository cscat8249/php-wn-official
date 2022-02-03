<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = 476;
$thumb_height = 478;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
		<div class="text-center mb-10">
<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>" class="vbtn vbtn-square vbtn-outline-primary mx-1 font-size-lg">전체</a>
			  <?php
				$csql = "select bo_table, bo_category_list from g5_board where bo_table = '$bo_table' ";
				$crow = sql_fetch($csql);
				$calist = explode('|',$crow['bo_category_list']);
				for($c=0; $c<count($calist); $c++){?>
<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>&sca=<?php echo $calist[$c];?>" class="vbtn vbtn-square vbtn-outline-primary mx-1 font-size-lg"><?php echo $calist[$c];?></a>
			  <?php }?>
		  </div>
	 <div class="onStep" data-animation="fadeInUp" data-time="300">
         <div class="owl-carousel" id="owl-team">
		<?php
			for ($i=0; $i<$list_count; $i++) {
					$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
					$oriimg = $thumb['ori'];
					if($thumb['src']) {
						$img = $thumb['src'];
					} else {
						$img = G5_IMG_URL.'/no_img.png';
						$thumb['alt'] = '이미지가 없습니다.';
					}
		?>
		<div class="item">
			<div class="team" style="background-image:url(<?php echo $img;?>)">
				<div class="hovereffect">
					<a href="<?php echo $list[$i]['href'];?>">
						<div class="overlay-2">
							<div class="content">
								<div class="heading"><?php echo $list[$i]['wr_subject'];?>
									<span class="devider-recent-2"></span>
								</div>
								<div class="subheading">
									<?php echo $list[$i]['ca_name'];?>
								</div>
								<div class="readmore">
									<i class="fa fa-plus"></i>
								</div>
							</div>
						</div>
					</a>  
				</div>
			</div>
		</div>
	<?php }  ?>
	</div>
  </div>