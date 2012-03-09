<?php

if (isset($_GET[message])){
	

$tweet_text = $_GET['message'];
print "Posting...\n";
$result = post_tweet($tweet_text);
print "Response code: " . $result . "\n";

function post_tweet($tweet_text) {

  // Use Matt Harris' OAuth library to make the connection
  // This lives at: https://github.com/themattharris/tmhOAuth
  require_once('tmhOAuth.php');
  
      
  // Set the authorization values
  // In keeping with the OAuth tradition of maximum confusion, 
  // the names of some of these values are different from the Twitter Dev interface
  // user_token is called Access Token on the Dev site
  // user_secret is called Access Token Secret on the Dev site
  // The values here have asterisks to hide the true contents 
  // You need to use the actual values from Twitter
  $connection = new tmhOAuth(array(
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
}else{
	"No message to send...";
}
?>