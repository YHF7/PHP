<?php 
$conn = mysqli_connect("localhost","root","yhf","html5");
$conn->query("set names utf8");

$sql = "SELECT url FROM img LIMIT 0,10";
$result = $conn->query($sql);

$arr = array();
while ($row=$result->fetch_assoc()) {
	$arr[] = $row["url"];
}
$str = json_encode($arr);



$cb = $_GET["cb"];
echo $cb."(".$str.")";	
// success($str)
 ?>