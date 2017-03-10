<?php

/**
 * Loader file.
 * Includes libraries
 * Inititaes controller + view
 * 
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package Aerus
 * 
 */
define("_PATH", str_replace("loader.php", "", __FILE__));

function __autoload($class_name) {
    include_once(_PATH . 'lib/' . $class_name . '.class.php');
}

include "lib/utils.php"; # includes general function
//d($_SESSION);

_getInstance($_REQUEST['q']);
$instance = _cg("instance");

$host = $_SERVER['HTTP_HOST'];

define('_UPlain', "http://" . $host . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/') + 1));
if (_cg("url_instance") != '') {
    define('_U', "http://" . $host . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/') + 1) . _cg("url_instance") . "/");
} else {
    define('_U', "http://" . $host . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/') + 1));
}
define("_MEDIA_URL", _UPlain . "instance/{$instance}/media/");

$db = Db::__d();

include _PATH . "instance/{$instance}/config.inc.php";

$url = _cg("url"); // set from _getInstance function
define(_URL, $url);

$modulePage = $url . ".php";
if($_SERVER['HTTP_HOST']=="localhost" || $_SERVER['HTTP_HOST']=="45.79.140.218"){
    define('API_URL','http://91.232.66.67/');    
}else{
    define('API_URL','http://localhost/');
}
if(!isset($_SESSION['selected_lang'])){ 
    if(IS_DEV_ENV)
        $_SESSION['selected_lang']='en'; 
    else
        $_SESSION['selected_lang']='fa';     
}
// solution when approval quote is not found in /var/quotes/
if ($modulePage == 'var.php') {
    print "Quote Not Found";
    die;
}

//if ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && !isset($_SESSION['user'])) {
//    print "Kindly Login";
//    die;
//}

@include _PATH . "instance/{$instance}/controller/{$url}.inc.php";
$_templete = isset($_templete) ? $_templete : 'index.tpl.php';
@include _PATH . "instance/{$instance}/tpl/{$_templete}";
?>