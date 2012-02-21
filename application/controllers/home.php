<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array();
		
		/* 6 boxes */
		$this->load->model('blog_model','blog');
		$this->load->model('page_model','page');
		$this->load->model('wire_model','wire');
		$this->load->model('whitepaper_model','whitepaper');
		
		/** Last 2 Blogs */
		$data['box1_title'] = $this->blog->get_title('2');
		$data['box1_tag'] = $this->blog->get_published('2')." by ".$this->blog->get_author('2');
		$data['box1_content'] = substr($this->blog->get_contents('2'),0,100)."...";
		$data['box1_link'] = "http://fiddlersway.com/blog/index/2";
		
		$data['box2_title'] = $this->blog->get_title('3');
		$data['box2_tag'] = $this->blog->get_published('3')." by ".$this->blog->get_author('3');
		$data['box2_content'] = substr($this->blog->get_contents('3'),0,100)."...";
		$data['box2_link'] = "http://fiddlersway.com/blog/index/3";
		
		/** Last Press Release */
		$data['box3_title'] = $this->wire->get_title('press_release_2');
		$data['box3_tag'] = "Francis Gaskins and Doug McLean";
		$data['box3_content'] = substr($this->wire->get_contents('3'),0,100)."...";
		$data['box3_link'] = "http://fiddlersway.com/wire/index/press_release_2";
		
		/** Last White Paper */
		$data['box4_title'] = $this->whitepaper->get_title('technology-tremors');
		$data['box4_tag'] = "Francis Gaskins and Doug McLean";
		$data['box4_content'] = substr($this->whitepaper->get_contents('technology-tremors'),0,100)."...";
		$data['box4_link'] = "http://fiddlersway.com/whitepaper/index/technology-tremors";
		
		/** Last 2 Pages */
		$data['box5_title'] = $this->page->get_title('bio');
		$data['box5_tag'] = "Francis Gaskins and Doug McLean";
		$data['box5_content'] = substr($this->page->get_contents('bio'),0,100)."...";
		$data['box5_link'] = "http://fiddlersway.com/page/index/bio";
		
		$data['box6_title'] = $this->page->get_title('backgrounder');
		$data['box6_tag'] = "Francis Gaskins and Doug McLean";
		$data['box6_content'] = substr($this->page->get_contents('backgrounder'),0,100)."...";
		$data['box6_link'] = "http://fiddlersway.com/page/index/backgrounder";
		
				
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('home_view',$data);
		
	}
}

