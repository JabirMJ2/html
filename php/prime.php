<!-- Prime numbers within a range -->
<html>
<head>
<title>
Prime numbers
</title>
</head>
<body>

<form name="form" action="#" method="post">
	<label>Lower limit: </label>
	<input type="text" name="lower"/><br><br>
	<label>Upper limit: </label>
	<input type="text" name="upper"/><br>
	<button name="submit" type="submit">Submit</button>
</form>

<?php

if(isset($_POST['submit'])){
	$lower = $_POST['lower'];
	$upper = $_POST['upper'];
	$flag = 0;
	$count = 0;
	for($i=$lower; $i<$upper; $i++){
		$flag=0;
		for($j=2; $j<=$i/2; $j=$j+1){
			$count = $i % $j;
			if($count == 0){
				$flag=1;
			}
		}
		if($flag == 0 && $count == 0){
			echo "Prime number -- <br>";
			$count = 1;
		}
		if($flag == 0)
			echo " $i ";
		
	}
}

?>

</body>
</head>
</html>
