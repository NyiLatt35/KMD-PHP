<html>
    <head>
        <title>Using Continue</title>
    </head>
    <body>
        <?php
            $x=0;
            while ($x <= 20) {
                $x+=2;
                if($x%3==0)
                continue;
                echo "<br/>Number is $x";
            }
        ?>
    </body>
</html>