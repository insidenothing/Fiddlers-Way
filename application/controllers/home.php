<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array();
		$this->load->library('Menu','menu');
		$this->menu->load_common('home_view',$data);
		
	}
}

