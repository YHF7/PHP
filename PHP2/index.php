<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="content">
		<ul>
			<?php for ($i=0; $i < 10; $i++) { 
				echo "<li>{$i}</li>";
			} ?>

			<?php for ($i=0; $i < 10; $i++) {?>
				<li><?php echo "$i"; ?></li>
			<?php } ?>
		</ul>
	</div>
	<?php include 'footer.php'; ?>


</body>
</html>