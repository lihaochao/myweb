<?php
	header("content-type:text/html;charset=utf-8");
//var_dump判断数据类型
$money=100;var_dump($money);
$money=100.00;var_dump($money);
$money="100";var_dump($money);
$money=true;var_dump($money);

//输出单引号,双引号
echo "<br/>";
echo  "        '     ";
echo'          "       ';
echo "<br/>";

//round函数----四舍五入函数
$money=54.55;
echo round($money);
echo "<br/>";

//floor舍去小数点后面数
$money=54.55;
echo floor($money);
echo "<br/>";
$x=21;
if($x/4>0){
	echo floor($x/4)+1;
}else{
	echo floor($x/4);
}
//ceil进1法
echo "<br/>";
$y2=1493864725;
$z2=1496964725;
$temp=($z2-$y2);
echo ceil($temp/86400);
echo "<br/>";


$x2=784;
$y=$x2/23;
	echo "y的值:".ceil($y);
	echo "<br/>";
$z=$y/9;
	echo "z的值:". ceil($z);

echo "<br/>";

//rand产生随机数
$key=rand(0,36);
$key1=rand(0,9);
echo $key;
echo "<br/>";

$key2=rand(10,100);
echo  "题目5:".$key2;echo "<br/>";


$key3=rand(00000,99999);
echo "题目6:".$key3;echo "<br/>";



echo "<br/>";
echo "题目7:";
for ($i=0; $i < 5; $i++) { 
	echo rand(0,9);
}

echo "<br/>";


echo "题目8:";echo "<br/>";
for ($i=0; $i < 7; $i++) { 
	$qi=rand(0,9);
	echo "<img src=$qi.png  />";
}




?>