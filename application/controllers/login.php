<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($from='',$reason='')
	{
		$this->output->enable_profiler(FALSE);
		$this->security->set_access_level($this->input->cookie('level'));
		$data['from'] = $from;
		$data['response'] = $reason;
		$this->load->library('Menu','menu');
		$this->menu->load_common('login_view',$data);
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
			$this->security->set_access_level($this->input->cookie('level'));
			$data['response'] = $reason;
			$this->load->library('Menu','menu');
			$this->menu->load_common('login_view',$data);
		}
		else
		{
			/*
			 * Validation Passed, Ready to Test Data
			*/
			$data['response'] = $this->login->check_user($from);
			$this->security->set_access_level($this->input->cookie('level'));
			$this->load->library('Menu','menu');
			$this->menu->load_common('login_view',$data);
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
		$this->security->set_access_level($this->input->cookie('level'));
		$this->load->library('Menu','menu');
		$this->menu->load_common('login_reset_view',$data);
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
			$data['response'] = '';
			$this->security->set_access_level($this->input->cookie('level'));
			$this->menu->load_common('login_reset_view',$data);
		}else{
			/*
			 * Passed Validation
			*/
			$this->load->model('Login_model','login');
			$data['response'] = $this->login->reset_password();
			$this->security->set_access_level($this->input->cookie('level'));
			$this->menu->load_common('login_reset_view',$data);

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

