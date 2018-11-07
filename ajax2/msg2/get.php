<?php 
$conn = mysqli_connect("localhost","root","yhf","html5");
if (!$conn) {
	die("连接失败");
}
$conn->query("set names utf8");

$page = $_GET['page'];
$p = ($page-1)*5;

$sql = "SELECT * FROM msg LIMIT $p,5";
$result = $conn->query($sql);//执行SQL语句

$arr = array();//创建数组用来存放数据
while ($row = $result->fetch_assoc()) {//循环读取每一行数据
	$arr[] = $row;
}
$data = json_encode($arr);//把数组转字符串


$sql = "SELECT count(id) as len FROM msg";
$result = $conn->query($sql);//执行SQL语句
$len = $result->fetch_assoc()["len"];

if (mysqli_affected_rows($conn)>0) {
	echo '{"error":0,"msg":"成功","data":'.$data.',"len":'.$len.'}';
}else{
	echo '{"error":1,"msg":"失败"}';
}

 ?>