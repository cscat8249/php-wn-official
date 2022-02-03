<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>


      <section aria-label="home" class="mainbg parallax-window" data-parallax="scroll" data-image-src="<?php echo G5_THEME_URL;?>/images/bg/biz8.jpg" id="home">
              <div class="container">
                <div class="row">
				<div class="overlayed bg-dark-o-90" style=";"></div>
                
                <div class="loginboxed v-align" style="z-index:999;">
                
                  <div class="col-md-2">
				  	<form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
					<input type="hidden" name="url" value="<?php echo $login_url ?>">
					<div class="text-white h3 mb-5">
						회원로그인
					</div>

				  	<div class="mb-2">
						 <input type="text" name="mb_id" id="login_id" required class="w-100 h-40px form-control rounded-0 font-size-sm required text-white" size="20" maxLength="20" placeholder="아이디">
					</div>
					<div class="">
						<input type="password" name="mb_password" id="login_pw" required class="w-100 h-40px form-control font-size-sm rounded-0 required text-white" size="20" maxLength="20" placeholder="비밀번호">
					</div>
					<div class="mt-3">
						 <button type="submit" class="w-100 vbtn vbtn-primary vbtn-square ">로그인</button>
					</div>
					<div class="row mt-5">
						<div class="col-sm-6 text-left">
							 <a href="<?php echo G5_BBS_URL ?>/register.php" class="vbtn vbtn-dark vbtn-square ">회원가입</a>
						</div>
						<div class="col-sm-6 text-right">
							<a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost" class="vbtn vbtn-dark vbtn-square ">정보찾기</a>  
						</div>
					</div>
					</form>
        <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
    </div>
</div>

















                  </div>
                  
                </div>  
                
              </div>
            </div>
      </section>



<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 끝 -->
