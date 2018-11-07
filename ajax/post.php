<?php 
	$name = $_POST["name"];
	$age = $_POST["age"];

	$str = '{"name":"'.$name.'","age":"'.$age.'"}';
	echo $str;

?>