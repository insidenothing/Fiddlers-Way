<?php
class Sales_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	
	function new_transaction()
	{
		$ip = $this->input->ip_address();
		$query = $this->db->query("insert into ipn_transactions ( ip, processed ) values ( '$ip', NOW() ) ");
		if ($this->db->insert_id() > 0)
		{
			return $this->db->insert_id();
		}
	}
	
	function record_ipn_data($transaction_id,$data_type,$data_value)
	{
		$ip = $this->input->ip_address();
		$query = $this->db->query("insert into ipn_data ( transaction_id, ip, data_type, data_value ) values ( '$transaction_id', '$ip', '$data_type' , '$data_value' ) ");
		if ($this->db->insert_id() > 0)
		{
			return $this->db->insert_id();
		}
	}
	
	function post_ipn_hook($transaction_id)
	{
		$ip = $this->input->ip_address();
		$this->load->library('email');
		$this->email->from('no-reply@fiddlersway.com', 'Account Management');
		$this->email->to('patrick@fiddlersway.com');
		//$this->email->cc('');
		$this->email->subject('Paypal IPN Tranasaction #'.$transaction_id);
		$this->email->message('We have a new transaction, make sure it set itself up right!');
		$this->email->send();
	}
	
}