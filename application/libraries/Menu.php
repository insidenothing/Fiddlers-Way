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
	
	function load_common($view,$tab,$data)
	{
		$CI =& get_instance();
		
		$tab['logo_spot'] = '<center><div id="logo"><a href="/"><img id="company_logo" src="/assets/images/logo.png"></a></div></center>';
		$CI->load->view('common_header',$tab);
		$this->load_right_menus();
		$CI->load->view($view, $data);
		$this->load_left_menus();
		$CI->load->view('common_footer');
	}
	
	public function load_left_menus()
	{
		$menu = array();
		$CI =& get_instance();
		$CI->load->view('left_menu',$menu);
	}
	
	function load_right_menus()
	{
		$data = array();
		$CI =& get_instance();
		$CI->load->view('right_menu',$data);
	}
	
	

	
}