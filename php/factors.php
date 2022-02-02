<html>
<body>
<h1 align="center"><u>Factors of an<br> Inputed Number </u></h1>
<form method="get">
<input type="number" placeholder="number" name="num">
<button type="submit" name="submit" value="submit">Check</button>
</form>
<?php
if(isset($_GET['submit']))
{
 $num=$_GET['num'];
 echo "factors of a $num are <br>";
 for($i=1;$i<$num;$i++)
 {
  if($num%$i==0)
  {
     echo $i ."\n". "<br>";  
  }
 }
}
?>
</body>
</html>