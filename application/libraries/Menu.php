<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu   {

	var $CI;
	var $id;
	var $product;

	public function set_id($id)
	{
		$this->id = $id;
	}
	public function set_product($product)
	{
		$this->product = $product;
	}

	function page_title($class,$method,$seo)
	{
		$txt = '';
		$CI =& get_instance();
		if ($class == 'home')
		{
			$txt = 'Timely, On-Target IPO Info by Francis Gaskins and Doug McLean';
		}
		if ($class == 'blog')
		{
			$CI->load->model('blog_model','blog');
			$txt = $CI->blog->get_title($seo);
		}
		if ($class == 'page')
		{
			$CI->load->model('page_model','page');
			$txt = $CI->page->get_title($seo);
		}
		if ($class == 'ipo')
		{
			$CI->load->model('ipo_model','ipo');
			$txt = 'IPO Information for '.$CI->ipo->get_ipo_data('name',$seo);
		}
		if ($class == 'video')
		{
			$CI->load->model('video_model','video');
			$txt = $CI->video->get_title($seo);
		}
		if ($txt == '') /* just in case we release a new class before coding here */
		{
			$txt = 'Timely, On-Target IPO Info by Francis Gaskins and Doug McLean';
		}
		return "Fiddler's Way | ".$txt;
	}


	function load_common($view,$data)
	{
		$CI =& get_instance();
		$CI->load->model('ipo_model','ipo');
		$CI->load->model('page_model','page');
		$CI->load->model('blog_model','blog');

		$data['home_ipos'] = $CI->ipo->get_home_list();
		$data['share_link'] = $CI->config->site_url().$CI->uri->uri_string();
		$data['share_title'] = "Fiddlers%20Way";
		$data['page_title'] = $this->page_title($CI->router->class,$CI->router->method,$CI->uri->segment(3, 0));
		$data['debug'] = '';


		$data['left_premium'] = $CI->page->get_premium_pages('0','5');
		$data['left_blog_recent'] = $CI->blog->get_blog_list('0','5');
		$data['left_blog_rest'] = $CI->blog->get_blog_list('5','20');

	


		$CI->load->view('common_header',$data);
		$CI->load->view($view, $data);
		$CI->load->view('common_footer',$data);
	}


	function load_plain($view,$data)
	{
		$CI =& get_instance();
		$data['page_title'] = $this->page_title($CI->router->class,$CI->router->method,$CI->uri->segment(3, 0));
		$CI->load->view('plain_header',$data);
		$CI->load->view($view, $data);
		$CI->load->view('plain_footer');
	}

	

}