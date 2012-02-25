<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ipo extends CI_Controller {

	public function index($symbol)
	{
		$this->load->model('ipo_model','ipo');
		$data['symbol'] = $symbol;
		$data['details'] = $this->ipo->get_list($symbol);

		$data['premium'] = $this->input->cookie('premium');
		$data['premium_content'] = $this->ipo->get_premium($symbol);
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		$this->load->library('Menu','menu');
		$this->menu->load_plain('ipo_view',$data);
	}

	public function create()
	{
		$this->load->model('ipo_model','ipo');
		$symbol = $this->ipo->new_item();
		$this->output->set_header("Location: /ipo/edit/$symbol");
	}

	public function edit($symbol)
	{
		$results='';
		$this->load->model('ipo_model','ipo');
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}


		/* check for an updated symbol */
		if ($this->input->post('symbol')){
			$results .= $this->ipo->set_ipo_data('symbol',$symbol,$this->input->post('symbol'));
			$data['symbol'] = $this->input->post('symbol');
		}else{
			$data['symbol'] = $symbol;
		}
		
		/* Record Updates */
		if ($this->input->post('premium_report')){
			$results .= $this->ipo->set_ipo_data('premium_report',$data['symbol'],$this->input->post('premium_report'));
		}
		if ($this->input->post('published')){
			$results .= $this->ipo->set_ipo_data('published',$data['symbol'],$this->input->post('published'));
		}
		if ($this->input->post('published_date')){
			$results .= $this->ipo->set_ipo_data('published_date',$data['symbol'],$this->input->post('published_date'));
		}
		if ($this->input->post('name')){
			$results .= $this->ipo->set_ipo_data('name',$data['symbol'],$this->input->post('name'));
		}
		if ($this->input->post('notes')){
			$results .= $this->ipo->set_ipo_data('notes',$data['symbol'],$this->input->post('notes'));
		}
		if ($this->input->post('manager')){
			$results .= $this->ipo->set_ipo_data('manager',$data['symbol'],$this->input->post('manager'));
		}
		if ($this->input->post('catagory')){
			$results .= $this->ipo->set_ipo_data('catagory',$data['symbol'],$this->input->post('catagory'));
		}
		if ($this->input->post('shares_mm')){
			$results .= $this->ipo->set_ipo_data('shares_mm',$data['symbol'],$this->input->post('shares_mm'));
		}
		if ($this->input->post('price_high')){
			$results .= $this->ipo->set_ipo_data('price_high',$data['symbol'],$this->input->post('price_high'));
		}
		if ($this->input->post('pre_ipo_price')){
			$results .= $this->ipo->set_ipo_data('pre_ipo_price',$data['symbol'],$this->input->post('pre_ipo_price'));
		}
		if ($this->input->post('price_low')){
			$results .= $this->ipo->set_ipo_data('price_low',$data['symbol'],$this->input->post('price_low'));
		}
		if ($this->input->post('estimate')){
			$results .= $this->ipo->set_ipo_data('estimate',$data['symbol'],$this->input->post('estimate'));
		}
		if ($this->input->post('pre_ipo_amount_mm')){
			$results .= $this->ipo->set_ipo_data('pre_ipo_amount_mm',$data['symbol'],$this->input->post('pre_ipo_amount_mm'));
		}
		if ($this->input->post('expected')){
			$results .= $this->ipo->set_ipo_data('expected',$data['symbol'],$this->input->post('expected'));
		}
		if ($this->input->post('rating_public')){
			$results .= $this->ipo->set_ipo_data('rating_public',$data['symbol'],$this->input->post('rating_public'));
		}
		if ($this->input->post('recommendation_public')){
			$results .= $this->ipo->set_ipo_data('recommendation_public',$data['symbol'],$this->input->post('recommendation_public'));
		}
		if ($this->input->post('day40')){
			$results .= $this->ipo->set_ipo_data('day40',$data['symbol'],$this->input->post('day40'));
		}
		if ($this->input->post('day180')){
			$results .= $this->ipo->set_ipo_data('day180',$data['symbol'],$this->input->post('day180'));
		}
		if ($this->input->post('rating_paid')){
			$results .= $this->ipo->set_ipo_data('rating_paid',$data['symbol'],$this->input->post('rating_paid'));
		}
		if ($this->input->post('recommendation_paid')){
			$results .= $this->ipo->set_ipo_data('recommendation_paid',$data['symbol'],$this->input->post('recommendation_paid'));
		}
		
		
		/* send email after all information has been updated */
		if ($this->input->post('symbol')){
			$this->load->library('email');
			$this->email->from('no-reply@fiddlersway.com', 'Fiddlers Way Update');
			$this->email->to('patrick@fiddlersway.com');
			$this->email->cc('doug@fiddlersway.com');
			$this->email->subject('Premium IPO Update: '.$this->input->post('symbol').' on '.$this->input->post('published'));
			$details = $this->ipo->get_list($this->input->post('symbol'));
			$body = '<table cellspacing="0" cellpadding="2" border="1" width="100%" style="border-colapse:colaspe;">				
				<tr>
					<td style="white-space: pre">Published</td>
					<td style="white-space: pre">Name</td>
					<td style="white-space: pre">Symbol</td>
					<td>Manager</td>
					<td style="white-space: pre">Catagory</td>
					<td style="white-space: pre">Shares (mm)</td>
					
					<td style="white-space: pre">Price Low</td>
					<td style="white-space: pre">Pre IPO Price</td>
					<td style="white-space: pre">Price High</td>
					
					<td style="white-space: pre">Pre IPO Amount (mm)</td>
					<td style="white-space: pre">Estimate</td>
					
					<td style="white-space: pre">Expected</td>
					<td style="white-space: pre">40 Day</td>
					<td style="white-space: pre">180 Day</td>
					<td>Rating</td>
					<td>Report</td>
				</tr>'.$details.'</table>';
			$this->email->message($body.$this->input->post('premium_report'));
			$this->email->send();
		}
		
		
		

		/* Public Data */
		$data['published'] = $this->ipo->get_ipo_data('published',$data['symbol']);
		$data['published_date'] = $this->ipo->get_ipo_data('published_date',$data['symbol']);
		$data['name'] = $this->ipo->get_ipo_data('name',$data['symbol']);
		$data['notes'] = $this->ipo->get_ipo_data('notes',$data['symbol']);
		$data['manager'] = $this->ipo->get_ipo_data('manager',$data['symbol']);
		$data['catagory'] = $this->ipo->get_ipo_data('catagory',$data['symbol']);
		$data['shares_mm'] = $this->ipo->get_ipo_data('shares_mm',$data['symbol']);
		$data['price_high'] = $this->ipo->get_ipo_data('price_high',$data['symbol']);
		$data['pre_ipo_price'] = $this->ipo->get_ipo_data('pre_ipo_price',$data['symbol']);
		$data['price_low'] = $this->ipo->get_ipo_data('price_low',$data['symbol']);
		$data['estimate'] = $this->ipo->get_ipo_data('estimate',$data['symbol']);
		$data['pre_ipo_amount_mm'] = $this->ipo->get_ipo_data('pre_ipo_amount_mm',$data['symbol']);
		$data['expected'] = $this->ipo->get_ipo_data('expected',$data['symbol']);
		$data['rating_public'] = $this->ipo->get_ipo_data('rating_public',$data['symbol']);
		$data['recommendation_public'] = $this->ipo->get_ipo_data('recommendation_public',$data['symbol']);
		$data['day40'] = $this->ipo->get_ipo_data('day40',$data['symbol']);
		$data['day180'] = $this->ipo->get_ipo_data('day180',$data['symbol']);
		
		/* Premium Data */
		$data['premium_report'] = $this->ipo->get_ipo_data('premium_report',$data['symbol']);
		$data['rating_paid'] = $this->ipo->get_ipo_data('rating_paid',$data['symbol']);
		$data['recommendation_paid'] = $this->ipo->get_ipo_data('recommendation_paid',$data['symbol']);
		
		/* common data */
		$data['results'] = $results;

		/* load view */
		$this->load->library('Menu','menu');
		$this->menu->load_plain('ipo_edit_view',$data);
	}
}

