<?php 
$conn = mysqli_connect("localhost","root","yhf","html5");
if (!$conn) {
	die("连接失败");
}
$conn->query("set names utf8");

$name = $_POST["name"];
$con = $_POST["con"];
// echo $name."<br>".$con;
$sql = "INSERT INTO msg (name,con) VALUES('{$name}','{$con}')";
$conn->query($sql);//执行SQL语句

if (mysqli_affected_rows($conn)>0) {
	echo '{"error":0,"msg":"成功","id":'.mysqli_insert_id($conn).'}';
}else{
	echo '{"error":1,"msg":"失败"}';
}
 ?>