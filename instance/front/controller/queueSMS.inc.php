<?php

if ($_REQUEST['code'] == "mapp123") {
   $to = $_REQUEST['to'];
   $message = $_REQUEST['text'];
   $fields['phone'] = $to;
   $fields['message'] = $message;
   $fields['status'] = 0;
   qi("queuesms", _escapeArray($fields));
   
}else{
    echo "You are not authorized person";
}
die; 

