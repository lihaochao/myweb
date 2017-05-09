<?php
	header("content-type:text/html;charset=utf-8");								//       foreach        user
// $num=array('wo','shi','li','我');
// foreach ($num as $val) {		//数组输出          1
// 	echo $val."<br/>";
// }

// 		//数组输出          2

// foreach($num as $key=>$val){		//key为下标',val为值
// 	echo $key."=>".$val."<br/>";
// 	echo $key."=>".$num[$key]."<br/>";
// }


// $com=array(
// 	array('wo','shi','li','fa'),
// 	array('hao','2','7','ht'),
// 	array('lai','4','9','wei')
// 	);
// foreach ($com as $key ) {
// 	//echo $com[$key][0]."<br/>".$com[$key][1]."<br/>".$com[$key][2]."<br/>".$com[$key][3];
// 	foreach ($key as $val) {
// 		echo $val."<br/>";
// 	}
// }

		
// 						//       foreach 

// $arr=array(
// 	array('机械工程师','应聘职位'),
// 	array('机械设计主管','应聘职位'),
// 	array('电器自动工程师','应聘职位'),
// 	array('电器自动化设计主管','应聘职位'),
// 	array('液压工程师','应聘职位'),
// 	array('液压钳工','应聘职位'),
// 	array('招聘电工','应聘职位'),
// 	array('装配钳工','应聘职位')
// 	);
// foreach($arr as $key){
// 	foreach ($key as $val ) {				//foreach
// 		echo $val."&nbsp;";
// 	}
// 	echo "<br>";
// }
// echo "<hr/>";
// for ($i=0; $i <8 ; $i++) { 						//for
// 	for ($e=0; $e <2 ; $e++) { 
// 		echo $arr[$i][$e]."&nbsp;";
// 	}
// 	echo "<br/>";
// }
// echo "<hr/>";
// for ($i=0; $i <8 ; $i++) { 						// for          foreach嵌套使用
// 	foreach ($arr[$i] as $val ) {
// 		echo $val."&nbsp;";
// 	}
// 	echo "<br>";
// }
// echo "<hr/>";
// foreach($arr as $key){						// foreach          for嵌套使用
// 	for ($i=0; $i < 2; $i++) { 
// 		echo $key[$i]."&nbsp;";
// 	}
// 	echo "<br>";
// }
// echo "<hr/>";
		//		数  		组 		的 		函 				数

		// 		1count 		统计数组元素的个数
// $com=array(
// 	array('wo','shi','li','fa'),
// 	array('hao','2','7','ht'),
// 	array('wo','shi','li','fa'),
// 	array('hao','2','7','ht'),
// 	array('lai','4','9','wei')
// 	);
// echo count($com)."<br>";
// $ke=array('lai','4','9','wei');		// count函数
// for ($i=0; $i <count($ke) ; $i++) { 
// 	echo $ke[$i]."<br>";
// }
// echo "<hr/>";
		//		2in_array($str,$arr)			判断一个元素是否在数组中


// $ke=array('lai','4','9','wei');
// echo var_dump(in_array('2',$ke));	//in_array 函数
					//练习1
// $city=array('北京','深圳','广州');
// $shi=in_array('东莞',$city);
// if ($shi==0) {
// 	$city[]=('东莞');				//添加数组
// 	foreach ($city as $key) {
// 		echo $key."<br/>";
// 	}
// }else{}
// echo "<hr/>";

// 				//练习2
// $tu=array('gif','png','jpeg','bmp');
// $shi=in_array('bmp', $tu);
// if ($shi) {
// 	echo "允许上传";
// }else{
// 	echo "不允许上传的图片类型";
// }
// echo "<hr/>";
// echo var_dump(in_array('hao',$com));

				//	 	2.  array_push		添加数组元素

//  $city=array('北京','深圳','广州');
//  array_push($city, '潍坊','美国');	//不能添加关联数组
//  echo "<pre>";			
// print_r($city);	
// 				//	练习1
// $num[]='';
// for ($i=0; $i <10 ; $i++) { 
// 	array_push($num,"$i");

// }
// foreach ($num as $key ) {
// 	echo $key."<br/>";
// }
				
			//	练习2

// $yi=array();
// $er=array();
// $san=array();
// for ($i=1; $i < 6; $i++) { 
// 	array_push($yi, '1等奖'.$i.'号');
// 	array_push($er, '2等奖'.$i.'号');
// 	array_push($san, '3等奖'.$i.'号');
// }

// $jiang[ '1等奖']=$yi;
// $jiang[ '2等奖']=$er;
// $jiang[ '3等奖']=$san;

// echo "<pre>";
// print_r($jiang);

// echo "<hr/>";



// for ($i=1; $i <4; $i++ ){ 					//老师给的代码
// 	$row=array();
// 	for ($e=1; $e <$i*5+1; $e++) { 		//倍数
// 		array_push($row, $i.'等奖'.$e.'号');
// 	}
// 	$jiang[$i.'等奖']=$row;
// }
// echo "<pre>";
// print_r($jiang);
							
// echo "<hr/>";




	




				//	3.  array_pop 		删除数组中最后一个元素

$city=array('北京','深圳','广州');
array_pop($city);			//array_pop
echo"<pre>";
print_r($city);

 echo "<hr/>";



 
 for ($i=1; $i <10 ; $i++) { 
 	$num[$i]=$i.'号手机';
}
$name="";


				//	4.  unset ()	 		删除指定的数组元素
for ($i=9; $i >=0; $i--) { 
	if($i!=6){unset($num[$i]);}			
}
// for ($i=9; $i >=0; $i--) { 
// 	if($i==6){$name=$num[$i];
// 		for ($e=0; $e < 6; $e++) { 
// 			array_pop($num);
// 		}
// 	}else{
// 		array_pop($num);
// 	}

// }
// $num[]=$name;
echo"<pre>";
print_r($num);

				//	5.  array_unshift($arr,$var)	 		在数组前添加元素
 echo "<hr/>";

$q=array('wo','sd','fd');			//array_shift
array_unshift($q, 'keng');
array_unshift($q, 'shui');
echo"<pre>";
print_r($q);
 echo "<hr/>";

 				// 	6.  implode($part,$arr)			数组转换成字符串

$w=array('wo','sd','fd');
$str=implode('@',$w);		//implode($part,$arr)		
print_r($str);
 echo "<hr/>";


?>
