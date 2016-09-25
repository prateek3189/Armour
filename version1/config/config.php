<?php
/*************************************************************************************************
*   config.php
*   File used to store the configuration details of Apartment Ace
*	@Date  : September 13 , 2011
*   Prepared By: Balaji Shinde
**************************************************************************************************/

// Start the Session
@session_start();
	
require_once(dirname(__FILE__)."/config.base.php");

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors',1);
//ini_set('upload_max_filesize','2000M');
//ini_set('memory_limit','200M');
//ini_set('session.save_path','/hermes/bosweb/web002/b25/ipg.ahjmobilecom/portal/v1/php_sessions');

date_default_timezone_set("Asia/Calcutta");

define("FOLDER_PATH",BASE_PATH);
define("FOLDER_PATH_HTTP",BASE_URL);

//=============== CSV Download ================//
define("CSV_DOWNLOAD_PATH_HTTP",FOLDER_PATH_HTTP."CSV/Sample/candidate.csv");
define("CSV_UPLOAD_PATH",FOLDER_PATH."CSV/Upload/");

//======== CSS PATH =============//
define("CSS_PATH_HTTP",FOLDER_PATH_HTTP."includes/style/");

//======== IMAGE PATH =============//
define("IMAGE_PATH_HTTP",FOLDER_PATH_HTTP."images/");
define("IMAGE_PATH",FOLDER_PATH."images/");

define("UPLOAD_IMAGE_PATH_DIR",FOLDER_PATH."upload/");
define("UPLOAD_IMAGE_PATH_HTTP",FOLDER_PATH_HTTP."upload/");

//======== VIEW PATH =============//
define("VIEW_PATH",FOLDER_PATH."views/");

//======== class config Path =============//
define("CONFIG_CLASS_PATH", BASE_PATH."config/");

//======== Upload Images Path =============//
define("UPLOAD_IMAGE_PATH", IMAGE_PATH_HTTP."upload/");

//======== NAVIGATION PATH =============//
define("NAVIGATION_PATH",FOLDER_PATH."includes/navigation/");
define("JS_PATH",FOLDER_PATH_HTTP."includes/javascript/");
define("MODULE_PATH",FOLDER_PATH."includes/modules/");
define("CLASS_DIR_PATH",FOLDER_PATH."includes/classes/");
define("MODULE_PATH_HTTP",FOLDER_PATH_HTTP."includes/modules/");

//========FCK PATH =============//
define("FCKPATH",SERVER_PATH."includes/fckeditor/");
define("INCLUDE_DIR_PATH",FOLDER_PATH."includes/");
define("MODULES_DIR_PATH",INCLUDE_DIR_PATH."modules/");
define("FUNCTION_DIR_PATH",INCLUDE_DIR_PATH."functions/");

//Pagination Admin
define("INCREMENT_BY",5);
define("INCREMENT_BY_GL",9);
define("INCREMENT_BY_AGL",8);

//======== SENDEMAIL PATH =============//
define("EMAIL_DIR_PATH",MODULES_DIR_PATH."email/");

?>
