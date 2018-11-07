<?php 
    include "connect.php";
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新浪微博</title>
<style>
* { padding: 0; margin: 0; }
li { list-style: none; }
body { background: #f9f9f9; font-size: 14px; }

#box { width: 450px; padding: 10px; border: 1px solid #ccc; background: #f4f4f4; margin: 10px auto; }
#fill_in { margin-bottom: 10px; }
#fill_in li { padding: 5px 0; }
#fill_in .text { width: 380px; height: 30px; padding: 0 10px; border: 1px solid #ccc; line-height: 30px; font-size: 14px; font-family: arial; }
#fill_in textarea { width: 380px; height: 100px; line-height: 20px; padding: 5px 10px; border: 1px solid #ccc; font-size: 14px; font-family: arial; overflow: auto; vertical-align: top; }
#fill_in .btn { border: none; width: 100px; height: 30px; border: 1px solid #ccc; background: #fff; color: #666; font-size: 14px; position: relative; left: 42px; }

#message_text h3 { font-size: 14px; padding: 6px 0 4px 10px; background: #ddd; border-bottom: 1px solid #ccc; }
#message_text li { background: #f9f9f9; border-bottom: 1px solid #ccc; color: #666; overflow: hidden;}
#message_text li a{ float:right;}
#message_text h3 { padding: 10px; font-size: 14px; line-height: 24px; }
#message_text p { padding: 0 10px 10px; text-indent: 28px; line-height: 20px;}
</style>
</head>
<body>
<div id="box">
    <ul id="fill_in">
        <form action="add.php" method="post">
            <li>姓名：<input name="name" id="txt1" type="text" class="text" /></li>
            <li>内容：<textarea name="con" id="txt2"></textarea></li>
            <li><input id="btn" type="submit" value="提交" class="btn" /></li>
        </form>
    </ul>
    <div id="message_text">
        <h2>显示留言</h2>
        <ul>
<?php 
    $sql = "SELECT * FROM msg ORDER BY id DESC";//查询语句,获取msg表格里面的所有数据
    $result = $conn->query($sql);//执行SQL语句,获得数据集
    while ($row = $result->fetch_assoc()) {
        echo "<li><h3>{$row['name']}</h3><p>{$row['con']}<a href='del.php?id={$row['id']}'>删除</a></p></li>";
    }
 ?>
        	<!-- <li><h3>名字</h3><p>内容<a href="###">删除</a></p></li> -->
        </ul>
    </div>
</div>
</body>
<script type="text/javascript">
var txt1 = document.querySelector("#txt1");//姓名
var txt2 = document.querySelector("#txt2");//内容
var btn = document.querySelector("#btn");//按钮
var ul = document.querySelector("#message_text ul");//ul消息框
// var a = document.getElementsByTagName('a');
btn.onclick = function () {
    if (txt1.value=="") {
        alert("请输入姓名");
    }else if(txt2.value==""){
        alert("请输入内容")
    }
}



</script>
</html>









