<?php

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
    'consumer_key' => '0HJAoD0m4mhe1QLfpb6gtA',
    'consumer_secret' => 'TSuL1zRC5VugvD6w28QHjAePmdGLqUaZImCKLy5xQjk',
    'user_token' => '469725083-gB3m4sTgBqRUjqhjosG4mYgQwowGX4NnUTPwE4kQ',
    'user_secret' => 'bVm8650lJGZsp3FXThCnh3QhJo0cRHrsqpaMF73tlMI',
	));

	// Make the API call
	$connection->request('POST',
	$connection->url('1/statuses/update'),
	array('status' => $tweet_text));

	return $connection->response['code'];
}

if (isset($_POST['message']))
{
	print $_POST['message'];
	$result = post_tweet(str_replace('$','#',$_POST['message']));
	//print "Response code: " . $result . "\n";
}else{
	print "No message to send...";
}
?>