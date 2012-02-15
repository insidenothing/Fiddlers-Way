<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Contact_model','contact');
		
		/** Newsletter Status */
		if ($this->input->cookie('email')){
			/* Logged In User */
			$data['email'] = $this->input->cookie('email');		
		}else{
			$data['email'] = '<input name="email" value="Enter E-Mail Address" />';
		}
		
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('contact_view',$data);
		
		
	}
	
	
	
	
	
	
	
}

