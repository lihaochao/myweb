<?php 
header("content-type:text/html;charset=utf-8");

/*
*	在php中创建数据库
*
*/
	class Db{
		protected $conn;
		protected $res;
		public $row;
		public $arr=array();
		public function  __construct(){//		数据库初始化
			$this->conn=mysqli_connect('127.0.0.1','root','root');	//连接到数据库
			mysqli_select_db($this->conn,'myaql_zaixianliuyan');	//选择要使用的数据库
			mysqli_query($this->conn,'set names utf8');		//防止乱码

		}
		public function selRow($sql){	//取一条记录
			// $sql='select * from liuyan';
			$this->res=mysqli_query($this->conn,$sql);	//执行sql语句,放回一个结果集
			$this->row=mysqli_fetch_assoc($this->res);	//从结果集中,取出一条记录

			return $this->row;

		}
		public function moreRow($sql){	//取多条记录
			if($this->arr){$this->arr=array();}
			$this->res=mysqli_query($this->conn,$sql);
			// $this->row=mysqli_fetch_assoc($this->res)
			while ($this->row=mysqli_fetch_assoc($this->res)) {//用while语句循环,到结果集 为空
				array_push($this->arr,$this->row);		//把记录放到数组中
			}
			return $this->arr;
		}
		public function insertDate($sql){		//在数据库插入数据
			//$sql="insert into liuyan(name,email) values('sad','sdfl@com')"; //values后面只能是单引号
			mysqli_query($this->conn,$sql);
			$num=mysqli_affected_rows($this->conn);	//用于统计insert/update/delet语句执行后受影响的行数
			return $num;

		}
		public function upDate($sql){
			//$sql="update liuyan set name='23523',phone='466357' where id=4";
			mysqli_query($this->conn,$sql);
			$num=mysqli_affected_rows($this->conn);
			return $num;

		}
		public function closeDb(){			//关闭数据库
			if ($this->conn) {
				mysqli_close($this->conn);

			}
		}
	}
	$a=new Db();
	// $sql='select * from liuyan';
	// $row=$a->selRow($sql);
	 // $row=$a->moreRow($sql);
	// $sql="insert into liuyan(name,email) values('sfjmhgm','sdfl@com')"; 
	//  echo $a->insertDate($sql);

	$sql="update liuyan set name='为我',address='地球' where id=6";
	echo  $a->upDate($sql);

	$a->closeDb();
	// echo "<pre>";
	// print_r($row);

?>