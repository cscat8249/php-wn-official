<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
$img_width = '950'; //썸네일 가로길이
$img_height = '500'; //썸네일 세로길이
$img_quality = '99'; //퀼리티 100이하로 설정

if (!function_exists("imagecopyresampled")) alert("GD 2.0.1 이상 버전이 설치되어 있어야 사용할 수 있는 갤러리 게시판 입니다.");

$data_path = $g4[path]."/data/file/$bo_table";
$thumb_path = $data_path.'/thumb_youbo'; //썸네일 이미지 생성 디렉토리

@mkdir($thumb_path, 0707);
@chmod($thumb_path, 0707);
?>

<link rel="stylesheet" type="text/css" href="<?=$latest_skin_path?>/style.css" />

<script type="text/javascript" src="<?=$latest_skin_path?>/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="<?=$latest_skin_path?>/js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="<?=$latest_skin_path?>/js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript" src="<?=$latest_skin_path?>/js/coda-slider.1.1.1.pack.js"></script>


<script type="text/javascript">

var theInt = null;
var $crosslink, $navthumb;
var curclicked = 0;

theInterval = function(cur){
    clearInterval(theInt);

    if( typeof cur != 'undefined' )
        curclicked = cur;

    $crosslink.removeClass("active-thumb");
    $navthumb.eq(curclicked).parent().addClass("active-thumb");
    $(".stripNav ul li a").eq(curclicked).trigger('click');

    theInt = setInterval(function(){
    $crosslink.removeClass("active-thumb");
    $navthumb.eq(curclicked).parent().addClass("active-thumb");
    $(".stripNav ul li a").eq(curclicked).trigger('click');
    curclicked++;
    if( 6 == curclicked )
    curclicked = 0;

    }, 3000);
}
;

$(function(){

$("#main-photo-slider").codaSlider();

$navthumb = $(".nav-thumb");
$crosslink = $(".cross-link");

$navthumb
.click(function() {
var $this = $(this);
theInterval($this.parent().attr('href').slice(1) - 1);
return false;
});

theInterval();
});
</script>
</head>

<body>

<div id="page-wrap">

  <div class="slider-wrap">
    <div id="main-photo-slider" class="csw">
      <div class="panelContainer">







        <?
        for ($i=0; $i<count($list); $i++) {

            $img = "<img src='$latest_skin_path/img/noimage.gif' width='$img_width' height='$img_height' title='이미지 없음' />";


            $thumb = $thumb_path.'/'.$list[$i][wr_id];




            if (!file_exists($thumb)) {
                $file = $list[$i][file][0][path] .'/'. $list[$i][file][0][file];
                // 업로드된 파일이 이미지라면
                if (preg_match("/\.(jp[e]?g|gif|png)$/i", $file) && file_exists($file)) {
                    $size = getimagesize($file);
                    if ($size[2] == 1)
                        $src = imagecreatefromgif($file);
                        else if ($size[2] == 2)
                            $src = imagecreatefromjpeg($file);
                        else if ($size[2] == 3)
                            $src = imagecreatefrompng($file);
                        else
                            break;

                    $rate = $img_width / $size[0];
                    $get_width = $img_width;
                    $get_height = (int)($size[1] * $rate);

                    $temp_h = (int)($img_height / $img_width * $size[0]);
                    $src_y = (int)(($size[1] - $temp_h) / 2);

                    if ($get_height < $img_height) {
                        $rate = $img_height / $size[1];
                        $get_height = $img_height;
                        $get_width = (int)($size[0] * $rate);

                        $src_y = 0;
                        $temp_w = (int)($img_width / $img_height * $size[1]);
                        $src_x = (int)(($size[0] - $temp_w) / 2);
                    }

                    $dst = @imagecreatetruecolor($img_width, $img_height);
                    $white = @imagecolorallocate($dst, 255, 255, 255);
                    @imagefilledrectangle($dst, 0, 0, $img_width, $img_height, $white);
                    @imagecopyresampled($dst, $src, 0, 0, $src_x, $src_y, $get_width, $get_height, $size[0], $size[1]);
                    @imagejpeg($dst, $thumb_path.'/'.$list[$i][wr_id], $img_quality);
                    @chmod($thumb_path.'/'.$list[$i][wr_id], 0606);
                }
                else {
                    $edit_img = $list[$i]['wr_content'];
                    if (preg_match("/data\/cheditor4[^<>]*\.(gif|jp[e]?g|png|bmp)/i", $edit_img, $tmp)) {
                        // data/cheditor4------
                        $file = './' . $tmp[0]; // 파일명
                        $size = getimagesize($file);
                        if ($size[2] == 1)
                            $src = imagecreatefromgif($file);
                            else if ($size[2] == 2)
                                $src = imagecreatefromjpeg($file);
                            else if ($size[2] == 3)
                                $src = imagecreatefrompng($file);
                            else
                                break;

                        $rate = $img_width / $size[0];
                        $get_width = $img_width;
                        $get_height = (int)($size[1] * $rate);

                        $temp_h = (int)($img_height / $img_width * $size[0]);
                        $src_y = (int)(($size[1] - $temp_h) / 2);

                        if ($get_height < $img_height) {
                            $rate = $img_height / $size[1];
                            $get_height = $img_height;
                            $get_width = (int)($size[0] * $rate);

                            $src_y = 0;
                            $temp_w = (int)($img_width / $img_height * $size[1]);
                            $src_x = (int)(($size[0] - $temp_w) / 2);
                        }

                        $dst = @imagecreatetruecolor($img_width, $img_height);
                        $white = @imagecolorallocate($dst, 255, 255, 255);
                        @imagefilledrectangle($dst, 0, 0, $img_width, $img_height, $white);
                        @imagecopyresampled($dst, $src, 0, 0, $src_x, $src_y, $get_width, $get_height, $size[0], $size[1]);
                        @imagejpeg($dst, $thumb_path.'/'.$list[$i][wr_id], $img_quality);
                        @chmod($thumb_path.'/'.$list[$i][wr_id], 0606);
                    }
                }
            }


            if (file_exists($thumb)){
                //$img = "<a href='{$list[$i][href]}'><img src='$thumb' width='$img_width' height='$img_height' title=\"{$list[$i][subject]}\" /></a>";
                $img = "<a href='{$list[$i]['href']}'><img src='$thumb' width='$img_width' height='$img_height' title=\"{$list[$i][subject]}\"  /></a>";

                $youbo[$i]=$thumb;
            }
            $jj = $i + 1;

        ?>

        <div class="panel" title="Panel <?=$jj?>">
          <div class="wrapper">
            <?=$img?>
          </div>
        </div>
        <? } ?>


      </div>
    </div>



    <?
            for ($i=1; $i<count($list); $i++) {
                $k = $i - 1;
    ?>

    <? if($i==2){ ?>
      <div id="movers-row">
      <? } ?>
      <div><a href="#<?=$i?>" class="cross-link"><img src="<?=$youbo[$k]?>"  width='120' height='80' class="nav-thumb" alt="temp-thumb" /></a></div>
      <? } ?>


    </div>

  </div>

</div>



