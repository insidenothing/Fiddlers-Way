<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Whitepaper extends CI_Controller {

	public function index($seo)
	{
		$this->load->model('whitepaper_model','whitepaper');
		$data['title'] = $this->whitepaper->get_title($seo);
		$data['contents'] = $this->whitepaper->get_contents($seo);
		$data['id'] = $this->whitepaper->get_id($seo);
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_plain('whitepaper_view',$data);
	}
}

