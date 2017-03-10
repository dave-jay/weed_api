<?php
$inputJSON = file_get_contents('php://input');
$url_args = _cg('url_vars');
if(count($url_args)>0){
    if($url_args[0]=='SetDrivers'){
        $fields = json_decode($inputJSON,true);        
        $data = qs("select * from tb_driver where license_plate='{$fields['license_plate']}'");
        echo json_encode(array("success"=>'1','records'=>$data));
    }else{
        echo json_encode(array("success"=>'0','message'=>'Invalid API Call'));        
    }
}else{
    echo json_encode(array("success"=>'0','message'=>'Invalid API Call'));
}
die;
?>