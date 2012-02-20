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
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$rows .= "<tr><td><a href='/video/index/".$row->seo."'>Watch Video</td><td>".$row->title."</td><td>".$row->comment."</td></tr>";
			}
		}
		
		return $rows;
	}
	
	
	function get_ipos()
	{
		$rows='';
		$query = $this->db->query("SELECT * from ipo_calendar order by published DESC");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$rows .= "<tr><td>".$row->id."</td><td>".$row->published."</td><td>".$row->name."</td></tr>";
			}
		}
	
		return $rows;
	}
	
}