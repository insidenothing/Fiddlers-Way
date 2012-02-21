<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array();
		
		/* 6 boxes */
		$this->load->model('blog_model','blog');
		
		$id = $this->blog->get_last_id('1');
		$data['box1_title'] = $this->blog->get_title($id);
		$data['box1_tag'] = $this->blog->get_published($id)." by ".$this->blog->get_author($id);
		$data['box1_content'] = substr($this->blog->get_contents($id),0,100)."...";
		$data['box1_link'] = "http://fiddlersway.com/blog/index/$id";
		
		$id = $this->blog->get_last_id('2');
		$data['box2_title'] = $this->blog->get_title($id);
		$data['box2_tag'] = $this->blog->get_published($id)." by ".$this->blog->get_author($id);
		$data['box2_content'] = substr($this->blog->get_contents($id),0,100)."...";
		$data['box2_link'] = "http://fiddlersway.com/blog/index/$id";
		
		$id = $this->blog->get_last_id('3');
		$data['box3_title'] = $this->blog->get_title($id);
		$data['box3_tag'] = $this->blog->get_published($id)." by ".$this->blog->get_author($id);
		$data['box3_content'] = substr($this->blog->get_contents($id),0,100)."...";
		$data['box3_link'] = "http://fiddlersway.com/blog/index/$id";
		
		$id = $this->blog->get_last_id('4');
		$data['box4_title'] = $this->blog->get_title($id);
		$data['box4_tag'] = $this->blog->get_published($id)." by ".$this->blog->get_author($id);
		$data['box4_content'] = substr($this->blog->get_contents($id),0,100)."...";
		$data['box4_link'] = "http://fiddlersway.com/blog/index/$id";
		
		$id = $this->blog->get_last_id('5');
		$data['box5_title'] = $this->blog->get_title($id);
		$data['box5_tag'] = $this->blog->get_published($id)." by ".$this->blog->get_author($id);
		$data['box5_content'] = substr($this->blog->get_contents($id),0,100)."...";
		$data['box5_link'] = "http://fiddlersway.com/blog/index/$id";
		
		$id = $this->blog->get_last_id('6');
		$data['box6_title'] = $this->blog->get_title($id);
		$data['box6_tag'] = $this->blog->get_published($id)." by ".$this->blog->get_author($id);
		$data['box6_content'] = substr($this->blog->get_contents($id),0,100)."...";
		$data['box6_link'] = "http://fiddlersway.com/blog/index/$id";
		
		
		
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('home_view',$data);
		
	}
}

