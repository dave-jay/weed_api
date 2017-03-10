<?php

# Commit Test
//error_reporting(E_ALL);

$auth_pages = array();
$auth_pages[] = "home";
$auth_pages[] = "user_entry";
$auth_pages[] = "language";
$auth_pages[] = "manager";
$auth_pages[] = "station1";
$auth_pages[] = "station2";
$auth_pages[] = "station2_vehical";
$auth_pages[] = "station2_vehical_submit";
$auth_pages[] = "station3";
$auth_pages[] = "station4";
$auth_pages[] = "station5";
$auth_pages[] = "contract_page";
$auth_pages[] = "view_contract_page";
$auth_pages[] = "edit_contract_page";
$auth_pages[] = "master_dashboard";
$auth_pages[] = "master_station";
$auth_pages[] = "completed_driver";
$auth_pages[] = "rejected_vehicle";
$auth_pages[] = "rejected_driver";
$auth_pages[] = "cs-dashboard";
$auth_pages[] = "departments";
$auth_pages[] = "tickets";
$auth_pages[] = "admin_add_office";
//$auth_pages[] = "_template1";


if ($_REQUEST['logout']) {

//    $fnm = $_SESSION['user'] ['fname'];
//    $lnm = $_SESSION['user'] ['lname'];
//    $office_nm = $_SESSION['office'];
////    d($fnm);
////    d($lnm);
////    d($office_nm);
//    $U_id = qs("SELECT id FROM `tb_user_login_logs` where fname='$fnm' and lname='$lnm' and office_name='$office_nm' ORDER BY `tb_user_login_logs`.`login_date` DESC LIMIT 1");
////    d($U_id);
//    $_fields['logout_date'] = date('Y-m-d H:i:s', time());
//    qu("tb_user_login_logs", $_fields, "id='{$U_id['id']}'");
    User::killSession();
}
$persian = new persian_date();
$p_Year = $persian->date('Y');
$p_Month = $persian->date('m');
$p_Day = $persian->date('d');


// d($_SESSION['user'] ['fname']);
_auth_url($auth_pages, "login");
?>