<?php 
include "connect.php";//引入连接数据库的php文件

$name = $_POST["name"];
$con = $_POST["con"];

// echo $name."<br>".$con;

$sql = "INSERT INTO msg (name,con) VALUES('{$name}','{$con}')";
$conn->query($sql);//执行SQL语句

if(mysqli_affected_rows($conn)>0){
	echo "
		<script>location.href='index.php'</script>
	";
}else{
	echo "失败了";
}

 ?>