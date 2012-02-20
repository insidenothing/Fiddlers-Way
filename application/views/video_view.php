<div class="block" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<div class="widget widget_text" id="text-2">
				<h4 class="widgettitle"><?php echo $title;?></h4>
				<center>
					<?php echo $contents; ?>
					<img src="/assets/images/slogan-bg.png" width="400" height="25" />
				</center>
				<?php echo $comments; ?>
				<br>
				<br>
				<small><a href="http://fiddlersway.com/video/index/<?php echo $seo;?>">permalink: <b><?php echo $seo?></b></a></small>
			</div>
		</div>
	</div>
</div>


<?php if ($operator != ''){ ?>

<div class="block" style="margin-top: 5px;">
<div class="block-border">
<div class="block-content">
<h4 class="widgettitle">Operator: <?php echo $operator;?></h4>
			<div class="widget widget_text" id="text-2">
				<li><a href="/edit/video/<?php echo $id;?>">Edit Video</a></li>
			</div>
		</div>
	</div>
</div>

	
<?php }?>