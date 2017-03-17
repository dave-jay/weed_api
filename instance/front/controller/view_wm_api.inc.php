<?php

if (!isset($_SESSION['user'])) {
    _R('login');
}
if (isset($_REQUEST['SendToAPI'])) {
    $ID = $_REQUEST['userId'];
    $values = qs("select * from tb_form where id='$ID'");
    $_fields = array();
    $_fields['tb_form_id'] = $values['id'];
    /* API CALL */
    $APIKey = _escape($values['api_key']);
//    d($APIKey);
//    die;
    $chk1 = "";
    $exist = qs("select * from api_flag where tb_form_id='$ID'");
    if (!empty($exist)) {
        //        include _PATH . "instance/front/tpl/weedAPICall2.php";
        $_fields['push_data_api'] = "1";
        $chk1 = qu("api_flag", $_fields, "tb_form_id='{$values['id']}'");
    } else {
//        $APIKey = _escape($_REQUEST['api_key']);
        if (!empty($APIKey)) {
//        include _PATH . "instance/front/tpl/weedAPICall2.php";
            $_fields['push_data_api'] = "1";
        } else {
            $_fields['push_data_api'] = "0";
        }
        $chk1 = qi("api_flag", $_fields);
    }

    if (!empty($chk1)) {
        echo json_encode(array("success" => "1"));
    } else {
        echo json_encode(array("success" => "0"));
    }
    die;
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
$query = q("select * from tb_form order by id desc");
$jsInclude = "view_wm_api.js.php";
_cg("page_title", "view_wm_api");
_cg("current_page", "view_wm_api");
?>


