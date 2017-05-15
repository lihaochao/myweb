<?php
	class Db{
		protected $conn;
		protected $res;
		protected $row;
		protected $arr=array();

		public function __construct( ){
			$this->conn=mysqli_connect('127.0.0.1','root','root');
			mysqli_select_db($this->coin,'myaql_zaixianliuyan');
			mysqli_query($this->conn,'set names utf8');
		}
		public function selRow($sql){
			$this->res=mysqli_query($this->conn,$sql);
			$this->row=mysqli_fetch_assoc($this->res);
			return $this->row;
		}
		public function moreRow($sql){
			$this->res=mysqli_query($this->conn,$sql);
			while($this->row=mysqli_fetch_assoc($this->res)){
				array_push($arr, $row);
			}
			return $arr;
		}
		public function otherRow($sql){
			mysqli_query($this->conn,$sql);
			$num=mysqli_affected_rows($this->conn);
			return $num;
		}
		public function closs(){
			if ($this->coin) {
				mysqli_close($this->coin);
			}
		}


	}
	$a=new Db();
	$sql='select * from liuyan';
	$a->selRow($sql);
	$a->moreRow($sql);
	$sql="insert into liuyan(name) values('asda')";
	$a->otherRow();
	$sql="update liuyan set name='asf',email='asd:fd' where id=4";
	$a->otherRow();
	$a->closs();





?>