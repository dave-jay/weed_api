<?php

/**
 * Main Index File...
 * 
 * App is single point entry
 * 
 * Assigns constant vars
 * 
 * 
 * @author Dave Jay 
 * @version 1.0
 * @package Weed_API
 *
 * 
 */
session_start();
error_reporting(0);
// For Mail variables 
define('SMTP_EMAIL_USER_NAME', 'testaccts001@gmail.com'); # smtp service username
define('SMTP_EMAIL_USER_PASSWORD', 'testaccts001.'); # smtp service password
define('MAIL_FROM_EMAIL', 'testaccts001@gmail.com'); # email to be used a from email
define('MAIL_FROM_NAME', 'KS-Labs'); # name to be used as from email

define('SMTP_EMAIL_USER_NAME_QUOTE', 'testaccts001@gmail.com'); # smtp service username for quotes 
define('SMTP_EMAIL_USER_PASSWORD_QUOTE', 'testaccts001.'); # smtp service password for quotes - old vanquotes
#
# DB informaitons
define('DB_HOST', 'localhost');
define('DB_PASSWORD', '');
define('DB_UNAME', 'root');
define('DB_NAME', 'ks_labs');
date_default_timezone_set('America/Los_Angeles');

/* Asana Settings */
define('ASN_WORKSPACE', '234139148774622');
define('ASN_TG_INFO', '234835665112035');
define('ASN_TG_REGU', '234835665112036');
define('ASN_TG_HIGH', '234835665112033');
define('ASN_TG_CALL', '234835665112034');
define('ASN_TG_ANGRY', '240100983535598');
define('ASN_TG_DIVERT', '269577909400758');
/* Asana Settings */

/* Project Use */
define('DisplayLength', '20');

/* Asana Settings */

/**
 * Whether its a local machine or host
 * @author Denish Faladu
 */
define('IS_DEV_ENV', true); # ifbyphone ivr id for driver if they missed the text

include "loader.php";
?>
