<?php

if ($_POST['InsertData'] == 1) {

    $fields = array();
    $field = array();
    $fields['tenant_id'] = $_SESSION['user']['id'];
    $fields['vehicle_name'] = $_POST['vn'];
    $fields['vehicle_type'] = $_POST['vt'];
    $fields['price'] = $_POST['pr'];
    $fields['hourly_minimum'] = $_POST['mh'];
    $field['image'] = $_FILES['file']['name'];
    $fleet_img = '';
    $path = _PATH . "instance/front/media/";
    $directoryname = _PATH . "instance/front/media/img/";
    $arr = [];
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        $arr[] = array(
            'name' => $_FILES['file']['name'][$i],
            'tmp_name' => $_FILES['file']['tmp_name'][$i],
            'error' => $_FILES['file']['error'][$i],
            'size' => $_FILES['file']['size'][$i],
            'type' => $_FILES['file']['type'][$i]
        );
    }
    foreach ($arr as $key => $value) {
        $field['image'] = $value['name'];
        qi('fleet_imges', $field);
        $fleet_img.=$value['name'] . ",";

        if (!is_dir($directoryname)) {
            mkdir($directoryname, 0755, true);
        } else {
            $destFile = $directoryname . $value['name'];
            move_uploaded_file($value['tmp_name'], $destFile);
        }
    }
    $fields['image'] = $fleet_img;
    qi('fleet', $fields);
    unset($_POST);
}

if ($_REQUEST['EditData'] == 1) {
    $result = array();
    $query = 'SELECT * FROM fleet WHERE id=' . $_REQUEST['id'];
    $result = qs($query);
    echo json_encode($result);
    die();
}

if ($_REQUEST['UpdateData'] == 1) {
    $fields = array();
    $fields['vehicle_name'] = $_REQUEST['vn'];
    $fields['price'] = $_REQUEST['pr'];
    if ($_REQUEST['vt'] == 1) {
        $fields['vehicle_type'] = 'SUV';
    } else if ($_REQUEST['vt'] == 2) {
        $fields['vehicle_type'] = 'LIMO';
    } else if ($_REQUEST['vt'] == 3) {
        $fields['vehicle_type'] = 'SPRINTER';
    } else if ($_REQUEST['vt'] == 4) {
        $fields['vehicle_type'] = 'MINI BUS';
    } else if ($_REQUEST['vt'] == 5) {
        $fields['vehicle_type'] = 'STRETCH LIMO';
    } else {
        $fields['vehicle_type'] = '';
    }

    $fields['hourly_minimum'] = $_REQUEST['mh'];

    qu('fleet', $fields, "id='{$_REQUEST['id']}'");
    die();
}

if ($_REQUEST['DeleteData'] == 1) {
    qd('fleet', "id='{$_REQUEST['id']}'");
    die();
}

if ($_REQUEST['showImages']) {
    $selectimg = qs("SELECT * FROM fleet WHERE id='{$_REQUEST['id']}'");
    $img = explode(",", $selectimg['image']);
    $img = array_filter($img);
    $result = array();
    $result[] = array("id" => $_REQUEST['id'], "img" => $img);
    print json_encode($result);
    die();
}

$query = "SELECT * FROM fleet WHERE tenant_id='{$_SESSION['user']['id']}'";
$fleetdata = q($query);

$jsInclude = "fleet.js.php";
?>