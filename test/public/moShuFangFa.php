<?php
class Person 
{ 
	private $name;
	private $age = 30;  

//__get()方法用来获取私有属性 
	public function __get($property_name) 
	{ 
		echo "在直接获取私有属性值的时候，自动调用了这个__get()方法<br>"; 
		if(isset($this->$property_name)) 
		{ 
			return($this->$property_name); 
		} 
		else 
		{ 
			return(NULL); 
		} 
	} 
//__set()方法用来设置私有属性 
	public function __set($property_name, $value) 
	{ 
		echo "在直接设置私有属性值的时候，自动调用了这个__set()方法为私有属性赋值<br>"; 
		echo "$property_name";
		echo "$value";
		$this->$property_name = $value; 
	} 

	function __call($function_name,$args)
	{
		echo "<br>"."$function_name"."<br>";
		var_dump($args);
	}


	public function __callStatic($function_name,$args)
	{
		echo "<br>"."$function_name"."<br>";
		var_dump($args);
	}
} 

$p1=new Person(); 
//直接为私有属性赋值的操作，会自动调用__set()方法进行赋值 
// $p1->name="张三"; 

//直接获取私有属性的值，会自动调用__get()方法，返回成员属性的值 

// echo "年龄：".$p1->age."<br>"; 
$p1->aaa('bbb');
Person::ccc('ddd');

















