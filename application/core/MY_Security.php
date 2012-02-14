<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Security extends CI_Security {

	var $CI;
	var $access_level;
	var $pass;
	var $class;
	var $method;


	public function set_access_level($access_level)
	{
		$this->access_level = $access_level;
	}

	/*
	 * Secure the application: Firewall
	*/
	public function check_firewall($class,$method)
	{
		$CI =& get_instance();
		$pass='';
		if($this->access_level!='')
		{
			/*
			 * These pages are allowed by any logged in user
			*/
			if ($class == 'user' && $method == 'index'){
				$pass='1';
			}
			if ($class == 'user' && $method == 'edit'){
				$pass='1';
			}
			if ($class == 'detail'){ /* all detail functions allowed */
				$pass='1';
			}
			if ($class == 'report' && $method == 'index'){
				$pass='1';
			}
			if ($class == 'report' && $method == 'closed'){
				$pass='1';
			}

		}
		if($this->access_level=='Operator')
		{
			/*
			 * These pages are allowed by contractors
			*/
			if ($class == 'wizard' && $method == 'personal_service'){
				$pass='1';
			}
			if ($class == 'wizard' && $method == 'substitute_service'){
				$pass='1';
			}
			if ($class == 'wizard' && $method == 'attempt_service'){
				$pass='1';
			}
			if ($class == 'wizard' && $method == 'posting_service'){
				$pass='1';
			}
			if ($class == 'wrapper' && $method == 'index'){
				$pass='1';
			}

		}

		}
		if($this->access_level == '')
		{
			/*
			 * Take user to login form ( try to return to page tested here )
			*/
			$CI->output->set_header('Location: /login/index/'.$class.'-'.$method.'/Activity Timout');
		}elseif($pass == ''){
			/*
			 * This user is denied clearance
			*/
			$CI->output->set_header('Location: /');
		}

	}


	

}