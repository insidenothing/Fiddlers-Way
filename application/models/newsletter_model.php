<?php
class Newsletter_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function check_user($email)
	{
		$query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
		if ($query->num_rows() > 0)
		{
			/* we have a known email */
			return 'email found';
		}else{
			/* new user */
			return 'email not found';
		}
	}
}