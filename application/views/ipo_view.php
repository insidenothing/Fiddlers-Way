<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<h4 class="widgettitle">IPO Details for <?php echo $symbol;?></h4>
			<table cellspacing="0" cellpadding="2" border="1" width="100%" style="border-colapse:colaspe;">				
				<tr>
					<td style="white-space: pre">Published</td>
					<td style="white-space: pre">Name</td>
					<td style="white-space: pre">Symbol</td>
					<td>Manager</td>
					<td style="white-space: pre">Catagory</td>
					<td style="white-space: pre">Shares (mm)</td>
					
					<td style="white-space: pre">Price Low</td>
					<td style="white-space: pre">Pre IPO Price</td>
					<td style="white-space: pre">Price High</td>
					
					<td style="white-space: pre">Pre IPO Amount (mm)</td>
					<td style="white-space: pre">Estimate</td>
					
					<td style="white-space: pre">Expected</td>
					<td style="white-space: pre">40 Day</td>
					<td style="white-space: pre">180 Day</td>
					<td>Rating</td>
					<td>Report</td>
				</tr>
			<?php echo $details; ?>
			</table>


		</div>
	</div>
</div>


<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
		<?php if ($premium == 'yes') { ?>
			<h4 class="widgettitle">Fiddlers Way Premium IPO Report</h4>			
			<?php echo $premium_content; ?>
		<?php }else{ ?>
			<h4 class="widgettitle">Subscribe to Fiddlers Way Premium</h4>
			<div>Our mission is to help subscribers make money.
			Recommend to your friends so you may help each other.
			15 day free trial.
			</div>

			<div><b>Member Benefits</b></div>
			<div>You'll get full site access including IPOreports - with early emailed buy/avoid IPO recommendations, 
			pre & post IPO  - with special emphasis on HIGH YIELDING IPOs.</div>
			<br><br>
			<table width="100%">
				<tr>
					<td align="left">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="S2KFMD6XY7X9L">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</td>
					<td align="right">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="S2KFMD6XY7X9L">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</td>
				</tr>		
			</table>
			<br><br>
		<?php } ?>
		</div>
	</div>
</div>

<?php if ($operator != ''){ ?>

<div class="block" style="margin-top: 5px;">
<div class="block-border">
<div class="block-content">
<h4 class="widgettitle">Operator: <?php echo $operator;?></h4>
			<div class="widget widget_text" id="text-2">
				<li><a href="/ipo/edit/<?php echo $symbol;?>">Edit IPO</a></li>
			</div>
		</div>
	</div>
</div>

	
<?php }?>
