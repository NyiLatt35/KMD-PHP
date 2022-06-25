<html>
<head>
    <title>Function of arrays</title>
</head>
<body>
<?php
    $fruit=array("Watermelon","PineApple","Apple","Strawberry");
    print_r($fruit);
    echo "<br/>";

    echo "<h3>Pushing Array Values</h3>";
    array_push($fruit,"Melon");
    print_r($fruit);

    echo "<br/>";

    echo "<h3>Sorting Array Values</h3>";
    sort($fruit);
    print_r($fruit);

    echo "<br/>";

    echo "<h3>Popping Array Values</h3>";
    array_pop($fruit);
    print_r($fruit);

    echo "<br/>";

    echo "<h3>Shifting Array Values</h3>";
    array_shift($fruit);
    print_r($fruit);

    echo "<br/>";


    echo "<h3>Unshifting Array Values</h3>";
    array_unshift($fruit,"Blueberry");
    print_r($fruit);

    echo "<br/>";

    $c=count($fruit);
    echo "Count of array value = ".$c;
?>
</body>
</html>