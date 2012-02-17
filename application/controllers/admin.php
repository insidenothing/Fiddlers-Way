<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($seo)
	{
		$this->load->model('admin_model','admin');
		
		
		
		$data = array();
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('admin_view',$data);
	}
}

