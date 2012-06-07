<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function index($type,$id)
	{
		
		$this->load->model('Edit_model','edit');
		$results = '';
		if ($this->input->post('content')){
			$results .= $this->edit->set_contents($id,$type,addslashes($this->input->post('content')));
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$this->email->from('members@fiddlersway.com', 'Fiddlers Way Update');
			$this->email->to('members@fiddlersway.com');
			$this->email->cc('doug@fiddlersway.com');
			$this->email->subject($this->input->post('title').' on '.$this->input->post('published'));
			if ($type == 'pages'){
				$controller = 'page';
			}
			if ($type == 'blogs'){
				$controller = 'blog';
			}
			if ($type == 'wire'){
				$controller = 'wire';
			}
			if ($type == 'whitepapers'){
				$controller = 'whitepaper';
			}
			$permalink = "<hr>http://fiddlersway.com/$controller/index/".$this->input->post('seo');
			$membersLink="<br><br><br><br>To unsubscribe contact reply to this message with the word UNSUBSCRIBE in the body.";
			
			$queryX = $this->db->query("SELECT * from users where newsletter_status = 'opt-in'");
			if ($queryX->num_rows() > 0)
			{
				$debug = '';
				foreach ($queryX->result() as $rowX)
				{
					$this->email->bcc($rowX->email);
					$debug .= $rowX->email." \n";
				}
				mail('patrick@fiddlersway.com,doug@fiddlersway.com','FW Member Blast Information: Blog Feed',$this->input->post('content').$permalink.' \n \n sent to \n \n '.$debug);
			}
			
			
			
			$this->email->message($this->input->post('content').$permalink.$membersLink);
			$this->email->send();
		}
		if ($this->input->post('paid_status') && $type == 'pages'){
			$results .= $this->edit->set_paid_status($id,$type,addslashes($this->input->post('paid_status')));
		}
		if ($this->input->post('author')){
			$results .= $this->edit->set_author($id,$type,addslashes($this->input->post('author')));
		}
		if ($this->input->post('published')){
			$results .= $this->edit->set_published($id,$type,addslashes($this->input->post('published')));
		}
		if ($this->input->post('published_date')){
			$results .= $this->edit->set_published_date($id,$type,addslashes($this->input->post('published_date')));
		}
		if ($this->input->post('title')){
			$results .= $this->edit->set_title($id,$type,addslashes($this->input->post('title')));
		}
		if ($this->input->post('seo')){
			$results .= $this->edit->set_seo($id,$type,addslashes($this->input->post('seo')));
		}
		if ($this->input->cookie('level') == 'Operator')
		{
			$data['operator'] = $this->input->cookie('name');
		}else{
			$data['operator'] = '';
		}
		
		
		$data['results'] = $results;
		$data['id'] = $id;
		$data['type'] = $type;
		
		if ($type == 'pages')
		{
			$data['paid_status'] = $this->edit->get_paid_status($id,$type);
		}
		
		$data['title'] = $this->edit->get_title($id,$type);
		$data['author'] = $this->edit->get_author($id,$type);
		$data['published'] = $this->edit->get_published($id,$type);
		$data['published_date'] = $this->edit->get_published_date($id,$type);
		$data['contents'] = $this->edit->get_contents($id,$type);
		$data['seo'] = $this->edit->get_seo($id,$type);
		
		
		if ($type == 'pages'){
			$data['controller'] = 'page';
		}
		if ($type == 'blogs'){
			$data['controller'] = 'blog';
		}
		if ($type == 'wire'){
			$data['controller'] = 'wire';
		}
		if ($type == 'whitepapers'){
			$data['controller'] = 'whitepaper';
		}
		
		
		
		$this->load->library('Menu','menu');
		$this->menu->load_plain('edit_view',$data);
		
		
	}
	
	
	public function create($type)
	{
		$this->load->model('Edit_model','edit');
		$id = $this->edit->new_item($type);
		$this->output->set_header("Location: /edit/index/$type/$id");
	}
	
	
	
	
}



