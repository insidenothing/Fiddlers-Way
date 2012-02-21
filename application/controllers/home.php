<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array();
		
		/* 6 boxes */
		
		/** Last 2 Blogs */
		$data['box1_title'] = "Fiddler's Way";
		$data['box1_tag'] = "Feb 9, 2012 by Francis and Doug";
		$data['box1_content'] = "Bookmark on Delicious Digg this post Recommend on Facebook share via Reddit Share with Stumblers Tweet about it...";
		$data['box1_link'] = "http://www.fiddlersway.com/archives/53";
		
		$data['box2_title'] = "";
		$data['box2_tag'] = "";
		$data['box2_content'] = "";
		$data['box2_link'] = "";

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

