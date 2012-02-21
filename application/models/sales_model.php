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
	
	function record_ipn_data()
	{
		
	}
	
}