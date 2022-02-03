<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $latest_skin_url ?>/css/juicyslider.css" type="text/css" />
<style type="text/css">

	/* Sticky footer styles
	-------------------------------------------------- */

	html,
	body {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
	}

	/* Wrapper for page content to push down footer */
	#wrap {
		min-height: 100%;
		height: auto !important;
		height: 100%;
		/* Negative indent footer by it's height */
		margin: 0 auto -60px;

	}

	/* Set the fixed height of the footer here */
	#push,
	#footer {
		height: 60px;
	}
	#footer {
		background-color: #f5f5f5;
	}

	/* Lastly, apply responsive CSS fixes as necessary */
	@media (max-width: 767px) {
		#footer {
			margin-left: -20px;
			margin-right: -20px;
			padding-left: 20px;
			padding-right: 20px;
		}
	}

	/* Custom page CSS
	-------------------------------------------------- */
	/* Not required for template or sticky footer method. */
	#wrap > .container {
		padding-bottom: 60px;
	}
	.container .credit {
		margin: 20px 0;
	}

	code {
		font-size: 80%;
	}

	/* Some adjustments for Bootstrap */

	.lead {
		font-size: 18px;
	}

	.btn {
		margin: 5px 2px;
	}
	.container{width:970px}		/* content size */
	#myslider{margin:0 auto;}
</style>
<!-- Part 1: Wrap all page content here -->
        <div id="wrap">
			<!-- Begin page content -->
            <div class="container">
                <div class="row-fluid">
                    <div class="pagination-centered">
                        <div id="myslider" class="juicyslider">
                            <ul>
<?							for ($i=0; $i<count($list); $i++) {
									$noimage = "$latest_skin_url/images/1.jpg";
									$list[$i][file] =get_file($bo_table, $list[$i][wr_id]);
									$imagepath = $list[$i][file][0][path]."/".$list[$i][file][0][file];
?>									<li><img src="<?echo $imagepath ?>" alt=""></li>
<?							}
?>
                            </ul>
                            <div class="nav next"></div>
                            <div class="nav prev"></div>
                            <div class="mask"></div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $latest_skin_url ?>/js/juicyslider.js"></script>
        <!-- initialize Juicy Slider with a jQuery doc ready -->
        <script type="text/javascript">
            // start to run when document ready
             $(function() {
                $('#myslider').juicyslider({
                    width: 1000,
                    height: 600,
                    mask: 'stop',
                    show: {effect: 'puff', duration: 3000},
                    hide: {effect: 'puff', duration: 3000},
                });
            });
        </script>
        <!-- end of Juicy Slider -->

<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->
