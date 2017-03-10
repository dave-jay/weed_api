<?php

if ($_POST['InsertData'] == 1) {
    $fields = array();
    $fields['tenant_id'] = $_SESSION['user']['id'];
    $path = _PATH . "instance/front/media/";
    $directoryname = _PATH . "instance/front/media/header_img/";

    $fields['image'] = $_FILES['file']['name'];
    qi('header_images', $fields);

    if (!is_dir($directoryname)) {
        mkdir($directoryname, 0755, true);
    } else {
        $destFile = $directoryname . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $destFile);
    }
    unset($_POST);
}


if ($_REQUEST['Delete_data'] == 1) {
    qd('header_images', "id='{$_REQUEST['id']}'");
    die();
}


$query = "SELECT * FROM header_images WHERE tenant_id='{$_SESSION['user']['id']}'";
$fleetdata = q($query);

$jsInclude = "header_image.js.php";
?>