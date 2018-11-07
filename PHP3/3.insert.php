<?php 
$conn = @mysqli_connect("localhost","root","","html5");
if (!$conn) {
	die("连接失败！");
}


$conn->query("set names utf8");
//添加数据的SQL语句
$sql = "INSERT INTO user (name,pwd,age) VALUES('K','123','22'),('K2','123','22')";
$conn->query($sql);

if (mysqli_affected_rows($conn)>0) {
	echo "添加成功：".mysqli_affected_rows($conn)."条<br>";
	echo "ID:".mysqli_insert_id($conn);
}else{
	echo "添加失败";
}



	
?>