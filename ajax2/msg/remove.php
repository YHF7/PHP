<?php 
$conn = mysqli_connect("localhost","root","yhf","html5");
if (!$conn) {
	die("连接失败");
}
$conn->query("set names utf8");

$id = $_GET["id"];

$sql = "DELETE FROM msg WHERE id={$id}";
$result = $conn->query($sql);//执行SQL语句

if (mysqli_affected_rows($conn)>0) {
	echo '{"error":0,"msg":"成功"}';
}else{
	echo '{"error":1,"msg":"失败"}';
}
 ?>