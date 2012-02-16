<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index($seo)
	{
		$this->load->model('page_model','page');
		$data['title'] = $this->page->get_title($seo);
		$data['contents'] = $this->page->get_contents($seo);
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['contents'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('page_view',$data);
	}
}

