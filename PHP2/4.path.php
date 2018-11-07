<?php 
/*七、解析目录路径的函数-------------------------------------
	1.basename(path,suffix)
		返回路径中的文件名部份，当指定了可选参数suffix会将这部分内容去掉;

	2.dirname(path)
		返回路径中的目录部份;

	3.pathinfo()
		返回一个关联数组，其中包括路径中的三个部份：目录名，文件名，扩展名
	
	4.获取当前文件路径
	$_SERVER["SCRIPT_FILENAME"]
---------------------------------------------------------*/
$url = $_SERVER["SCRIPT_FILENAME"];
echo $url."<br>";

echo "文件名：".basename($url)."<br>";
echo "目录：".dirname($url)."<br>";

$arr = pathinfo($url);
// print_r($arr);
foreach ($arr as $key => $value) {
	echo $key.":".$value."<br>";
}







?>

