<?php
header("content-type:text/html;charset=utf-8");	
	/*
	*作业1
	*圆的周长
	*/
	// class Yuan{
	// 	public function zhou($r){
	// 		echo 2*3.14*$r;
	// 	}
	// }
	// $a=new Yuan();
	// $a->zhou(3);
	// echo "<hr/>";
	// /*
	// *作业四
	// *鸡兔同笼,问兔子多少只
	// */
	// class Tu{
	// 	public function tuzi($x,$y){
	// 		echo ($y-2*$x)/2;
	// 	}
	// }
	// $a=new Tu();
	// $a->tuzi(35,94);
	// echo "<br/>";

	// class Zi{
	// 	public function tuzi($x,$y){
	// 		for ($i=0; $i <35 ; $i++) { 
	// 			for ($e=0; $e < 35; $e++) { 
	// 				if ($i+$e==$x&&2*$i+4*$e==$y) {
	// 					echo $e;
	// 				}
	// 			}
	// 		}
		
	// 	}
	// }
	// $a=new Zi();
	// $a->tuzi(35,94);
	// echo "<hr/>";

	/*
	*作业 5
	*
	*/
	class Table{
		public function printTable($rows,$cols,$content,$width,$border){
			echo  "<table width=".$width."px  border=".$border.">";
			for ($i=0; $i <$rows ; $i++) { 
				echo "<tr>";
				for ($e=0; $e <$cols ; $e++) { 
					echo "<td>".$content ."</td>";
				}
				echo "</tr>";
			}
			echo  "</table>";
		}
		

	}

	$a=new  Table();
	$a->printTable(2,4,'wo',600,1);
	echo "<br/>";
	/*
	*作业 6
	*
	*/
	class Color{
		public  function  col($num){
			echo "<table>";
			for ($i=0; $i <$num; $i++) { 
				echo  "<tr><td style=height:20px;width:100px;background:#".rand(000,999)."></td></tr>";

			}
			echo "</table>";
		}
	}

	$b=new  Color();
	$b->col(25);
?>


