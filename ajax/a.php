<?php 
$conn = @mysqli_connect("127.0.0.1","root","yhf","html5");
if (!$conn) {
	die("连接失败！");
}else{
	echo "连接成功";
}

 ?>