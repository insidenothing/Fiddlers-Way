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
		/* check for a good transaction */
		$query = $this->db->query("select data_value from ipn_data where data_value = '	Completed' AND data_type = 'payment_status' AND transaction_id = '$transaction_id'");
		if ($query->num_rows() > 0)
		{
			/* get email address */
			$query = $this->db->query("select data_value from ipn_data where data_type = 'payer_email' AND transaction_id = '$transaction_id'");
			if ($query->num_rows() > 0)
			{
				/* check for matching user */
				$row = $query->row();
				$query2 = $this->db->query("select email from users where email = '".$row->data_value."'");
				if ($query2->num_rows() > 0)
				{
					/* update user to premium */
					$row2 = $query2->row();
					$query3 = $this->db->query("update users set premium_status = 'yes' where email = '".$row->data_value."'");
					$ipn_status = "Account (".$row->data_value.") <b>successfully</b> set to <b>premium status</b>";
				}else{
					/**
					 *
					 * This is where we should have a routine for automatically creating a user
					 *
					 */
					$ipn_status = "Unable to find email address in <b>user table</b>";
				}
			}else{
				$ipn_status = "Unable to find email address in <b>ipn data</b>.";
			}
		}else{
			$ipn_status = "Payment Status <b>Not</b> Complete";
		}
		
		
		
		
		
		
		$this->load->library('email');
		$this->email->from('no-reply@fiddlersway.com', 'Account Management');
		$this->email->to('patrick@fiddlersway.com');
		//$this->email->cc('');
		$this->email->subject('Paypal IPN Tranasaction #'.$transaction_id);
		$this->email->message('We have a new transaction, make sure it set itself up right!<br><br>'.$ipn_status);
		$this->email->send();
	}
	
}