<?php
class Edit_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function get_title($id,$table)
	{
		$query = $this->db->query("SELECT title from $table where id = '$id'");
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_author($id,$table)
	{
		$query = $this->db->query("SELECT author from $table where id = '$id'");
		$row = $query->row();
		$query->free_result();
		return $row->author;
	}

	function get_published($id,$table)
	{
		$query = $this->db->query("SELECT published from $table where id = '$id'");
		$row = $query->row();
		$query->free_result();
		return $row->published;
	}

	function get_contents($id,$table)
	{
		$query = $this->db->query("SELECT content from $table where id = '$id'");
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}


	function set_contents($id,$table,$content)
	{
		$query = $this->db->query("UPDATE $table set content = '$content' where id = '$id'");
		return 'updated';
	}
	
	
	
}