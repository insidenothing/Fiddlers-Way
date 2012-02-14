
<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">

			<div class="widget widget_text" id="text-2">





				<h2>Forgot Password? Use this form to reset your Fiddlers Way
					password.</h2>
				<h3>Your new password will be emailed to you upon form completion.</h3>
				
				
				
				
<?php if($response != ''){?>		
<li class="error"><?php echo $response;?></li>
<?php }?>
<?php echo validation_errors(); ?>
<div class="slate">
<?php echo form_open('login/do_reset')?>
	<table>
		<tr>
			<td>E-Mail Address</td>
			<td><?php echo form_input('email');?></td>
		</tr>
		<tr>	
			<td>&nbsp;</td>
			<td><?php echo form_submit('resetGo','Request New Password');?></td>
		</tr>
	</table>	
<?php echo form_close();?>
</div>	


			</div>
		</div>
	</div>
</div>
