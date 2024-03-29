<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index($seo='')
	{
		/* load a single video */

		$this->load->model('video_model','video');
		$data['seo'] = $this->video->get_seo($seo);
		$data['title'] = $this->video->get_title($data['seo']);
		$data['contents'] = $this->video->get_contents($data['seo']);
		$data['comments'] = $this->video->get_comments($data['seo']);
		$data['id'] = $this->video->get_id($data['seo']);
		

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
		$this->load->model('video_model','video');
		$data['pages'] = $this->video->get_list('archive');
		$data['catagory'] = 'archive';
		$this->load->library('Menu','menu');
		$this->menu->load_common('video_list_view',$data);
	}


	public function blog()
	{

		$this->load->model('video_model','video');
		$data['pages'] = $this->video->get_list('blog');
		$data['catagory'] = 'blog';
		$this->load->library('Menu','menu');
		$this->menu->load_common('video_list_view',$data);
	}

	public function news()
	{
		$this->load->model('video_model','video');
		$data['pages'] = $this->video->get_list('news');
		$data['catagory'] = 'news';
		$this->load->library('Menu','menu');
		$this->menu->load_common('video_list_view',$data);
	}
}

