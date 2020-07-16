<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table, th, td {
			border: 1px solid yellow;
			border-collapse: collapse;
			color: blue;
		}
	th, td {
		padding: 5px;
	}
	</style>
</head>
<body>
<table>
	<tr>
		<td>Filter Name</td>
		<td>Filter ID</td>
	</tr>
	<?php
	foreach (filter_list() as $id =>$filter) {
		echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
	}
	?>
</table>
</body>
</html>