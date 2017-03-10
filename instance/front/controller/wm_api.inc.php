<?php

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
$jsInclude = "wm_api.js.php";
_cg("page_title", "Form");
?>


