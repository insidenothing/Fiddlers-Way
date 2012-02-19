
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipo_calendar extends CI_Controller {

	public function index()
	{
		$this->load->model('ipo_model','ipo');
		
		/* most recent blog posting */

		$data['ipos'] = $this->ipo->get_list();

		$this->load->library('Menu','menu');
		$this->menu->load_plain('ipo_calendar_view',$data);

	}
}