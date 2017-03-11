<?php

if (!isset($_SESSION['user'])) {
    _R('login');
}
if (isset($_REQUEST['autosave'])) {
    $dataAuto = array();
    parse_str($_POST['data'], $dataAuto);
//    d($dataAuto);
////    d($_REQUEST['hidthc']);
//    die;
    $fields = array();
    $fields['thc'] = _escape($dataAuto['c_thc']);
    $fields['thca'] = _escape($dataAuto['c_thca']);
    $fields['cbd'] = _escape($dataAuto['c_cbd']);
    $fields['cbda'] = _escape($dataAuto['c_cbda']);
    $fields['cbn'] = _escape($dataAuto['c_cbn']);
    $fields['strain_cate'] = _escape($dataAuto['c_strain_cate']);
    $chk = qi("tb_form", $fields);
//    d($chk);
    if (!empty($chk)) {
        $_SESSION['success'] = '1';
        $_SESSION['msg'] = " Record updated successfully!";
        echo json_encode(array("success" => "1"));
    } else {
        $_SESSION['success'] = '-1';
        $_SESSION['msg'] = " Warrning! Please try After Some time";
        echo json_encode(array("success" => "0"));
    }
    die;
}
$jsInclude = "wm_api.js.php";
_cg("page_title", "wm_api");
_cg("current_page", "wm_api");
?>


