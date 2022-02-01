<html>
    <head>
        <title>Factorial</title>
    </head>
    <body>
        <h1>Factorial of a number</h1>
        <form method="get">
            <input type="number" placeholder="Number" name="num"/>
            <button type="submit" name="submit" value="submit">Check</button>
        </form>

        <?php
            if(isset($_GET['submit'])){
                $x = 1;
                $n = $_GET['num'];
                for($i=1; $i<=$n-1; $i++){
                    $x = $x * ($i+1);
                }
                echo "factorial of $n is $x";
            }
            ?>
    </body>
</html>