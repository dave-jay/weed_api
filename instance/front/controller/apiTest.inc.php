
<?php

$apiCore = new apiCore();
$data = array();
//$data['user_id'] = '162';
$data['driver_license_image'] = 'abc.png';
$output_data = $apiCore->doFormCall(API_URL . "Admin/api/userNew/upload_files?id='93'", $data);
d($output_data);
die;
//$filedata = $_FILES['file']['tmp_name'];
//$filesize = $_FILES['file']['size'];
////d($_FILES);
////die();
//$output_file = $apiCore->doFileCall(API_URL . "Admin/api/userNew/upload_files", $filedata, $filename);
//$output_data = $apiCore->doFormCall(API_URL . "Admin/api/UserNew/add_driver", $data);
//$output = json_decode($output_data, true);
//d($output_file);
//die;
//
//$number = $_REQUEST['num'] ? $_REQUEST['num'] : "11";
//if (_isOdd($number)) {
//    print "ODD NUMBER";
//} else {
//    print "EVEN NUMBER";
//}
//
//die;
//$q['1'] = "test";
//$q['2'] = "test1";
//$q['3'] = "test2";
//
//
//$_POST['critical']['1'] = 'yes';
//$_POST['critical']['2'] = 'y22es';
//$_POST['critical']['3'] = 'ye33s';
//
//d($q);
//
//d($_POST);
?>