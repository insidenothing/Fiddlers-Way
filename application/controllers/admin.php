<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model('admin_model','admin');
		$data['pages'] = $this->admin->get_pages('pages','page');
		$data['blogs'] = $this->admin->get_pages('blogs','blog');
		$data['wire'] = $this->admin->get_pages('wire','wire');
		$data['ipos'] = $this->admin->get_ipos();
		$this->load->library('Menu','menu');
		$this->menu->load_common('admin_view',$data);
	}
}

