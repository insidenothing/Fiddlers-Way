
<script
	language="JavaScript" type="text/javascript"
	src="/assets/wysiwyg/wysiwyg.js"></script>

<form method="POST"
	action="/ipo/edit/<?php echo $symbol; ?>">



<div class="block" style="margin-top: 5px; width:1000px !important;">
	<div class="block-border">
		<div class="block-content">

			<div class="widget widget_text" id="text-2">
			<h4 class="widgettitle">Operator: <?php echo $operator;?></h4>
			<h4>Settings: <?php echo $symbol;?></h4>
			<table width="100%">
				
				<tr>
					<td>Symbol</td>
					<td><input name="seo" value="<?php echo $symbol;?>"></td>
				</tr>
				
				<tr bgcolor="#FFDE53">
					<td><input type="submit" value="Save Updated IPO Information"></td>
					<td><b><?php echo $results;?></b></td>
				</tr>
				<tr>
					
					<td colspan="2"><a href="/ipo/index/<?php echo $symbol;?>"><b>Click this link to view <?php echo $symbol;?></b></a></td>
				</tr>
			</table>				
	
				
			</div>
		</div>
	</div>
</div>



	<div class="block" style="margin-top: 5px; width:1000px !important;">
		<div class="block-border">
			<div class="block-content">
<h4 class="widgettitle">Premium Report</h4>
				<div class="widget widget_text" id="text-2">

					<textarea id="whiteboard" rows="30" cols="100" name="content">




					<?PHP echo $contents;?></textarea>

					<script language="JavaScript">
generate_wysiwyg('whiteboard');
</script>

				</div>
			</div>
		</div>
	</div>

</form>
