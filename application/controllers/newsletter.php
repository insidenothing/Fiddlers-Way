<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Newsletter_model','newsletter');
		
		/** Newsletter Status */
		if ($this->input->cookie('email')){
			/* Logged In User */
			$data['newsletter_status'] = $this->newsletter->check_user($this->input->cookie('email'));
			$data['email'] = $this->input->cookie('email');	
			$data['confirm'] = '';
		}elseif($this->input->post('email'))
		{
			$data['newsletter_status'] = $this->newsletter->check_user($this->input->post('email'));
			$data['confirm'] = $this->newsletter->send_confirmation($this->input->post('email'));
			$data['email'] = $this->input->post('email');
		} else 
		{
			$data['newsletter_status'] = '';
			$data['email'] = '';
			$data['confirm'] = '';
		}
		
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('newsletter_view',$data);
		
		
	}
	
	
	
	public function confirm($string)
	{
		// check confirmation
		
		// update to opt-in
		
		// redirect to settings page
		
		
	}
	
	
	
	
}

