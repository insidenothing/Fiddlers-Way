<?php
class Sales_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	
	function new_transaction()
	{
		$query = $this->db->query("insert into ipn_transactions ( processed ) values ( NOW() ) ");
		if ($query->num_rows() > 0)
		{
			return $this->db->insert_id();
		}
	}
	
	function record_ipn_data()
	{
		
	}
	
}