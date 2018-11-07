<?php 
$conn = mysqli_connect("localhost","root","yhf","html5");
if (!$conn) {
	die("连接失败");
}
$conn->query("set names utf8");

$name = $_GET["name"];
$sql = "SELECT * FROM user WHERE name='{$name}'";
$conn->query($sql);
if (mysqli_affected_rows($conn)>0) {
	echo '{"error":1}';
}else{
	echo '{"error":0}';
}

 ?>