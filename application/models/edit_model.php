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

	function get_seo($id,$table)
	{
		$query = $this->db->query("SELECT seo from $table where id = '$id'");
		$row = $query->row();
		$query->free_result();
		return $row->seo;
	}
	function set_contents($id,$table,$content)
	{
		$query = $this->db->query("UPDATE $table set content = '$content' where id = '$id'");
		return 'Content Updated, ';
	}
	function set_title($id,$table,$content)
	{
		$query = $this->db->query("UPDATE $table set title = '$content' where id = '$id'");
		return 'Title Updated, ';
	}
	function set_author($id,$table,$content)
	{
		$query = $this->db->query("UPDATE $table set author = '$content' where id = '$id'");
		return 'Author Updated, ';
	}
	function set_published($id,$table,$content)
	{
		$query = $this->db->query("UPDATE $table set published = '$content' where id = '$id'");
		return 'Published Updated, ';
	}
	function set_seo($id,$table,$content)
	{
		$query = $this->db->query("UPDATE $table set seo = '$content' where id = '$id'");
		return 'SEO Link Updated, ';
	}
	
}