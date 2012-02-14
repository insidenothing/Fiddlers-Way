<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($from='',$reason='')
	{
		$tab['level']=$this->input->cookie('level');
		$this->output->enable_profiler(FALSE);
		$tab['title']='Please complete the form below to log in.';
		$this->security->set_access_level($this->input->cookie('level'));
		$data['from'] = $from;
		$data['response'] = $reason;
		$this->load->library('Menu','menu');
		$this->menu->load_common('login_view',$tab,$data);
	}
	public function dologin($from='',$reason='')
	{
		$tab['level']=$this->input->cookie('level');
		$this->output->enable_profiler(FALSE);
		$this->load->model('Login_model','login');
		/*
		 * Validation Settings
		*/
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<li class="error">', '</li>');
		$data['from'] = $from;
		/*
		 * Test Validation
		*/
		if ($this->form_validation->run('login') == FALSE)
		{
			$tab['title']='Please try again.';
			$this->security->set_access_level($this->input->cookie('level'));
			$data['response'] = $reason;
			$this->load->library('Menu','menu');
			$this->menu->load_common('login_view',$tab,$data);
		}
		else
		{
			/*
			 * Validation Passed, Ready to Test Data
			*/
			$data['response'] = $this->login->check_user($from);
			$tab['title']='Attempting Login';
			$this->security->set_access_level($this->input->cookie('level'));
			$this->load->library('Menu','menu');
			$this->menu->load_common('login_view',$tab,$data);
				
		}
	}


	public function dologout()
	{
		$tab['level']=$this->input->cookie('level');
		$this->output->enable_profiler(FALSE);
		$this->load->library('User','user');
		$this->user->delete_cookies();
		$this->output->set_header("Location: /");
	}




	public function reset()
	{
		$data['response'] = '';
		$tab['title']='Reset Account Password';
		$this->security->set_access_level($this->input->cookie('level'));
		$this->load->library('Menu','menu');
		$this->menu->load_common('login_reset_view',$tab,$data);
	}

	public function do_reset()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<li class="error">', '</li>');
		$this->load->library('Menu','menu');
		/*
		 * Test Validation
		*/
		if ($this->form_validation->run('reset') == FALSE)
		{
			/*
			 * Failed Validation
			*/
			$tab['title']='Reset Account Password';
			$data['response'] = '';
			$this->security->set_access_level($this->input->cookie('level'));
			$this->menu->load_common('login_reset_view',$tab,$data);
		}else{
			/*
			 * Passed Validation
			*/
			$this->load->model('Login_model','login');
			$data['response'] = $this->login->reset_password();
			$tab['title']='Reset Password';
			$this->security->set_access_level($this->input->cookie('level'));
			$this->menu->load_common('login_reset_view',$tab,$data);

		}
	}



	/*
	 * this function is used by form validation during login / password reset
	*/
	function badword_check($str)
	{
		if (
		$str == 'password' ||
		$str == '1234')
		{
			$this->form_validation->set_message('badword_check', 'Your %s can not be the word "'.$str.'"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}

