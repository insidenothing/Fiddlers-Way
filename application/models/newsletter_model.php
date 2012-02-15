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
			$row=$query->row();
			/* we have a known email */
			return '<b>'.$row->newsletter_status.'</b>';
		}else{
			/* new user */
			return '(opt-out|opt-in|paid)';
		}
	}
}