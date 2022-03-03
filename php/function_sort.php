<!-- Write a program to sort an array using function -->
<html>
<head>
<title>Sort Function</title>
</head>
<body>
<?php
$arr = array(20, 15, 8, 1, 14, 2);
echo "Array before sorting";
foreach($arr as $val){
	echo " $val ";
}

echo "<br>Array after sorting";
ArraySort($arr);
function ArraySort($arr){
	$length = count($arr);
	for($i=0; $i<$length-1; $i++){
		for($j=$i+1; $j<$length; $j++){
			if($arr[$i]>$arr[$j]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	foreach($arr as $val){
		echo " $val ";
	}
}
?>
</body>
</html>