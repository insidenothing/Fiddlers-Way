<?php
class Blog_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function get_blog_list($limit='1') /* added 2/27/2012 */
	{
		$list = '';
		$query = $this->db->query("SELECT * from blogs order by id DESC limit 0,$limit");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$list = "<li><a href='/blog/index/".$row->seo."'>".$row->title."</a></li>";
			}
		}
		
		return $list;
	}
	
	function get_id($seo)
	{
		
		$query = $this->db->query("SELECT id from blogs where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT id from blogs order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->id;
	}
	
	function get_title($seo)
	{
		$query = $this->db->query("SELECT title from blogs where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT title from blogs order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_author($seo)
	{
		$query = $this->db->query("SELECT author from blogs where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT author from blogs order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->author;
	}

	function get_published($seo)
	{
		$query = $this->db->query("SELECT published from blogs where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT published from blogs order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->published;
	}

	function get_contents($seo)
	{
		$query = $this->db->query("SELECT content from blogs where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT content from blogs order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}

	function get_last_id($limit)
	{
		$limit = $limit - 1; /* offset for index starting at 1 */
		$query = $this->db->query("SELECT seo from blogs order by published_date DESC limit $limit, 1");
		$row = $query->row();
		$query->free_result();
		return $row->seo;
	}
	
	
}