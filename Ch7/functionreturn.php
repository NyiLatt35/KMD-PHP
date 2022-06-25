<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function Return with Parameter</title>
</head>
<body>
<?php
function sum($x,$y){
    $z=$x+$y;
    return $z;
}
echo "5+10=".sum(5,10)."<br/>";
echo "7+13=".sum(7,13)."<br/>";
echo "2+4=".sum(2,4)."<br/>";


?>
</body>
</html>