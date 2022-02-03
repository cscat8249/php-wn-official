<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>
	<!-- slider -->
	<section class="fullwidthbanner-container no-bottom no-top" aria-label="section-slider" id="home">
	  <div id="revolution-slider">
			<ul>
				<?php  slide('mslider');?>
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</section>
	<!-- slider end -->

      <!-- toped -->
      <section id="toped" class="position-relative whitepage no-bottom no-top no-padding">
		<?php  setbtn('toped');?>
        <div class="container-fluid">
          <div class="row">
          
          <div class="no-gutter">
          
          <div class="col-md-4">
           <div class="features no-margin onStep border-bottom-0 border-right-0" data-animation="fadeInUp" data-time="0">
           <span class="fa <?php echo section('toped',0);?>"></span>
           <h3 class="heading"><?php echo section('toped',1);?></h3>
           <p class="content font-size-h3 font-weight-light">
			<?php echo section('toped',2);?>
		   </p>
           <a href="<?php echo section('toped',4);?>" class="vbtn  vbtn-square vbtn-primary font-size-11pt"><?php echo section('toped',3);?></a>
           </div>
          </div>
          
          <div class="col-md-4">
           <div class="features no-margin onStep border-bottom-0 border-right-0" data-animation="fadeInUp" data-time="300">
           <span class="fa <?php echo section('toped',5);?>"></span>
           <h3 class="heading"><?php echo section('toped',6);?></h3>
           <p class="content font-size-h3 font-weight-light">
		   <?php echo section('toped',7);?>
		   </p>
           <a href="<?php echo section('toped',9);?>" class="vbtn  vbtn-square vbtn-primary font-size-11pt"><?php echo section('toped',8);?></a>
           </div>
          </div>
          
          <div class="col-md-4">
           <div class="features no-margin onStep border-bottom-0 border-right-0" data-animation="fadeInUp" data-time="600">
           <span class="fa <?php echo section('toped',10);?>"></span>
           <h3 class="heading"><?php echo section('toped',11);?></h3>
           <p class="content font-size-h3 font-weight-light"><?php echo section('toped',12);?></p>
          <a href="<?php echo section('toped',4);?>" class="vbtn  vbtn-square vbtn-primary font-size-11pt"><?php echo section('toped',13);?></a>
           </div>
          </div>
          </div>
            </div>
           </div>
      </section>
      <!-- toped end -->

  <!-- about  -->    
  <section id="about" class="position-relative white-bg no-padding" style="background-image:url(<?php echo G5_THEME_URL;?>/<?php echo section('about','2');?>)">
  <div class="container-fluid">
  	<?php  setbtn('about');?>
	   <div class="row equal">
               <div class="col-lg-6 p-90 onStep" data-animation="fadeInLeft" data-time="300">
                <div class="sp-padding font-weight-light">
                  <h1 class="pers-heading font-s">
                    <?php echo section('about','0');?>
                    <span class="devider-heading-left"></span>
                  </h1>   
                  <p class="pers-content font-weight-light">
                    <?php echo section('about','1');?>
                  </p>
               </div>
			   <div class="">
					<a href="<?php echo section('about','5');?>" class="vbtn font-size-11pt  vbtn-square vbtn-primary"><?php echo section('about','4');?></a>
			   </div>
             </div>
             <div class="col-md-6 hidden-md hidden-sm hidden-xs">
				 <div class="img-content onStep pt-20" data-animation="fadeInRight" data-time="0">
					<img alt="img" src="<?php echo G5_THEME_URL;?>/<?php echo section('about','3');?>" class="">
				</div>
             </div>
	   </div>
  </div>
 </section>
 <!-- about end -->
      
  <!-- portfolio  -->
  <section class="position-relative whitepage " id="portfolio">
	<div class="container ">
	  <div class="row">
	  
	  <div class="col-md-12">
	   <h3 class="devider-heading">
			<?php echo boardname('1',$vboard1);?> <?php changeboard('vboard1','vboard1',$vboard1);?>
		<span class="devider-heading-center"></span>
	  </h3>   
	  </div>
	  <!-- spacer -->
	  <div class="space-double"></div>
		 <?php echo latest('theme/snw.gall', $vboard1, 9, 23);?>
	</div>
  </section>
  <!--  portfolio end -->
   
      
      <!-- onlin -->
      <section class="position-relative no-bottom no-top" style="background-image:url(<?php echo G5_THEME_URL;?>/<?php echo section('online','5');?>)" id="online">
	  	<?php  setbtn('online');?>
		<div class="overlayed bg-dark-o-90" style=";"></div>
        <div class="container">
          <div class="row">
          
          <div class="col-lg-8 p-30 onStep" data-animation="fadeInLeft" data-time="300" style="z-index:999;">
                <div class="sp-padding">
                <div class="space"></div>
                  <h2 class="pers-heading white">
                    <?php echo section('online',0);?>
                    <span class="devider-heading-left"></span>
                  </h2>   
                  <div class="white font-size-h2">
                    <?php echo section('online',1);?>
                  </div>
               </div>
             </div>
        <div class="col-md-4 col-xs-12" style="z-index:999;">
         <div id="reservation" class="text-left">
         <span class="ti-bookmark"></span>
            
            <div class="row">
            
             <div class="col-sm-12 form-group">
              <h5><?php echo section('online',2);?></h5>
             </div>
             
              <form  action="<?php echo G5_THEME_URL;?>/_contact.update.php" method="post" enctype="multipart/form-data" id="contact_form" class="contact-form " autocomplete="off">
				<input type="hidden" name="contactboard" value="<?php echo section('online',3);?>">
                <div class="col-sm-12 form-group">
                  <input id="namebook" name="wr_name" class="h-30px" placeholder="이름" type="text" required>
                </div>
                
                <div class="col-sm-12 form-group">
                  <input id="emailbook" name="wr_email" class="h-30px" placeholder="이메일" type="text" required>
                </div>
                
                <div class="col-sm-12 form-group">
                  <input id="phonebook" name="wr_1" class="h-30px" placeholder="전화번호" type="text">
                </div>
                
                
                <div class="col-sm-12 form-group">
                  <textarea cols="50" id="wr_content" class="h-30px" name="wr_content" placeholder="내용" rows="3" required></textarea>
                </div>

                <div class="col-sm-12 form-group">  
                  <button class="vbtn border w-200px  vbtn-square vbtn-primary font-size-11pt" id="send" type="submit"><?php echo section('online',4);?></button>
                </div>  

               </form>
               </div> 
               
            </div>
           </div>

          </div>
        </div>
      </section>
      <!-- onlin end -->
      <!-- section gall2 -->      
	<section class="position-relative whitepage-1 " id="team">  
		<div class="container ">
			<div class="row">

				<div class="col-md-12">
					<h3 class="devider-heading">
					<?php echo boardname('1',$vboard2);?> <?php changeboard('vboard2','vboard2',$vboard2);?>
					<span class="devider-heading-center"></span>
					</h3>   
				</div>
				<div class="space"></div>
				<?php echo latest('theme/snw.gall2', $vboard2, 9, 23);?>

			</div>
		</div>
	</section>
	<!-- section gall2 end -->
      

	<!-- news -->
      <section class="position-relative" style="background-image:url(<?php echo G5_THEME_URL;?>/<?php echo  section('news',0);?>)"  id="news" aria-label="news">
	  	<?php  setbtn('news');?>
         <div class="container">
		 	<div class="overlayed bg-dark-o-90" style=";"></div>
            <div class="row">
          <div class="col-md-12" style="z-index:999;">
          <div class="news">
           <h3 class="devider-heading-white onStep" data-animation="fadeInUp" data-time="0"><?php echo section('news',1);?></h3>
           <p class="white onStep" data-animation="fadeInUp" data-time="300"><?php echo section('news',2);?></p>
		   <?php if(section('news',4)){?>
           <div class="btn-content onStep" data-animation="fadeInUp" data-time="600">
              <a class="scroll-link" href="<?php echo section('news',4);?>"><?php echo section('news',3);?></a>
            </div><?php }?>
          </div>
          </div>
            </div>
            </div>
      </section> 
	
      <section class="   border-bottom pb-n5">
        <div class="container">
          <div class="row  ">
			<div class="">
          
			  <div class="col-md-4 mb-15">
			   <div class="   border-top-0 border-bottom-0  " data-animation="fadeInUp" data-time="0">
					<?php echo latest('theme/snw.basic', section('news',5), 5, 20); ?>
			   </div>
			  </div>
          
			  <div class="col-md-4 mb-15">
			   <div class="    border-top-0 border-bottom-0 " data-animation="fadeInUp" data-time="300">
					<?php echo latest('theme/snw.basic', section('news',6), 5, 20); ?>
			   </div>
			  </div>
			  
			  <div class="col-md-4 mb-15">
			   <div class="   border-top-0 border-bottom-0 border-right-0" data-animation="fadeInUp" data-time="600">
					<?php echo latest('theme/snw.basic', section('news',7), 5, 20); ?>
			   </div>
			  </div>
			  </div>
            </div>
           </div>
      </section>
      <!-- news end -->
       
      <section id="brand" class="brand-page" aria-label="brands" style="background-image:url(<?php echo G5_THEME_URL;?>/img/bg-logo.jpg)">
        <!-- 파트너 -->
          <div class="container">
            <div class="row">
              <div class="owl-carousel" id="owl-brand">
			  	<?php partner('index');?>
              </div>
              
            </div>
          </div>
        <!-- 파트너 end-->
       </section>
        
	<section aria-label="cont" class="position-relative subfooter" style="background-image:url(<?php echo G5_THEME_URL;?>/<?php echo section('cont',0);?>)" id="cont">
		<?php setbtn('cont');?>
        <div class="container">
			<div class="overlayed bg-dark-o-90" style=";"></div>
          <div class="row">
          <div class="col-md-12" style="z-index:999;">
           <h2 class="devider-heading"><?php echo section('cont',1);?></h2>
           <p class="content-max-1 text-center">
           <?php echo section('cont',2);?>
           </p>
           <address class="inline-block">
			  <span><i class="ti-mobile"></i><?php echo $vtel;?></span> 
			  <span><i class="ti-email"></i><a href="mailto:<?php echo $vmail;?>"><?php echo $vmail;?></a></span> 
			  <span><i class="ti-map-alt"></i><?php echo section('cont',3);?></span> 
           </address>
           </div>
          <div class="space-single"></div>
        </div>
	</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>