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
	
		error_log(date('r').' IPN Ping '."\n",3,'/logs/ipn.log');
		// PHP 4.1
		
		// read the post from PayPal system and add 'cmd'
		$req = 'cmd=_notify-validate';
		
		foreach ($_POST as $key => $value) {
			$value = urlencode(stripslashes($value));
			$req .= "&$key=$value";
			
			error_log(date('r').' IPN: '."[ $key ] [ $value ] \n",3,'/logs/ipn.log');
		}
		
		// post back to PayPal system to validate
		$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
		$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
		$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
		
		// assign posted variables to local variables
		$item_name = $_POST['item_name'];
		$item_number = $_POST['item_number'];
		$payment_status = $_POST['payment_status'];
		$payment_amount = $_POST['mc_gross'];
		$payment_currency = $_POST['mc_currency'];
		$txn_id = $_POST['txn_id'];
		$receiver_email = $_POST['receiver_email'];
		$payer_email = $_POST['payer_email'];
		
		if (!$fp) {
			// HTTP ERROR
		} else {
			fputs ($fp, $header . $req);
			while (!feof($fp)) {
				$res = fgets ($fp, 1024);
				if (strcmp ($res, "VERIFIED") == 0) {
					// check the payment_status is Completed
					// check that txn_id has not been previously processed
					// check that receiver_email is your Primary PayPal email
					// check that payment_amount/payment_currency are correct
					// process payment
					//error_log(date('r').' IPN VERIFIED '."\n",3,'/logs/ipn.log');
				}
				else if (strcmp ($res, "INVALID") == 0) {
					// log for manual investigation
					//error_log(date('r').' IPN INVALID '."\n",3,'/logs/ipn.log');
				}
			}
			fclose ($fp);
		}
		
				
		
		
		
		$data['debug'] = 'debug';
		$this->load->library('Menu','menu');
		$this->menu->load_common('sales_view',$data);
	}
	
	
}
