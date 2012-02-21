<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<h4 class="widgettitle"><?php echo $title;?></h4>
			<div class="author">Written by <?php echo $author;?></div>
			<div class="date"><?php echo $published;?></div>
			<div class="widget widget_text" id="text-2"><?php echo $contents;?></div>
		</div>
	</div>
</div>


<?php if ($operator != ''){ ?>

<div class="block" style="margin-top: 5px;">
<div class="block-border">
<div class="block-content">
<h4 class="widgettitle">Operator: <?php echo $operator;?></h4>
			<div class="widget widget_text" id="text-2">
				<li><a href="/edit/index/blogs/<?php echo $id;?>">Edit Blog</a></li>
			</div>
		</div>
	</div>
</div>

	
<?php }?>