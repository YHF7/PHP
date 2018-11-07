<?php 
$conn = mysqli_connect("localhost","root","yhf","html5");
$conn->query("set names utf8");
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

$arr = array();
while ($row = $result->fetch_assoc()) {
	$arr[] = $row;
}

// print_r($arr);
$str = json_encode($arr);//数组转json字符串
// json_decode(json)//json字符串转数组对象
echo $str;


?>





