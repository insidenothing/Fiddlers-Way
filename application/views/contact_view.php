<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<div class="widget widget_text">
				<h4>West Palm Beach, FL Office</h4>
				Doug McLean<br>
				doug@fiddlersway.com<br>
				561 866-4751<br>
				<br>
				<h4>Los Angeles, CA Office</h4>
				info@fiddlersway.com<br>
				<br>		
			</div>
		</div>
	</div>
</div>

<form method="post" action="/contact">

<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<div class="widget widget_text">
				<h4>Send Message</h4>
				<table width="100%">
					<tr>
						<td width="50%"><?php echo $feedback; ?></td>
						<td width="50%"><select name="spam"><option>1</option><option>2</option></select></td>
					</tr>
					<tr>
						<td width="50%">From:</td>
						<?php if ($email != ''){?>
							<td width="50%"><input name="email" type="email" value="<?php echo $email;?>"></td>
						<?php }else{ ?>
							<td width="50%"><input name="email" type="email" value="E-Mail Address" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'E-Mail Address':this.value;"></td>
						<?php }?>
					</tr>
					<tr>
						<td width="50%">Subject:</td>
						<td width="50%"><input name="subject" value="<?php echo $subject;?>"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><textarea rows="5" cols="45" name="body"><?php echo $body;?></textarea></td>
					</tr>
				</table>
				<center><img src="/assets/images/slogan-bg.png" width="400" height="25" /><br><input type="submit" value="<?php echo $feedback2; ?>"></center>
			</div>
		</div>
	</div>
</div>

</form>

