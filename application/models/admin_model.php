<?php
class Admin_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function get_pages($table)
	{
		$rows='';
		$query = $this->db->query("SELECT * from $table order by id DESC");
		if ($query->num_rows() == 0)
		{
			foreach ($query->result() as $row)
			{
				$rows .= "<tr><td>".$row->id."</td><td>".$row->seo."</td><td>".$row->title."</td></tr>";
			}
		}
		
		return $rows;
	}
	
	
	function get_title($id)
	{
		if ($id > 0)
		{
			$query = $this->db->query("SELECT title from blogs where id = '$id'");
			if ($query->num_rows() == 0)
			{
				$query = $this->db->query("SELECT title from blogs order by id DESC limit 0,1");
			}
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_author($id)
	{
		if ($id > 0)
		{
			$query = $this->db->query("SELECT author from blogs where id = '$id'");
			if ($query->num_rows() == 0)
			{
				$query = $this->db->query("SELECT author from blogs order by id DESC limit 0,1");
			}
		}
		$row = $query->row();
		$query->free_result();
		return $row->author;
	}

	function get_published($id)
	{
		if ($id > 0)
		{
			$query = $this->db->query("SELECT published from blogs where id = '$id'");
			if ($query->num_rows() == 0)
			{
				$query = $this->db->query("SELECT published from blogs order by id DESC limit 0,1");
			}
		}
		$row = $query->row();
		$query->free_result();
		return $row->published;
	}

	function get_contents($id)
	{
			if ($id > 0)
		{
			$query = $this->db->query("SELECT content from blogs where id = '$id'");
			if ($query->num_rows() == 0)
			{
				$query = $this->db->query("SELECT content from blogs order by id DESC limit 0,1");
			}
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}

	
	
}