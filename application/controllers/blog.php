<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index($seo)
	{
		$this->load->model('blog_model','blog');
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		$data['title'] = $this->blog->get_title($seo);
		$data['id'] =  $this->blog->get_id($seo);
		$data['author'] = $this->blog->get_author($seo);
		$data['published'] = $this->blog->get_published($seo);
		$data['contents'] = $this->blog->get_contents($seo);
		$this->load->library('Menu','menu');
		$this->menu->load_common('blog_view',$data);
	}
}

