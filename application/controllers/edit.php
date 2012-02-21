<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function index($type,$id)
	{
		
		$this->load->model('Edit_model','edit');
		$results = '';
		if ($this->input->post('content')){
			$results .= $this->edit->set_contents($id,$type,addslashes($this->input->post('content')));
		}
		if ($this->input->post('author')){
			$results .= $this->edit->set_author($id,$type,addslashes($this->input->post('author')));
		}
		if ($this->input->post('published')){
			$results .= $this->edit->set_published($id,$type,addslashes($this->input->post('published')));
		}
		if ($this->input->post('title')){
			$results .= $this->edit->set_title($id,$type,addslashes($this->input->post('title')));
		}
		if ($this->input->post('seo')){
			$results .= $this->edit->set_seo($id,$type,addslashes($this->input->post('seo')));
		}
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		
		$data['results'] = $results;
		$data['id'] = $id;
		$data['type'] = $type;
		
		
		$data['title'] = $this->edit->get_title($id,$type);
		$data['author'] = $this->edit->get_author($id,$type);
		$data['published'] = $this->edit->get_published($id,$type);
		$data['contents'] = $this->edit->get_contents($id,$type);
		$data['seo'] = $this->edit->get_seo($id,$type);
		
		
		if ($type == 'pages'){
			$data['controller'] = 'page';
		}
		if ($type == 'blogs'){
			$data['controller'] = 'blog';
		}
		if ($type == 'wire'){
			$data['controller'] = 'wire';
		}
		if ($type == 'whitepapers'){
			$data['controller'] = 'whitepaper';
		}
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_plain('edit_view',$data);
		
		
	}
	
	
	public function create($type)
	{
		$this->load->model('Edit_model','edit');
		$id = new_item($type);
		$this->output->set_header("Location: /edit/index/$type/$id");
	}
	
	
	
	
}



