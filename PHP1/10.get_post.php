<?php 
/*一、GET与POST------------------------------------------------
	1.GET
		所有表单输入的数据被加载到请求的URL地址后面;
	GET方式提交数据只能传递文本，能够提交的数据量大小有限，安全性差;

	2.POST
		POST提交数据的方式把表单的数据打包放入http请求中; 
	POST能够提交更多的数据;
--------------------------------------------------------------*/
/*二、接收数据-------------------------------------------------

	表单提交的数据会自动封装为数组;

	用$_GET, $_POST, 或$_REQUEST获得表单提交的数据;

	$_REQUEST可以获取以POST方法和GET方法提交的数据，但是速度比较慢 
--------------------------------------------------------------*/
// $user = $_GET["user"];
// $pwd = $_GET["pwd"];
// $user = $_POST["user"];
// $pwd = $_POST["pwd"];

$user = $_REQUEST["user"];
$pwd = $_REQUEST["pwd"];
$str = <<<END
<script type="text/javascript">
var i =3;
setInterval(function () {	
	if (i<0) {
		location.href = "index.html"
	}else{
		document.body.innerHTML = "准备返回"+i;
	}	
	i--;
},1000)
</script>
END;
if ($user=="abc" && $pwd =="123") {
	echo "登录成功";
}else{
	echo "登录失败".$str;
}
// echo "账号:".$user."<br>";
// echo "密码:".$pwd."<br>";



/*三、处理多值表单控件----------------------------------------------------
	多值表单控件（如复选框和多选框），大大提高了基于web的数据收集能力;
	因为这些组件是多值的，所以表单处理函数必须能够识别一个表单变量中可能有
	多个值;为了让php识别一个表单变量的多个值（即考虑为数组），需要对表单名
	(元素的name属性值）增加一对中括号，如:
	<input type="checkbox"name="love[]"/>
--------------------------------------------------------------------------*/
// $a = $_GET["a"];

// print_r($a);





?>








