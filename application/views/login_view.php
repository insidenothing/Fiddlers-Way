
<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">

			<div class="widget widget_text" id="text-2">



				<h2>Fiddlers Way</h2>
				
				
				
				
<?php if($response != ''){?>		
<li class="error"><?php echo $response;?></li>
<?php }?>
<?php echo validation_errors(); ?>
<div class="slate">
<?php echo form_open('login/dologin')?>
<?php if($from != ''){?>		
<input type="hidden" name="from" value="<?php echo $from;?>">
<?php }?>
	<table>
		<tr>
			<td>E-Mail Address</td>
			<td><?php echo form_input('email');?></td>
		</tr>
		<tr>	
			<td>Password</td>
			<td><?php echo form_password('password');?></td>
		</tr>
		<tr>	
			<td>&nbsp;</td>
			<td><?php echo form_submit('loginGo','Log In');?></td>
		</tr>
	</table>	
<?php echo form_close();?>
</div>	



			</div>
		</div>
	</div>
</div>
