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
$sql = "SELECT * FROM user WHERE name='{$name}' AND pwd='{$pwd}'";
$conn->query($sql);

if (mysqli_affected_rows($conn)>0) {
	echo "登录成功！";
}else{
	echo "登录失败！";
}

 ?>