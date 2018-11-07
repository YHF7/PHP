<?php 
$conn = mysqli_connect("localhost","root","","html5");
if (!$conn) {
	die("连接失败");
}
$conn->query("set names utf8");
 ?>