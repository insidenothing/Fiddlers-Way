<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<div class="widget widget_text">
				<form action="http://fiddlersway.com/newsletter" method="POST">
				<h4>Required Information</h4>
				<?php echo $results;?>
				<table width="100%">
					<tr>
						<td width="50%">E-MAIL</td>
						<td width="50%"><input name="email_form" value="<?php echo $email_form;?>"></td>
					</tr>
					<tr>
						<td width="50%"></td>
						<td width="50%"><?php echo $confirm;?></td>
					</tr>
				</table>
				<br><br>
				<h4>Additional Information Unlocks Member Benefits</h4>
				<table width="100%">
					<tr>
						<td width="50%">NAME</td>
						<td width="50%"><input name="name" value="<?php echo $name;?>"></td>
					</tr>
					<tr>
						<td>ADDRESS</td>
						<td><input name="address" value="<?php echo $address;?>"></td>
					</tr>
					<tr>
						<td>PHONE NUMBER(S)</td>
						<td><input name="phone" value="<?php echo $phone;?>"></td>
					</tr>
					<tr>
						<td>NEWSLETTER STATUS</td>
						<td>
							<select name="newsletter_status">
								<option><?php echo $newsletter_status;?></option>
								<option>opt-in</option>
								<option>opt-out</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>INVESTMENT OBJECTIVE(S)</td>
						<td>(describe)</td>
					</tr>
					<tr>
						<td>SPECULATION</td>
						<td><textarea name="obj_SPECULATION"><?php echo $obj_SPECULATION; ?></textarea></td>
					</tr>
					<tr>
						<td>GROWTH</td>
						<td><textarea name="obj_GROWTH"><?php echo $obj_GROWTH; ?></textarea></td>
					</tr>
					<tr>
						<td>CAPITAL PRESERVATION</td>
						<td><textarea name="obj_CAPITAL_PRESERVATION"><?php echo $obj_CAPITAL_PRESERVATION; ?></textarea></td>
					</tr>
					<tr>
						<td>INCOME</td>
						<td><textarea name="obj_INCOME"><?php echo $obj_INCOME; ?></textarea></td>
					</tr>
					<tr>
						<td>INVESTMENT EXPERIENCE</td>
						<td>(check all that apply)</td>
					</tr>
					<tr>
						<td>STOCK / MUTUAL FUNDS</td>
						<td><input value="checked" type="checkbox" name="exp_stock_mf" <?php echo $exp_stock_mf; ?>></td>
					</tr>
					<tr>
						<td>BONDS</td>
						<td><input value="checked" type="checkbox" name="exp_bonds" <?php echo $exp_bonds; ?>></td>
					</tr>
					<tr>
						<td>COMMODITIES / FOREX</td>
						<td><input value="checked" type="checkbox" name="exp_commodities_forex" <?php echo $exp_commodities_forex; ?>></td>
					</tr>
					<tr>
						<td>PRIVATE PLACEMENTS</td>
						<td><input value="checked" type="checkbox" name="exp_private_placement" <?php echo $exp_private_placement; ?>></td>
					</tr>
					<tr>
						<td>RISK TOLERANCE</td>
						<td>(select one)</td>
					</tr>
					<tr>
						<td>AGGRESSIVE</td>
						<td><input type="radio" name="risk_tolarance" value="Aggressive"  <?php if ($risk_tolarance == 'Aggressive') {echo 'checked'; } ?>></td>
					</tr>
					<tr>
						<td>MODERATE</td>
						<td><input type="radio" name="risk_tolarance" value="Moderate"  <?php if ($risk_tolarance == 'Moderate') {echo 'checked'; } ?>></td>
					</tr>
					<tr>
						<td>CONSERVATIVE</td>
						<td><input type="radio" name="risk_tolarance" value="Conservative"  <?php if ($risk_tolarance == 'Conservative') {echo 'checked'; } ?>></td>
					</tr>
				</table>
				<center><img src="/assets/images/slogan-bg.png" width="400" height="25" /><br><input type="submit" value="Save"></center>
				</form>
			</div>
		</div>
	</div>
</div>
