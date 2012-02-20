<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index($seo='')
	{
		/* load a single video */ 
		
		$this->load->model('page_model','page');
		$data['title'] = $this->page->get_title($seo);
		$data['contents'] = $this->page->get_contents($seo);
		$data['comments'] = $this->page->get_comments($seo);
		$data['id'] = $this->page->get_id($seo);
		$data['seo'] = $seo;
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('video_view',$data);
	}
	
	public function archive()
	{
				$this->load->model('page_model','page');
		$data['title'] = $this->page->get_title($seo);
		$data['contents'] = $this->page->get_contents($seo);
		$data['comments'] = $this->page->get_comments($seo);
		$data['id'] = $this->page->get_id($seo);
		$data['seo'] = $seo;
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('video_view',$data);
	}
	
	
	public function blog()
	{

				$this->load->model('page_model','page');
		$data['title'] = $this->page->get_title($seo);
		$data['contents'] = $this->page->get_contents($seo);
		$data['comments'] = $this->page->get_comments($seo);
		$data['id'] = $this->page->get_id($seo);
		$data['seo'] = $seo;
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('video_view',$data);
	}
	
	public function news()
	{
		
				$this->load->model('page_model','page');
		$data['title'] = $this->page->get_title($seo);
		$data['contents'] = $this->page->get_contents($seo);
		$data['comments'] = $this->page->get_comments($seo);
		$data['id'] = $this->page->get_id($seo);
		$data['seo'] = $seo;
		
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('video_view',$data);
	}
	
	
}

