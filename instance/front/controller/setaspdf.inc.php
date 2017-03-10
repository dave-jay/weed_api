<?php

/*
  https://pdfcrowd.com/
  usrname = hardikpanchal
  password = hardikpanchal

  https://pdfcrowd.com/pricing/
  http://manifest.my-brilliant.info/multiple_car_quote_mail_preview?event_id=1273
 */
//if (trim($_REQUEST['eventID']) != '' && isset($_REQUEST['pdf_generate']) && trim($_REQUEST['pdf_generate']) != '') {
    require 'setaspdf_pdfcrowd.php';

    try {
        // create an API client instance
        $client = new Pdfcrowd("hardikpanchal", "8d17c3da28b32cfc83628718c3e13af2"); 

        // convert a web page and store the generated PDF into a $pdf variable
        //$pdf = $client->convertURI('http://manifest.my-brilliant.info/multiple_car_quote_mail_preview?event_id=1106');
        // set HTTP response headers
        /*
          header("Content-Type: application/pdf");
          header("Cache-Control: max-age=0");
          header("Accept-Ranges: none");
          header("Content-Disposition: attachment; filename=\"{$output_file}\"");
         */
        echo $tempPath = _PATH . "quote_pdf/";
        $pdf_file_name = 'event_' . trim($_REQUEST['eventID']) . '.pdf';

        $output_file = $tempPath . $pdf_file_name;


        $out_file = fopen($output_file, "wb");
        $main_content = '<div style="width:100%;">' . trim($_REQUEST["pdf_generate"]) . '</div>';
        $client->convertHtml($main_content, $out_file);
        fclose($out_file);
        // send the generated PDF 
        //echo $pdf;
    } catch (PdfcrowdException $why) {
        //echo "Pdfcrowd Error: " . $why; 
    }
//}
?>

