<?php
	
	/**************************************************************
	*  logout.php
	*  Author: Benchmark, Start Date: , Last Modified: 
	*  developed By : 
	***************************************************************/	
	@session_start();
	include("config/config.php");
	//include("config/config.php");
	
	foreach($_SESSION as $key=>$val)
	{
		unset($_SESSION[$key]);
	}
	@session_destroy();
	
	// include CLASS
	$AddClass = array('Reuse');
	include("config/class.php");
	$re->redirectPage(FOLDER_PATH_HTTP."admin_index.php");
	die;
?>