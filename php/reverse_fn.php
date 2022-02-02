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
                function reverse(int $temp){
                    $remainder = 0;
                    $reverse = 0;
                    while($temp != 0){
                        $remainder = $temp % 10;
                        $reverse = $reverse * 10 + $remainder;
                        $temp = (int)($temp/10);
                    }
                    return $reverse;
                }

                echo "Reverse of $num is ".reverse($num);
           
            }
            ?>
    </body>
</html>