<script src="/assets/js/sorttable.js"></script>
<style>
/* Sortable tables */
table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
}
</style>


<div class="block2" style="margin-top: 5px;">
	<div class="block-border">
		<div class="block-content">
			<h4 class="widgettitle">IPO CALENDAR</h4>
			<div class="widget widget_text" id="text-2">
			<table class="sortable" cellspacing="0" cellpadding="2" border="1" width="100%" style="border-colapse:colaspe;">
				<thead>
				<tr>
					<td style="white-space: pre">Published</td>
					<td style="white-space: pre">Name</td>
					<td style="white-space: pre">Symbol</td>
					<td>Manager</td>
					<td style="white-space: pre">Catagory</td>
					<td style="white-space: pre">Shares (mm)</td>
					
					<td style="white-space: pre">Price Low</td>
					<td style="white-space: pre">Pre IPO Price</td>
					<td style="white-space: pre">Price High</td>
					
					<td style="white-space: pre">Pre IPO Amount (mm)</td>
					<td style="white-space: pre">Estimate</td>
					
					<td style="white-space: pre">Expected</td>
					<td style="white-space: pre">40 Day</td>
					<td style="white-space: pre">180 Day</td>
					<td>Recommendation</td>
					<td>Rating</td>
					<td>Report</td>
				</tr>
				</thead>
				<?php echo $ipos?>
			</table>
			</div>
		</div>
	</div>
</div>