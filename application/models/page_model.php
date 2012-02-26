<?php
class Page_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function get_id($seo)
	{
		$query = $this->db->query("SELECT id from pages where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT id from pages order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->id;
	}
	function get_title($seo)
	{
		$query = $this->db->query("SELECT title from pages where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT title from pages order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}
	function get_paid_status($seo)
	{
		$query = $this->db->query("SELECT paid_status from pages where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT paid_status from pages order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->paid_status;
	}
	function get_contents($seo)
	{
		$query = $this->db->query("SELECT content from pages where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT content from pages order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}

	
	
}