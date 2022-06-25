<html>
    <head>
        <title>Numeric Array</title>
    </head>
    <body>
        <?php
            $country=array("Myanmer","Japan","China","Korea","UK");
            print_r($country);

            echo "<br/><br/>";

            $city[0]="Yangon";
            $city[1]="Mandalay";
            $city[2]="Magway";
            $city[3]="Pathein";
            $city[4]="Nay Pyi Taw";
            for($i=0;$i<5;$i++){
                echo $city[$i]."<br/>";
            }

            echo "<br/>";

            $color[]="red";
            $color[]="yellow";
            $color[]="green";
            $color[]="gray";
            $color[]="black";

            foreach ($color as $color_value) {
                echo $color_value."<br/>";
            }
        ?>
    </body>
</html>