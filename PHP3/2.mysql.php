<?php 
header("Content-Type: text/html;charset=utf-8");
/*一、编程接口------------------------------
	从PHP5开始，PHP向程序员提供了两种MySQL应用程序编程接口:一种是从PHP早期版本一
直就有的mysql功能模块;另一种是从PHP5才开始有的mysqli接口;
	mysql功能模块不是PHP的一个集成组件。要想使用这个功能扩展模块，不管使用是哪一种操作系统，都必须在php.ini文件里启用这个扩展以确保PHP能够找到所有必要的DLL "php_mysqli"。
	
	phpinfo();//查看php.ini设置，包括路径

二、数据库操作一般步骤
	1.MySQL建立连接与选择要操作的数据库
	2.进行增删改查操作
	3.关闭连接


三、连接MySQL服务器	
	用mysqli_connect或者new mysqli方法连接数据库

	如果连接成功，这个函数将返回一个对象。否则将返回FALSE,并向Web服务器发送一条出错消息，如果不想让最终用户在他们的web浏览器里看到这样的出错消息，就必须在函数前面加上一个@字符。

	设置获取数据库的数据编码格式
	$conn->query('set names utf8');
	mysqli_query($conn,'set names utf8');


四、执行SQL语句
	$result = mysqli_query($conn,$sql);
	$result = $conn->query("SELECT * FROM USER");

	
五、获取和显示数据
	
1. fetch_row()
	将以一个普通数组的形式返回一条结果，它的各个字段需要以$row[n]的方式进行访问。
	
2. fetch_array()
	$arr["id"]==$arr[0]
	$arr["name"]==$arr[1]
	$arr["pwd"]==$arr[2]
	将以一个关联数组的形式返回一条结果，它的各个字段需要以$row[n]或$row["colname"]的方式进行访问。

3. fetch_assoc()
	将以一个关联数组的形式返回一条结果记录，但它的各个字段只能以 $row["colname"]的方式进行访问。  
	
4. fetch_object()		
	函数以一个对象的形式返回一条结果记录， 它的各个字段需要以$row->colname的方式进行访问。 
	这4个函数的共同点是：每次调用将自动返回下一条结果记录,但如果已经到达结果数据表的末尾，则返回FALSE。
	$row->colname

5. mysqli_num_rows($result)
	函数用于获取查询返回的记录数;

6. mysqli_insert_id(conn)
mysql_insert_id()函数用于获取INSERT 操作产生的 ID;

7. mysqli_affected_rows (conn)
	函数用于获取前一次 MySQL 操作所影响的记录数 ;
-----------------------------------------*/
$page = 1;
if (isset($_GET["page"])) {//判断是否有page的GET参数
	$page = $_GET["page"];
}

echo "第".$page."页";


// mysqli_connect(地址,账户,密码,数据库名)
$conn = @mysqli_connect("localhost","root","","html5");
if (!$conn) {
	// echo "连接失败";
	// exit();
	die("连接失败");
}
// echo "连接成功";
$conn->query("set names utf8");
$pages = ($page-1)*2;
$sql = "SELECT * FROM user LIMIT $pages,2";//SQL语句

$result = $conn->query($sql);//执行SQL语句，获取数据
// var_dump($result->fetch_assoc());//输出一条数据
echo "<table border>";
//循环获取每一条数据
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>{$row['id']}</td>
		  <td>{$row['name']}</td>
		  <td>{$row['pwd']}</td>
		  <td>{$row['age']}</td>";
	echo "</tr>";
}
echo "</table>";

// $page = 1;
// if (isset($_GET["page"])) {//判断是否有page的GET参数
// 	$page = $_GET["page"];
// }
// echo "第".$page."页";
//分页----------------------------------------
//获取user表的数据总数
$sql = "SELECT count(name) as len FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sum = $row["len"];//总数
$nums = ceil($sum/2);//计算多少页
for ($i=0; $i < $nums; $i++) { 
	$n = $i+1;
	echo "<a href='2.mysql.php?page={$n}'>{$n}</a>";
}








?>










