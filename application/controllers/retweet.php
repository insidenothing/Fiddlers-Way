<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Retweet extends CI_Controller {

	public function index()
	{
		$tweet = "Hello CodeIgniter";
		
		$curl = curl_init();
		curl_setopt ($curl, CURLOPT_URL, 'http://fiddlersway.com/legacy/retweet.php');
		curl_setopt ($curl, CURLOPT_TIMEOUT, '5');
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, '1');
		curl_setopt ($curl, CURLOPT_POSTFIELDS, "message=$tweet");
		$buffer = curl_exec ($curl);
		curl_close ($curl);
		$data['response'] = $buffer;
		$this->load->view('retweet_view',$data);
	}
}