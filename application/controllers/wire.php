<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wire extends CI_Controller {

	public function index($seo)
	{
		$this->load->model('wire_model','wire');
		$data['title'] = $this->wire->get_title($seo);
		$data['contents'] = $this->wire->get_contents($seo);
		$data['id'] = $this->wire->get_id($seo);
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('wire_view',$data);
	}
}

