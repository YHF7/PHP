<?php 
/*五、其它文件操作函数-------------------------------
	1.filesize(url)
	取得文件的大小，以字节为单位

	2.filectime(url)
	取得文件的创建时间，以unix时间戳方式返回

	3. fileatime(url) 返回文件的最后改变时间;

	4. filemtime(url) 返回文件的最后修改时间;
	注："最后改变时间"不同于 "最后修改时间"。最后改变时间指的是对文件inode数
	据的任何改变，包括改变权限，所属组，拥有者等; 而最后修改时间指的是对文
	件内容的修改

	5. file_exists(url) 检查文件或目录是否存在，如果存在返回true, 否则返回false;

	6. is_readable(url) 判断文件是否可读，如果文件存在并且可读，则返回true;

	7. is_writable(url) 判断文件是否可写，如果文件存在并且可写，则返回true;

	date_default_timezone_set("Asia/Shanghai");时区设置
	date("Y-m-d H:i:s",time)时间格式
--------------------------------------------------*/
//时区设置
date_default_timezone_set("Asia/Shanghai");

echo "创建时间：".date("Y-m-d H:i:s",filectime("text.txt"))."<br>";
echo "修改时间：".date("Y-m-d H:i:s",filemtime("text.txt"))."<br>";
echo "访问时间：".date("Y-m-d H:i:s",fileatime("text.txt"))."<br>";

//判断有没有指定目录
if (file_exists("abc")) {
	echo "有";
}else{
	echo "没有";
}
if (is_readable("text.txt")) {
	echo "可读";
}else{
	echo "不可读";
}

if (is_writeable("text.txt")) {
	echo "可写";
}else{
	echo "不可写";
}



?>






