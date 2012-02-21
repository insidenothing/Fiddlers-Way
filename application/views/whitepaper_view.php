<div class="block" style="margin-top: 5px; width:1000px !important;">
	<div class="block-border">
		<div class="block-content">
			<h4 class="widgettitle">WHITE PAPER: <?php echo $title;?></h4>
			<p class="meta-info"><?php echo $published;?> by <?php echo $author;?></p>
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
				<li><a href="/edit/index/whitepapers/<?php echo $id;?>">Edit White Paper</a></li>
			</div>
		</div>
	</div>
</div>

	
<?php }?>