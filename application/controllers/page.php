<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index($id='1')
	{
		$this->load->model('page_model','page');
		$data['title'] = $this->page->get_title($id);
		$data['contents'] = $this->page->get_contents($id);
		$this->load->library('Menu','menu');
		$this->menu->load_common('page_view',$data);
	}
}

