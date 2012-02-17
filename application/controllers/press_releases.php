
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Press_releases extends CI_Controller {

	public function index()
	{
		$this->load->model('wire_model','wire');
		
		/* most recent blog posting */

		$data['title1'] = $this->wire->get_title('press_release_2');
		$data['contents1'] = $this->wire->get_contents('press_release_2');
		$data['seo1'] = 'press_release_2';


		$data['title2'] = $this->wire->get_title('press_release_1');
		$data['contents2'] = $this->wire->get_contents('press_release_1');
		$data['seo2'] = 'press_release_1';


		$this->load->library('Menu','menu');
		$this->menu->load_common('press_releases_view',$data);

	}
}