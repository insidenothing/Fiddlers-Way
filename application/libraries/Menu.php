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
		
		
		$data2['share_link'] = $ci->config->site_url().$ci->uri->uri_string();
		$data2['share_title'] = "Fiddlers%20Way";
		
		$CI->load->view('common_header',$data);
		$CI->load->view($view, $data);
		$CI->load->view('common_footer',$data2);
	}
	
	
	function load_plain($view,$data)
	{
		$CI =& get_instance();
		$CI->load->view('plain_header');
		$CI->load->view($view, $data);
		$CI->load->view('plain_footer');
	}
	
}