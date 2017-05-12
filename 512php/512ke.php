<?php
	header("content-type:text/html;charset=utf-8");
	/*
	*		面向对象的特点:1.封装2.继承3.多态
	*				 1.封装:public公开的;     private私有的,只能在本类中访问;    protected受保护的,本类和子类可以使用,外部不能不能访问
	*				 2.继承:
	*/
	class Ke512{
		public $b='12';
		private $c='32';
		protected  $d=43;
		public function say(){
			echo $this->b+$this->c;
			echo $this->d;
		}
		
	}

	$a=new Ke512();
	$a->say();	//私有的private函数可以被调用 
	echo $a->b;//protected不能在外部调用
	// echo $a->d;
	// echo $a->c;私有的private不能在外部调用
	echo  "<br/>";


	/*
	*	继承:extends:
	*
	*/
	class Hanmu extends Ke512{//继承
		public function run(){
			// echo $this->$c;private不能在子类中访问
			echo $this->d;//protected能在子类中被访问
			echo "sdsdsd";
		}
	}
	$d1=new Hanmu();
	echo $d1->b;//public能在子类中被调用
	// echo $d1->d;protected 不能在外部访问
	echo "<br/>";
	$d1->run();
	echo "<br/>";

	/*
	*	重写:用parent::方法(继承父类的方法)
	*
	*/
	class Keshang extends Hanmu{
		public function run(){
			parent::run();	//重写父类(Hanmu)的方法
			echo "qqqq";
		}
	}
	$k=new Keshang();
	$k->run();
	echo  "<br/>";

	/*
	*	常量:用const定义
	*	静态变量:用static定义,用self::$.调用,只属于类而不属于任何类产生的对象
	*
	*/
	class sun extends Hanmu{
		public $r=5;
		const P=3.14;		//常量:用const定义大写
		static $c=4;		//静态变量用static定义
		public function run(){
			echo  self::P."<br/>";//用self或者自身类名::常量名来调用
			// echo  sun::P."<br/>";
			self::$c++;
			echo self::$c."<br/>";//用self::$.调用

		}
		static function run1(){	// 静态方法只能调用静态属性
			echo "sfda";
			echo self::$r;
		}
	}
	$l=new sun();
	$l->run();
	// echo sun::$c;静态属性调用
	sun::run1();//静态方法调用
	

?>