<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function index($type,$id)
	{
		
		$this->load->model('Edit_model','edit');
		
		if ($this->input->post('content')){
			$data['results'] = set_contents($id,$type,addslashes($this->input->post('content')));
		}
		
		
		$data['title'] = $this->edit->get_title($id,$type);
		$data['author'] = $this->edit->get_author($id,$type);
		$data['published'] = $this->edit->get_published($id,$type);
		$data['contents'] = $this->edit->get_contents($id,$type);
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('contact_view',$data);
		
		
	}
	
	
	
	
	
	
	
}



