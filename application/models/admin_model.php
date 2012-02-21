<?php
class Admin_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function get_pages($table,$controller)
	{
		$rows='';
		$query = $this->db->query("SELECT * from $table order by id DESC");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$rows .= "<tr><td>".$row->id."</td><td><a href='/$controller/index/".$row->seo."'>".$row->seo."</a></td><td>".$row->title."</td></tr>";
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