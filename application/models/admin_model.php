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
				$rows .= "<tr><td>".$row->id."</td><td>".$row->seo."</td><td>".$row->title."</td></tr>";
			}
		}
		
		return $rows;
	}
	
	
	
}