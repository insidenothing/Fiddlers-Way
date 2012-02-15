<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Contact_model','contact');
		
		
		if ($this->input->cookie('email')){
			/* Logged In User */
			$data['email'] = $this->input->cookie('email');		
		}else{
			$data['email'] = '';
		}
		
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('contact_view',$data);
		
		
	}
	
	
	
	
	
	
	
}

