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

//======== CSS PATH =============//
define("CSS_PATH_HTTP",FOLDER_PATH_HTTP."css/");

//======== IMAGE PATH =============//
define("IMAGE_PATH_HTTP",FOLDER_PATH_HTTP."images/");
define("IMAGE_PATH",FOLDER_PATH."images/");

//======== VIEW PATH =============//
define("VIEW_PATH",FOLDER_PATH."views/");

//======== NAVIGATION PATH =============//
define("NAVIGATION_PATH",FOLDER_PATH."navigation/");

//======== PLUGIN PATH =============//
define("PLUGIN_PATH",FOLDER_PATH."plugin/");

//======== JS PATH =============//
define("JS_PATH_HTTP",FOLDER_PATH_HTTP."js/");

?>
