<?
include_once("../../common.php");
include_once("../../lib/mailer.lib.php");

$upload_max_filesize = ini_get('upload_max_filesize');
if (empty($_POST)) {
    alert("파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size=".ini_get('post_max_size')." , upload_max_filesize=".$upload_max_filesize."\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.");
}
$write_table = $g5['write_prefix'] . $contactboard;

$wr_num = get_next_num($write_table);
$wr_reply = "";
$wr_title = $wr_name." 님의 문의 글입니다. ";

    $sql = " insert into $write_table
                set wr_num = '$wr_num',
                     wr_reply = '$wr_reply',
                     wr_comment = 0,
                     ca_name = '',
                     wr_option = '$html,$secret,$mail',
                     wr_subject = '$wr_title',
                     wr_content = '$wr_content',
                     wr_link1 = '$wr_link1',
                     wr_link2 = '$wr_link2',
                     wr_link1_hit = 0,
                     wr_link2_hit = 0,
                     wr_hit = 0,
                     wr_good = 0,
                     wr_nogood = 0,
                     mb_id = '{$member['mb_id']}',
                     wr_password = '$wr_password',
                     wr_name = '$wr_name',
                     wr_email = '$wr_email',
                     wr_homepage = '$wr_homepage',
                     wr_datetime = '".G5_TIME_YMDHIS."',
                     wr_last = '".G5_TIME_YMDHIS."',
                     wr_ip = '{$_SERVER['REMOTE_ADDR']}',
                     wr_1 = '$wr_1',
                     wr_2 = '$wr_2',
                     wr_3 = '$wr_3',
                     wr_4 = '$wr_4',
                     wr_5 = '$wr_5',
                     wr_6 = '$wr_6',
                     wr_7 = '$wr_7',
                     wr_8 = '$wr_8',
                     wr_9 = '$wr_9',
                     wr_10 = '$wr_10' ";
    sql_query($sql);

 $wr_id = sql_insert_id();

    // 부모 아이디에 UPDATE
    sql_query(" update $write_table set wr_parent = '$wr_id' where wr_id = '$wr_id' ");

    // 새글 INSERT
    sql_query(" insert into {$g5['board_new_table']} ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '{$contact_bo_table}', '{$wr_id}', '{$wr_id}', '".G5_TIME_YMDHIS."', '{$member['mb_id']}' ) ");

    // 게시글 1 증가
    sql_query("update {$g5['board_table']} set bo_count_write = bo_count_write + 1 where bo_table = '{$contact_bo_table}'");



$super_admin = get_admin("super");
$wr_email = $super_admin['mb_email'];
$link_url = G5_BBS_URL.'/board.php?bo_table='.$contact_bo_table.'&amp;wr_id='.$wr_id.'&amp;'.$qstr;


ob_start();
include_once ("./bbs/_contact_mail.php");
$content = ob_get_contents();
ob_end_clean();
//mailer($wr_name, $wr_email, $super_admin[mb_email], $wr_title, $content, 1);
mailer($config['cf_title'], $wr_email, $wr_email, $wr_title, $content, 1);
alert("문의글이 등록되었습니다. 감사합니다.",G5_URL);
?>