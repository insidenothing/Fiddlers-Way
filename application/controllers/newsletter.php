<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsletter extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Newsletter_model','newsletter');
		$id = $this->input->cookie('id');
		
		
		/** Newsletter Status */
		if ($this->input->cookie('email')){
			/* Logged In User */
			$data['newsletter_status'] = $this->newsletter->check_user($this->input->cookie('email'));
			$data['email'] = $this->input->cookie('email');	
			$data['confirm'] = '';
		}elseif($this->input->post('email'))
		{
			$data['newsletter_status'] = $this->newsletter->check_user($this->input->post('email'));
			$data['confirm'] = $this->newsletter->send_confirmation($this->input->post('email'));
			$data['email'] = $this->input->post('email');
		} else 
		{
			$data['newsletter_status'] = '';
			$data['email'] = '';
			$data['confirm'] = '';
		}
		
		
		if ($this->input->post('email_form')){
			$results .= $this->newsletter->set_data($id,'email',$this->input->post('email_form'));
		}
		if ($this->input->post('name')){
			$results .= $this->newsletter->set_data($id,'name',$this->input->post('name'));
		}
		if ($this->input->post('address')){
			$results .= $this->newsletter->set_data($id,'address',$this->input->post('address'));
		}
		if ($this->input->post('phone')){
			$results .= $this->newsletter->set_data($id,'phone',$this->input->post('phone'));
		}
		if ($this->input->post('obj_SPECULATION')){
			$results .= $this->newsletter->set_data($id,'obj_SPECULATION',$this->input->post('obj_SPECULATION'));
		}
		if ($this->input->post('obj_GROWTH')){
			$results .= $this->newsletter->set_data($id,'obj_GROWTH',$this->input->post('obj_GROWTH'));
		}
		if ($this->input->post('obj_CAPITAL PRESERVATION')){
			$results .= $this->newsletter->set_data($id,'obj_CAPITAL PRESERVATION',$this->input->post('obj_CAPITAL PRESERVATION'));
		}
		if ($this->input->post('obj_INCOME')){
			$results .= $this->newsletter->set_data($id,'obj_INCOME',$this->input->post('obj_INCOME'));
		}
		if ($this->input->post('exp_stock_mf')){
			$results .= $this->newsletter->set_data($id,'exp_stock_mf',$this->input->post('exp_stock_mf'));
		}
		if ($this->input->post('exp_bonds')){
			$results .= $this->newsletter->set_data($id,'exp_bonds',$this->input->post('exp_bonds'));
		}
		if ($this->input->post('exp_commodities_forex')){
			$results .= $this->newsletter->set_data($id,'exp_commodities_forex',$this->input->post('exp_commodities_forex'));
		}
		if ($this->input->post('exp_private_placement')){
			$results .= $this->newsletter->set_data($id,'exp_private_placement',$this->input->post('exp_private_placement'));
		}
		if ($this->input->post('risk_tolarance')){
			$results .= $this->newsletter->set_data($id,'risk_tolarance',$this->input->post('risk_tolarance'));
		}
		
		
		
		$data['name'] = get_data($id,'name');
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_common('newsletter_view',$data);
		
		
	}
	
	
	
	public function confirm($string)
	{
		$this->load->model('Newsletter_model','newsletter');
		$this->newsletter->confirm($string);
		$this->output->set_header("Location: /newsletter");
	}
	
	
	
	
}

