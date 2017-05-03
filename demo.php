<?php
	header("content-type:text/html;charset=utf-8");
	/*echo "<h2>静夜思</h2>";
	echo"作者:李白<br/>";
	echo"<ul>";
	echo "<li>床前明月光,</li>";
	echo"<li>疑是地上霜.</li>";
	echo"<li>举头望明月,</li>";
	echo('echo"<li>低头思故乡.</li>";');
	echo"</ul>";
	phpinfo();*/
	$name='';
	$name="张三";
	
	$sex=null;
	$ban='';
	echo "他叫:".$name;

	echo "<br/>";

	 $temp=&$name;                                                                                     //引用赋值"带&"
	echo $temp;
	$name="li";
	echo $temp;





	echo "<br/>";


	echo "<br/>";
	if (isset($sex)) {
		echo"变量存在";
	}else{								//isset检测变量是否存在;empty检测是否为空值;unset变量销毁								
		echo"(isset检测变量是否存在)变量不存在";
	}

	unset($sex);
	echo "<br/>";

	if (isset($sex)) {
		echo"变量存在";
	}else{
		echo"(unset变量销毁)变量不存在";
	}
	echo "<br/>";
	if (isset($ban)) {
		echo"变量存在";
	}else{
		echo"变量不存在";
	}
	echo "<br/>";
	if (empty($ban)) {
		echo"(empty检测是否为空值)为空值";
	}else{
		echo"否空值";
	}
	

?>