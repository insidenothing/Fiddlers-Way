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
		if($this->access_level=='Operations' || $this->access_level=='Gold Member')
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
		if($this->access_level=='Operations' || $this->access_level=='Client')
		{
			/*
			 * These pages are allowed by clients
			*/
			if ($class == 'start' && $method == 'index'){
				$pass='1';
			}
			if ($class == 'start' && $method == 'do_upload'){
				$pass='1';
			}
			if ($class == 'search' && $method == 'index'){
				$pass='1';
			}

			
			
		}
		if($this->access_level=='Operations')
		{
			/*
			 * These pages are allowed by operators only
			*/
			if ($class == 'action' && $method == 'index'){
				$pass='1';
			}
			if ($class == 'terminal' && $method == 'index'){
				$pass='1';
			}
			if ($class == 'terminal' && $method == 'submit'){
				$pass='1';
			}
			if ($class == 'envelope' && $method == 'large'){
				$pass='1';
			}
			if ($class == 'edit' && $method == 'index'){
				$pass='1';
			}
			if ($class == 'edit' && $method == 'ajax'){
				$pass='1';
			}
			if ($class == 'activity' && $method == 'index'){
				$pass='1';
			}
			if ($class == 'timeline' && $method == 'display'){
				$pass='1';
			}
			if ($class == 'user' && $method == 'new_user'){
				$pass='1';
			}
			if ($class == 'admin' && $method == 'config'){
				$pass='1';
			}
			if ($class == 'swap' && $method == 'attorney'){
				$pass='1';
			}
			if ($class == 'mailbox' && $method == 'pull'){
				$pass='1';
			}
			if ($class == 'report' && $method == 'popup'){
				$pass='1';
			}
			if ($class == 'quality' && $method == 'close'){
				$pass='1';
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


	/*
	 * this is moving to library/menu
	*/
	function load_available_menus()
	{
		$CI =& get_instance();
		$CI->load->helper('cookie');
		$tab=array();
		if($CI->input->cookie('name')){
			$tab['name']=$CI->input->cookie('name');
		}
		
		if($CI->input->cookie('user_id')){
			$CI->load->model('user_model','user');
			$CI->user->set_online_now($CI->input->cookie('user_id'));
		}
		
		
		$CI->load->view('user_menu',$tab);
		if($this->access_level=='Operations')
		{
			$CI->load->view('client/menu_view');
			$CI->load->view('contractor/menu_view');
			$CI->load->view('op/menu_view');
		}
		if($this->access_level=='Gold Member')
		{
			$CI->load->view('contractor/menu_view');
		}
		if($this->access_level=='Client')
		{
			$CI->load->view('client/menu_view');
		}
		$CI->load->view('common_menu');
	}

}