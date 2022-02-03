<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
	<!-- preloader -->
    <div class="bg-preloader"></div>
    <div class="preloader">
	 <?php if($vloading){?>
      <div class="mainpreloader">
        <img alt="preloaderlogo" src="<?php echo G5_THEME_URL;?>/images/logo/logo_icon.png"> <span class="logo-preloader">please wait</span>
      </div><?php }?>
    </div>
	<!-- preloader end -->
    
    <!-- content wraper -->
    <div class="content-wrapper">
    
    <header class="init">
    <!-- subnav -->
    <div class="subnav hidden-md hidden-sm hidden-xs">
    <div class="container">
        <div class="row">

         <div class="col-md-8">
          <div class="social-icons-subnav">
			<div><span class="ti-mobile"></span><?php echo $vtel;?></div>
			<a href="mailto:<?php echo $vmail;?>"><span class="ti-time"></span><?php echo $vmail;?></a>
          </div>
         </div>
        
         <div class="col-md-4">
			<div class="right">
				<div class="social-icons-subnav">
					<?php if($vsns_f){?><a href="<?php echo $vsns_f;?>" target="_blank"><span class="ti-facebook"></span></a><?php }?>
					<?php if($vsns_i){?><a href="<?php echo $vsns_i;?>" target="_blank"><span class="ti-instagram"></span></a><?php }?>
					<?php if($vsns_y){?><a href="<?php echo $vsns_y;?>" target="_blank"><span class="ti-youtube"></span></a><?php }?>
				</div>
			</div>
         </div>
        </div>
    </div>
    </div>
    <!-- subnav end -->
    
      <!-- nav -->
      <div class="navbar-default navbar-fixed-top">
        <div class="container">
        <div class="row">
        
           <!-- menu mobile display -->
          <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span> 
           <span class="icon icon-bar"></span></button> 
          
          <!-- logo --> 
          <a class="navbar-brand white" href="tel:1566-1635">
			  <img alt="logo" src="<?php echo G5_THEME_URL;?>/<?php echo $vlogo;?>">
          </a> 
          
          <!-- mainmenu start -->
          <div class="menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                <li><a href="<?php if(!defined('_INDEX_')) echo G5_URL;?>#about">우리집놀러와</a></li>
                <li><a href="<?php if(!defined('_INDEX_')) echo G5_URL;?>#portfolio">메뉴안내</a></li>
                <li><a href="<?php if(!defined('_INDEX_')) echo G5_URL;?>#online">상담예약</a></li>
                <li><a href="<?php if(!defined('_INDEX_')) echo G5_URL;?>#team">인기메뉴</a></li>
                <li><a href="<?php if(!defined('_INDEX_')) echo G5_URL;?>#news">소식</a></li>
                <li><a href="<?php if(!defined('_INDEX_')) echo G5_URL;?>#cont">문의</a></li>
              </ul> 
            </nav>
          </div>
          <!-- mainmenu end -->
        </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
      </header>

<?php if(!defined('_INDEX_')) {?>
<div class="block-main"></div>
<!-- subheader -->
      <section id="subheader" class="position-relative parallax-window" data-parallax="scroll" data-image-src="<?php echo G5_THEME_URL;?>/<?php echo section('botable',0);?>">
	  	
        <div class="container">
		<div class="overlayed bg-dark-o-90" style=";"></div>
          <div class="row">
            <div class="col-md-12" style="z-index:9999;">
              <h1><?php setbtn('botable');?>
                <?php echo headtitle($ptitle);?>
              </h1>
            </div>
            <div class="col-md-12" style="z-index:9999;">
              <ul class="subdetail">
                <li>
                  <a href="<?php echo G5_URL;?>/">Home</a>
                </li>
                <li class="sep">/
                </li>
                <li><?php echo headtitle($ptitle);?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- subheader end -->
	  <section class="">
		  <div class="container"> 
<?php }?>