<?php
$sub_menu = '300930';
include_once('./_common.php');

check_demo();

auth_check($auth[$sub_menu], 'w');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

if ($w == "u")
{

	$addre	= $_POST['Nzip']."|".$_POST['Naddre1']."|".$_POST['Naddre2']."|".$_POST['Naddre3']."|".$_POST['Naddre_jibeon'];
	$tel	= $_POST['Ntel'];
	$hphone = $_POST['Nhphone'];

	$oaddre = $_POST['Nozip']."|".$_POST['Noaddre1']."|".$_POST['Noaddre2']."|".$_POST['Noaddre3']."|".$_POST['Noaddre_jibeon'];
	$otel	= $_POST['Notel'];

	$fax	= $_POST['Nfax'];
	$ename	= $_POST['Nename'];
	$sex	= $_POST['Nsex'];
	$birth	= $_POST['Nyear'].'-'.$_POST['Nmonth'].'-'.$_POST['Nday'];
	$merry	= $_POST['Nmerry'];

	$grade	= $_POST['Ngrade'];
	$bizno	= $_POST['Nbizno'];
	$job	= $_POST['Njob'];
	$duty	= $_POST['Nduty'];
	$likes	= $_POST['Nlikes'];
	$emailok = $_POST['Nemailok'];
	$rcid	= $_POST['Nrcid'];

	//input1,input2,input3,input4,input5,
	$input1 = $_POST['Ninput1'];
	$input2 = $_POST['Ninput2'];
	$input3 = $_POST['Ninput3'];
	$input4 = $_POST['Ninput4'];
	$input5 = $_POST['Ninput5'];

	//select1,select2,select3,select4,select5,
	$select1 = $_POST['Nselect1'];
	$select2 = $_POST['Nselect2'];
	$select3 = $_POST['Nselect3'];
	$select4 = $_POST['Nselect4'];
	$select5 = $_POST['Nselect5'];

	//radio1,radio2,radio3,radio4,radio5,
	$radio1 = $_POST['Nradio1'];
	$radio2 = $_POST['Nradio2'];
	$radio3 = $_POST['Nradio3'];
	$radio4 = $_POST['Nradio4'];
	$radio5 = $_POST['Nradio5'];

	//check1,check2,check3,check4,check5,
	for ($s=0 ; $s<=sizeof($_POST['Ncheck1']); $s++){
		$check1 .= ($s)?"|":"";
		$check1 .= $Ncheck1[$s];
	}
	for ($s=0 ; $s<=sizeof($_POST['Ncheck2']); $s++){
		$check2 .= ($s)?"|":"";
		$check2 .= $Ncheck2[$s];
	}
	for ($s=0 ; $s<=sizeof($_POST['Ncheck3']); $s++){
		$check3 .= ($s)?"|":"";
		$check3 .= $Ncheck3[$s];
	}
	for ($s=0 ; $s<=sizeof($_POST['Ncheck4']); $s++){
		$check4 .= ($s)?"|":"";
		$check4 .= $Ncheck4[$s];
	}
	for ($s=0 ; $s<=sizeof($_POST['Ncheck5']); $s++){
		$check5 .= ($s)?"|":"";
		$check5 .= $Ncheck5[$s];
	}

	// txt1,txt2,txt3
	$txt1 = '';
	if (isset($_POST['Ntxt1'])) {
		$txt1 = substr(trim($_POST['Ntxt1']),0,65536);
		$txt1 = preg_replace("#[\\\]+$#", "", $txt1);
	}

	$txt2 = '';
	if (isset($_POST['Ntxt2'])) {
		$txt2 = substr(trim($_POST['Ntxt2']),0,65536);
		$txt2 = preg_replace("#[\\\]+$#", "", $txt2);
	}

	$txt3 = '';
	if (isset($_POST['Ntxt3'])) {
		$txt3 = substr(trim($_POST['Ntxt3']),0,65536);
		$txt3 = preg_replace("#[\\\]+$#", "", $txt3);
	}

	$sql  = " update {$csconfig['cf_bo_table']} set
		wr_subject = '{$wr_subject}', wr_content = '{$wr_content}', addre = '$addre', tel = '$tel', hphone = '$hphone', oaddre = '$oaddre', otel = '$otel',
		fax = '$fax', ename = '$ename', sex = '$sex', birth = '$birth', merry = '$merry',
		grade = '$grade', bizno = '$bizno', job = '$job', duty = '$duty', likes = '$likes', emailok = '$emailok', rcid = '$rcid',
		input1 = '$input1', input2 = '$input2', input3 = '$input3', input4 = '$input4', input5 = '$input5',
		select1 = '$select1', select2 = '$select2', select3 = '$select3', select4 = '$select4', select5 = '$select5',
		radio1 = '$radio1', radio2 = '$radio2', radio3 = '$radio3', radio4 = '$radio4', radio5 = '$radio5',
		check1 = '$check1', check2 = '$check2', check3 = '$check3', check4 = '$check4', check5 = '$check5',
		input1 = '$input1', input2 = '$input2', input3 = '$input3', input4 = '$input4', input5 = '$input5',
		txt1 = '$txt1', txt2 = '$txt2', txt3 = '$txt3', effect = '$effect' where wr_id = '$wr_id' ";

	sql_query($sql);

    goto_url("./counsel_form.php?w=$w&amp;wr_id=$wr_id&amp;sca=$sca&amp;$qstr");
}
?>
