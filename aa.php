<?php
header("Content-Type: text/html;charset=utf-8");
$conn = @mysqli_connect("localhost","root","yhf","html5");
if (!$conn) {
	die("连接失败！");
}else {
	die("连接成功");
}
?>