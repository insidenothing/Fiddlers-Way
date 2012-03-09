<?php


  require 'tmhOAuth.php';
  require 'tmhUtilities.php';

  $tmhOAuth = new tmhOAuth(array(
    'consumer_key' => 'zpZFKm7BdV4GdvmnZTeig',
    'consumer_secret' => 'oSkpQsZDulWZ3rkYY9GvcqwC7OM6eSRBnBEVKvD4JM',
    'user_token' => '40141316-8KWwBsK9ss4YfMqQsEAG2KN97GcHKGQZ7GfFx6yQC',
    'user_secret' => 'ScXgkCdYvpjaFa4cKODQt4Lx86Ob8iXBsQj0ne3Io',
  ));
  
  $code = $tmhOAuth->request('POST', $tmhOAuth->url('1/statuses/update'), array(
    'status' => 'My Twitter Message'
  ));
  
  if ($code == 200) {
  	tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
  } else {
  	tmhUtilities::pr($tmhOAuth->response['response']);
  }
  
  
  
  ?>