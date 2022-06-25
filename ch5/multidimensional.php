<html>
<head>
    <title>Multidimensional Array</title>
</head>
<body>
<?php
$sales_items=array(
    array("Uni Book",250,5),
    array("Top Book",220,10),
    array("Best Book",200,15),
);
echo "Book";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

echo "Price";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "Quantity";
echo "<br/>";
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $sales_items[$i][$j];
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br/>";
}
?>
</body>
</html>