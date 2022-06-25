<html>
    <head>
        <title>Using Break</title>
    </head>
    <body>
        <?php
            $x=0;
            while ($x <= 20) {
                $x+=2;
                if($x==10)
                    // echo "Loopping is brak;";
                    break;
                    echo "<br/>Number is $x";
                
            }
        ?>
    </body>
</html>