<?php 
$conn = @mysqli_connect("localhost","root","","html5");
if (!$conn) {
	die("连接失败！");
}
$conn->query("set names utf8");
//删除数据的SQL语句
$sql = "DELETE FROM user WHERE name='k2'";
$conn->query($sql);

if (mysqli_affected_rows($conn)>0) {
	echo "删除成功：".mysqli_affected_rows($conn)."条<br>";
}else{
	echo "删除失败";
}





	
?>