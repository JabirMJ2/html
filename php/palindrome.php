<html>
    <body>
        <h1>Print the number</h1>
        <form>
            <input type="number" placeholder="number" name="num"/>
            <button type="submit" name="submit" value="submit">Check</button>
        </form>

        <?php
            if(isset($_GET['submit'])){
                $num = $_GET['num'];
                $sum = 0;
                $reverse = 0;
                $temp = $num;
                while($num != 0){
                    $remainderdev = $num % 10;
                    $reverse = $reverse * 10 + $remainderdev;
                    $sum = $sum + $remainderdev;
                    $num = (int)($num/10);
                }

                echo "Reverse of $temp is $reverse <br>";
                echo "Sum of digits of $reverse is $sum <br>";

                if($temp==$reverse)
                    echo "$temp is palindrome";
            }
            ?>
    </body>
</html>