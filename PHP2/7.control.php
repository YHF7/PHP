<?php
/*四、复制，移动，删除文件---------------------------------------
	1.copy(source,dest)
		将文件从 source 拷贝到 dest。如果成功则返回 TRUE，失败则返回 FALSE
	2.rename(oldname,newname)
		尝试把 oldname 重命名为 newname。 
		如果成功则返回 TRUE，失败则返回FALSE。
		重命名是改变路径相当于移动	
	3.unlink()
		删除文件，如果删除成功返回true, 否则返回false;

--------------------------------------------------------------*/
//复制文件
// copy("text.txt","abc/text.txt");
//重命名,移动文件
// rename("abc.txt","abc/abc.txt");
// 删除文件
if (is_file("abc/abc.txt")) {//判断有指定文件才执行删除
	unlink("abc/abc.txt");
}






?>











