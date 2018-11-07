<?php 
// header('Access-Control-Allow-Origin:*');//设置域名所有人都可以访问，跨域也可以
$conn = mysqli_connect("localhost","root","yhf","html5");
$conn->query("set names utf8");

$start = $_GET["start"];
$num = $_GET["num"];

$sql = "SELECT url FROM img LIMIT {$start},{$num}";
$result = $conn->query($sql);

$arr = array();
while ($row=$result->fetch_assoc()) {
	$arr[] = $row["url"];
}
$str = json_encode($arr);
echo $str;

// $sql = "INSERT INTO img (url) VALUES('img/B1.jpg')";
// for($i = 2;$i <= 50;$i++){
// 	$url = "img/B{$i}.jpg";
// 	$sql .=",('{$url}')";
// }
// $conn->query($sql);

	
?>