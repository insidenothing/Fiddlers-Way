<?php
class Whitepaper_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function get_id($seo)
	{
		$query = $this->db->query("SELECT id from whitepapers where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT id from whitepapers order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->id;
	}
	function get_title($seo)
	{
		$query = $this->db->query("SELECT title from whitepapers where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT title from whitepapers order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_contents($seo)
	{
		$query = $this->db->query("SELECT content from whitepapers where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT content from whitepapers order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}
	function get_published($seo)
	{
		$query = $this->db->query("SELECT published from whitepapers where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT published from whitepapers order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->published;
	}
	function get_author($seo)
	{
		$query = $this->db->query("SELECT author from whitepapers where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT author from whitepapers order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->author;
	}
	
}