<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>SKOTT - 대처사항</title>
</head>
<body>
	<div class="container">
		<table class="table" border="1" style="z-index:10000; position: relative;" >
			
		<tr>
			<th>Kind</th>
			<th>Language</th>
		</tr>

		<?php
			foreach ($list as $list) {
		?>
		<tr id="list">			
			<td rowspan="2">
				<?php echo $list->kind ?>
			</td>
			<td>
				<?php echo $list->korean ?>
			</td>
			

			<?php }	?>
		</tr>
		<tr>
			<td>
				<?php echo $list->english ?>
			</td>
		</tr>



			
		</table>
	</div>
	
</body>
</html>