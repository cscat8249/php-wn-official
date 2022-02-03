<?php
//if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once('./_common.php');
include_once(G5_THEME_PATH.'/_function.php');
if(!$is_admin){
	$msg['ok'] = '관리자 로그인 후 이용가능합니다.';
	echo json_encode($msg);
	return;
}
	if($mcolor){
		$sqlc = "theme_main_color = '$mcolor' ";
		$sql = "update snw_theme set $sqlc where theme_code = '$theme_code' and theme_type = 'local'  ";
		sql_query($sql);
		$msg['ok'] = $mcolor.' 색으로 메인컬러가 변경되었습니다.';
	}

if($theme_edit){

	if(!$theme_type || !$theme_type_position || !$content){
		$msg['ok'] = '값이 제대로 넘어오지 않았습니다.';
	}else{
		$content = implode("|", $content);
		$sqlc = "
			theme_code = '$theme_code',
			theme_type = '$theme_type',
			theme_type2 = '',
			theme_type_position = '$theme_type_position',
			theme_content = '$content',
			theme_url = '',
			theme_order = ''
			";
			$sqld = "select * from snw_theme where theme_code = '$theme_code' and theme_type = '$theme_type' and theme_type_position = '$theme_type_position' ";
			$rowd = sql_fetch($sqld);
			
			if($rowd['theme_type_position']){
				$upd = "UPDATE ";
				$pops = "수정완료";
				$where = " where theme_code = '$theme_code' and theme_type = '$theme_type' and theme_type_position = '$theme_type_position'";
			}else{
				$upd = "INSERT INTO ";
				$pops = "등록완료";
				$where = '';
			}

			$sql = "$upd snw_theme set $sqlc $where";
			sql_query($sql);
			$msg['ok'] = $pops;
	}
		echo json_encode($msg);
		return;
}	


if($typed=='boardchange'){
	$sql = "select * from snw_theme where theme_code = '$theme_code' and theme_type = 'index' and theme_type_position = '$position' ";
	$row = sql_fetch($sql);
	if($row['theme_type_position']){
		$sql_c = "theme_content = '$selectboard'		";
		$sql = "UPDATE snw_theme SET $sql_c where theme_code = '$theme_code' and theme_type_position = '$position' and id='$row[id]'  ";
		$row = sql_query($sql);
		$msg['ok'] = $selectboard.' 테이블로 수정 되었습니다.';
	}else{
		$sql_c = " theme_code = '$theme_code',
				theme_type = 'index',
				theme_type_position = '$position',
				theme_content = '$selectboard' 
			";
		$sql = "INSERT INTO snw_theme SET $sql_c ";
		$row = sql_query($sql);

		$msg['ok'] = $selectboard.' 테이블로 등록 완료 되었습니다.';
		echo json_encode($msg);
	}
} //boardchange

?>