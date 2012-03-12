<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Retweet extends CI_Controller {

	public function index()
	{
		$data['response'] = "Select Option...";
		$this->load->view('retweet_view',$data);
	}
	public function loadT()
	{
		
		$buffer='';
		$twitterRssFeedUrl =  "https://twitter.com/statuses/user_timeline/IPOdesktop.rss";
		$twitterUsername = "ipodesktop";
		$amountToShow = 20;
		$twitterPosts = false;
		$xml = @simplexml_load_file($twitterRssFeedUrl);
		if(is_object($xml)){
			foreach($xml->channel->item as $twit){
				if(is_array($twitterPosts) && count($twitterPosts)==$amountToShow){
					break;
				}
				$d['title'] = stripslashes(htmlentities($twit->title,ENT_QUOTES,'UTF-8'));
				$description = stripslashes(htmlentities($twit->description,ENT_QUOTES,'UTF-8'));
				if(strtolower(substr($description,0,strlen($twitterUsername))) == strtolower($twitterUsername)){
					$description = substr($description,strlen($twitterUsername)+1);
				}
				$d['description'] = $description;
				$d['pubdate'] = strtotime($twit->pubDate);
				$d['guid'] = stripslashes(htmlentities($twit->guid,ENT_QUOTES,'UTF-8'));
				$d['link'] = stripslashes(htmlentities($twit->link,ENT_QUOTES,'UTF-8'));
				$twitterPosts[]=$d;
			}
		}else{
			die('cannot connect to twitter feed');
		}
		$this->load->model('retweet_model','twitter');
		if(is_array($twitterPosts)){
			$buffer .= '<ul>';
			foreach($twitterPosts as $post){
				$queue = $this->twitter->check_tweet($post['description'],$post['pubdate']);
				$buffer .= '<li><p>'.$post['description'].'</p><p class="date">Posted On: '.date('l jS \of F Y h:i:s A',$post['pubdate']).' -|- '.$queue.'</p></li>';
			}
			$buffer .= '</ul>';
		}else{
			$buffer .= '<p>No Twitter posts have been made</p>';
		}
		
		$data['response'] = $buffer;
		$this->load->view('retweet_view',$data);
	}
	
	
	public function viewT()
	{
	
		$buffer='';
		$twitterRssFeedUrl =  "https://twitter.com/statuses/user_timeline/IPOdesktop.rss";
		$twitterUsername = "ipodesktop";
		$amountToShow = 20;
		$twitterPosts = false;
		$xml = @simplexml_load_file($twitterRssFeedUrl);
		if(is_object($xml)){
			foreach($xml->channel->item as $twit){
				if(is_array($twitterPosts) && count($twitterPosts)==$amountToShow){
					break;
				}
				$d['title'] = stripslashes(htmlentities($twit->title,ENT_QUOTES,'UTF-8'));
				$description = stripslashes(htmlentities($twit->description,ENT_QUOTES,'UTF-8'));
				if(strtolower(substr($description,0,strlen($twitterUsername))) == strtolower($twitterUsername)){
					$description = substr($description,strlen($twitterUsername)+1);
				}
				$d['description'] = $description;
				$d['pubdate'] = strtotime($twit->pubDate);
				$d['guid'] = stripslashes(htmlentities($twit->guid,ENT_QUOTES,'UTF-8'));
				$d['link'] = stripslashes(htmlentities($twit->link,ENT_QUOTES,'UTF-8'));
				$twitterPosts[]=$d;
			}
		}else{
			die('cannot connect to twitter feed');
		}
	
		if(is_array($twitterPosts)){
			$buffer .= '<ul>';
			foreach($twitterPosts as $post){
				$buffer .= '<li><p>'.$post['description'].'</p><p class="date">Posted On: '.date('l jS \of F Y h:i:s A',$post['pubdate']).'</p></li>';
			}
			$buffer .= '</ul>';
		}else{
			$buffer .= '<p>No Twitter posts have been made</p>';
		}
	
		$data['response'] = $buffer;
		$this->load->view('retweet_view',$data);
	}
	
	
	public function sendT()
	{
		
		$tweet = "Hello CodeIgniter";
		/*
		$curl = curl_init();
		curl_setopt ($curl, CURLOPT_URL, 'http://fiddlersway.com/legacy/retweet.php');
		curl_setopt ($curl, CURLOPT_TIMEOUT, '5');
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, '1');
		curl_setopt ($curl, CURLOPT_POSTFIELDS, "message=$tweet");
		$buffer = curl_exec ($curl);
		curl_close ($curl);
		$data['response'] = $buffer;
		$this->load->view('retweet_view',$data);
		*/
	}
	
}