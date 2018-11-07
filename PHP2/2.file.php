<?php 
/*一、打开和关闭文件--------------------------------------------
	1.fopen()
		函数将resource绑定到一个流或句柄。绑定之后，脚本就可以通过句柄与此资源交互;
		例1:以只读方式打开一个位于本地服务器的文本文件
		$fh = fopen("test.txt", "r");
		例2：以只读方式打开一个远程文件
		$fh = fopen("http://www.baidu.com", "r");
		
	2.fclose(handle)
		将 handle 指向的文件关闭 。如果成功则返回 TRUE，失败则返回 FALSE;
		虽然每个请求最后都会自动关闭文件，但明确的关闭打开的所有文件是一个好的习惯;

  二、读取文件
		php 提供了很多从文件中读取数据的方法，不仅可以一次只读取一个字符，还可以一次读取整个文件。
		
		1.fread(handle,length)函数从handle指定的资源中读取length个字符,当到达EOF或读取到length个字符时读取将停止。如果要读取整个文件，使用filesize(filename)函数确定应该读取的字符数;

		2.fgets(handle)函数从handle指定的资源中读取一行字符。
			feof() 函数检测是否已到达文件末尾 (eof)。

		3.file(url)函数将文件读取到数组中，各元素由换行符分隔。

		4.file_get_contents(url)函数将文件内容读到字符串中;

-------------------------------------------------------------*/
$fileID = fopen("text.txt","r");//打开指定文件窗口，获取句柄

// 第一种读取方法fread
// $con = fread($fileID, filesize("text.txt"));//读取文件内容

// 第二种读取方法fgets;
// $con = fgets($fileID);
// $con = fgets($fileID);
// $con = fgets($fileID);
// $con = "";
// while (!feof($fileID)) {//循环判断是否到了最后
// 	$con .= fgets($fileID);//读取一行内容
// }
// 第三种读取方法file
// $con = "";
// $arr = file("text.txt");
// for ($i=0; $i < count($arr); $i++) { 
// 	$con .= $arr[$i];
// }
// 第四种读取方法file_get_contents
$con = file_get_contents("http://www.baidu.com");

fclose($fileID);//关闭窗口

echo $con;



	

 ?>









