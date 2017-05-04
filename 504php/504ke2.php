<?php
	
		header("content-type:text/html; charset=utf-8");
                      //数据类型的转换
$x=true;
$x2=false;
echo $x+2;
echo "<br/>";


$y=1;
if($y){
	echo "true";
}else{
	echo "false";
}
echo "<br/>";

var_dump((bool)$y);
echo "<br/>";


		//%余数运算符
$k1=20;
if($k1%5!=0){
	echo "失败";
}else{
	echo "成功";
}
echo "<br/>";
if($k1%2==0){
	echo "偶数";
}else{
	echo "奇数";
}
echo "<br/>";
echo "能被7整除的数:";
for ($i=1; $i <101 ; $i++) { 
	if($i%7==0){
		echo $i;
		echo "&nbsp";
		
	}
}
echo "<br/>";
$k2=0;
for ($i=1; $i <101 ; $i++) { 
	if($i%3==0){
		++$k2;
	}
}
echo "能被3整除的数个数:".$k2;
echo "<br/>";
		//++          --
 $a=10;
$b=($a++)+(++$a);
echo "a:".$a."b:".$b;
echo "<br/>";
 $a=10;
$b=($a--)-(--$a);
echo "a:".$a."b:".$b;
echo "<br/>";


		// 逻辑运算符:与&&                或||                                       非!

$name="i";
$pwd="123456";
if($name=="li"&&$pwd=="123456"){
	echo "登陸成功";
}else{
	echo "登陸不成功";
}
echo "<br/>";
echo "<br/>";echo "<br/>";
				//                                              练习1
$wo=321;
echo "百位:".floor($wo/100);
echo "<br/>";
$wo1=$wo-floor($wo/100)*100;
echo  "十位:".floor($wo1/10);
$wo2=$wo1-floor($wo1/10)*10;
echo "<br/>";
echo  "个位:".$wo2;

// $wo=321;
// $wo1=($wo/100)%10;
// $wo2=($wo/10)%10;
// $wo3=($wo/1)%10

				//                                              练习2
echo "<br/>";
$shi=739;
$shi1=floor($shi/100);
$shi2=floor(($shi-$shi1*100)/10);
 $shi3=$shi-$shi1*100-$shi2*10;
echo "三位数位置调换:".($shi1+$shi3*100+$shi2*10);
echo "<br/>";


			//                if()
$q=rand(0,119);
 if($q>100){
	echo $q."超出范围";
}else
{
	if($q<60){
		echo $q.":差";
	}
	if($q>=60&&$q<80){
		echo $q.":中等";
	}
	if($q>=80&&$q<=100){
		echo $q.":优秀";
	}
}
		//                                              练习3
echo "<br/>";
echo "<br/>";
$e1=rand(0,999);
$e2=rand(0,999);
$e3=rand(0,999);
echo "e1:".$e1."&nbsp;&nbsp"."e2:".$e2."&nbsp;&nbsp"."e3:".$e3;
echo "<br/>";
if($e1>$e2){
	if ($e1>$e3) {
		echo $e1;
	}else{
		echo $e3;
	}
}else{
	if($e2>$e3){
		echo $e2;
	}else{
		echo $e3;
	}
}




  ?>