<?php

/*

1차메뉴별 서브상단이미지를 세팅합니다.
1차 메뉴는 theme.menu.php 에서 세팅합니다.

서브 이미지가 노출되지 않는 경우
1. 아래에서 설정한 대메뉴명이나 이미지의 경로가 틀렸을 경우 : 대메뉴명이 "회 사 소 개" 이면  공백까지 똑같이 입력해야 합니다.
	입롁예) "회 사 소 개"          => G5_THEME_URL."/html/image/sub_visual01.jpg",

2. FTP로 수정하는 커스텀페이지의 상위메뉴(대메뉴 $tmenu_ )와 타이틀($g5['title'])을 설정을 하지 않았거나 틀렸을 경우
   테마설명서 > 테마 사용 안내 > 02번 커스텀페이지 사용 방법(FTP를 통해 수정/삭제/추가)  참고

3. 이미지가 변경되지 않는 경우는 브라우저 캐시영향일 수 있으므로 브라우저의 캐시를 삭제후 확인해 주세요.

*/


$SUB_BACKGROUND = array(
    "브랜드"           => G5_THEME_URL."/html/image/sub_visual01.jpg",
    "서비스 안내"       => G5_THEME_URL."/html/image/sub_visual02.jpg",
	"스토리"          => G5_THEME_URL."/html/image/sub_visual03.jpg",
	"지원센터"         => G5_THEME_URL."/html/image/sub_visual04.jpg",
	"고객센터"         => G5_THEME_URL."/html/image/sub_visual04.jpg",
	"맴버쉽"		    => G5_THEME_URL."/html/image/sub_visual06.jpg",   //회원관련
	"온라인문의"        => G5_THEME_URL."/html/image/sub_visual04.jpg",

	//"대메뉴명"          => "이미지주소",
	//"대메뉴명"          => "이미지주소",
);


/*

theme.munu.php 에서 1차메뉴로 세팅하지 않은 게시판, 내용관리 페이지는 서브 상단메뉴가 보이지 않게 되므로, 아래와 같이 $tmenu_ 를 임의로 생성하여 처리합니다.
주의사항
1. $tmenu_ = "백그라운드1";   형식으로 임의 생성합니다.
2. 위 1번에서 임의로 생성한 메뉴명은 theme.menu.php 에서 세팅하신 메뉴명와 중복되면 안됩니다. theme.menu.php의 메뉴에 백그라운드1 이 포함되면 안됨.
2. theme.munu.php 에서 메뉴로 세팅한 게시판, 내용관리 페이지 등은 임의 세팅하면 안됩니다.

*/

// 예제 1 : 여러개를 하나의 백그라운드로 처리할 수 있습니다.
if($bo_table == "board1") $tmenu_ = "백그라운드1"; // 게시판 테이블명이 board1 일 경우 메뉴명을 임의로 생성
if($bo_table == "board2") $tmenu_ = "백그라운드1"; // 게시판 테이블명이 board2 일 경우 메뉴명을 임의로 생성
if($co_id == "company1") $tmenu_ = "백그라운드1";  // 관리자모드 > 내용관리에서 입력하신 내용 중 co_id 가 company1일 경우 메뉴명을 임의로 생성 
$SUB_BACKGROUND['백그라운드1'] = G5_THEME_URL."/html/image/sub_visual06.jpg"; //백그라운드1의 이미지주소


//예제 2 : 각각 백그라운드 처리할 수 있습니다.
if($bo_table == "board3") $tmenu_ = "백그라운드2"; // 게시판 테이블명이 board3 일 경우 메뉴명을 임의로 생성 
$SUB_BACKGROUND['백그라운드2'] = G5_THEME_URL."/html/image/sub_visual04.jpg"; //백그라운드2의 이미지주소

if($bo_table == "board4") $tmenu_ = "백그라운드3"; // 게시판 테이블명이 board4 일 경우 메뉴명을 임의로 생성 
$SUB_BACKGROUND['백그라운드3'] = G5_THEME_URL."/html/image/sub_visual04.jpg"; //백그라운드3의 이미지주소

if($co_id == "company2") $tmenu_ = "백그라운드4";  // 관리자모드 > 내용관리에서 입력하신 내용중 co_id 가 company1일 경우 메뉴명을 임의로 생성 
$SUB_BACKGROUND['백그라운드4'] = G5_THEME_URL."/html/image/sub_visual04.jpg"; //백그라운드4의 이미지주소