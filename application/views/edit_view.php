
<script
	language="JavaScript" type="text/javascript" src="/assets/js/wysiwyg.js"></script>

<form method="POST" action="/edit/index/<?php echo $type; ?>/<?php echo $id; ?>">
	
<textarea id="whiteboard" rows="30" cols="100" name="whiteboard">


<?PHP echo $contents;?></textarea>

<script language="JavaScript">
generate_wysiwyg('whiteboard');
</script>


</form>