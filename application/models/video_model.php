<?php
class Video_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function get_list($catagory)
	{
		$rows='';
		$query = $this->db->query("SELECT * from videos  where catagory = '$catagory' order by id DESC");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$rows .= "<tr><td><a href='/video/index/".$row->seo."'>Watch Video</td><td>".$row->title."</td><td>".$row->comment."</td></tr>";
			}
		}
	
		return $rows;
	}
	
	function get_seo($seo='')
	{
		$query = $this->db->query("SELECT seo from videos where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT seo from videos order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->seo;
	}
	function get_id($seo)
	{
		$query = $this->db->query("SELECT id from videos where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT id from videos order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->id;
	}
	
	function get_title($seo)
	{
		$query = $this->db->query("SELECT title from videos where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT title from videos order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_contents($seo)
	{
		$query = $this->db->query("SELECT content from videos where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT content from videos order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}

	function get_comments($seo)
	{
		$query = $this->db->query("SELECT comment from videos where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT comment from videos order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->comment;
	}
	
}