<?php

if (!isset($_SESSION['user'])) {
    _R('login');
}
if (isset($_REQUEST['importSubmit'])) {
    foreach ($_FILES as $key_param => $each_param) {
        if ($key_param == 'doc_signed_contract') {
            foreach ($_FILES[$key_param]["name"] as $file_key => $each_file) {
                if ($_FILES[$key_param]["name"][$file_key] == "")
                    continue;
                $target_dir = _PATH . "docs/";
//            $file_name = time() . "_" . basename($_FILES[$key_param]["name"][$file_key]);
                $file_name = basename($_FILES[$key_param]["name"][$file_key]);
                $target_file = $target_dir . $file_name;
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                if (file_exists($target_file)) {
//                $file_name = rand(1000, 9999) . "_" . time() . "_" . basename($_FILES[$key_param]["name"][$file_key]);
                    $file_name = basename($_FILES[$key_param]["name"][$file_key]);
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
//        $file_name = time() . "_" . basename($_FILES[$key_param]["name"]);
            $file_name = basename($_FILES[$key_param]["name"]);
            $target_file = $target_dir . $file_name;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            if (file_exists($target_file)) {
//            $file_name = rand(1000, 9999) . "_" . time() . "_" . basename($_FILES[$key_param]["name"]);
                $file_name = basename($_FILES[$key_param]["name"]);
                $target_file = $target_dir . $file_name;
            }
            $doc_file_name[$key_param] = $file_name;
            if (!move_uploaded_file($_FILES[$key_param]["tmp_name"], $target_file)) {
                $error = 1;
                $err_msg .= "there was an error uploading " . $_FILES[$key_param]["name"] . " file.<br>";
            }
        }
    }
//d($target_file);
// Name of your CSV file
//$csv_file = CSV_PATH . "contact.csv";
    $csv_file = $target_file;
//    d($csv_file);

    if (($handle = fopen($csv_file, "r")) !== FALSE) {
        fgetcsv($handle);
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            for ($c = 0; $c < $num; $c++) {
                $col[$c] = $data[$c];
            }

            $col1 = $col[0];
            $col2 = $col[1];
            $col3 = $col[2];
            $col4 = $col[3];
            $col5 = $col[4];
            $col6 = $col[5];
            $col7 = $col[6];
            $col8 = $col[7];
            $col9 = $col[8];
            $col10 = $col[9];
            $col11 = $col[10];
            $col12 = $col[11];
            $col13 = $col[12];
            $col14 = $col[13];
            $col15 = $col[14];
            $col16 = $col[15];
            $col17 = $col[16];
            $col18 = $col[17];
            $col19 = $col[18];
            $col20 = $col[19];
            $col21 = $col[20];
            $col22 = $col[21];
            $col23 = $col[22];
            $col24 = $col[23];
            $col25 = $col[24];
            $col26 = $col[25];
            $col27 = $col[26];
            $col28 = $col[27];
            $col29 = $col[28];
            $col30 = $col[29];
            $col31 = $col[30];
            $col32 = $col[31];
            $col33 = $col[32];
            $col34 = $col[33];
            $col35 = $col[34];
            $col36 = $col[35];
            $col37 = $col[36];
            $col38 = $col[37];
            $col39 = $col[38];
            $col40 = $col[39];
            $col41 = $col[40];
            $col42 = $col[41];
            $col43 = $col[42];
            $col44 = $col[43];
            $col45 = $col[44];
            $col46 = $col[45];
            $col47 = $col[46];
            $col48 = $col[47];
            $col49 = $col[48];
            $col50 = $col[49];
            $col51 = $col[50];
            $col52 = $col[51];
            $col53 = $col[52];
            $col54 = $col[53];
            $col55 = $col[54];
            $col56 = $col[55];
            $col57 = $col[56];
            $col58 = $col[57];
            $col59 = $col[58];
            $col60 = $col[59];
            $col61 = $col[60];
            $col62 = $col[61];
            $col63 = $col[62];
            $col64 = $col[63];
            $col65 = $col[64];
            $col66 = $col[65];
            $col67 = $col[66];
            $col68 = $col[67];
            $col69 = $col[68];
            $col70 = $col[69];
            $col71 = $col[70];
            $col72 = $col[71];
            $col73 = $col[72];
            $col74 = $col[73];
            $col75 = $col[74];
            $col76 = $col[75];
            $col77 = $col[76];
            $col78 = $col[77];
            $col79 = $col[78];
            $col80 = $col[79];
            $col81 = $col[80];
            $col82 = $col[81];
            $col83 = $col[82];
            $col84 = $col[83];
            $col85 = $col[84];
            $col86 = $col[85];
            $col87 = $col[86];
            $col88 = $col[87];
            $col89 = $col[88];
            $col90 = $col[89];
            $col91 = $col[90];
            $col92 = $col[91];
            $col93 = $col[92];
            $col94 = $col[93];
            $col95 = $col[94];
            $col96 = $col[95];
            $col97 = $col[96];
            $col98 = $col[97];


// SQL Query to insert data into DataBase
            $fields = array();
            $_fields['id'] = $col1;
            $fields['listing_id'] = _escape($col2); // 1001
            $fields['listing_type'] = _escape($col3); // 1001
            $fields['menu_item_id'] = _escape($col4); // 1001
            $fields['api_key'] = _escape($col5); // 1001
            $fields['batch_number'] = _escape($col6); // 1001
            $fields['tested_at'] = _escape($col7); // 29 March, 2017;
            $fields['name'] = _escape($col8); // 1001
            $fields['category'] = _escape($col9);
            $fields['expire_in_days'] = _escape($col10);
            $fields['picture_url'] = _escape($col11); // photo URL;
            $fields['c_thc'] = _escape($col12);


            $fields['c_thca'] = _escape($col13);
            $fields['c_cbd'] = _escape($col14);
            $fields['c_cbda'] = _escape($col15);
            $fields['c_cbn'] = _escape($col16);
            $fields['c_strain_cate'] = _escape($col17);

            $fields['c_thcv'] = _escape($col18);
            $fields['c_cbdv'] = _escape($col19);
            $fields['c_cbna'] = _escape($col20);
            $fields['c_cbg'] = _escape($col21);
            $fields['c_cbga'] = _escape($col22);
            $fields['c_cbc'] = _escape($col23);
            $fields['c_cbca'] = _escape($col24);
            $fields['c_cbl'] = _escape($col25);
            $fields['c_cbla'] = _escape($col26);
            $fields['t_alpha_pinene'] = _escape($col27);
            $fields['t_beta_pinene'] = _escape($col28);
            $fields['t_linalool'] = _escape($col29);
            $fields['t_myrcene'] = _escape($col30);
            $fields['t_limonene'] = _escape($col31);
            $fields['t_ocimene'] = _escape($col32);
            $fields['t_terpinolene'] = _escape($col33);
            $fields['t_terpineol'] = _escape($col34);
            $fields['t_valencene'] = _escape($col35);
            $fields['t_beta_caryophyllene'] = _escape($col36);
            $fields['t_caryophyllene'] = _escape($col37);
            $fields['t_geraniol'] = _escape($col38);
            $fields['t_alpha_humulene'] = _escape($col39);
            $fields['t_alpha_phellandrene'] = _escape($col40);
            $fields['t_delta_3_carene'] = _escape($col41);
            $fields['t_terpinene'] = _escape($col42);
            $fields['t_alpha_terpinolene'] = _escape($col43);
            $fields['t_fenchol'] = _escape($col44);
            $fields['t_borneol'] = _escape($col45);
            $fields['t_oxide'] = _escape($col46);
            $fields['t_alpha_bisabolol'] = _escape($col47);
            $fields['t_camphene'] = _escape($col48);
            $fields['t_sabinene'] = _escape($col49);
            $fields['t_camphor'] = _escape($col50);
            $fields['t_isoborneol'] = _escape($col51);
            $fields['t_menthol'] = _escape($col52);
            $fields['t_alpha_cedrene'] = _escape($col53);
            $fields['t_nerolidol'] = _escape($col54);
            $fields['t_eucalyptol'] = _escape($col55);
            $fields['t_geranyl'] = _escape($col56);
            $fields['t_acetate'] = _escape($col57);
            $fields['t_guaiol'] = _escape($col58);
            $fields['t_phytol'] = _escape($col59);
            $fields['t_citronellol'] = _escape($col60);
            $fields['t_p_cymene'] = _escape($col61);
            $fields['t_isopulegol'] = _escape($col62);
            $fields['t_pulegone'] = _escape($col63);
            $fields['p_acequinocyl'] = _escape($col64);
            $fields['p_imidacloprid'] = _escape($col65);
            $fields['p_pyrethrium'] = _escape($col66);
            $fields['p_spinosad'] = _escape($col67);
            $fields['p_spiromesifen'] = _escape($col68);
            $fields['p_spirotetramat'] = _escape($col69);
            $fields['p_abamectin'] = _escape($col70);
            $fields['p_bifenazate'] = _escape($col71);
            $fields['p_daminozide'] = _escape($col72);
            $fields['p_fenoxycarb'] = _escape($col73);
            $fields['p_myclobutanil'] = _escape($col74);
            $fields['p_paclobutrazol'] = _escape($col75);
            $fields['m_aerobic_plate_count'] = _escape($col76);
            $fields['m_pseudomonas'] = _escape($col77);
            $fields['m_coliforms'] = _escape($col78);
            $fields['m_e_coli'] = _escape($col79);
            $fields['m_salmonella'] = _escape($col80);
            $fields['s_propane'] = _escape($col81);
            $fields['s_ethanol'] = _escape($col82);
            $fields['s_methanol'] = _escape($col83);
            $fields['s_isopropanol'] = _escape($col84);
            $fields['s_isobutane'] = _escape($col85);
            $fields['s_mercaptan'] = _escape($col86);
            $fields['s_dimethylbutane'] = _escape($col87);
            $fields['s_2_methylpentane'] = _escape($col88);
            $fields['s_3_methylpentane'] = _escape($col89);
            $fields['s_cyclohexane_benzene'] = _escape($col90);
            $fields['s_isopentane'] = _escape($col91);
            $fields['s_neopentane'] = _escape($col92);
            $fields['s_butane'] = _escape($col93);
            $fields['s_heptane'] = _escape($col94);
            $fields['s_pentane'] = _escape($col95);

            $fields['s_hexane'] = _escape($col96);
            $fields['created_at'] = _escape($col97);
            $fields['modified_at'] = _escape($col98);
//    d($_REQUEST['hid_tested_at']);
//    die;
//        $query = "INSERT INTO csvtbl(ID,name,city) VALUES('" . $col1 . "','" . $col2 . "','" . $col3 . "')";
//        $s = mysql_query($query, $connect);
//        $exist = qs("select ID from csvtbl where ID='$col1'");
            $exist = qs("select id from tb_form where id='$col1'");
            if (!empty($exist['id'])) {
//                d($exist);
            } else {
                $s = qi("tb_form", $fields);
                if ($s > 1) {
                    $_SESSION['success'] = '1';
                    $_SESSION['msg'] = " File updated successfully!";
                } else {
                    $_SESSION['success'] = '-1';
                    $_SESSION['msg'] = " File Not successfully!";
                }
//                d($exist['id']);
            }
        }
        fclose($handle);
    }
}
$jsInclude = "testCSV.js.php";
_cg("page_title", "Batch Upload");
_cg("current_page", "testCSV");
?>


