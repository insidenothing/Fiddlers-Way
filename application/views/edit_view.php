
<script
	language="JavaScript" type="text/javascript"
	src="/assets/wysiwyg/wysiwyg.js"></script>

<form method="POST"
	action="/edit/index/<?php echo $type; ?>/<?php echo $id; ?>">



<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">

			<div class="widget widget_text" id="text-2">
			<h4 class="widgettitle">Operator: <?php echo $operator;?></h4>
			<h4>Settings: <?php echo $type;?> #<?php echo $id;?></h4>
			
			<table>
				<tr>
					<td>Author</td>
					<td><input name="author" value="<?php echo $author;?>"></td>
				</tr>
				<tr>
					<td>Published</td>
					<td><input name="published" value="<?php echo $published;?>"></td>
				</tr>
				<tr>
					<td>Title</td>
					<td><input name="title" value="<?php echo $title;?>"></td>
				</tr>
				<tr bgcolor="#FFDE53">
					<td><input type="submit" value="Save Updated Page"></td>
					<td><b><?php echo $results;?></b></td>
				</tr>
			</table>				
	
				
			</div>
		</div>
	</div>
</div>



	<div class="block" style="margin-top: 5px;">
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
