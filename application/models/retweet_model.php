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
			return "<li>Tweet Added</li>";
		}else{
			return "<li>Known Tweet</li>";
		}
	}
	
	
	
	
}