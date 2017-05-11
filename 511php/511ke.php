<?php
header("content-type:text/html;charset=utf-8");
/*		5 	1 	1		p 	h 		p
*		字		符		串
*		
*
*/
class Str{
	public function string(){
		$string='asdfasfa';
		echo  $string[1];
		
	}
}
$a=new Str();
$a->string();
echo "<br/>";
/*			
*		课程1
*		strlen()统计字符串的长度
*/
class Str1{
	public function stri(){
		$string='asdfasfa';
		if (strlen($string)>5) {	//strlen()
			echo "不能超过五个字符";
		}
		
	}
}
$b=new Str1();
$b->stri();
echo "<br/>";



/*
*	练习1
*	str()功能:输出字符串前四个字符
*	string3()功能:长度小于5时输出字符,大于5时输出...
*/
class Str2{
	public function str(){
		$sa='acfgeg';
		for ($i=0; $i <4 ; $i++) { 
			echo $sa[$i]."<br/>";
		}
			
		
	}
	public function string2($a){
		if (strlen($a)<6) {
			echo $a;
		}else{
			
		for($i=0;$i<5;$i++) {
				echo $a[$i];
			}
			echo  ' ... ';
		}
		
	}
}
$d=new Str2();
$d->str();
echo "<br/>";
$d->string2('123456789');
echo "<br/>";
/*
*	练习2
*	功能:长度不大于6时输出字符,大于6时不输出
*/
class Str3{
	public function string3($a){
		for ($i=0; $i < strlen($a); $i++) { 
			if ($i<6) {
				echo $a[$i];
			}else{}
		}
			
	}

}
$e=new Str3();
$e->string3('123456789');
echo "<hr/>";
/*
*	课程2	
*	trim()去除两侧的特殊字符
*/

class Strke2{
	public function stringke2(){
		$s='~~sdasdsadasd~~~~~~~~';
		echo trim($s,'~');//trim()
	}
}
$a=new Strke2();
$a->stringke2();
echo "<br/>";


/*
*	练习1	
*	stringli1()功能:删除字符串里面的@
*	stringli2()功能:将字符串中的@替换成#
*/
class Strli1{
	public function stringli1(){
		$b='@@@@afsfasfa@@asda@@sds@@sd@@';
		
		for ($i=0; $i < strlen($b); $i++) { 
			if ($b[$i]!='@') {
				echo $b[$i];
			}
			
		}
		
	}
	public function stringli2(){
		$b='@@@@afsfasfa@@asda@@sds@@sd@@';
		for ($i=0; $i <strlen($b) ; $i++) { 
			if ($b[$i]=='@') {
				echo $b[$i]='#';
			}else{
				echo $b[$i];
			}
		}
	}
}
$a=new Strli1();
$a->stringli1();
echo "<br/>";
$a->stringli2();
echo "<hr/>";
/*
*	课程3	
*	strtolower()字符全部转换成小写
*	课程4
*	strtoupper()字符全部转换成大写
*/


/*
*	课程5
*	substr(原字符串,开始位置,长度)截取字符串
*
*/
class Strjiqu{
	public function jiqu(){
		$a='1234567890abcdefghijk';
		echo substr($a, 4,5);
	}
}
$a=new Strjiqu();
$a->jiqu();
echo "<hr/>";	
/*
*	练习
*	自己定义一个substr
*
*/
class Mysub{
	public function mysubstr($str,$start,$len){
		if (($start+$len)>strlen($str) ) {
				echo "长度不够";
		}else{
			for ($i=$start; $i <$start+$len ; $i++) { 

					echo $str[$i];
				
			}
		}		
	}
}
$a=new Mysub();
$a->mysubstr('asesafsadasdasf',2,3);
echo "<br/>";
/*
*	练习2
*	功能:输出Hellow Word
*
*/

class Lian{
	public function lianxi($x){
		for ($i=0; $i <strlen($x) ; $i++) { 
			if ($x[$i]!='_') {
				if ($i==0) {
					echo strtoupper($x[$i]);
				}else if($x[$i]=='w'&&$x[($i-2)]=='w'){
					echo "&nbsp".strtoupper($x[$i]);
				}else{
					echo $x[$i];
				}
				
			}

		}
	}
}
$a=new Lian();
$a->lianxi('h_e_l_l_o_w_w_o_r_l_d');
echo "<hr/>";

/*
*	练习2
*	功能:输出Hellow Word
*
*/
class Laoshilianxi{
	public function laolian($x){
		$a='';
		for ($i=0; $i < strlen($x); $i++) { 
			if ($x[$i]!='_') {
				$a.=$x[$i];
			}
		}
		substr_replace($a, 'w W', 4,2);
		echo $a;
		// for ($j=0; $j <strlen($a) ; $j++) { 
		// 	if ($a[$j]=='w') {
		// 		$k=$j;	
		// 	}
		// }
		// echo $str1=substr($a, 0,$k);
		// echo $str2=substr($a, $k);

	}
}
$a=new Laoshilianxi();
$a->laolian('h_e_l_l_o_w_w_o_r_l_d');
echo "<br/>";

/*
*	下		午		的			课 			程
*	explode('分隔符,如用_w_分隔','字符串')将字符拆成数组
*
*/
/*
*	mb_strlen($arr,'utf8')统计中英文字符串长度
*	mb_substr($arr, $start,$len,'utf8')截取中英文字符串
*
*/
class Xiake{
	public function xiawuke($x){
		echo mb_strlen($x,'utf8');//mb_strlen()
		 echo mb_substr($x, 0,3,'utf8');//mb_substr()

	}
}
$a=new Xiake();
$a->xiawuke('h_地4');
echo "<br/>";
/*
*	
*	substr_replace($old_str要替换的字符串,replace_str替换成的字符串,$start_int,$replace_length)截取替换
*	xiaowuke2()函数功能:用ddsfsdf替换3到6的字符
*	xiawuli1()函数功能:用***替换2到3的字符
*	xiawuli2()函数功能:用***随机替换3个的字符包括中文字符
*/


class Xiake2{
	public function xiaowuke2($a){
		echo substr_replace($a, 'ddsfsdf', 3,6);
	}
	public function xiawuli1($b){
		echo substr_replace($b, '***', 2,3);
	}
	public function xiawuli2($c){
		$a=mb_strlen($c,'utf8');
		$b=rand(0,$a-3);
		$str1=mb_substr($c,0,$b,'utf8');
		$str2=mb_substr($c,$b+3,$a,'utf8');
		echo $str1."***".$str2;
	}
}
$a=new Xiake2();
$a->xiaowuke2('f1244t53325454');
echo "<br/>";
$a->xiawuli1('4956849824');
echo "<br/>";
$a->xiawuli2('wohewe大家a阿斯拉翻开红楼ongdan@sd');
echo "<hr/>";


/*
*	str_replace('',$str)替换全部
*	strpos(字符串,查找的字符,开始索引)查找字符
*
*/
class Xiake3{
	public function xiwuke3($a){
		echo str_replace('@ ','#', $a);
	}
	public function strpo($b){
		echo strpos($b, '@');
	}
	public function mystrpos($c,$d){	//自己定义的字符串查找,包括中文
		for ($i=0; $i <mb_strlen($c,'utf8') ; $i++) { //小于字符串长度,循环
			$k=mb_substr($c, $i,1,'utf8');	//将字符串一个个截取出来对比(防止中文)
			if($k==$d){
				return $i;

			}
		}

		
	}
}
$a=new Xiake3();
$a->xiwuke3('@@@32353@@@454@@');
echo "<br/>";
$a->strpo('@safddsf@');
echo "<br/>";
$k=$a->mystrpos('@sa大fddsf@','s');
echo $k;
echo "<hr/>";
/*
*	str_replace('',$str)替换全部
*	strpos(字符串,查找的字符,开始索引)查找字符
*
*/
class Xialian{
	public function xiwulian1($a,$b,$c){
		$n=0;
		for ($i=0; $i < mb_strlen($a,'utf8'); $i++) { 
			if ($a[$i]==$b) {
				$n++;
				echo $a[$i]=$c;
			}else{
				echo $a[$i];
			}
		}
		echo "<br/>".$c."=>".$b.":".$n;
	}
	public function xiwulian2($a,$b,$c){
		$n=0;
		for ($i=0; $i < mb_strlen($a,'utf8'); $i++) { 
			$k=mb_substr($a, $i,1,'utf8');
			if ($k==$b) {
				$n++;
				echo $k=$c;
			}else{
				echo $k;
			}
		}
		echo "<br/>".$c."=>".$b.":".$n;
	}


	
}
$a=new Xialian();
$a->xiwulian1('akjhgjhaka','a','c');
echo "<br/>"	;
$a->xiwulian2('三方法司法67三分','三','c');
echo "<hr/>";


class Xiake5{
	
	public function mystrpos($c,$d){	//自己定义的字符串查找,包括中文
		$k=explode($d, $c);
		echo mb_strlen($k[0],'utf8');
		print_r($k);
		
	}
	
}
$a=new Xiake5();
$a->mystrpos('三地方三地三方','三');
echo "<hr/>";


?>