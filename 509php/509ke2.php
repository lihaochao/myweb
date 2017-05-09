<?php
header("content-type:text/html;charset=utf-8");		
				//第7题
$n='a';
for ($i=0; $i <26 ; $i++) { 
	$a[]=$n++;
}
for ($i=0; $i < 10; $i++) { 
	array_push($a, $i);
}

for ($i=0; $i <4 ; $i++) { 
	echo  $a[rand(0,35)];
}
echo "<hr/>";			//第8题
$n='a';
$k='A';
for ($i=0; $i <26 ; $i++) { 
	$b[]=$n++;
	$b[]=$k++;
}
for ($i=0; $i < 10; $i++) { 
	array_push($b, $i);
}

for ($i=0; $i <4 ; $i++) { 
	echo  $b[rand(0,61)];
}
echo "<hr/>";
				//第9题

$n='a';
$N='A';
for ($i=0; $i < 26; $i++) { 

	$c[]=$n++;
	$c[]=$N++;
	
}
for ($i=0; $i <10 ; $i++) { 
	$c[]=$i;
}
for ($i=0; $i <count($a) ; $i++) { 
	if ($c[$i]=='o'||$c[$i]=='l'||$c[$i]=='i'||$c[$i]=='O'||$c[$i]=='L'||$c[$i]=='I') {
		unset($c[$i]);
	}

}
sort($c);				//排序
for ($i=0; $i <4 ; $i++) { 
	echo  $c[rand(0,54)];
}

					//第10题
echo "<hr/>";
$n='a';
for ($i=0; $i < 26; $i++) { 
	$d[]=$n++;
}
for ($i=0; $i < 10; $i++) { 
	$d[]=$i;
}
foreach ($d as $key =>$val ) {
	if ($val=='o'||$val=='l'||$val=='i') {
		unset($d[$key]);
	}
}
sort($d);
for ($i=0; $i <4 ; $i++) { 
	$str=$d[rand(0,31-$i)];
	echo $str;
	unset($str);
	sort($d);
}



//  echo "<pre>";
// print_r($a);
?>