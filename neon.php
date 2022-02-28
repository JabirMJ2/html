<!DOCTYPE html>
<html>
    <head>
        <title>
            Neon php
        </title>
    </head>
    <body>
        <form method="get">
            <input type="text" name="number" placeholder="eg. 9"/>
            <button type="submit" name="submit">Check</button>
        </form>
        <br>
        <?php
            if(isset($_GET['submit'])){
                $number = $_GET['number'];
                $sum = 0;

                $temp = $number;
                $temp=$temp**2;
                
                while($temp>0){
                    $last_digit = $temp % 10;
                    $sum = $sum + $last_digit;
                    $temp = (int)$temp / 10;
                }

                if($sum == $number){
                    echo("$number is neon");
                }
                else{
                    echo("$number is not neon");
                }
            }
        ?>
    </body>
</html>