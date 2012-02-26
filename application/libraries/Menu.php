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
	
	function load_common($view,$data)
	{
		$CI =& get_instance();
		
		$CI->load->model('ipo_model','ipo');
		$data['home_ipos'] = $CI->ipo->get_home_list();
		
		
		$data['share_link'] = $CI->config->site_url().$CI->uri->uri_string();
		$data['share_title'] = "Fiddlers%20Way";
		$data['page_title'] = "Fiddler's Way | Timely, On-Target IPO Info by Francis Gaskins and Doug McLean";
		
		
		$CI->load->view('common_header',$data);
		$CI->load->view($view, $data);
		$CI->load->view('common_footer',$data);
	}
	
	
	function load_plain($view,$data)
	{
		$CI =& get_instance();
		$CI->load->view('plain_header');
		$CI->load->view($view, $data);
		$CI->load->view('plain_footer');
	}
	
}