<?php 
class Retweet_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	

	
	
	function check_tweet($tweet,$note)
	{
		$query = $this->db->query("SELECT id from twitter where tweet = '$tweet' and note = '$note'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("insert into twitter (status,tweet,note) values ('new','$tweet','$note')");
			return " Tweet Added ";
		}else{
			return " Known Tweet ";
		}
	}
	
	function send_tweets()
	{
		$return = '';
		$query = $this->db->query("SELECT * from twitter where status = 'new' order by note ASC limit 0,1");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$curl = curl_init();
				curl_setopt ($curl, CURLOPT_URL, 'http://fiddlersway.com/legacy/retweet.php');
				curl_setopt ($curl, CURLOPT_TIMEOUT, '5');
				curl_setopt ($curl, CURLOPT_RETURNTRANSFER, '1');
				curl_setopt ($curl, CURLOPT_POSTFIELDS, "message=".html_entity_decode($row->tweet));
				$buffer = curl_exec ($curl);
				curl_close ($curl);
				$feedback = $buffer;
				$return .= $buffer;	
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->from('no-reply@fiddlersway.com', 'Fiddlers Way Update');
				$this->email->to('patrick@fiddlersway.com');
				$this->email->cc('doug@fiddlersway.com');
				$this->email->subject("Auto Retweet ".$row->note);
				$this->email->message(html_entity_decode($row->tweet));
				$this->email->send();
				$query = $this->db->query("update twitter set status = 'sent', feedback = '$feedback' where id = '".$row->id."' ");
			}
			return " Tweets Sent: $return";
		}else{
			return " Nothing to Send ";
		}
	}
	
	
}