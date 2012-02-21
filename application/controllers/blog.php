<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index($id='1')
	{
		$this->load->model('blog_model','blog');
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		$data['title'] = $this->blog->get_title($id);
		$data['id'] = $id;
		$data['author'] = $this->blog->get_author($id);
		$data['published'] = $this->blog->get_published($id);
		$data['contents'] = $this->blog->get_contents($id);
		$this->load->library('Menu','menu');
		$this->menu->load_common('blog_view',$data);
	}
}

