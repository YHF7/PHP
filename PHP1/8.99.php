<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1">
<?php 
	for ($i=1; $i <= 9; $i++) { 
		echo "<tr>";
		for ($j=1; $j <=9; $j++) { 
			if ($j<=$i) {
				echo "<td>$j"."*".$i."=".($i*$j)."</td>";
			}else{
				echo "<td></td>";
			}				
		}
		echo "</tr>";
	}
?>
</table>
</body>
<script type="text/javascript">


</script>
</html>