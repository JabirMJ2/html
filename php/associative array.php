<html>
<body>
<?php
 $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
 echo "Arsort<br>";
 arsort($age);
 foreach($age as $x => $value){
 	echo "Key = ".$x.", Value = ".$value."<br>";
 }

 echo "<br><br>Krsort<br>";
 krsort($age);
 foreach($age as $y => $value){
 	echo "Key = ".$y.", Value = ".$value."<br>";
 }

?>
</body>
</html>