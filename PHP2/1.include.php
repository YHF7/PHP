<?php
// header("Content-Type: text/html;charset=utf-8"); //PHP页面转UTF-8编码 
/* 函数库------------------------------------------------
	通常将常用的函数组织到函数库中，可以在以后类似的应用程序中重复使用。

	需要调用时使用include()或require()将函数库包含到脚本中; 

	include_once()/require_once()
的作用与include()/require()相同，不过它会首先验证是否已经包含了该文件，如果已经包含，则不再执行
	如果require()包含文件出错时，脚本将停止执行。 而使用include()脚本将继续执行。
-----------------------------------------------------*/
	
	// include "show.php";//外部引入  用的多
	// include_once "show.php";//外部引入
	
	require "show.php";

	show();

	

 ?>