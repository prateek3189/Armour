<?php
	
	/*************************************************************************************************
	*   login-controller.php
	*   File used to for login check
	*	@Date  : Aug 05 2011
	*   Developed By: Swati Algat
	**************************************************************************************************/
	
	//config file
	include("config/config.php");
	
	//Error Messages
	include(MODULE_PATH."messages.php");

	// include CLASS
	$AddClass = array('Reuse','user');
	include("config/class.php");
	
	$step	=	isset($_REQUEST['step']) ? $_REQUEST['step'] : '';
	
	switch($step)
	{
		case 'login':
			$username	=	isset($_REQUEST['txtUsername']) ? $_REQUEST['txtUsername'] : '';
			$password	=	isset($_REQUEST['txtPassword']) ? $_REQUEST['txtPassword'] : '';
			
			//server side validation
			if($username == '' || $password == '')
			{
				$_SESSION['Message']	=	9;
				$re->redirectPage(FOLDER_PATH_HTTP."admin_index.php");
				die;
			}
			else
			{
				//login credential check
				$where	=	" email = '".$username."' AND password = '".md5($password)."' AND status = 'A'";
				$userData	=	$user_manager->getSingleUser($where);
				
				if(count($userData) > 0)
				{
					$_SESSION['user_id']	=	$userData->user_id;
					$_SESSION['name']		=	$userData->name;
					$_SESSION['user_type']	=	$userData->user_type;
					$_SESSION['login']		=	1;
					
					//redirect page
					$re->redirectPage(FOLDER_PATH_HTTP."dashboard.php");
					die;
					
				}
				else
				{
					$_SESSION['Message']	=	60;
					$re->redirectPage(FOLDER_PATH_HTTP."forgot_password.php");
					die;
				}
			}
			
		break;
		case 'forgotpassword':
			$email	=	isset($_REQUEST['txtUserEmail']) ? $_REQUEST['txtUserEmail'] : '';
			
			//server side validation
			$where	=	" email = '".$email."'";
			$count	=	$user_manager->getAllUserCount($where);
			if($count > 0)
			{
				$new_password	=	$re->create_password("10");
				$user_manager->updatePassword($email,$new_password);
				
				//Email
				$_SESSION['Message']	=	81;
				$re->redirectPage(FOLDER_PATH_HTTP."admin_index.php");
				die;
				
			}
			else
			{
				$_SESSION['Message']	=	63;
				$re->redirectPage(FOLDER_PATH_HTTP."forgot_password.php");
				die;
			}
		break;
	}
	
	
	//$redirectTo	=	FOLDER_PATH_HTTP."dashboard.php";
	
	//$re->redirectPage($redirectTo);
?>
