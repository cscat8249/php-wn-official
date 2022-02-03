<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="very-latest">
		  <h4 class="position-relative mb-5"><?php echo $bo_subject ?> <a href="<?php echo get_pretty_url($bo_table); ?>" class="font-weight-light position-absolute right-0 border font-size-sm p-3 "><i class="fa fa-plus"></i></a></h4>
	<?php for ($i=0; $i<$list_count; $i++) {  ?>
	 <div class="border-bottom py-2 h-35px">
		<div class="right font-size-sm pt-1">
			<?php echo date('Y-m-d',strtotime($list[$i]['wr_datetime']));?>
		</div>
		<a href="<?php echo $list[$i]['href'];?>">
			<?php echo $list[$i]['subject'];?>
		</a>
		<?php if ($list[$i]['comment_cnt']){?>
			<span class="text-danger font-size-sm ml-2"> + <?php echo $list[$i]['comment_cnt'];?></span>
		<?php }?>
		<?php if ($list[$i]['icon_new']) {?>
			<span class="label label-danger font-size-sm font-weight-light ml-2">N</span>
		<?php }?>
	 </div>
	 <?php }?>
	  <?php if ($list_count == 0) { //게시물이 없을 때  ?>
	<div class="">게시물이 없습니다.</div>
    <?php }  ?>

</div>