<?php 
/*一、OOP(Object-Oriented Programming）面向对象编程

	OOP达到了软件工程的三个目标：重用性、灵活性和扩展性。 
	
	采用面向对象方法可以使系统各部分各司其职、各尽所能; 使其编程的代码更简洁、更易于维护，并且具有更强的可重用性。 
	
	类 (class)
		日常环境由无数实体组成:植物,人群,交通工具,食物... 
	    每个实体都由一组性质和行为来定义。
	    例如： 男人 可以定义有：身高,体重,是否帅，肤色等性质，并且定义有能赚钱，能下厨，能开车等行为。在OOP术语中，实体的性质和行为的具体定义称为类

	对象 (object)
		通过类创建出来的实体称为对象。
		对象是系统中用来描述客观事物的一个实体。
		它是构成系统的一个基本单位,数据与代码都被捆绑在一个实体中。一个对象由一组属性和对这组属性进行操作的一组行为组成。


二、 PHP的面向对象
	1、定义类		
		class name {}
	2.创建对象（实例化）
		$obj = new name();
	3.访问对象中的成员 
		$obj->attr;
	4.const常量
		可以在类中定义常量，即不会在类中改变的值。对于从该类实例化的任何对象来说，常量值在这些对象的整个生命周期中都保持不变。
		echo self::PI;		//类内部访问
		echo 类名::PI;		//类外部访问  

	5.static静态属性与静态方法
	    使用static 关键字可以用来标识成员属性,也可以用来标识成员方法，
		静态的成员属于类所有，所以我们在静态方法里，不能使用$this 来引用 静态成员,建议使用 self 关键字来调用。
----------------------------------------------*/

// class Person{
// 	public $name = "a1";
// 	const PI = "3.14";
// 	static $static = "static";

// 	function show(){
// 		//$this方法不可以访问const和static的变量
// 		// echo $this->name;

// 		//获取const和static的变量通过类对象或者self对象
// 		// echo Person::PI;
// 		echo self::PI;
// 		echo self::$static;
// 	}
// }

// $obj = new Person();
// $obj->show();

/*三、构造函数和析构函数--------------------------
	1.构造函数
		通常用来对成员属性进行初始化赋值
		__construct($name,$age)
	2.析构函数
		与构造方法对应的就是析构方法，析构方法允许在销毁一个类之前执行的一些操作或完成一些功能，比如说关闭文件、释放结果集等。析构函数不能带有任何参数，其名称必须是 __destruct() 。
----------------------------------------------*/
// class Person{	
// 	// 构造函数
// 	function __construct($name){
// 		$this->name = $name;
// 	}
// 	function show(){
// 		echo $this->name;
// 	}
// 	// 析构函数
// 	function __destruct(){
// 		echo "结束了";
// 	}
// }
// $obj = new Person("小明");
// $obj->show();
// $obj->show();
// $obj->show();
// $obj->show();
// $obj->show();



/*四、访问修饰符（作用域描述符）--------------------
	访问修饰符允许开发人员对类成员的访问进行限制,这是PHP5的新特性。
	1.public 公共修饰符
		类的成员将没有访问限制，所有的外部成员都可以访问（读和写）这个类成员。
	在属性或方法前面加上关键字public,或不加任何关键字，都可以声明一个公共属性或方法。
	2.private 私有修饰符
		被定义为private的成员，对于同一个类里的所有成员是可见的，即没有访问限制；但对于该类的外部代码是不允许改变甚至读操作，对于该类的子类，也不能访问。
	3.protected 保护修饰符
		被修饰为protected的成员不能被该类的外部代码访问。但是对于该类的直接子类有访问权限，可以进行属性、方法的读及写操作。
	被子类继承的protected成员，在子类外部同样不能被访问
--------------------------------------------*/
// class Person{
// 	public $name = "abc";
// 	private $age = 18;
// 	protected $p = "p";

// 	function show(){
// 		// echo $this->name;//public在内部和外部都可以使用
// 		// echo $this->age;//私有的变量内部可以使用
// 		// echo $this->p;//受保护的变量内部可以使用

// 	}
// }

// $obj = new Person();
// // $obj->show();
// // echo $obj->name;//public在内部和外部都可以使用
// // echo $obj->age;//私有的变量外部不可以使用
// // echo $obj->p;//受保护的变量外部不可以使用

// class Son extends Person{
// 	function show(){
// 		// echo $this->name;//公共的变量继承的对象也可以获取
// 		// echo $this->age;//私有的变量继承的对象也不可以获取
// 		echo $this->p;//受保护的变量继承也可以使用
// 	}
// }
// $son = new Son();
// $son->show();
	
/*五、封装-------------------------------------
	封装就是把对象的属性和行为结合成一个独立的相同单位，并尽可能隐蔽对象的内部细节

六、继承
	面向对象开发方法建立在继承概念的基础上，这种策略提高了代码的重用性。
	在PHP中，类继承通过 extends 关键字实现;
	继承自其他类的类称为子类（child class 或 subclass)
	子类所继承的类称为父类( parent class) 或 基类 (base class)	

七、多态  
	对象的多态性是指在父类中定义的属性或行为被子类继承之后，可以具有不同的数据类型或表现出不同的行为。这使得同一个属性或行为在父类及其各个子类中具有不同的语义。
*/










?>