function ajax(opt) {
	//获取AJAX对象的兼容写法
	if (window.XMLHttpRequest) {
		var xmlHttp = new XMLHttpRequest();
	}else{
		var xmlHttp = ActiveXObject("Microsoft.XMLHTTP");//IE5、IE6
	}
	// {name:"abc",age:22} 转 name=abc&age=22
	var str = "";
	for(var key in opt.data){
		str += key+"="+opt.data[key]+"&";
	}
	//判断是get还是POST请求
	if (opt.type=="get") {
		xmlHttp.open(opt.type,opt.url+"?"+str);
		xmlHttp.send();
	}else if(opt.type=="post"){
		xmlHttp.open(opt.type,opt.url);
		xmlHttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		xmlHttp.send(str);
	}

	xmlHttp.onreadystatechange = function () {
		if (xmlHttp.readyState==4) {//判断请求完成
			if (xmlHttp.status==200) {//判断请求成功
				var data = xmlHttp.responseText;//获取请求到的内容
				if (opt.dataType=="json") {
					data = JSON.parse(data);//字符串转JSON
				}
				opt.success && opt.success(data);//执行请求成功函数
			}else{
				opt.error && opt.error(xmlHttp.status);//执行请求失败函数
			}
		}
	}
	

}