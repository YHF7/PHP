<?php 
$conn = @mysqli_connect("localhost","root","","html5");
if (!$conn) {
	die("连接失败！");
}
$conn->query("set names utf8");
//修改数据的SQL语句
$sql = "UPDATE user SET id=6,name='k2',pwd='333',age=18 WHERE name='K2'";
$conn->query($sql);

if (mysqli_affected_rows($conn)>0) {
	echo "修改成功：".mysqli_affected_rows($conn)."条<br>";
}else{
	echo "修改失败";
}





	
?>