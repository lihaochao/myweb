<?php
	header("content-type:text/html;charset=utf-8");
	class Liuyan{
		public function  __construct(){
			if (!isset($_POST)) {
				header("location:512biaodan.php");
				exit;
			}
			$this->liuyanff();

		}
		public function  liuyanff(){
			if (mb_strlen($_POST['user'],'utf8')<1||mb_strlen($_POST['user'],'utf8')>10) {
				echo "<script>alert('姓名不能为空,或者长度超过10个字符!');window.history.go(-1)</script>";
				exit;
			}
			if (mb_strlen($_POST['email'],'utf8')<1||strpos($_POST['email'],'@')==0) {
				echo "<script>alert('邮箱不能为空!或者格式不对没有@');window.history.go(-1)</script>";
				exit;
			}
			if (mb_strlen($_POST['phone'],'utf8')!=11) {
				echo "<script>alert('电话号码为11位!');window.history.go(-1)</script>";
				
			}else{	$num=array('1','2','3','4','5','6','7','8','9','0');
				for ($i=0; $i <11 ; $i++) { 
					$k=mb_substr($_POST['phone'], $i,1,'utf8');
					if (in_array($k, $num)==0) {
						echo "<script>alert('电话号码只能为数字!');window.history.go(-1)</script>";
						exit;
					}
				}
			}
			if (mb_strlen($_POST['address'],'utf8')<1) {
				echo "<script>alert('地址不能为空!');window.history.go(-1)</script>";
				exit;
			}
			if (mb_strlen($_POST['content'],'utf8')<1) {
				echo "<script>alert('内容不能为空!');window.history.go(-1)</script>";
				exit;
			}

			echo  "<script>alert('留言成功!');window.history.go(-1)</script>";
		}
	}
	$a=new Liuyan();
	$a->liuyanff();

?>