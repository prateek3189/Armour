<?php

	/**************************************************************
	*   index.php
	*   File used to for 
	*	@Date  : Oct 05 2011
	*   Developed By: Swati Algat
	***************************************************************/
	
	//Include Config
	include("config/config.php");	

	$page='index.php';
	
	// include CSS file array	
  	$AddCSS = array("style");
	
	// include JS file array
   	$AddJS = array("jquery", "common");
	
	include (VIEW_PATH."index.html");
?>