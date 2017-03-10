<?php

if ($_POST['InsertData'] == 1) {
    #for Vedio
    $fields = array();
    $fields['tenant_id'] = $_SESSION['user']['id'];
    $fields['video_title'] = $_POST['video_title'];
    $upload_vedio = '';
    $upload_img = '';
    $path = _PATH . "instance/front/media/";
    $directoryname = _PATH . "instance/front/media/video/";
    $arr = [];
    for ($i = 0; $i < count($_FILES['video']['name']); $i++) {
        $arr[] = array(
            'name' => $_FILES['video']['name'][$i],
            'tmp_name' => $_FILES['video']['tmp_name'][$i],
            'error' => $_FILES['video']['error'][$i],
            'size' => $_FILES['video']['size'][$i],
            'type' => $_FILES['video']['type'][$i]
        );
    }
    foreach ($arr as $key => $value) {
        $upload_vedio.=$value['name'] . ",";

        if (!is_dir($directoryname)) {
            mkdir($directoryname, 0755, true);
        } else {
            $destFile = $directoryname . $value['name'];
//            move_uploaded_file($value['tmp_name'], $destFile);
        }
    }
    #for image-----------------------------
    $path = _PATH . "instance/front/media/";
    $directory_name = _PATH . "instance/front/media/vediothumbnail/";
    $array = [];
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        $array[] = array(
            'name' => $_FILES['file']['name'][$i],
            'tmp_name' => $_FILES['file']['tmp_name'][$i],
            'error' => $_FILES['file']['error'][$i],
            'size' => $_FILES['file']['size'][$i],
            'type' => $_FILES['file']['type'][$i]
        );
    }
    foreach ($array as $key => $value) {
        $upload_img.=$value['name'] . ",";

        if (!is_dir($directory_name)) {
            mkdir($directory_name, 0755, true);
        } else {
            $destFile_img = $directory_name . $value['name'];
            move_uploaded_file($value['tmp_name'], $destFile_img);
        }
    }
    #-----------------------------------------

    $fields['video_url'] = $upload_vedio;
    $fields['video_thumb'] = $upload_img;
    qi('video', $fields);
    unset($_POST);
}



$query = "SELECT * FROM video WHERE tenant_id=" . $_SESSION['user']['id'];
$videodata = q($query);

$jsInclude = "video.js.php";
?>