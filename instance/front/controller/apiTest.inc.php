
<?php

$apiCore = new apiCore();
$data = array();
$data['listing_id'] = '1';
$data['listing_type'] = 'demo';
$data['api_key'] = 'TestApi';
$data['name'] = 'TestStrain';
$data['cannabinoids[thc]'] = '0.1';
$data['cannabinoids[thca]'] = '0.2';
$data['cannabinoids[cbd]'] = '0.3';
$data['cannabinoids[cbda]'] = '0.4';
$data['cannabinoids[cbn]'] = '0.5';
$data = json_encode($data);
//$array_test = array('listing_id'=>'1','listing_id'=>'1','listing_id'=>'1');
$output_data = $apiCore->weedAPICall("https://staging.weedmaps.com/api/web/v1/test_results", $data);
$output = json_decode($output_data, true);
//d($output_file);
echo $output;
d($output);
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