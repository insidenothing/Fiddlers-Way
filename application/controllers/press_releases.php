
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wire extends CI_Controller {

	public function index()
	{
		$this->load->model('wire_model','wire');
		$data['title'] = $this->wire->get_title($seo);
		$data['contents'] = $this->wire->get_contents($seo);
		$data['id'] = $this->wire->get_id($seo);




		/* most recent blog posting */

		$data['title1'] = $this->wire->get_title('press_release_2');
		$data['author1'] = $this->wire->get_author('press_release_2');
		$data['published1'] = $this->wire->get_published('press_release_2');
		$data['contents1'] = $this->wire->get_contents('press_release_2');


		$data['title2'] = $this->wire->get_title('press_release_1');
		$data['author2'] = $this->wire->get_author('press_release_1');
		$data['published2'] = $this->wire->get_published('press_release_1');
		$data['contents2'] = $this->wire->get_contents('press_release_1');


		$this->load->library('Menu','menu');
		$this->menu->load_common('press_releases_view',$data);

	}
}