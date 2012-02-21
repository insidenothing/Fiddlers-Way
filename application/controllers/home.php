<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array();
		
		/* 6 boxes */
		$this->load->model('blog_model','blog');
		
		/** Last 2 Blogs */
		$data['box1_title'] = $this->blog->get_title('2');
		$data['box1_tag'] = $this->blog->get_published('2')." by ".$this->blog->get_author('2');
		$data['box1_content'] = substr($this->blog->get_contents('2'),0,50)."...";
		$data['box1_link'] = "http://fiddlersway.com/blog/index/2";
		
		$data['box2_title'] = $this->blog->get_title('3');
		$data['box2_tag'] = $this->blog->get_published('3')." by ".$this->blog->get_author('3');
		$data['box2_content'] = substr($this->blog->get_contents('3'),0,50)."...";
		$data['box2_link'] = "http://fiddlersway.com/blog/index/3";
		
		/** Last 2 Pages */
		$data['box3_title'] = "";
		$data['box3_tag'] = "";
		$data['box3_content'] = "";
		$data['box3_link'] = "";
		
		$data['box4_title'] = "";
		$data['box4_tag'] = "";
		$data['box4_content'] = "";
		$data['box4_link'] = "";
		
		/** Last Press Release */
		$data['box5_title'] = "";
		$data['box5_tag'] = "";
		$data['box5_content'] = "";
		$data['box5_link'] = "";

		/** Last White Paper */
		$data['box6_title'] = "";
		$data['box6_tag'] = "";
		$data['box6_content'] = "";
		$data['box6_link'] = "";
		
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('home_view',$data);
		
	}
}

