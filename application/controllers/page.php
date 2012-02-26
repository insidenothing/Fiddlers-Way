<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index($seo)
	{
		$this->load->model('page_model','page');
		$data['title'] = $this->page->get_title($seo);
		$data['contents'] = $this->page->get_contents($seo);
		$data['id'] = $this->page->get_id($seo);
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		
		if ($this->page->get_paid_status($seo) == 'yes' && $this->input->cookie('premium') != 'yes')
		{
			/* this will secure paid pages */
			$this->output->set_header("Location: /sales");
		}
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('page_view',$data);
	}
}

