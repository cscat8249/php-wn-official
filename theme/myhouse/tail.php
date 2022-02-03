<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
	      </div>
    </section>
      <!-- footer -->
      <footer class="black text-center">
        <div class="container">
          <div class="row">
			  <div class="col-md-12">
                <div class="social-icons">
                  <?php if($vsns_f){?><a href="<?php echo $vsns_f;?>"><span class="ti-facebook"></span></a><?php }?>
                  <?php if($vsns_t){?><a href="<?php echo $vsns_t;?>"><span class="ti-twitter"></span></a><?php }?>
                  <?php if($vsns_i){?><a  href="<?php echo $vsns_i;?>"><span class="ti-instagram"></span></a><?php }?>
                  <?php if($vsns_y){?><a  href="<?php echo $vsns_y;?>"><span class="ti-youtube"></span></a><?php }?>
                </div>
            </div>
            <div class="col-md-12">
              <span class="color">&copy; <?php echo $vtitle;?> <?php echo date('Y');?> </span> all reserved. 
			  <div class="">
			  	<?php if($is_member){?>
				<a href="<?php echo G5_BBS_URL;?>/logout.php" class="mx-1">로그아웃</a>
				<?php }else{?>
				<a href="<?php echo G5_BBS_URL;?>/login.php" class="mx-1">로그인</a>
				<?php }?>
				<?php if($is_admin){?>
				<a href="<?php echo G5_URL;?>/adm" class="mx-1" target="_blank">관리자</a>
				<a href="<?php echo G5_THEME_URL;?>/_set.php" class="mx-1">사이트 설정</a>
				<?php }?>
			  </div>
            </div>
          </div>
        </div>
		
		
      </footer>
      <!-- footer end -->
      
      <!-- ScrolltoTop -->
      <div id="totop">
        <span class="ti-angle-up"></span>
      </div>
    </div>

	<div class="modal fade" id="sectionmodal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" style="z-index:9999;">
	</div>
	

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>