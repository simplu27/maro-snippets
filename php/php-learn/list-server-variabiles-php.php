<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Server variabiles</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {font-family: Consolas, Arial, sans-serif;}
	table tr:nth-child(odd) {
		background: #EFEFEF;
	}
	td {padding: 4px 10px;}
</style>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Server variabile</th>
			<th>Value</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($_SERVER as $key => $value) { ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?php echo $value; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>