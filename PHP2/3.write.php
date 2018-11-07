<?php
/*三、写入文件----------------------------------------------	
	1.fwrite(handle)函数将string的内容写入到由handle指定的资源中。如果指定length参
数，将在写入Length个字符时停止。

	2.file_put_contents(url,str)
	函数将一个字符串写入文件，与依次调用fopen(),fwrite(),fclose()功能一样;
----------------------------------------------------------*/

$fileId = fopen("text.txt", "a");
fwrite($fileId, "我爱你aaaaaa");
fclose($fileId);

// file_put_contents("text.txt", "写入的内容2");


?>


