<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			margin: 0 auto;
		}
		td {
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<?php
		for ($i = 1; $i <= 10; $i++) {
			echo "<tr>";
			for ($j = 1; $j <= $i; $j++) {
				echo "<td>*</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>