<html>
    <body>
        <h1>Even number within a range</h1>
        <form method="get">
            <input type="number" placeholder="First Number" name="num1"/>
            <input type="number" placeholder="Second Number" name="num2"/>
            <button type="submit" name="submit" value="submit">Check</button>
        </form>

        <?php
            if(isset($_GET['submit'])){
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                
                echo "Even numbers b/w $num1 and $num2 are <br>";

                for($i = $num1; $i <= $num2; $i++){
                    if($i % 2 == 0){
                        echo "$i <br>";
                    }
                }
            }
            ?>
    </body>
</html>