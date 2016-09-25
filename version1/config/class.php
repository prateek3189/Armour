<?php
	/**
	 * DB Connectivity
	 */

	include_once(CLASS_DIR_PATH."connection/connection.php");

	foreach ($AddClass as $ClassName)
	{
		switch($ClassName)
		{
			case 'Reuse':
			
		        include_once(FUNCTION_DIR_PATH."reuseFunction.php");
 			    $re    = new reuseFunction();
			    break;
				
			case 'user':
		
		        include_once(CLASS_DIR_PATH."user/UserManager.php");
 			    $user			= new User();
				$user_manager   = new UserManager();
			    break;
			
			case 'course':
		
		        include_once(CLASS_DIR_PATH."course/CourseManager.php");
 			    $course			= new Course();
				$course_manager   = new CourseManager();
			    break;
				
			case 'state':
		
		        include_once(CLASS_DIR_PATH."state/StateManager.php");
 			    $state			= new State();
				$state_manager   = new StateManager();
			    break;
				
			case 'candidate':
		
		        include_once(CLASS_DIR_PATH."candidate/CandidateManager.php");
 			   
				$candidate			= new Candidate();
				$candidate_manager   = new CandidateManager();
			    break;
			
			case 'multimedia':
		
		        include_once(CLASS_DIR_PATH."multimedia/MultimediaManager.php");
 			   
				$multimedia			= new Multimedia();
				$multimedia_manager   = new MultimediaManager();
			    break;
				
			case 'message':
		
		        include_once(CLASS_DIR_PATH."message/MessageManager.php");
 			   
				$message			= new Message();
				$message_manager 	= new MessageManager();
			    break;
				
			case 'huddles':
		
		        include_once(CLASS_DIR_PATH."huddles/HuddlesManager.php");
 			   
				$huddles			= new Huddles();
				$huddles_manager 	= new HuddlesManager();
			    break;
				
			case 'search':
		
		        include_once(CLASS_DIR_PATH."search/SearchManager.php");
 			   	$search_manager			= new SearchManager();
				break;
		
		}
	}
?>
