<?php

	include "../../common.php";

	if($_SERVER['REMOTE_ADDR'] != $arrow_remote_addr){
		exit("접근권한이 없습니다.");
	}

?>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes"><meta name="format-detection" content="telephone=no"/>
<body>