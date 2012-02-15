
<script
	language="JavaScript" type="text/javascript" src="/assets/js/wysiwyg.js"></script>

<form>
	
<textarea id="whiteboard" rows="30" cols="100" name="whiteboard">


<?PHP echo $contents;?></textarea>

<script language="JavaScript">
generate_wysiwyg('whiteboard');
</script>


</form>