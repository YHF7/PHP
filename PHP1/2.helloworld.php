<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php  echo "Hello php!"?></title>
	<style type="text/css">
	.wrap{
		<?php echo "background: red;"; ?>
	}
	</style>
</head>
<body class="<?php echo "wrap"; ?>">
	<?php
		echo "Hello php! <br>";//输出字符串Hellow php!
		echo 1+2;
	?>
</body>
<script type="text/javascript">
console.log("<?php echo "Hello php!"; ?>");
</script>
</html>