<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/_function.php');

if(!$is_admin){
	alert('관리자 로그인 필요!',G5_URL);
	return;
}

if($slink){
	if($del=='ok'){
		$sql = "DELETE FROM `snw_theme` WHERE theme_code = '$theme_code' and theme_type = '$slink' and id = '$id' ";
		sql_query($sql);
		$alert = "삭제 완료";
		$linked = "./_set.php?slink=$slink";
	}
}
if($settype){
	if($edit=='w'){
		$content = implode("|", $content);
		$sqlc = "
		theme_type = '$settype',
		theme_type2 = '$typed',
		theme_type_position = '$position',
		theme_content = '$content',
		theme_url = '$theme_url',
		theme_order = '$theme_order'
		";
		$sql = "UPDATE snw_theme SET $sqlc WHERE theme_code = '$theme_code' and theme_type = '$settype' and id='$eid' ";
		sql_query($sql);
		$alert = "변경 완료";
	}else{
		$content = implode("|", $content);
		$sqlc = " theme_code = '$theme_code',
		theme_type = '$settype',
		theme_type2 = '$typed',
		theme_type_position = '$position',
		theme_url = '$theme_url',
		theme_content = '$content' 
		";
		$sql = "insert into snw_theme set $sqlc ";
		sql_query($sql);
		$alert = "추가 완료";
	}
	$linked = "./_set.php?slink=$settype";
}

	alert($alert, $linked);
?>
