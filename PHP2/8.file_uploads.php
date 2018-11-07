<?php 
/*一、文件上传的相关配置------------------------------------------------------------
表单设置
要进行文件的上传，需要对form表单进行特殊设置;
1.设定表单数据的提交方式为POST
2.设定enctype属性值为: multipart/form-data 
3.为了避免用户等待许久之后才发现上传文件太大，可以在表单中添加
  MAX_FILE_SIZE隐藏域,通过设置其value值可以限制上传文件的大小;

 PHP设置
 	phpinfo();输出PHP设置信息
	
	1.file_uploads 
	是否允许通过HTTP上传文件，默认为ON

	2.upload_max_filesize 
	允许上传文件大小的最大值，默认为128M，此指令必须小于post_max_size;

	3.upload_tmp_dir
	指定上传文件的临时存放路径，这个目录对于拥有此服务器进程的用户必须是可
	写的;如果未指定则使用系统默认值;

	4.post_max_size
	控制POST方式提交数据php所能够接收的最大数据量;

二、$_FILES 数组 $_GET $_POST
	$_FILES超级全局变量作用是存储各种与上传文件有关的信息;
	$_FILES是一个二维数组，数组中共有5项：

	$_FILES["userfile"]["name"]	上传文件的名称

	$_FILES["userfile"]["type"] 	上传文件的类型

	$_FILES["userfile"]["size"] 	上传文件的大小, 以字节为单位

	$_FILES["userfile"]["tmp_name"]	文件上传后在服务器端储存的临时文件名

	$_FILES["userfile"]["error"] 	文件上传相关的错误代码

	注:userfile只是一个占位符，代表文件上传表单元素的名字; 因此这个值将根据你所给定
	的名称有所不同;

三、上传错误信息
	$_FILES['userfile']['error']  提供了在文件上传过程中出现的错误：

	1.UPLOAD_ERR_OK (value = 0)      如果文件上传成功返回0;

	2.UPLOAD_ERR_INI_SIZE (value = 1)
	如果试图上传的文件大小超出了 upload_max_filesize指令指定的值，则返回1;

	3.UPLOAD_ERR_FORM_SIZE (value = 2)
	如果试图上传的文件大小超出了MAX_FILE_SIZE指令（可能嵌入在HTML表单中）指定的值，
	则返回2;

	4.UPLOAD_ERR_PARTIAL (value = 3)
	如果文件没有完全上传，则返回3; 如网络出现错误，导致上传过程中断;

	5.UPLOAD_ERR_NO_FILE (value = 4)
	如果用户没有指定上传的文件就提交表单，则返回

四、文件上传函数
	1.is_uploaded_file()
		is_uploaded_file()函数确定参数filename指定的文件是否使用HTTP POST上传;


	2.move_uploaded_file()
		move_uploaded_file()作用是将上传文件从临时目录移动到目标目录; 虽然
		copy()也可以实现同样功能，但move_uploaded_file()还提供了一种额外的
		功能，它将检查由filename输入参数指定的文件确实是通过http post 上传机制
		上传的。如果所指定的文件并非上传文件，则移动失败，返回false;

		例：
		move_uploaded_file($_FILES['userfile']['tmp_name',"1/test.jpg");

 -----------------------------------------------------------------------------------*/ 
// phpinfo();

$file = $_FILES["file"];
print_r($file);
// if (is_uploaded_file($file["tmp_name"])) {
// 	copy($file["tmp_name"], "upload/".$file["name"]);
// };
if($file["error"]==0){
	if (move_uploaded_file($file["tmp_name"],"upload/".$file["name"])) {
		echo "上传成功";
	};
}else{
	echo $file["error"];
}


?>