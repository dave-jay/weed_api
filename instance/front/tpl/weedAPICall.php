
<?php

$apiCore = new apiCore();
//$data = array();
//$data['listing_id'] = '1';
//$data['listing_type'] = 'demo';
//$data['api_key'] = 'TestApi';
//$data['name'] = 'TestStrain';
//$data['cannabinoids[thc]'] = '0.1';
//$data['cannabinoids[thca]'] = '0.2';
//$data['cannabinoids[cbd]'] = '0.3';
//$data['cannabinoids[cbda]'] = '0.4';
//$data['cannabinoids[cbn]'] = '0.5';
$data = array();
//$data['picture_url'] = _escape($doc_file_name['photo']); // photo URL;
$data['picture_url'] = $target_file; // photo URL;
$data['batch_number'] = _escape($_REQUEST['batch_no']); // 1001
$data['name'] = _escape($_REQUEST['name']); // 1001
$data['menu_item_id'] = _escape($_REQUEST['menu_item_id']); // 1001
$data['listing_id'] = _escape($_REQUEST['listing_id']); // 1001
$data['listing_type'] = _escape($_REQUEST['listing_type']); // 1001
$data['api_key'] = _escape($_REQUEST['api_key']); // 1001
$data['category'] = _escape($_REQUEST['c_category']); // 1001
$data['expire_in_days'] = 0; // 1001
$data['tested_at]'] = _escape($_REQUEST['hid_tested_at']); // 29 March, 2017;

$data['cannabinoids[thc]'] = _escape($_REQUEST['c_thc']);
$data['cannabinoids[thca]'] = _escape($_REQUEST['c_thca']);
$data['cannabinoids[cbd]'] = _escape($_REQUEST['c_cbd']);
$data['cannabinoids[cbda]'] = _escape($_REQUEST['c_cbda']);
$data['cannabinoids[cbn]'] = _escape($_REQUEST['c_cbn']);
//$data['c_strain_cate'] = _escape($_REQUEST['c_strain_cate']);

$data['cannabinoids[thcv]'] = _escape($_REQUEST['c_thcv']);
$data['cannabinoids[cbdv]'] = _escape($_REQUEST['c_cbdv']);
$data['cannabinoids[cbna]'] = _escape($_REQUEST['c_cbna']);
$data['cannabinoids[cbg]'] = _escape($_REQUEST['c_cbg']);
$data['cannabinoids[cbga]'] = _escape($_REQUEST['c_cbga']);
$data['cannabinoids[cbc]'] = _escape($_REQUEST['c_cbc']);
$data['cannabinoids[cbca]'] = _escape($_REQUEST['c_cbca']);
$data['cannabinoids[cbl]'] = _escape($_REQUEST['c_cbl']);
$data['cannabinoids[cbla]'] = _escape($_REQUEST['c_cbla']);
//$data['cannabinoids[category]'] = _escape($_REQUEST['c_category']);
$data['terpenes[alpha_pinene]'] = _escape($_REQUEST['t_alpha_pinene']);
$data['terpenes[beta_pinene]'] = _escape($_REQUEST['t_beta_pinene']);
$data['terpenes[linalool]'] = _escape($_REQUEST['t_linalool']);
$data['terpenes[myrcene]'] = _escape($_REQUEST['t_myrcene']);
$data['terpenes[limonene]'] = _escape($_REQUEST['t_limonene']);
$data['terpenes[ocimene]'] = _escape($_REQUEST['t_ocimene']);
$data['terpenes[terpinolene]'] = _escape($_REQUEST['t_terpinolene']);
$data['terpenes[terpineol]'] = _escape($_REQUEST['t_terpineol']);
$data['terpenes[valencene]'] = _escape($_REQUEST['t_valencene']);
$data['terpenes[beta_caryophyllene]'] = _escape($_REQUEST['t_beta_caryophyllene']);
$data['terpenes[caryophyllene]'] = _escape($_REQUEST['t_caryophyllene']);
$data['terpenes[geraniol]'] = _escape($_REQUEST['t_geraniol']);
$data['terpenes[alpha_humulene]'] = _escape($_REQUEST['t_alpha_humulene']);
$data['terpenes[alpha_phellandrene]'] = _escape($_REQUEST['t_alpha_phellandrene']);
$data['terpenes[delta_3_carene]'] = _escape($_REQUEST['t_delta_3_carene']);
$data['terpenes[terpinene]'] = _escape($_REQUEST['t_terpinene']);
$data['terpenes[alpha_terpinolene]'] = _escape($_REQUEST['t_alpha_terpinolene']);
$data['terpenes[fenchol]'] = _escape($_REQUEST['t_fenchol']);
$data['terpenes[borneol]'] = _escape($_REQUEST['t_borneol']);
$data['terpenes[oxide]'] = _escape($_REQUEST['t_oxide']);
$data['terpenes[alpha_bisabolol]'] = _escape($_REQUEST['t_alpha_bisabolol']);
$data['terpenes[camphene]'] = _escape($_REQUEST['t_camphene']);
$data['terpenes[sabinene]'] = _escape($_REQUEST['t_sabinene']);
$data['terpenes[camphor]'] = _escape($_REQUEST['t_camphor']);
$data['terpenes[isoborneol]'] = _escape($_REQUEST['t_isoborneol']);
$data['terpenes[menthol]'] = _escape($_REQUEST['t_menthol']);
$data['terpenes[alpha_cedrene]'] = _escape($_REQUEST['t_alpha_cedrene']);
$data['terpenes[nerolidol]'] = _escape($_REQUEST['t_nerolidol']);
$data['terpenes[eucalyptol]'] = _escape($_REQUEST['t_eucalyptol']);
$data['terpenes[geranyl]'] = _escape($_REQUEST['t_geranyl']);
$data['terpenes[acetate]'] = _escape($_REQUEST['t_acetate']);
$data['terpenes[guaiol]'] = _escape($_REQUEST['t_guaiol']);
$data['terpenes[phytol]'] = _escape($_REQUEST['t_phytol']);
$data['terpenes[citronellol]'] = _escape($_REQUEST['t_citronellol']);
$data['terpenes[p_cymene]'] = _escape($_REQUEST['t_p_cymene']);
$data['terpenes[isopulegol]'] = _escape($_REQUEST['t_isopulegol']);
$data['terpenes[pulegone]'] = _escape($_REQUEST['t_pulegone']);
$data['pesticides[acequinocyl]'] = _escape($_REQUEST['p_acequinocyl']);
$data['pesticides[imidacloprid]'] = _escape($_REQUEST['p_imidacloprid']);
$data['pesticides[pyrethrium]'] = _escape($_REQUEST['p_pyrethrium']);
$data['pesticides[spinosad]'] = _escape($_REQUEST['p_spinosad']);
$data['pesticides[spiromesifen]'] = _escape($_REQUEST['p_spiromesifen']);
$data['pesticides[spirotetramat]'] = _escape($_REQUEST['p_spirotetramat']);
$data['pesticides[abamectin]'] = _escape($_REQUEST['p_abamectin']);
$data['pesticides[bifenazate]'] = _escape($_REQUEST['p_bifenazate']);
$data['pesticides[daminozide]'] = _escape($_REQUEST['p_daminozide']);
$data['pesticides[fenoxycarb]'] = _escape($_REQUEST['p_fenoxycarb']);
$data['pesticides[myclobutanil]'] = _escape($_REQUEST['p_myclobutanil']);
$data['pesticides[paclobutrazol]'] = _escape($_REQUEST['p_paclobutrazol']);
$data['microbiological[aerobic_plate_count]'] = _escape($_REQUEST['m_aerobic_plate_count']);
$data['microbiological[pseudomonas]'] = _escape($_REQUEST['m_pseudomonas']);
$data['microbiological[coliforms]'] = _escape($_REQUEST['m_coliforms']);
$data['microbiological[e_coli]'] = _escape($_REQUEST['m_e_coli']);
$data['microbiological[salmonella]'] = _escape($_REQUEST['m_salmonella']);
$data['solvents[propane]'] = _escape($_REQUEST['s_propane']);
$data['solvents[ethanol]'] = _escape($_REQUEST['s_ethanol']);
$data['solvents[methanol]'] = _escape($_REQUEST['s_methanol']);
$data['solvents[isopropanol]'] = _escape($_REQUEST['s_isopropanol']);
$data['solvents[isobutane]'] = _escape($_REQUEST['s_isobutane']);
$data['solvents[mercaptan]'] = _escape($_REQUEST['s_mercaptan']);
$data['solvents[dimethylbutane]'] = _escape($_REQUEST['s_dimethylbutane']);
$data['solvents[2_methylpentane]'] = _escape($_REQUEST['s_2_methylpentane']);
$data['solvents[3_methylpentane]'] = _escape($_REQUEST['s_3_methylpentane']);
$data['solvents[cyclohexane_benzene]'] = _escape($_REQUEST['s_cyclohexane_benzene']);
$data['solvents[isopentane]'] = _escape($_REQUEST['s_isopentane']);
$data['solvents[neopentane]'] = _escape($_REQUEST['s_neopentane']);
$data['solvents[butane]'] = _escape($_REQUEST['s_butane']);
$data['solvents[heptane]'] = _escape($_REQUEST['s_heptane']);
$data['solvents[hexane]'] = _escape($_REQUEST['s_hexane']);
$data['solvents[pentane]'] = _escape($_REQUEST['s_pentane']);


$data = json_encode($data);

$output_data = $apiCore->weedAPICall("https://staging.weedmaps.com/api/web/v1/test_results", $data);
$output = json_decode($output_data, true);
//d($output_file);
echo $output;
//d($output);
//die;

?>