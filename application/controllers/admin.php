<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_model','admin');
		$data['pages'] = $this->admin->get_pages('pages');
		$data['blogs'] = $this->admin->get_pages('blogs');
		$data['wire'] = $this->admin->get_pages('wire');
		$this->load->library('Menu','menu');
		$this->menu->load_common('admin_view',$data);
	}
}

