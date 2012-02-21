<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function index()
	{
		//$this->output->enable_profiler(TRUE);
		//$this->load->model('admin_model','admin');
		//$data['pages'] = $this->admin->get_pages('pages');
		
		$data['debug'] = 'debug';
		$this->load->library('Menu','menu');
		$this->menu->load_common('sales_view',$data);
	}

	public function cancel()
	{
		//$this->output->enable_profiler(TRUE);
		//$this->load->model('admin_model','admin');
		//$data['pages'] = $this->admin->get_pages('pages');
	
		$data['debug'] = 'debug';
		$this->load->library('Menu','menu');
		$this->menu->load_common('sales_view',$data);
	}
	
	
	public function success()
	{
		//$this->output->enable_profiler(TRUE);
		//$this->load->model('admin_model','admin');
		//$data['pages'] = $this->admin->get_pages('pages');
	
		$data['debug'] = 'debug';
		$this->load->library('Menu','menu');
		$this->menu->load_common('sales_view',$data);
	}
	
	public function ipn()
	{
		$this->output->enable_profiler(TRUE);
		//$this->load->model('admin_model','admin');
		//$data['pages'] = $this->admin->get_pages('pages');
	
		$data['debug'] = 'debug';
		$this->load->library('Menu','menu');
		$this->menu->load_common('sales_view',$data);
	}
	
	
}
