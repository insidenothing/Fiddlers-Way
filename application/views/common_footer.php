
</div>
<!-- end #main-content -->


<div id="sidebar-right" class="sidebar">





<?php if (!$this->input->cookie('email')){
	/* only show when logged out */ ?>
	<div class="block">
		<div class="block-border">
			<div class="block-content">
					<h4 class="widgettitle">Free Newsletter</h4>
					
						<div class="widgetcontent">



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
							</form>
						</div>
						<!-- end .widget -->
					</div>
					<!-- end .block-content -->
				</div>
				<!-- end .block-border -->
			</div>
			<!-- end .block -->
			
			
	<?php }?>



	<div class="block">
		<div class="block-border">
			<div class="block-content">
				<div class="widget widget_twitter">
					Gaskins and McLean
<h4 class="widgettitle">In The News</h4>

 <div id="content-news" style="margin-left: -23px;">
    <span style="color:#676767;font-size:11px;margin:10px;padding:4px;">Loading...</span>
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
						Premium Reports
					</h4>
					<?php echo $left_premium;?>
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
						Members Only
					</h4>
					<div id="blog_subscription-2"
					class="widget jetpack_subscription_widget">
					<div class="widgetcontent">


					<?php if (!$this->input->cookie('email')){?>
					
							<p><a href="/sales">Join Today</a></p>
							<p><a href="/login">Log In</a></p>
							<p><a href="/login/reset">Reset Password</a></p>
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
						Recent Posts
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
