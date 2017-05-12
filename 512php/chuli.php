<?php
/*
*表单
*用$_GET获取表单数据
*用$_POST获取表单数据
*
*/
header("content-type:text/html;charset=utf-8");
echo "<pre>";
// print_r($_POST);
// echo $_POST['user'];//表单为post时

// if(strlen($_GET['user'])==0){

// 	// echo "<script>alert('请输入用户名!');window.history.go(-1)</script>";	        1-1//  为空时弹出输入框,并且回跳(<script>:脚本;history.go(-1)后退一步)
// 	// echo "<script>alert('请输入用户名!');window.history.back()</script>";	        1-2//为空时弹出输入框,并且回跳
// 	// echo "<script>alert('请输入用户名!');window.location.href='512xiawukecheng.php'</script>";		1-3//为空时弹出输入框,并且回跳
// 	header('location:512xiawukecheng.php'); 	//1-4//为空时回跳

// }else{
// 	echo $_GET['user'];
// }

// /*
// *判断是否正常提交,不是,回跳
// *
// */
// if (isset($_GET['btn'])) {
// 	echo "正常";
// }else{
// 	header('location:512xiawukecheng.php'); 
// }

// print_r($_GET);
// echo $_GET['user'];//取出表单的user值
	// if (isset($_POST['btn'])) {// *判断是否正常提交,不是,回跳
				
	// 	if(strlen($_POST['user'])==0){			//  账户为空时弹出输入框,并且回跳
	// 		echo "<script>alert('请输入用户名!');window.history.go(-1)</script>";
	// 	}else{	
	// 		echo "用户名:".$_POST['user']."<br/>";
		
	// 	}
	// 	if (strlen($_POST['pwd'])>0) {				//  密码为空时弹出输入框,并且回跳(
	// 		echo "密   码:".$_POST['pwd'];
	// 	}else{
	// 		echo "<script>alert('请输入密码!');window.history.go(-1)</script>";
	// 	}
			
	// 	}else{
	// 		header('location:512xiawukecheng.php'); 	
	// }
/*
*
*
*	使用exit简写了代码
*
// */	
	// if (isset($_POST['btn'])) {
	// 	if(strlen($_POST['user'])<1){	
	// 		echo "<script>alert('请输入用户名!');window.history.go(-1)</script>";
	// 		exit;		//exit强制中断
	// 	}
	// 	if (strlen($_POST['pwd'])<1) {	
	// 		echo "<script>alert('请输入密码!');window.history.go(-1)</script>";
	// 		exit;		//exit强制中断
	// 	}

	// 	echo "ok";		

	// }else{
	// 		header('location:512xiawukecheng.php'); 	
	// }

/*
*	 练习
*	功能:改为类,只能按提交按钮后才能进入,用户名和密码不能为空,空时回跳
*/
	class Form{
		public function formti($x,$y,$z){
			if (isset($x)) {
				if (strlen($y)<1) {
					echo "<script>alert('请输入用户名!');window.history.go(-1)</script>";
					exit;
				}
				if (strlen($z)<1) {
					echo "<script>alert('请输入密 码!');window.history.go(-1)</script>";
					exit;
				}
				echo "ok";		
			}else{
				header('location:512xiawukecheng.php'); 
				exit;	
			}

		}
	}
	$a=new  Form();
	$a->formti($_POST['btn'],$_POST['user'],$_POST['pwd']);
	

?>