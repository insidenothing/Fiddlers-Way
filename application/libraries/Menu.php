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
		$CI->load->view('common_header');
		$CI->load->view($view, $data);
		$CI->load->view('common_footer');
	}
	
	
	function load_plain($view,$data)
	{
		$CI =& get_instance();
		$CI->load->view('plain_header');
		$CI->load->view($view, $data);
		$CI->load->view('plain_footer');
	}
	
}