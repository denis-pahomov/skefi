<?php
//test
error_reporting(0);
define('WP_CACHE', true);

$pattern = '/skefi\w*\.(\w+)/';
preg_match($pattern, $_SERVER['HTTP_HOST'], $matches);

switch ($matches[1]) {
    case 'web':
        define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
        define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
        define('WP_CONTENT_URL', 'http://'.$_SERVER['HTTP_HOST'].'/wp-content');
        $db_name = 'kbservice';
        $db_user = 'root';
        $db_password = '';
		$db_host='localhost';
        $lang = 'ru_RU';
        break;     
    default:
        $db_name = 'kbservic_wpsite';
        $db_user = 'kbservic_user';
        $db_password = '_kb_service_2010_';
        $lang = 'ru_RU';
        $db_host='db.trio.hosted.in';
        
        break;
}

define('DB_NAME', $db_name);

define('DB_USER', $db_user);

define('DB_PASSWORD', $db_password);

define ('WPLANG', $lang);

define('DB_HOST', $db_host);

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

define('AUTH_KEY',        '(~mV;-hK0FGz+N!Oq|Np8t5B6J_UTN-onBTsNA[wfY&?Bcp1$2-vgmGM{*KNkJ2[');
define('SECURE_AUTH_KEY', '?{j5~-0d4dsqYi]KYM||&rdz`T$)0G!Cxe^k~N*MHLmf5?j@ HqX&omB[lfM@|+2');
define('LOGGED_IN_KEY',   'YLNU-j]A/kHb#{nA>tEK}(nwr=R~g|5>7i!FjJH4$&8U~{pE3?kk5m H2U/J+-+i');
define('NONCE_KEY',       '?K[xlP1[[.AJZ^zA6xq3s&g++7#eB#K)f~:wQh4Q)k|_O1cKrFmb.1rREog{---M');

$table_prefix  = 'wp_';

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
require_once(ABSPATH . 'wp-settings.php');
