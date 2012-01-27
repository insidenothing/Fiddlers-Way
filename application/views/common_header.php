<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to Fiddlers Way</title>
<link rel="stylesheet" type="text/css" href="/assets/css/common.css" />
<script SRC="/assets/js/common.js" TYPE="text/javascript"></script>

<link rel="stylesheet" href="/assets/css/jquery.twitter.css" type="text/css"
	media="all">

<script type="text/javascript" src="/assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.twitter.js"></script>

<script type="text/javascript">
			$(document).ready(function() {
				$("#twitter").getTwitter({
					userName: "FiddlersWay",
					numTweets: 5,
					loaderText: "Loading tweets...",
					slideIn: true,
					slideDuration: 750,
					showHeading: true,
					headingText: "Latest Tweets",
					showProfileLink: true,
					showTimestamp: true
				});
			});
		</script>

</head>
<body>
	<table width="100%" cellpadding="0" cellspacing="0" align='center'>
		<tr>
			<td colspan="4" align="center"><a href="/"><img
					src="/assets/images/fw2.jpg"> </a></td>
		</tr>
		<tr>
			<td width='200px' valign="top" bgcolor="#e8e9ea" align="center">
				<form action="/newsletter/signup" method="POST">
				<div>
					<div class="title">Newsletter</div>
					<input name="email" type="email" value="E-Mail Address" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'E-Mail Address':this.value;"><input type="submit" value="Subscribe">
				</div>
				</form>
				
				<form action="/membership/process" method="POST">				
				<div>
					<div class="title">Free Membership</div>
					<input name="email" type="email" value="E-Mail Address" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'E-Mail Address':this.value;"><input name="action" type="submit" value="Log In"><input name="action" type="submit" value="Sign Up">
					<!-- if we do not have a user to log in, start new user process -->
				</div>
				</form>
				
				<div>
					<a href="http://www.facebook.com/pages/Fiddlers-Way/327959043905298"><img
						src="/assets/images/facebook_logo.gif"></a>
				</div>
				<div>
					<a href="https://twitter.com/FiddlersWay"><img
						src="/assets/images/twitter_logo.gif"></a>
				</div>
				<div>
					<img src="/assets/images/linkedin_logo.gif">
				</div>
				<div>
					<img src="/assets/images/youtube_logo.gif">
				</div>
				

				<div id="twitter">
					
				</div>



			</td>
			<td width='400px' valign="top" bgcolor="#e8e9ea">