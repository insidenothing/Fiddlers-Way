<?php
class Page_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function get_title($id)
	{
		if ($id > 0)
		{
			$query = $this->db->query("SELECT title from pages where id = '$id'");
		}else
		{
			$limit = ($id*-1)-1;
			$query = $this->db->query("SELECT title from pages order by id DESC limit $limit,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_contents($id)
	{
			if ($id > 0)
		{
			$query = $this->db->query("SELECT content from pages where id = '$id'");
		}else
		{
			$limit = ($id*-1)-1;
			$query = $this->db->query("SELECT content from pages order by id DESC limit $limit,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}

	
	
}