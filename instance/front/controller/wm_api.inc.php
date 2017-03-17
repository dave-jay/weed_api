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
    d($target_file);
    d($doc_file_name);
//    die;
//    d($_REQUEST['hid_tested_at']);
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
    $fields['tested_at'] = _escape($_REQUEST['hid_tested_at']); // 29 March, 2017;
//    d($_REQUEST['hid_tested_at']);
//    die;
    $fields['picture_url'] = _escape($doc_file_name['photo']); // photo URL;
    $fields['batch_number'] = _escape($_REQUEST['batch_no']); // 1001
    $fields['name'] = _escape($_REQUEST['name']); // 1001
    $fields['menu_item_id'] = _escape($_REQUEST['menu_item_id']); // 1001
    $fields['listing_id'] = _escape($_REQUEST['listing_id']); // 1001
    $fields['listing_type'] = _escape($_REQUEST['listing_type']); // 1001
    $fields['api_key'] = _escape($_REQUEST['api_key']); // 1001
    $chk = qi("tb_form", $fields);
    $content = "<html>";
    $content .= "<body>";
    $content .= "<div style = 'font-family:verdana;margin:1rem;pading:1rem;'>";
    $content .= "<div style = 'font-family: verdana;'>Hi Admin, </div>";
    $content .= "<br>";
    $content .= "<div>New Record is Name: <span style = 'color: black;background-color:yellow; font-family: verdana; font-weight: bold; font-size: 14px;'>" . strtoupper($_REQUEST['name']) . "</span> and Batch Number:<span style = 'color: black;background-color:yellow; font-family: verdana; font-weight: bold; font-size: 14px;'>" . $_REQUEST['batch_no'] . "</span>  is added by " . $_SESSION['user']['fname'] . " " . $_SESSION['user']['lname'] . "</div>";
    $content .= "<br/>";
    $content .= "<div style='background-color: whitesmoke; color: black;margin: 1rem;padding: 1rem;' >
        <div style='width:100%;'><h3>Weedmaps Report</h3></div>
        <hr/>
        <div style='background-color: whitesmoke; color: black;width:100%;'>
            <div style='width:50%;float: left;'>Name:  <b>" . strtoupper($_REQUEST['name']) . "</b></div>
            <div style='width:50%;float: left;'>Batch Number: <b>" . $_REQUEST['batch_no'] . "</b></div>
            <div style='clear: both;'></div>
            <hr/>
            <div style='width:100%;'><h5><b>Cannabinoids</b></h5></div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:96%; padding: 0.8rem 2rem;'>
                <div style='width:20%;float: left;'>Cannabinoids[THCa%]:<b>" . $_REQUEST['c_thca'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[THC%]:<b>" . $_REQUEST['c_thc'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBDa%]:<b>" . $_REQUEST['c_cbda'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBD%]:<b>" . $_REQUEST['c_cbd'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBG%]:<b>" . $_REQUEST['c_cbg'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[THCv%]:<b>" . $_REQUEST['c_thcv'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBDv%]:<b>" . $_REQUEST['c_cbdv'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBNa%]:<b>" . $_REQUEST['c_cbna'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBGa%]:<b>" . $_REQUEST['c_cbga'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBC%]:<b>" . $_REQUEST['c_cbc'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBCa%]:<b>" . $_REQUEST['c_thca'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBL%]:<b>" . $_REQUEST['c_cbl'] . "</b></div>
                <div style='width:20%;float: left;'>Cannabinoids[CBLA%]:<b>" . $_REQUEST['c_cbla'] . "</b></div>
                <div style='clear: both;'></div>
            </div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:100%;'><h5><b>Terpenes</b></h5></div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:96%; padding: 0.8rem 2rem;'>
                <div style='width:20%;float: left;'>Terpenes[alpha_pinene%]:<b>" . $_REQUEST['t_alpha_pinene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[beta_pinene%]:<b>" . $_REQUEST['t_beta_pinene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[linalool%]:<b>" . $_REQUEST['t_linalool'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[myrcene%]:<b>" . $_REQUEST['t_myrcene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[limonene%]:<b>" . $_REQUEST['t_limonene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[ocimene%]:<b>" . $_REQUEST['t_ocimene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[terpinolene%]:<b>" . $_REQUEST['t_terpinolene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[terpineol%]:<b>" . $_REQUEST['t_terpineol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[valencene%]:<b>" . $_REQUEST['t_valencene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[beta_caryophyllene%]:<b>" . $_REQUEST['t_beta_caryophyllene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[caryophyllene%]:<b>" . $_REQUEST['t_caryophyllene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[geraniol%]:<b>" . $_REQUEST['t_geraniol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[alpha_humulene%]:<b>" . $_REQUEST['t_alpha_humulene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[delta_3_carene%]:<b>" . $_REQUEST['t_delta_3_carene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[terpinene%]:<b>" . $_REQUEST['t_terpinene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[alpha_terpinolene%]:<b>" . $_REQUEST['t_alpha_terpinolene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[fenchol%]:<b>" . $_REQUEST['t_fenchol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[borneol%]:<b>" . $_REQUEST['t_borneol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[oxide%]:<b>" . $_REQUEST['t_oxide'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[alpha_bisabolol%]:<b>" . $_REQUEST['t_alpha_bisabolol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[camphene%]:<b>" . $_REQUEST['t_camphene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[sabinene%]:<b>" . $_REQUEST['t_sabinene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[camphor%]:<b>" . $_REQUEST['t_camphor'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[isoborneol%]:<b>" . $_REQUEST['t_isoborneol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[menthol%]:<b>" . $_REQUEST['t_menthol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[alpha_cedrene%]:<b>" . $_REQUEST['t_alpha_cedrene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[nerolidol%]:<b>" . $_REQUEST['t_nerolidol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[eucalyptol%]:<b>" . $_REQUEST['t_eucalyptol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[geranyl%]:<b>" . $_REQUEST['t_geranyl'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[acetate%]:<b>" . $_REQUEST['t_acetate'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[guaiol%]:<b>" . $_REQUEST['t_guaiol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[phytol%]:<b>" . $_REQUEST['t_phytol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[citronellol%]:<b>" . $_REQUEST['t_citronellol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[p_cymene%]:<b>" . $_REQUEST['t_p_cymene'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[isopulegol%]:<b>" . $_REQUEST['t_isopulegol'] . "</b></div>
                <div style='width:20%;float: left;'>Terpenes[pulegone%]:<b>" . $_REQUEST['t_pulegone'] . "</b></div>
                <div style='clear: both; '></div>
            </div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:100%;'><h5><b>Pesticides</b></h5></div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:96%; padding: 0.8rem 2rem;'>
                <div style='width:20%;float: left;'>Pesticides[acequinocyl%]:<b>" . $_REQUEST['p_acequinocyl'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[imidacloprid%]:<b>" . $_REQUEST['p_pyrethrium'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[pyrethrium%]:<b>" . $_REQUEST['p_pyrethrium'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[spinosad]:<b>" . $_REQUEST['p_spinosad'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[alpha_terpinolene%]:<b>" . $_REQUEST['p_alpha_terpinolene'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[spiromesifen%]:<b>" . $_REQUEST['p_spiromesifen'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[spirotetramat%]:<b>" . $_REQUEST['p_spirotetramat'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[abamectin%]:<b>" . $_REQUEST['p_abamectin'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[bifenazate%]:<b>" . $_REQUEST['p_bifenazate'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[daminozide%]:<b>" . $_REQUEST['p_daminozide'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[fenoxycarb%]:<b>" . $_REQUEST['p_fenoxycarb'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[myclobutanil%]:<b>" . $_REQUEST['p_myclobutanil'] . "</b></div>
                <div style='width:20%;float: left;'>Pesticides[paclobutrazol%]:<b>" . $_REQUEST['p_paclobutrazol'] . "</b></div>
                <div style='clear: both; '></div>
            </div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:100%;'><h5><b>Microbiological</b></h5></div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:96%; padding: 0.8rem 2rem;'>
                <div style='width:20%;float: left;'>Microbiological[pseudomonas%]:<b>" . $_REQUEST['m_pseudomonas'] . "</b></div>
                <div style='width:20%;float: left;'>Microbiological[coliforms%]:<b>" . $_REQUEST['m_coliforms'] . "</b></div>
                <div style='width:20%;float: left;'>Microbiological[e_coli%]:<b>" . $_REQUEST['m_e_coli'] . "</b></div>
                <div style='width:20%;float: left;'>Microbiological[salmonella%]:<b>" . $_REQUEST['m_salmonella'] . "</b></div>
                <div style='width:20%;float: left;'>Microbiological[aerobic_plate_count%]:<b>" . $_REQUEST['m_aerobic_plate_count'] . "</b></div>
                <div style='clear: both; '></div>
            </div> 
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:100%;'><h5><b>Solvents</b></h5></div>
            <hr/>
            <div style='background-color: whitesmoke; color: black;width:96%; padding: 0.8rem 2rem;'>
                <div style='width:20%;float: left;'>Solvents[propane%]:<b>" . $_REQUEST['s_propane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[ethanol%]:<b>" . $_REQUEST['s_ethanol'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[methanol%]:<b>" . $_REQUEST['s_methanol'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[isopropanol%]:<b>" . $_REQUEST['s_isopropanol'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[isobutane%]:<b>" . $_REQUEST['s_isobutane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[mercaptan%]:<b>" . $_REQUEST['s_mercaptan'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[dimethylbutane%]:<b>" . $_REQUEST['s_dimethylbutane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[2_methylpentane%]:<b>" . $_REQUEST['s_2_methylpentane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[3_methylpentane%]:<b>" . $_REQUEST['s_3_methylpentane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[cyclohexane_benzene%]:<b>" . $_REQUEST['s_cyclohexane_benzene'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[isopentane%]:<b>" . $_REQUEST['s_isopentane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[neopentane%]:<b>" . $_REQUEST['s_neopentane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[butane%]:<b>" . $_REQUEST['s_butane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[heptane%]:<b>" . $_REQUEST['s_heptane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[hexane%]:<b>" . $_REQUEST['s_hexane'] . "</b></div>
                <div style='width:20%;float: left;'>Solvents[pentane%]:<b>" . $_REQUEST['s_pentane'] . "</b></div>
                <div style='clear: both; '></div>
            </div> 
            <hr/>
        </div>
    </div>";
    $content .= "</div>";
    $content .= "</body>";
    $content .= "</html>";
//    _mail("testaccts001@gmail.com", "New Record is added", $content);
//    d(_mail("testaccts001@gmail.com", "New Record is added", $content));
//    die;
    $Last_ID = qs("select * from tb_form where batch_number = '{$_REQUEST['batch_no']}'");
    $_fields = array();
    $_fields['tb_form_id'] = $Last_ID['id'];

    /* API CALL */
    $APIKey = _escape($_REQUEST['api_key']);
    if (!empty($APIKey)) {
//        include _PATH . "instance/front/tpl/weedAPICall2.php";
        $_fields['push_data_api'] = "1";
    } else {
        $_fields['push_data_api'] = "0";
    }
    qi("api_flag", $_fields);
//    d($chk);
    if (!empty($chk)) {
        $_SESSION['success'] = '1';
        $_SESSION['msg'] = " Record updated successfully!";
        echo json_encode(array("success" => "1"));
//        die;
    } else {
        $_SESSION['success'] = '-1';
        $_SESSION['msg'] = " Warrning!Please try After Some time";
        echo json_encode(array("success" => "0"));
//        die;
    }
}
$jsInclude = "wm_api.js.php";
_cg("page_title", "Add Report");
_cg("current_page", "wm_api  ");
?>


