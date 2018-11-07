<?php 
$name = $_POST["name"];
$pwd = md5($_POST["pwd"]);

// echo "账号：".$name."<br>";
// echo "密码：".$pwd;

$conn = @mysqli_connect("localhost","root","","html5");
if (!$conn) {
	die("连接失败！");
}
$conn->query("set names utf8");
$sql = "SELECT * FROM user WHERE name='{$name}'";
$conn->query($sql);
if (mysqli_affected_rows($conn)>0) {
	echo "用户名已存在，不可以重复注册";
	exit();
}

//添加数据的SQL语句
$sql = "INSERT INTO user (name,pwd,age) VALUES('{$name}','{$pwd}','0')";
$conn->query("set names utf8");
$conn->query($sql);

if (mysqli_affected_rows($conn)>0) {
	echo "注册成功";
}else{
	echo "注册失败";
}



 ?>