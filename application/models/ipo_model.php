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
	function get_list($symbol='')
	{
		$rows='';
		if ($symbol=='')
		{
			$query = $this->db->query("SELECT * from ipo_calendar order by published_date DESC");
		}else{
			$query = $this->db->query("SELECT * from ipo_calendar where symbol = '$symbol'");
		}
		
		
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
				<td>".$row->symbol."</td>
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
				
				<td><a href='http://fiddlersway.com/ipo/index/".$row->symbol."'>Link</a></td>
				
				</tr>";
			}
		}
	
		return $rows;
	}
	
	
	function get_home_list()
	{
		$rows='';
		$query = $this->db->query("SELECT * from ipo_calendar order by published_date DESC");
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$rows .= "<tr>
					<td>".$row->symbol."</td>
					<td>".$row->published."</td>
					<td><a href='http://fiddlersway.com/ipo/index/".$row->symbol."'>View</td>
				</tr>";
			}
		}
	
		return $rows;
	}
	
	function get_premium($symbol)
	{
		$query = $this->db->query("SELECT premium_report from ipo_calendar where symbol = '$symbol'");
		$row = $query->row();
		if ($row->content == '')
		{
			return "Premium Content Not Yet Released, Check Back Soon";
		}
		$row = $query->row();
		$query->free_result();
		return $row->content;
	}
	
	
}