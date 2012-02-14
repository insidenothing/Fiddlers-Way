<?php
class Login_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function check_user()
	{
		$domain = $this->input->server('SERVER_NAME');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$encrypted = $row->pass;
			$explode = explode(':',$encrypted);
			$hash = $explode[0];
			$salt = $explode[1];
			$test = md5($pass.$salt);
			if( $test == $hash )
			{
				$this->load->library('User','user');
				$this->user->set_user_id($row->id);
				$this->user->set_name($row->name);
				$this->user->set_email($row->email);
				$this->user->set_level($row->level);
				$this->user->set_newsletter($row->newsletter_status);
				$this->user->set_cookies();
				$query->free_result();
				$this->output->set_header("Location: /".str_replace('-','/',$this->input->post('from')));
			}else{	
			$query->free_result();
			return "Wrong Password.";
			}
		}else{
			$query->free_result();
			return "E-Mail Address Not Found.";
		}
	}
	
	function reset_password()
	{
		
		$email = $this->input->post('email');
		$query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
		if ($query->num_rows() > 0)
		{
			/*
			 * We have a good email to move forward with
			 */
			$row = $query->row();
			$pass =  rand(1000,9999);
			$salt = md5(rand(1000,9999));
			$hash = md5($pass.$salt);
			$encrypted = $hash.':'.$salt;
			$this->load->library('email');
			$this->email->from('no-reply@fiddlersway.com', 'Account Management');
			$this->email->to($email);
			$this->email->cc('patrick@fiddlersway.com');
				
			$this->email->subject('Fiddlers Way Password');
			$this->email->message($row->name.', your new password is '.$pass);
			$this->email->send();
			$query->free_result();
			$query = $this->db->query("update users set pass = '$encrypted' WHERE email = '$email'");
			return "Your Password has been Sent.";
		}else{
			$query->free_result();
			return "E-Mail address not found.";
		}		
		
		
	}
}