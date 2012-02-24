<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipo extends CI_Controller {

	public function index($symbol)
	{
		$this->load->model('ipo_model','ipo');
		$data['symbol'] = $symbol;
		$data['details'] = $this->ipo->get_list($symbol);

		$data['premium'] = $this->input->cookie('premium');
		$data['premium_content'] = $this->ipo->get_premium($symbol);
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		$this->load->library('Menu','menu');
		$this->menu->load_plain('ipo_view',$data);
	}
	
	public function create()
	{
		$this->load->model('ipo_model','ipo');
		$id = $this->ipo->new_item();
		$this->output->set_header("Location: /ipo/edit/$symbol");
	}
	
	public function edit($symbol)
	{
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->model('ipo_model','ipo');
		$data['symbol'] = $symbol;
		$data['results'] = 'READY...';
		$data['contents'] = 'READY...';
		
	
		$this->load->library('Menu','menu');
		$this->menu->load_plain('ipo_edit_view',$data);
	}
}

