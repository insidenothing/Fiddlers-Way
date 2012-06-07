<?php
class Newsletter_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	
	function set_data($id,$field,$content)
	{
		$content = addslashes($content);
		mail('members@fiddlersway.com',$this->input->cookie('name').' Profile Update: '.$field,$content);
		$query = $this->db->query("UPDATE users set $field = '$content' where id = '$id'");
		return $field.' Updated, ';
	}
	function get_data($id,$field)
	{
		$query = $this->db->query("select $field from users where id = '$id'");
		if ($query->num_rows() > 0)
		{
			$row=$query->row_array();
			return stripslashes($row[$field]);
		}
		
	}
	function check_user($email)
	{
		$query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
		if ($query->num_rows() > 0)
		{
			$row=$query->row();
			/* we have a known email */
			if ($row->newsletter_status)
			{
				return '<b>'.$row->newsletter_status.'</b>';
			}else{
				return '<b>Awaiting Confirmation</b>';
			}
			
			
		}else{
			/* new user */
			$query = $this->db->query("insert into users (email) values ('$email') ");
			
			/* send email verification */
			
			return '(opt-out|opt-in|paid)';
		}
	}
	
	
	function confirm($string)
	{
		$query = $this->db->query("SELECT * FROM users WHERE newsletter_status = '$string'");
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$query = $this->db->query("update users set newsletter_status = 'opt-in' WHERE newsletter_status = '$string'");
			$this->load->library('User','user');
			$this->user->set_user_id($row->id);
			$this->user->set_name($row->name);
			$this->user->set_email($row->email);
			$this->user->set_level($row->level);
			$this->user->set_newsletter($row->newsletter_status);
			$this->user->set_premium($row->premium_status);
			$this->user->set_cookies();
		}
	}
	
	function send_confirmation($email)
	{
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
			$this->email->from('members@fiddlersway.com', 'Account Management');
			$this->email->to($email);
			$this->email->cc('members@fiddlersway.com');
			$confirmation_link = "http://fiddlersway.com/newsletter/confirm/$salt";
			$this->email->subject('Fiddlers Way Newsletter Confirmation');
			$line1 = 'Your password is '.$pass;
			$line2 = "<br><br><a href='$confirmation_link'>Click here to confirm subscription.</a><br>or copy and paste the following into your browser<br>$confirmation_link<br><br><br>Thanks,<br>Fiddlers Way Staff";
			$this->email->message($line1.$line2);
			$this->email->send();
			$query->free_result();
			$query = $this->db->query("update users set pass = '$encrypted', newsletter_status = '$salt' WHERE email = '$email'");
			return "Your Confirmation has been Sent.";
		}else{
			$query->free_result();
			return "E-Mail address not found.";
		}
	
	
	}
	
}