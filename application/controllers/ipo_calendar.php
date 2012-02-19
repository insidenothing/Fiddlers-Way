
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipo_calendar extends CI_Controller {

	public function index()
	{
		$this->load->model('ipo_model','ipo');
		
		/* most recent blog posting */

		$data['title1'] = $this->ipo->get_title('press_release_2');
		$data['contents1'] = $this->ipo->get_contents('press_release_2');
		$data['seo1'] = 'press_release_2';


		$data['title2'] = $this->ipo->get_title('press_release_1');
		$data['contents2'] = $this->ipo->get_contents('press_release_1');
		$data['seo2'] = 'press_release_1';


		$this->load->library('Menu','menu');
		$this->menu->load_common('ipo_calendar_view',$data);

	}
}