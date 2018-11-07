<?php 
//1.If 语句-----------------------------------------------------
// $a = 3;
// if ($a>5) {
// 	echo "1";
// }else if($a>6){
// 	echo "2";
// }else if($a>3){
// 	echo "4";
// }

//2.Switch 语句-------------------------------------------------
switch (5) {
	case 1:
		echo "星期一";
		break;
	case 2:
		echo "星期二";
		break;
	case 3:
		echo "星期三";
		break;
	case 4:
		echo "星期四";
		break;
	default:
		echo "不知道";
		break;
}



//3.While 语句--------------------------------------------------
// $i = 11;
// while ($i <= 10) {	
// 	echo $i."<br>";
// 	$i++;
// }




//4.do…while 语句-----------------------------------------------
// $i = 11;
// do{
// 	echo $i;
// 	$i++;
// }while ($i <= 10)



//5.for 语句----------------------------------------------------
// $sum = 0;
// for ($i=1; $i <= 10000; $i++) { 
// 	$sum+=$i;
// }
// echo $sum;




/*6.foreach 语句-------------------------------------------
	foreach循环用来遍历数组，每次循环都将指针后移一位;

	语法格式1：
	foreach(array_expr as $value){
		//statements
	}
	
	语法格式2：
	foreach(array_expr as $key=>$value){
		//statements
	}
-------------------------------------------------------*/ 
$arr = array("name"=>"abc","a","b","age"=>18);

foreach ($arr as $key => $value) {
	echo $key.":".$value."<br>";
}


 ?>