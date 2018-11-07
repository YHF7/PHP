<?php 
include "connect.php";//引入连接数据库的php文件

$id = $_GET['id'];
// echo "id:$id";
//删除数据的sql语句
$sql = "DELETE FROM msg WHERE id={$id}";
$conn->query($sql);//执行sql语句
//输出JS代码执行页面跳转返回主页面
echo "<script>location.href='index.php';</script>";
?>