<?php
header("content-type:text/html;charset=utf-8");
				//   while  语句
$num=1;
while ($num) {
	echo "ok<br/>";
	$num=0;
}
$i=5;
while ( $i) {
	echo "$i<br/>";
	$i--;
}
echo "<hr/>";

$e=0;
while ($e<5) {
	echo "$e<br/>";
	$e++;
}
echo "<hr/>";

				///                                   数组                  

echo "<pre>";     
					//	创建索引数组方法  	1
$arr[]="student1";
$arr[]="student2";
$arr[]="student3";
$arr[]="student4";
print_r($arr);      
echo $arr[1]."<br/>";  //输出数组中一个元素:输出相应的下标

// var_dump($arr);
$arr=array('1','2','3');			////   	创建数组方法  	2

print_r($arr);				//输出数组
echo "<hr/>";
					//创建关联数组:下标改变为字符串
$arr= array('a' =>10 ,'b'=>20,'c'=>30 );
print_r($arr);

$arr= array('a' =>10 ,'b'=>20,'c'=>['1','2'] ); 		//二维数组
print_r($arr);
echo $arr['c'][1];//取出二维数组里面的一个元素
echo "<br/>";
echo "<hr/>";


$arr=array('a'=>12,'b'=>['1',['1','2']]);			//三维数组
print_r($arr);
echo $arr['b'][1][0];//取出三维数组里面的一个元素
echo "<hr/>";

							//	数组的练习   	1
$arr=array('北京','深圳','广州','上海','长沙');

echo "第二个元素输出为:".$arr[1]."<br/>";

for ($i=0; $i < 5; $i++) { 
	echo $arr[$i]."<br/>";
}
echo "<hr/>";

$arr=array(
		['编号','&nbsp; 1','&nbsp; 2','&nbsp; 3','&nbsp; 4'],
		['姓名','王小华','李强&nbsp;&nbsp;&nbsp;','陈娟&nbsp;&nbsp;&nbsp;','罗勇军'],
		['性别','男&nbsp;&nbsp;','&nbsp;男&nbsp;&nbsp;','&nbsp;女&nbsp;&nbsp;','男&nbsp;&nbsp;'],
		['地址','湖南','广东','河南','山东']
		);
for ($i=0; $i <5 ; $i++) { 
	for ($e=0; $e <4 ; $e++) { 
		echo  $arr[$e][$i]."&nbsp;&nbsp;&nbsp;";
	}
	echo"<br/>";
}
echo "<hr/>";

	
								////                              数组内容输入到表格里							

$arr=array(
		
		['1','王小华','男','湖南'],
		['2','李强','男','广东'],
		['3','陈娟','女','河南'],
		['4','罗勇军','男','山东']
		);
$tab="";
$tab.="<table border='1' cellspacing=0>					       
<tr><td>编号</td> <td>姓名</td> <td>性别</td><td>地址</td></tr>";  	// . 聚点(头部)

	
for ($i=0; $i < 4; $i++) { 
	
	$tab.="<tr><td>".$arr[$i][0]."</td> <td>".$arr[$i][1]."</td> <td>".$arr[$i][2]."</td> <td>".$arr[$i][3]."</td></tr> ";
	

}
	

	$tab.= "</table>";

echo $tab;


echo "<hr/>";

$tab="";
$tab.="<table border='1' cellspacing=0>";
$arr=array('姓名','邮箱','电话','地址','内容');
for ($i=0; $i < 5; $i++) { 
	$tab.="<tr ><td  width=400px  height=30px>".$arr[$i]."</td></tr>";
}
$tab.="<tr ><td>提交内容</td></tr>";
$tab.="</table>";
echo $tab;


echo "<hr/>";

$ul="";
$ul.="<ul style=margin:0px;padding:0px;list-style:none>";
$arr=array(
	array('机械工程师','应聘职位'),
	array('机械设计主管','应聘职位'),
	array('电器自动工程师','应聘职位'),
	array('电器自动化设计主管','应聘职位'),
	array('液压工程师','应聘职位'),
	array('液压钳工','应聘职位'),
	array('招聘电工','应聘职位'),
	array('装配钳工','应聘职位')
	);
//print_r($arr);
for ($i=0; $i < 8; $i++) { 
	$ul.="<li   >".$arr[$i][0]."<a href='' style=text-decoration:none;color:#00f;float:right ;> ".$arr[$i][1]."</a></li>";
}
$ul.="</ul>";
echo $ul;


?>
