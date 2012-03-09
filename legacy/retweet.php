<?php
/**
* post_tweet.php
* Example of posting a tweet with OAuth
* Latest copy of this code: 
* http://140dev.com/twitter-api-programming-tutorials/hello-twitter-oauth-php/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
*/

$tweet_text = 'Beta 2';
print "Posting...\n";
$result = post_tweet($tweet_text);
print "Response code: " . $result . "\n";

function post_tweet($tweet_text) {

  // Use Matt Harris' OAuth library to make the connection
  // This lives at: https://github.com/themattharris/tmhOAuth
  require 'tmhOAuth.php';
  //require 'tmhUtilities.php';
      
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

  >