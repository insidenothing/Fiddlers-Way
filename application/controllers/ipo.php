<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipo extends CI_Controller {

	public function index($symbol)
	{
		$this->load->model('ipo_model','ipo');
		$data['symbol'] = $symbol;
		$data['details'] = $this->ipo->get_list($symbol);

		$this->load->library('Menu','menu');
		$this->menu->load_common('ipo_view',$data);
	}
}

