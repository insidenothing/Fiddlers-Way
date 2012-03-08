<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Retweet extends CI_Controller {

	public function index()
	{
		
		
		$tweet_text = 'Hello Twitter';
		$data['response'] = "Posting...\n";
		$result = post_tweet($tweet_text);
		$data['response'] .= "Response code: " . $result . "\n";
		
		function post_tweet($tweet_text) {
		
			// Use Matt Harris' OAuth library to make the connection
			// This lives at: https://github.com/themattharris/tmhOAuth
			$this->load->library('OAuth','OAuth');
			//require_once('tmhoauth/tmhOAuth.php');
		
			// Set the authorization values
			// In keeping with the OAuth tradition of maximum confusion,
			// the names of some of these values are different from the Twitter Dev interface
			// user_token is called Access Token on the Dev site
			// user_secret is called Access Token Secret on the Dev site
			// The values here have asterisks to hide the true contents
			// You need to use the actual values from Twitter
			$connection = $this->OAuth->OAuth(array(
		    'consumer_key' => 'zpZFKm7BdV4GdvmnZTeig',
		    'consumer_secret' => 'oSkpQsZDulWZ3rkYY9GvcqwC7OM6eSRBnBEVKvD4JM',
		    'user_token' => '40141316-8KWwBsK9ss4YfMqQsEAG2KN97GcHKGQZ7GfFx6yQC',
		    'user_secret' => 'ScXgkCdYvpjaFa4cKODQt4Lx86Ob8iXBsQj0ne3Io',
			));
		
			// Make the API call
			$connection->request('POST',
			$connection->url('1/statuses/update'),
			array('status' => $tweet_text));
		
			return $connection->response['code'];
		}
		
		$CI->load->view('retweet_view',$data);
		
	}
}