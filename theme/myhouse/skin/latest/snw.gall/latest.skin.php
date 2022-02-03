<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width = 532;
$thumb_height = 355;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
		<div class="text-center mb-10">
			 <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>" class="vbtn  vbtn-square vbtn-outline-primary mx-1 font-size-lg">전체</a>
			  <?php
				$csql = "select bo_table, bo_category_list from g5_board where bo_table = '$bo_table' ";
				$crow = sql_fetch($csql);
				$calist = explode('|',$crow['bo_category_list']);
				for($c=0; $c<count($calist); $c++){?>
			  <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=<?php echo $bo_table;?>&sca=<?php echo $calist[$c];?>" class="vbtn vbtn-square vbtn-outline-primary mx-1 font-size-lg"><?php echo $calist[$c];?></a>
			  <?php }?>
		  </div>
            <div class="no-gutter onStep" data-animation="fadeInUp" data-time="600" id="projects-wrap">
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
              <div class="col-md-4 col-xs-12 item <?php echo $list[$i]['ca_name'];?>">
                <div class="projects-grid big-img">
                  <a href="<?php echo $oriimg;?>">
                  <div class="hovereffect">
                    <img alt="<?php echo $thumb['alt'];?>" class="img-responsive" src="<?php echo $img;?>">
                    <div class="overlay">
						<div class="boxeds">
	                        <div class="icon"><i class="fa fa-search-plus"></i></div>
						</div>
                    </div>
                  </div></a>
                </div>
              </div>
	<?php }  ?>
            </div>
          </div>