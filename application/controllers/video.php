<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$this->load->view('common_header');
		$this->load->view('video_view');
		$this->load->view('common_footer');
	}
	
	public function archive()
	{
		$this->load->view('common_header');
		$this->load->view('video_view');
		$this->load->view('common_footer');
	}
	
	
	public function blog()
	{
		$this->load->view('common_header');
		$this->load->view('video_view');
		$this->load->view('common_footer');
	}
	
	public function news()
	{
		$this->load->view('common_header');
		$this->load->view('video_view');
		$this->load->view('common_footer');
	}
	
	
}

