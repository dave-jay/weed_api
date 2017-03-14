<?php

if (!isset($_SESSION['user'])) {
    _R('login');
}
if (isset($_REQUEST['binddata'])) {
    $rowID = $_REQUEST['id'];
    $q1 = qs("select * from tb_form where id='$rowID'");
//    d($q1);
    echo json_encode($q1);
    die;
}
if (isset($_REQUEST['autosave'])) {
    $dataAuto = array();
    parse_str($_POST['data'], $dataAuto);
//    d($dataAuto);
////    d($_REQUEST['hidthc']);
//    die;
    $fields = array();
    $fields['thc'] = _escape($dataAuto['hidthc']);
    $fields['thca'] = _escape($dataAuto['hidthca']);
    $fields['cbd'] = _escape($dataAuto['hidcbd']);
    $fields['cbda'] = _escape($dataAuto['hidcbda']);
    $fields['cbn'] = _escape($dataAuto['hidcbn']);
    $fields['strain_cate'] = _escape($dataAuto['hidstrain_cate']);
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
$query = q("select * from tb_form");
$jsInclude = "view_wm_api.js.php";
_cg("page_title", "view_wm_api");
_cg("current_page", "view_wm_api");
?>


