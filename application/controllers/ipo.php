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
		$symbol = $this->ipo->new_item();
		$this->output->set_header("Location: /ipo/edit/$symbol");
	}

	public function edit($symbol)
	{
		$results='';
		$this->load->model('ipo_model','ipo');
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}


		/* Record Updates */
		if ($this->input->post('published')){
			$results .= set_ipo_data('published',$symbol,$this->input->post('published'));
		}

		if ($this->input->post('symbol')){
			$results .= set_ipo_data('symbol',$symbol,$this->input->post('symbol'));
			$data['symbol'] = $this->input->post('symbol');
		}else{
			$data['symbol'] = $symbol;
		}

		/* Public Data */
		$data['published'] = get_ipo_data('published',$data['symbol']);

		/* Premium Data */
		$data['premium_report'] = get_ipo_data('premium_report',$data['symbol']);

		/* common data */
		$data['results'] = $results;

		/* load view */
		$this->load->library('Menu','menu');
		$this->menu->load_plain('ipo_edit_view',$data);
	}
}

