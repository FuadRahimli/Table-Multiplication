<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>
	.tableMultiplication {table-layout: auto;width: 600px ;border:black 1px solid;border-collapse: collapse;}
	.tableMultiplication td {border:black 1px solid;text-align: center;}
	/*
	.tableMultiplication td:nth-child(1) {font-weight:bold;}
	.tableMultiplication tr:nth-child(1) td:nth-child(n) {font-weight:bold;}
	*/
</style>
</head>
<body>
<table class="tableMultiplication">
<?php
for($j=1;$j<=10;$j++){
	echo "<tr>\n";
	for($i=1;$i<=10;$i++){
		echo "<td>".($j*$i)."</td>\n";
	}
	echo "</tr>\n";
}
?>
</table>

</body>
</html>