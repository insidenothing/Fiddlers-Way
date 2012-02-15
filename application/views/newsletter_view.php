<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<div class="widget widget_text">
				<h4>Required Information</h4>
				<table width="100%">
					<tr>
						<td width="50%">E-MAIL</td>
						<td width="50%"><input name="email" value=""></td>
					</tr>
				</table>
				<br><br>
				<h4>Additional Information Unlocks Member Benefits</h4>
				<table width="100%">
					<tr>
						<td width="50%">NAME</td>
						<td width="50%"><input name="name" value=""></td>
					</tr>
					<tr>
						<td>ADDRESS</td>
						<td><input name="address" value=""></td>
					</tr>
					<tr>
						<td>PHONE NUMBER(S)</td>
						<td><input name="phone" value=""></td>
					</tr>
					<tr>
						<td>NEWSLETTER STATUS</td>
						<td><?php echo $newsletter_status;?> (opt-out|opt-in|paid)</td>
					</tr>
					<tr>
						<td>INVESTMENT OBJECTIVE(S)</td>
						<td>(describe)</td>
					</tr>
					<tr>
						<td>SPECULATION</td>
						<td><textarea name="obj_SPECULATION"></textarea></td>
					</tr>
					<tr>
						<td>GROWTH</td>
						<td><textarea name="obj_GROWTH"></textarea></td>
					</tr>
					<tr>
						<td>CAPITAL PRESERVATION</td>
						<td><textarea name="obj_CAPITAL PRESERVATION"></textarea></td>
					</tr>
					<tr>
						<td>INCOME</td>
						<td><textarea name="obj_INCOME"></textarea></td>
					</tr>
					<tr>
						<td>INVESTMENT EXPERIENCE</td>
						<td>(check all that apply)</td>
					</tr>
					<tr>
						<td>STOCK / MUTUAL FUNDS</td>
						<td><input type="checkbox" name="exp_stock_mf"></td>
					</tr>
					<tr>
						<td>BONDS</td>
						<td><input type="checkbox" name="exp_bonds"></td>
					</tr>
					<tr>
						<td>COMMODITIES / FOREX</td>
						<td><input type="checkbox" name="exp_commodities_forex"></td>
					</tr>
					<tr>
						<td>PRIVATE PLACEMENTS</td>
						<td><input type="checkbox" name="exp_private_placement"></td>
					</tr>
					<tr>
						<td>RISK TOLERANCE</td>
						<td>(select one)</td>
					</tr>
					<tr>
						<td>AGGRESSIVE</td>
						<td><input type="radio" name="risk_tolarance" value="Aggressive"></td>
					</tr>
					<tr>
						<td>MODERATE</td>
						<td><input type="radio" name="risk_tolarance" value="Moderate"></td>
					</tr>
					<tr>
						<td>CONSERVATIVE</td>
						<td><input type="radio" name="risk_tolarance" value="Conservative"></td>
					</tr>
				</table>
				<center><img src="/assets/images/slogan-bg.png" width="400" height="25" /><br><input type="submit" value="Save"></center>
			</div>
		</div>
	</div>
</div>
