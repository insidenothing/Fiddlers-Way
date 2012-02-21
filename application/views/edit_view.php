
<script
	language="JavaScript" type="text/javascript"
	src="/assets/wysiwyg/wysiwyg.js"></script>

<form method="POST"
	action="/edit/index/<?php echo $type; ?>/<?php echo $id; ?>">



<div class="block" style="margin-top: 5px; width:1000px !important;">
	<div class="block-border">
		<div class="block-content">

			<div class="widget widget_text" id="text-2">
			<h4 class="widgettitle">Operator: <?php echo $operator;?></h4>
			<h4>Settings: <?php echo $type;?> #<?php echo $id;?></h4>
			<table width="100%">
				<tr>
					<td>Author (blog only)</td>
					<td><input name="author" value="<?php echo $author;?>"></td>
				</tr>
				<tr>
					<td>Published (blog only)</td>
					<td><input name="published" value="<?php echo $published;?>"></td>
				</tr>
				<tr>
					<td>Page Title</td>
					<td><input name="title" value="<?php echo $title;?>"></td>
				</tr>
				<tr>
					<td>SEO Link Name*</td>
					<td><input name="seo" value="<?php echo $seo;?>"></td>
				</tr>
				
				<tr bgcolor="#FFDE53">
					<td><input type="submit" value="Save Updated Page"></td>
					<td><b><?php echo $results;?></b></td>
				</tr>
				<tr>
					
					<td colspan="2"><a href="/<?php echo $controller;?>/index/<?php echo $seo;?>"><b>Click this link to view <?php echo $seo;?></b></a></td>
				</tr>
			</table>				
	*This must match the link or parent controller's code
				
			</div>
		</div>
	</div>
</div>



	<div class="block" style="margin-top: 5px; width:1000px !important;">
		<div class="block-border">
			<div class="block-content">

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
