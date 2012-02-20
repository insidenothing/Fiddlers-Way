<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipo extends CI_Controller {

	public function index($seo)
	{
		$this->load->model('ipo_model','ipo');
		$data['title'] = $this->ipo->get_title($seo);
		$data['contents'] = $this->ipo->get_contents($seo);
		$data['id'] = $this->ipo->get_id($seo);
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('ipo_view',$data);
	}
}

