<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


	 <?php for ($i=0; $i<$list_count; $i++) {  ?>       
		
		<li>
			<a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']);?>" class="more"><img src="<?php echo G5_THEME_URL;?>/html/image/btn_more.png"></a>

			<a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']);?>">
				<strong><em><?php echo date("d",strtotime($list[$i]['datetime'])) ?></em><?php echo date("Y.m",strtotime($list[$i]['datetime'])) ?></strong>
				<p class="txt">
					<strong><?php  echo $list[$i]['icon_reply']." "; echo $list[$i]['subject'];?>
					 <?php    
 
     
			if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";

            if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";


            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
           // if (isset($list[$i]['icon_file']) && $list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;



            ?>
					</strong>
					<span><?php if ($list[$i]['icon_secret']) echo "비밀글입니다."; else echo cut_str(strip_tags($list[$i]['wr_content']),50);?></span>
				</p>
			</a>
		</li>
	
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
	



