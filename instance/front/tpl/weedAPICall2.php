
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
$data['picture_url'] = _escape($values['photo']); // photo URL;
//$data['picture_url'] = $target_file; // photo URL;
$data['batch_number'] = _escape($values['batch_no']); // 1001
$data['name'] = _escape($values['name']); // 1001
$data['menu_item_id'] = _escape($values['menu_item_id']); // 1001
$data['listing_id'] = _escape($values['listing_id']); // 1001
$data['listing_type'] = _escape($values['listing_type']); // 1001
$data['api_key'] = _escape($values['api_key']); // 1001
$data['category'] = _escape($values['c_category']); // 1001
$data['expire_in_days'] = 0; // 1001
$data['tested_at]'] = _escape($values['hid_tested_at']); // 29 March, 2017;

$data['cannabinoids[thc]'] = _escape($values['c_thc']);
$data['cannabinoids[thca]'] = _escape($values['c_thca']);
$data['cannabinoids[cbd]'] = _escape($values['c_cbd']);
$data['cannabinoids[cbda]'] = _escape($values['c_cbda']);
$data['cannabinoids[cbn]'] = _escape($values['c_cbn']);
//$data['c_strain_cate'] = _escape($values['c_strain_cate']);

$data['cannabinoids[thcv]'] = _escape($values['c_thcv']);
$data['cannabinoids[cbdv]'] = _escape($values['c_cbdv']);
$data['cannabinoids[cbna]'] = _escape($values['c_cbna']);
$data['cannabinoids[cbg]'] = _escape($values['c_cbg']);
$data['cannabinoids[cbga]'] = _escape($values['c_cbga']);
$data['cannabinoids[cbc]'] = _escape($values['c_cbc']);
$data['cannabinoids[cbca]'] = _escape($values['c_cbca']);
$data['cannabinoids[cbl]'] = _escape($values['c_cbl']);
$data['cannabinoids[cbla]'] = _escape($values['c_cbla']);
//$data['cannabinoids[category]'] = _escape($values['c_category']);
$data['terpenes[alpha_pinene]'] = _escape($values['t_alpha_pinene']);
$data['terpenes[beta_pinene]'] = _escape($values['t_beta_pinene']);
$data['terpenes[linalool]'] = _escape($values['t_linalool']);
$data['terpenes[myrcene]'] = _escape($values['t_myrcene']);
$data['terpenes[limonene]'] = _escape($values['t_limonene']);
$data['terpenes[ocimene]'] = _escape($values['t_ocimene']);
$data['terpenes[terpinolene]'] = _escape($values['t_terpinolene']);
$data['terpenes[terpineol]'] = _escape($values['t_terpineol']);
$data['terpenes[valencene]'] = _escape($values['t_valencene']);
$data['terpenes[beta_caryophyllene]'] = _escape($values['t_beta_caryophyllene']);
$data['terpenes[caryophyllene]'] = _escape($values['t_caryophyllene']);
$data['terpenes[geraniol]'] = _escape($values['t_geraniol']);
$data['terpenes[alpha_humulene]'] = _escape($values['t_alpha_humulene']);
$data['terpenes[alpha_phellandrene]'] = _escape($values['t_alpha_phellandrene']);
$data['terpenes[delta_3_carene]'] = _escape($values['t_delta_3_carene']);
$data['terpenes[terpinene]'] = _escape($values['t_terpinene']);
$data['terpenes[alpha_terpinolene]'] = _escape($values['t_alpha_terpinolene']);
$data['terpenes[fenchol]'] = _escape($values['t_fenchol']);
$data['terpenes[borneol]'] = _escape($values['t_borneol']);
$data['terpenes[oxide]'] = _escape($values['t_oxide']);
$data['terpenes[alpha_bisabolol]'] = _escape($values['t_alpha_bisabolol']);
$data['terpenes[camphene]'] = _escape($values['t_camphene']);
$data['terpenes[sabinene]'] = _escape($values['t_sabinene']);
$data['terpenes[camphor]'] = _escape($values['t_camphor']);
$data['terpenes[isoborneol]'] = _escape($values['t_isoborneol']);
$data['terpenes[menthol]'] = _escape($values['t_menthol']);
$data['terpenes[alpha_cedrene]'] = _escape($values['t_alpha_cedrene']);
$data['terpenes[nerolidol]'] = _escape($values['t_nerolidol']);
$data['terpenes[eucalyptol]'] = _escape($values['t_eucalyptol']);
$data['terpenes[geranyl]'] = _escape($values['t_geranyl']);
$data['terpenes[acetate]'] = _escape($values['t_acetate']);
$data['terpenes[guaiol]'] = _escape($values['t_guaiol']);
$data['terpenes[phytol]'] = _escape($values['t_phytol']);
$data['terpenes[citronellol]'] = _escape($values['t_citronellol']);
$data['terpenes[p_cymene]'] = _escape($values['t_p_cymene']);
$data['terpenes[isopulegol]'] = _escape($values['t_isopulegol']);
$data['terpenes[pulegone]'] = _escape($values['t_pulegone']);
$data['pesticides[acequinocyl]'] = _escape($values['p_acequinocyl']);
$data['pesticides[imidacloprid]'] = _escape($values['p_imidacloprid']);
$data['pesticides[pyrethrium]'] = _escape($values['p_pyrethrium']);
$data['pesticides[spinosad]'] = _escape($values['p_spinosad']);
$data['pesticides[spiromesifen]'] = _escape($values['p_spiromesifen']);
$data['pesticides[spirotetramat]'] = _escape($values['p_spirotetramat']);
$data['pesticides[abamectin]'] = _escape($values['p_abamectin']);
$data['pesticides[bifenazate]'] = _escape($values['p_bifenazate']);
$data['pesticides[daminozide]'] = _escape($values['p_daminozide']);
$data['pesticides[fenoxycarb]'] = _escape($values['p_fenoxycarb']);
$data['pesticides[myclobutanil]'] = _escape($values['p_myclobutanil']);
$data['pesticides[paclobutrazol]'] = _escape($values['p_paclobutrazol']);
$data['microbiological[aerobic_plate_count]'] = _escape($values['m_aerobic_plate_count']);
$data['microbiological[pseudomonas]'] = _escape($values['m_pseudomonas']);
$data['microbiological[coliforms]'] = _escape($values['m_coliforms']);
$data['microbiological[e_coli]'] = _escape($values['m_e_coli']);
$data['microbiological[salmonella]'] = _escape($values['m_salmonella']);
$data['solvents[propane]'] = _escape($values['s_propane']);
$data['solvents[ethanol]'] = _escape($values['s_ethanol']);
$data['solvents[methanol]'] = _escape($values['s_methanol']);
$data['solvents[isopropanol]'] = _escape($values['s_isopropanol']);
$data['solvents[isobutane]'] = _escape($values['s_isobutane']);
$data['solvents[mercaptan]'] = _escape($values['s_mercaptan']);
$data['solvents[dimethylbutane]'] = _escape($values['s_dimethylbutane']);
$data['solvents[2_methylpentane]'] = _escape($values['s_2_methylpentane']);
$data['solvents[3_methylpentane]'] = _escape($values['s_3_methylpentane']);
$data['solvents[cyclohexane_benzene]'] = _escape($values['s_cyclohexane_benzene']);
$data['solvents[isopentane]'] = _escape($values['s_isopentane']);
$data['solvents[neopentane]'] = _escape($values['s_neopentane']);
$data['solvents[butane]'] = _escape($values['s_butane']);
$data['solvents[heptane]'] = _escape($values['s_heptane']);
$data['solvents[hexane]'] = _escape($values['s_hexane']);
$data['solvents[pentane]'] = _escape($values['s_pentane']);


$data = json_encode($data);

$output_data = $apiCore->weedAPICall("https://staging.weedmaps.com/api/web/v1/test_results", $data);
$output = json_decode($output_data, true);
//d($output_file);
echo $output;
//d($output);
//die;
?>