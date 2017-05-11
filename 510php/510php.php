<?php
							
	header("content-type:text/html;charset=utf-8");

//					类 			与		对 					象


	// class Birds{						//类的定义,第一个字母用大写
	// 	public $color='#ccc';	//	public属性
	// 	public $age='5day';



	// 	//    行为
	// 	public function say(){	//定义一个say的函数
	// 		echo $this->color."jijizhazha";			//this->调用内部属性

	// 	}	
	// }			



	// $p1=new Birds();//由类产生对象
	// echo  $p1->color."<br/>";	//输出对象的属性
	// echo $p1->age."<br/>";		//输出对象的属性

	//  $p1->say();			//调用对象的方法
	// echo "<br/>";

	// var_dump($p1);
	// 			//	练习1

	// echo "<hr/>";
	// class  Phone{
	// 	public $height='20厘米';
	// 	public $width='10厘米';
	// 	public $pinpai='OPPO';
	// 	public $shichang='1hour';


	// 	public function paizhao(){
	// 		echo '1600万像素,清晰.';
	// 	}
	// 	public function tongdian(){
	// 		echo "充电5分钟通话2小时".$this->paizhao();	//this->方法()调用内部的方法
	// 	} 

	// }
	// $a=new Phone();
	// echo $a->height;
	// echo "<br/>";
	// // $a->paizhao();
	// // echo "<br/>";
	// $a->tongdian();
	// echo "<br/>";
	// var_dump($a);


	// echo "<hr/>";


	// 				//类属性的赋值

	// class  Hone{
	// 		public $height;
	// 		public $width;
	// 		public function  __construct(){			//_ _construct()是构造函数,给类里面的属性或者行为初始化
	// 			$this->width='30';
	// 			$this->height='5';
	// 		}
	// 	}
	// $h=new Hone;
	// $h->height='4';		//给类里面的属性赋值
	// print_r($h);


	// echo "<hr/>";


						// 		类 	的 	行 	为
								//练习1
	// class Zhuo{
	// 	public $width;
	// 	public $height;
	// 	public function area(){
	// 		echo $this->width*$this->height;
	// 	}
	// 	public  function __construct(){
	// 		$this->width=3;
	// 		$this->height=5;
	// 		$this->area();
	// 	}
		
	// }
	// $k=new Zhuo();
	// echo "<br/>";					//练习2
	// class Canpin{
	// 	public  $num1;
	// 	public 	$num2;
	// 	public  $num3;
	// 	public  function  zonge(){
	// 		echo  $this->num1+$this->num2+$this->num3;
	// 	}
	// 	public function __construct(){
	// 		$this->num1=1600;
	// 		$this->num2=2600;
	// 		$this->num3=3800;
	// 		$this->zonge();
	// 	}
	// }
	// $can=new Canpin();
	// echo "<hr/>";					//练习3
	// class Sp{
	// 	public $cl1=3000;
	// 	public $cl2=5000;
	// 	public $cl3=8000;
	// 	public function pinju(){
	// 		echo ($this->cl1+$this->cl2+$this->cl3)/3;
	// 	}
	// }
	// $sp=new Sp();
	// $sp->pinju();
	// echo "<hr/>";	
	// 						//练习4

	// class  Zhangdan{
	// 	public $ake;
	// 	public $bke;
	// 	public $cke;
	// 	public function jine($x,$y){
	// 		return $x*$y;
			
	// 	}
		
	// 	public function zong(){
	// 		echo "A客户月金额:".$this->ake."<br/>";
	// 		echo "B客户月金额:".$this->bke."<br/>";
	// 		echo "C客户月金额:".$this->cke."<br/>";
	// 		echo "月总金额:".($this->cke+$this->bke+$this->ake)."<br/>";
	// 	}

		
	// }
	// $dan=new Zhangdan();
	// $dan->ake=$dan->jine(5,1000)+$dan->jine(8,2000);
	// $dan->bke=$dan->jine(6,1800)+$dan->jine(9,3200);
	// $dan->cke=$dan->jine(15,2400)+$dan->jine(3,7600);
	// $dan->zong();

	echo "<hr/>";
								//	传                      参

	class Num{
		public function area($x,$y){			//	传 参 	$x,$y---------形参
			echo $x*$y;
		}

	}
	$n=new Num();
	$n->area(6,5);
	echo "<hr/>";
								
				// 						//练习1		
	class Area{
		public function are($x,$y){
			echo $x*$y;
		}
	}
	$a=new  Area();
	$a->are(5,3);
	echo "<br/>";						//练习2

	class Xiaoliang{
		public function zong($x,$y,$z){
			echo $x+$y+$z;
		}
	}		
	$b=new Xiaoliang();
	$b->zong(1600,2600,3800);
	echo "<br/>";					//练习3
	class Chan{
		public function  pinju($x,$y,$z){
			echo  ($x+$y+$z)/3;
		}
	}
	$c=new Chan();
	$c->pinju(3000,5000,8000);
	echo "<hr/>";					//练习4
	/*
	 *功能:两个数相乘然后相加
	 *方法:传一个二维数组arr
	 *返回值return:int
	*/
	
	class  Zhangdan{
		public function sum($arr){
			$d=0;
			for ($i=0; $i <count($arr) ; $i++) { 
				$row=$arr[$i];
			$d+=$row[0]*$row[1];
			}
			return $d;
		}
	}
		
	$zhan=new Zhangdan();
	$d=$zhan->sum(array([5,1000],[8,2000]));
	$e=$zhan->sum(array([6,1800],[9,3200]));
	$f=$zhan->sum(array([15,2400],[3,7600]));
	$g=$zhan->sum(array([10,3000]));
	echo $g."<br/>";
	echo "A客户:".$d."<br/>b客户:".$e."<br/>c客户:".$f."<br/>月金额:".($d+$e+$f);








	echo "<hr/>";




?>