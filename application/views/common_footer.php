
</div>
<!-- end #main-content -->


<div id="sidebar-right"
	class="sidebar">
	<div class="block">
		<div class="block-border">
			<div class="block-content">


				<div id="blog_subscription-2"
					class="widget jetpack_subscription_widget">
					<h4 class="widgettitle">
						<label for="subscribe-field">Fiddler&#039;s Way Newsletter</label>
					</h4>
					<div class="widgetcontent">


					<?php if (!$this->input->cookie('email')){?>
						<a name="subscribe-blog"></a>
						<form action="/newsletter" method="post" accept-charset="utf-8"
							id="subscribe-blog">
							<p>Enter your email address.</p>
							<p>
								<input name="email" type="email" value="E-Mail Address"
									onclick="this.value='';" onfocus="this.select()"
									onblur="this.value=!this.value?'E-Mail Address':this.value;"><input
									type="submit" value="Subscribe">
							</p>
							<p>
								<a href="/login">Log In</a>
							</p>
							<p>
								<a href="/login/reset">Reset Password</a>
							</p>
						</form>
						
						
						
						
						<?php }else{ ?>
							<p><a href="/newsletter">Manage Settings</a></p>
							<p><a href="/login/dologout">Log Out</a></p>
						<?php }?>
						<?php if ($this->input->cookie('level') == 'Operator'){?>
							<p><a href="/edit/create/pages">New Page</a></p>
							<p><a href="/edit/creste/wires">New Wire</a></p>
							<p><a href="/edit/create/blogs">New Blog</a></p>
							<p><a href="/ipo/create">Track New IPO</a></p>
							<p><a href="/admin">Administration</a></p>
						<?php }?>
					</div>
				</div>
				<!-- end .widget -->


				<div id="blog_subscription-2"
					class="widget jetpack_subscription_widget">
					<h4 class="widgettitle">
						<label for="subscribe-field">Premium Reports</label>
					</h4>
					<div class="widgetcontent">In Progress</div>
				</div>
				<!-- end .widget -->


				

				<div id="share-widget-2" class="widget share_links">
					<h4 class="widgettitle">Share this blog</h4>
					<div class="widgetcontent">
						<ul class="socialwrap size16 down">
							<li class="icon_text"><a rel='nofollow' target='_blank'
								title='Bookmark this blog : Fiddler&#039;s Way on Delicious'
								href='http://delicious.com/post?url=<?php echo $share_link; ?>&amp;title=<?php echo $share_title; ?>'
								style="background: transparent url(/assets/images/delicious.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="delicious"><span class="head">Bookmark on Delicious</span>
							</a></li>
							<li class="icon_text"><a rel='nofollow' target='_blank'
								title='Digg this blog : Fiddler&#039;s Way'
								href='http://digg.com/submit?url=<?php echo $share_link; ?>'
								style="background: transparent url(/assets/images/digg.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="digg"><span class="head">Digg this post</span> </a></li>
							<li class="icon_text"><a rel='nofollow' target='_blank'
								title='Recommend this blog : Fiddler&#039;s Way on Facebook'
								href='http://www.facebook.com/sharer.php?u=<?php echo $share_link; ?>'
								style="background: transparent url(/assets/images/facebook.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="facebook"><span class="head">Share on Facebook</span> </a>
							</li>
							<li class="icon_text"><a rel='nofollow' target='_blank'
								title='Share this blog : Fiddler&#039;s Way with Stumblers'
								href='http://www.stumbleupon.com/submit?url=<?php echo $share_link; ?>&amp;title=<?php echo $share_title; ?>'
								style="background: transparent url(/assets/images/stumble.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="stumble"><span class="head">Share with Stumblers</span> </a>
							</li>
							<li class="icon_text"><a rel="nofollow" target="_blank"
								style="background: transparent url(/assets/images/twitter.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="twitter"
								href="http://twitter.com/share?url=<?php echo $share_link; ?>&amp;text=<?php echo $share_title; ?>"
								title="Tweet this blog : Fiddler&#039;s Way on Twitter"><span
									class="head">Tweet about it</span> </a></li>
							<li class="icon_text"><a rel="_self"
								style="background: transparent url(/assets/images/rss.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="rss"
								title="Follow this blog : Fiddler&#039;s Way comments"><span
									class="head">Subscribe to this post</span> </a></li>
							<li class="icon_text"><a rel='nofollow' target='_self'
								title='Bookmark this blog : Fiddler&#039;s Way'
								href='javascript:window.bookMark("<?php echo $share_link; ?>", "<?php echo $share_title; ?>", BrowserDetect.browser);'
								style="background: transparent url(/assets/images/bookmark.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="bookmark"><span class="head">Bookmark in Browser</span> </a>
							</li>
							<li class="icon_text"><a rel="_self"
								style="background: transparent url(/assets/images/email.png) no-repeat top left; padding-left: 20px; line-height: 20px;"
								class="email"
								href="mailto:?subject=<?php echo $share_title; ?>&amp;body=here%20is%20a%20link%20to%20a%20site%20I%20really%20like.%20%20%20<?php echo $share_link; ?>"
								title="Tell a friend about this blog : Fiddler&#039;s Way "><span
									class="head">Email a friend</span> </a></li>
						</ul>
					</div>
				</div>
				<!-- end .widget -->
			</div>
			<!-- end .block-content -->

		</div>
		<!-- end .block-border -->
	</div>
	<!-- end .block -->


	<div class="block">
		<div class="block-border">
			<div class="block-content">
				<div class="widget widget_twitter">
					<h4 class="widgettitle">
						Recent Blog Posts
					</h4>
					<?php echo $left_blog_recent;?>
				</div>
				<!-- end .widget -->
			</div>
			<!-- end .block-content -->
		</div>
		<!-- end .block-border -->
	</div>
	<!-- end .block -->



	<div class="block">
		<div class="block-border">
			<div class="block-content">
				<div class="widget widget_twitter">
					<h4 class="widgettitle">
						<a href='http://twitter.com/FiddlersWay'>Join us on Twitter</a>
					</h4>




	
					


						<script charset="utf-8"
							src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 200,
  height: 300,
  theme: {
    shell: {
      background: '#F7F7F7',
      color: '#000000'
    },
    tweets: {
      background: '#F7F7F7',
      color: '#000000',
      links: '#6893A6'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('FiddlersWay').start();
</script>

				</div>
				<!-- end .widget -->




			</div>
			<!-- end .block-content -->
		</div>
		<!-- end .block-border -->
	</div>
	<!-- end .block -->
	
	
	
	<div class="block">
		<div class="block-border">
			<div class="block-content">
				<div class="widget widget_twitter">
					<h4 class="widgettitle">
						Archived Blog Posts
					</h4>
					<?php echo $left_blog_rest;?>
				</div>
				<!-- end .widget -->
			</div>
			<!-- end .block-content -->
		</div>
		<!-- end .block-border -->
	</div>
	<!-- end .block -->
	
	
	
	
</div>
<!-- end #sidebar-right -->

</div>
<!-- end .container -->

</div>
<!-- end #content -->

<div id="footer" class="clearfix">
	<div id="footer-content">
		<div class="container">


			<p id="copyright">
				&copy 2012 Fiddlers Way; <b>Francis Gaskins</b> and <b>Doug McLean</b>
			</p>

		</div>
		<!-- end .container -->
	</div>
	<!-- end #footer-content -->
</div>
<!-- end #footer -->
</div>
<!-- end #top-overlay -->




<div id="follow" class="right">
	<ul class="tab down">
		<li class="follow"><img src="/assets/images/blank.gif" alt="follow:" /><span>follow:</span>
		</li>
		<li class="iconOnly"><a rel="nofollow me" target="_blank"
			href="http://www.fiddlersway.com/feed/rss" title="RSS"><img
				src="/assets/images/blank.gif" height="24" width="24"
				style="background: transparent url(/assets/images/sprite-24.png) no-repeat; padding: 0; margin: 0; height: 24px; width: 24px; background-position: -1100px 0px"
				alt="RSS" /> <span class="head">RSS</span> </a></li>
	</ul>
</div>


<div style="display: none"></div>

</body>
</html>
<div>
	
	<?php if (isset($debug)){ echo $debug; }?></div>
