
<script language="JavaScript"
	type="text/javascript" src="/assets/wysiwyg/wysiwyg.js"></script>

<form method="POST" action="/ipo/edit/<?php echo $symbol; ?>">



	<div class="block" style="margin-top: 5px; width: 1000px !important;">
		<div class="block-border">
			<div class="block-content">

				<div class="widget widget_text" id="text-2">
					<h4 class="widgettitle">
						Operator:
						<?php echo $operator;?>
					</h4>
					<h4>
						Settings:
						<?php echo $symbol;?>
					</h4>
					<table width="100%">

						<tr>
							<td>Symbol</td>
							<td><input name="symbol" value="<?php echo $symbol;?>"></td>
						</tr>
						<tr>
							<td>Published</td>
							<td><input name="published" value="<?php echo $published;?>"></td>
						</tr>
						<tr>
							<td>published_date</td>
							<td><input name="published_date"
								value="<?php echo $published_date;?>"></td>
						</tr>
						<tr>
							<td>name</td>
							<td><input name="name" value="<?php echo $name;?>"></td>
						</tr>
						<tr>
							<td>notes</td>
							<td><input name="notes" value="<?php echo $notes;?>"></td>
						</tr>
						<tr>
							<td>manager</td>
							<td><input name="manager" value="<?php echo $manager;?>"></td>
						</tr>
						<tr>
							<td>catagory</td>
							<td><input name="catagory" value="<?php echo $catagory;?>"></td>
						</tr>
						<tr>
							<td>shares_mm</td>
							<td><input name="shares_mm" value="<?php echo $shares_mm;?>"></td>
						</tr>
						<tr>
							<td>price_high</td>
							<td><input name="price_high" value="<?php echo $price_high;?>"></td>
						</tr>
						<tr>
							<td>pre_ipo_price</td>
							<td><input name="pre_ipo_price"
								value="<?php echo $pre_ipo_price;?>"></td>
						</tr>
						<tr>
							<td>price_low</td>
							<td><input name="price_low" value="<?php echo $price_low;?>"></td>
						</tr>
						<tr>
							<td>estimate</td>
							<td><input name="estimate" value="<?php echo $estimate;?>"></td>
						</tr>
						<tr>
							<td>pre_ipo_amount_mm</td>
							<td><input name="pre_ipo_amount_mm"
								value="<?php echo $pre_ipo_amount_mm;?>"></td>
						</tr>
						<tr>
							<td>expected</td>
							<td><input name="expected" value="<?php echo $expected;?>"></td>
						</tr>
						<tr>
							<td>rating_public</td>
							<td><input name="rating_public"
								value="<?php echo $rating_public;?>"></td>
						</tr>
						<tr>
							<td>recommendation_public</td>
							<td><input name="recommendation_public"
								value="<?php echo $recommendation_public;?>"></td>
						</tr>
						<tr>
							<td>day40</td>
							<td><input name="day40" value="<?php echo $day40;?>"></td>
						</tr>
						<tr>
							<td>day180</td>
							<td><input name="day180" value="<?php echo $day180;?>"></td>
						</tr>


						<tr bgcolor="#FFDE53">
							<td><input type="submit" value="Save Updated IPO Information"></td>
							<td><b><?php echo $results;?> </b></td>
						</tr>
						<tr>

							<td colspan="2"><a href="/ipo/index/<?php echo $symbol;?>"><b>Click
										this link to view <?php echo $symbol;?> </b> </a></td>
						</tr>
					</table>


				</div>
			</div>
		</div>
	</div>



	<div class="block" style="margin-top: 5px; width: 1000px !important;">
		<div class="block-border">
			<div class="block-content">
				<h4 class="widgettitle">Premium Content</h4>
				<table width="100%">
					<tr>
						<td>rating_paid</td>
						<td><input name="rating_paid" value="<?php echo $rating_paid;?>"></td>
					</tr>
					<tr>
						<td>recommendation_paid</td>
						<td><input name="recommendation_paid" value="<?php echo $recommendation_paid;?>"></td>
					</tr>
				</table>

				<div class="widget widget_text" id="text-2">

					<textarea id="whiteboard" rows="30" cols="100"
						name="premium_report">
						
						
					<?PHP echo $premium_report;?></textarea>

					<script language="JavaScript">
generate_wysiwyg('whiteboard');
</script>

				</div>
			</div>
		</div>
	</div>

</form>
