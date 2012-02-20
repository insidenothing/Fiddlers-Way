<?php 
class Ipo_model extends CI_Model {


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function row_color($i){
		$bg1 = "#FFFFFF"; // color one
		$bg2 = "#FCFCFC"; // color two
		if ( $i%2 ) {
			return $bg1;
		} else {
			return $bg2;
		}
	}
	function get_list()
	{
		$rows='';
		$query = $this->db->query("SELECT * from ipo_calendar order by published_date DESC");
		if ($query->num_rows() > 0)
		{
			$i=0;
			foreach ($query->result() as $row)
			{
				$i++;
				$bgcolor = $this->row_color($i);
				$rows .= "<tr bgcolor='$bgcolor'>
				<td>".$row->published."</td>
				<td>".$row->name."</td>
				
				<td>".$row->manager."</td>
					<td>".$row->catagory."</td>
					<td>".$row->shares_mm."</td>
					
					<td>".$row->price_low."</td>
					<td>".$row->pre_ipo_price."</td>
					<td>".$row->price_high."</td>
					
					<td>".$row->pre_ipo_amount_mm."</td>
					<td>".$row->estimate."</td>
					
					<td>".$row->expected."</td>
					<td>".$row->day40."</td>
					<td>".$row->day180."</td>
				
				
				
				</tr>";
			}
		}
	
		return $rows;
	}
	
	
	function get_id($seo)
	{
		$query = $this->db->query("SELECT id from wire where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT id from wire order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->id;
	}
	function get_title($seo)
	{
		$query = $this->db->query("SELECT title from wire where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT title from wire order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->title;
	}

	function get_contents($seo)
	{
		$query = $this->db->query("SELECT content from wire where seo = '$seo'");
		if ($query->num_rows() == 0)
		{
			$query = $this->db->query("SELECT content from wire order by id DESC limit 0,1");
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}

	
	
}