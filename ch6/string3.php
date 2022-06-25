<html>
<head>
    <title>Using String Functions</title>
</head>
<body>
<?php
    $str1="PHP";
    $str2="php";
    if(strcmp($str1,$str2)){
        echo "Equal<br/>";
    }else{
        echo "Not Equal<br/>";
    }
    echo "==================<br/>";

    if(strcasecmp($str1,$str2)){
        echo "Case Equal<br/>";
    }else{
        echo "Case Not Equal<br/>";
    }
?>
</body>
</html>
