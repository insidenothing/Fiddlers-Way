<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array();
		
		/* 6 boxes */
		$this->load->model('blog_model','blog');
		$this->load->model('page_model','page');
		
		/** Last 2 Blogs */
		$data['box1_title'] = $this->blog->get_title('2');
		$data['box1_tag'] = $this->blog->get_published('2')." by ".$this->blog->get_author('2');
		$data['box1_content'] = substr($this->blog->get_contents('2'),0,100)."...";
		$data['box1_link'] = "http://fiddlersway.com/blog/index/2";
		
		$data['box2_title'] = $this->blog->get_title('3');
		$data['box2_tag'] = $this->blog->get_published('3')." by ".$this->blog->get_author('3');
		$data['box2_content'] = substr($this->blog->get_contents('3'),0,100)."...";
		$data['box2_link'] = "http://fiddlersway.com/blog/index/3";
		
		/** Last 2 Pages */
		$data['box3_title'] = $this->page->get_title('bio');
		$data['box3_tag'] = "Francis Gaskins and Doug McLean";
		$data['box3_content'] = substr($this->page->get_contents('bio'),0,100)."...";
		$data['box3_link'] = "http://fiddlersway.com/page/index/bio";
		
		$data['box4_title'] = $this->page->get_title('backgrounder');
		$data['box4_tag'] = "Francis Gaskins and Doug McLean";
		$data['box4_content'] = substr($this->page->get_contents('backgrounder'),0,100)."...";
		$data['box4_link'] = "http://fiddlersway.com/page/index/backgrounder";
		
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

