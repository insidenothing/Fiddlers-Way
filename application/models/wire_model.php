<?php 
class Wire_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function get_id($seo)
	{
		$query = $this->db->query("SELECT id from wire where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT id from wire order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->id;
	}
	function get_title($seo)
	{
		$query = $this->db->query("SELECT title from wire where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT title from wire order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_contents($seo)
	{
		$query = $this->db->query("SELECT content from wire where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT content from wire order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}

	
	
}