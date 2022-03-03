<!-- Prime numbers within a range -->
<html>
<head>
<title>
Amstrong numbers
</title>
</head>
<body>

<form name="form" action="#" method="post">
	<label>number: </label>
	<input type="text" name="number"/><br>
	<button name="submit" type="submit">Submit</button>
</form>

<?php

if(isset($_POST['submit'])){
	$number = $_POST['number'];
	$temp = $number;
	$sum = 0;
	while($number >= 1){
		$last_digit = $number % 10;
		$sum += $last_digit ** 3;
		$number = $number / 10;
	}
	if($temp == $sum){
		echo "$temp is an amstrong number";
	}
	else{
		echo "$temp is not an amstrong number";
	}
}

?>

</body>
</head>
</html>
