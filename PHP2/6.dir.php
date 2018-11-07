<?php 
header("Content-Type: text/html;charset=utf-8");
/*六、读取目录-------------------------------------
1.opendir()
打开目录句柄;

2.closedir()
关闭目录句柄

3.readdir()
返回由dir_handle指定目录中的各个元素。可以使用此函数列出给定目录中的所
有文件和子目录

4.scandir(directory)
返回一个包含有 directory 指定路径中的文件和目录的数组;失败返回false;

5.rmdir(pathname)
删除目录 注意：目录必须为空，否则报错；

6.mkdir(pathname)
尝试新建一个由 pathname 指定的目录。
-------------------------------------------------*/
// $dir = opendir(".");//打开当前目录
// 读取目录方法一readdir
// $filename = readdir($dir)."<br>";
// $filename .= readdir($dir)."<br>";
// $con = "";
// //循环读取每一个文件名
// while ($filename = readdir($dir)) {
// 	$con .= "<a href='{$filename}'>".$filename."</a><br>"; 
// }
// echo $con;
// closedir($dir);//关闭目录

// 读取目录方法二scandir

// $arr = scandir(".");//读取当前目录的所有文件名到一个数组里
// $con = "";
// for ($i=2; $i < count($arr); $i++) { 
// 	$con .= "<a href='{$arr[$i]}'>".$arr[$i]."</a><br>";
// }
// echo $con;

// rmdir("abc");
// mkdir("abc")


	$arr = scandir(".");
	$con = "";
	for ($i=2; $i < count($arr); $i++) { 
		$con .= "<a href='{$arr[$i]}'>".$arr[$i]."</a><br>";
	}
	echo "$con";

	rmdir("abc");
	mkdir("abc");

?>
