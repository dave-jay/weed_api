<?php

if (!isset($_SESSION['user'])) {
    _R('login');
}
$last_batch_no = qs("select * from tb_form ORDER by id DESC LIMIT 1");
$batchno = $last_batch_no['batch_number'] + 1;
//d($batchno);
//die;
if (isset($_REQUEST['autosave'])) {
    $dataAuto = array();
    parse_str($_REQUEST['data'], $dataAuto);
//    d($_REQUEST);
//    d($dataAuto);
//    d($_FILES);
////    d($_REQUEST['hidthc']);
    $doc_file_name = array();
    foreach ($_FILES as $key_param => $each_param) {
        if ($key_param == 'doc_signed_contract') {
            foreach ($_FILES[$key_param]["name"] as $file_key => $each_file) {
                if ($_FILES[$key_param]["name"][$file_key] == "")
                    continue;
                $target_dir = _PATH . "docs/";
                $file_name = time() . "_" . basename($_FILES[$key_param]["name"][$file_key]);
                $target_file = $target_dir . $file_name;
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                if (file_exists($target_file)) {
                    $file_name = rand(1000, 9999) . "_" . time() . "_" . basename($_FILES[$key_param]["name"][$file_key]);
                    $target_file = $target_dir . $file_name;
                }
//$doc_file_name[$key_param] = $file_name;
                $doc_signed_contract_file_name .= "||GLUE||" . $file_name;
                if (!move_uploaded_file($_FILES[$key_param]["tmp_name"][$file_key], $target_file)) {
                    $error = 1;
                    $err_msg .= "there was an error uploading " . $_FILES[$key_param]["name"][$file_key] . " file.<br>";
                }
            }
        } else {
            if ($_FILES[$key_param]["name"] == "")
                continue;
            $target_dir = _PATH . "docs/";
            $file_name = time() . "_" . basename($_FILES[$key_param]["name"]);
            $target_file = $target_dir . $file_name;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            if (file_exists($target_file)) {
                $file_name = rand(1000, 9999) . "_" . time() . "_" . basename($_FILES[$key_param]["name"]);
                $target_file = $target_dir . $file_name;
            }
            $doc_file_name[$key_param] = $file_name;
            if (!move_uploaded_file($_FILES[$key_param]["tmp_name"], $target_file)) {
                $error = 1;
                $err_msg .= "there was an error uploading " . $_FILES[$key_param]["name"] . " file.<br>";
            }
        }
    }
    d($doc_file_name);
//    die;
    $fields = array();
    $fields['c_thc'] = _escape($_REQUEST['c_thc']);
    $fields['c_thca'] = _escape($_REQUEST['c_thca']);
    $fields['c_cbd'] = _escape($_REQUEST['c_cbd']);
    $fields['c_cbda'] = _escape($_REQUEST['c_cbda']);
    $fields['c_cbn'] = _escape($_REQUEST['c_cbn']);
    $fields['c_strain_cate'] = _escape($_REQUEST['c_strain_cate']);

    $fields['c_thcv'] = _escape($_REQUEST['c_thcv']);
    $fields['c_cbdv'] = _escape($_REQUEST['c_cbdv']);
    $fields['c_cbna'] = _escape($_REQUEST['c_cbna']);
    $fields['c_cbg'] = _escape($_REQUEST['c_cbg']);
    $fields['c_cbga'] = _escape($_REQUEST['c_cbga']);
    $fields['c_cbc'] = _escape($_REQUEST['c_cbc']);
    $fields['c_cbca'] = _escape($_REQUEST['c_cbca']);
    $fields['c_cbl'] = _escape($_REQUEST['c_cbl']);
    $fields['c_cbla'] = _escape($_REQUEST['c_cbla']);
    $fields['category'] = _escape($_REQUEST['c_category']);
    $fields['t_alpha_pinene'] = _escape($_REQUEST['t_alpha_pinene']);
    $fields['t_beta_pinene'] = _escape($_REQUEST['t_beta_pinene']);
    $fields['t_linalool'] = _escape($_REQUEST['t_linalool']);
    $fields['t_myrcene'] = _escape($_REQUEST['t_myrcene']);
    $fields['t_limonene'] = _escape($_REQUEST['t_limonene']);
    $fields['t_ocimene'] = _escape($_REQUEST['t_ocimene']);
    $fields['t_terpinolene'] = _escape($_REQUEST['t_terpinolene']);
    $fields['t_terpineol'] = _escape($_REQUEST['t_terpineol']);
    $fields['t_valencene'] = _escape($_REQUEST['t_valencene']);
    $fields['t_beta_caryophyllene'] = _escape($_REQUEST['t_beta_caryophyllene']);
    $fields['t_caryophyllene'] = _escape($_REQUEST['t_caryophyllene']);
    $fields['t_geraniol'] = _escape($_REQUEST['t_geraniol']);
    $fields['t_alpha_humulene'] = _escape($_REQUEST['t_alpha_humulene']);
    $fields['t_alpha_phellandrene'] = _escape($_REQUEST['t_alpha_phellandrene']);
    $fields['t_delta_3_carene'] = _escape($_REQUEST['t_delta_3_carene']);
    $fields['t_terpinene'] = _escape($_REQUEST['t_terpinene']);
    $fields['t_alpha_terpinolene'] = _escape($_REQUEST['t_alpha_terpinolene']);
    $fields['t_fenchol'] = _escape($_REQUEST['t_fenchol']);
    $fields['t_borneol'] = _escape($_REQUEST['t_borneol']);
    $fields['t_oxide'] = _escape($_REQUEST['t_oxide']);
    $fields['t_alpha_bisabolol'] = _escape($_REQUEST['t_alpha_bisabolol']);
    $fields['t_camphene'] = _escape($_REQUEST['t_camphene']);
    $fields['t_sabinene'] = _escape($_REQUEST['t_sabinene']);
    $fields['t_camphor'] = _escape($_REQUEST['t_camphor']);
    $fields['t_isoborneol'] = _escape($_REQUEST['t_isoborneol']);
    $fields['t_menthol'] = _escape($_REQUEST['t_menthol']);
    $fields['t_alpha_cedrene'] = _escape($_REQUEST['t_alpha_cedrene']);
    $fields['t_nerolidol'] = _escape($_REQUEST['t_nerolidol']);
    $fields['t_eucalyptol'] = _escape($_REQUEST['t_eucalyptol']);
    $fields['t_geranyl'] = _escape($_REQUEST['t_geranyl']);
    $fields['t_acetate'] = _escape($_REQUEST['t_acetate']);
    $fields['t_guaiol'] = _escape($_REQUEST['t_guaiol']);
    $fields['t_phytol'] = _escape($_REQUEST['t_phytol']);
    $fields['t_citronellol'] = _escape($_REQUEST['t_citronellol']);
    $fields['t_p_cymene'] = _escape($_REQUEST['t_p_cymene']);
    $fields['t_isopulegol'] = _escape($_REQUEST['t_isopulegol']);
    $fields['t_pulegone'] = _escape($_REQUEST['t_pulegone']);
    $fields['p_acequinocyl'] = _escape($_REQUEST['p_acequinocyl']);
    $fields['p_imidacloprid'] = _escape($_REQUEST['p_imidacloprid']);
    $fields['p_pyrethrium'] = _escape($_REQUEST['p_pyrethrium']);
    $fields['p_spinosad'] = _escape($_REQUEST['p_spinosad']);
    $fields['p_spiromesifen'] = _escape($_REQUEST['p_spiromesifen']);
    $fields['p_spirotetramat'] = _escape($_REQUEST['p_spirotetramat']);
    $fields['p_abamectin'] = _escape($_REQUEST['p_abamectin']);
    $fields['p_bifenazate'] = _escape($_REQUEST['p_bifenazate']);
    $fields['p_daminozide'] = _escape($_REQUEST['p_daminozide']);
    $fields['p_fenoxycarb'] = _escape($_REQUEST['p_fenoxycarb']);
    $fields['p_myclobutanil'] = _escape($_REQUEST['p_myclobutanil']);
    $fields['p_paclobutrazol'] = _escape($_REQUEST['p_paclobutrazol']);
    $fields['m_aerobic_plate_count'] = _escape($_REQUEST['m_aerobic_plate_count']);
    $fields['m_pseudomonas'] = _escape($_REQUEST['m_pseudomonas']);
    $fields['m_coliforms'] = _escape($_REQUEST['m_coliforms']);
    $fields['m_e_coli'] = _escape($_REQUEST['m_e_coli']);
    $fields['m_salmonella'] = _escape($_REQUEST['m_salmonella']);
    $fields['s_propane'] = _escape($_REQUEST['s_propane']);
    $fields['s_ethanol'] = _escape($_REQUEST['s_ethanol']);
    $fields['s_methanol'] = _escape($_REQUEST['s_methanol']);
    $fields['s_isopropanol'] = _escape($_REQUEST['s_isopropanol']);
    $fields['s_isobutane'] = _escape($_REQUEST['s_isobutane']);
    $fields['s_mercaptan'] = _escape($_REQUEST['s_mercaptan']);
    $fields['s_dimethylbutane'] = _escape($_REQUEST['s_dimethylbutane']);
    $fields['s_2_methylpentane'] = _escape($_REQUEST['s_2_methylpentane']);
    $fields['s_3_methylpentane'] = _escape($_REQUEST['s_3_methylpentane']);
    $fields['s_cyclohexane_benzene'] = _escape($_REQUEST['s_cyclohexane_benzene']);
    $fields['s_isopentane'] = _escape($_REQUEST['s_isopentane']);
    $fields['s_neopentane'] = _escape($_REQUEST['s_neopentane']);
    $fields['s_butane'] = _escape($_REQUEST['s_butane']);
    $fields['s_heptane'] = _escape($_REQUEST['s_heptane']);
    $fields['s_hexane'] = _escape($_REQUEST['s_hexane']);
    $fields['s_pentane'] = _escape($_REQUEST['s_pentane']);
    $fields['tested_at'] = _escape($_REQUEST['hidtested_at']); // 29 March, 2017;
    $fields['picture_url'] = _escape($doc_file_name['photo']); // photo URL;
    $fields['batch_number'] = _escape($_REQUEST['batch_no']); // 1001
    $fields['name'] = _escape($_REQUEST['name']); // 1001
    $fields['menu_item_id'] = _escape($_REQUEST['menu_item_id']); // 1001
    $fields['listing_id'] = _escape($_REQUEST['listing_id']); // 1001
    $fields['listing_type'] = _escape($_REQUEST['listing_type']); // 1001
    $fields['api_key'] = _escape($_REQUEST['api_key']); // 1001


    $chk = qi("tb_form", $fields);
    d($chk);
    if (!empty($chk)) {
        $_SESSION['success'] = '1';
        $_SESSION['msg'] = " Record updated successfully!";
        echo json_encode(array("success" => "1"));
//        die;
    } else {
        $_SESSION['success'] = '-1';
        $_SESSION['msg'] = " Warrning! Please try After Some time";
        echo json_encode(array("success" => "0"));
//        die;
    }
}
$jsInclude = "wm_api.js.php";
_cg("page_title", "Add Report");
_cg("current_page", "wm_api");
?>


