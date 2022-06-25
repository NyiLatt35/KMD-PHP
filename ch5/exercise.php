<html>
<head>
    <title>Assignment</title>
</head>
<body>
<?php
    $arr=array(10,50,60,80,90,40,20,52,58,25);
    $c=count($arr);
    $x=0;
    for($i=0;$i<$c;$i++){
        $x+=$arr[$i];
    }
    echo "Sum of array value = ". $x ."<br/>";
    echo "Average of array value = ".($x/$c) ."<br/>";
    sort($arr);
    echo "Sorted series = ";
    $min=$arr[0];
    $max=$arr[0];

//    Max & Min
    for($i=0;$i<$c;$i++){
        echo $arr[$i]."&nbsp&nbsp&nbsp";
        if($arr[$i]>$max){
            $max=$arr[$i];
        }
        if($arr[$i]<$min){
            $min=$arr[$i];
        }
    }
    echo "<hr/>";
    echo "Max = ".$max;
    echo "<br/>";
    echo "Min = ".$min;

?>
</body>
</html>