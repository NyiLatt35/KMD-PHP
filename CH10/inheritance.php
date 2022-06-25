<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Access Specifier</title>
</head>
<body>
<?php
include 'box.php';

$area=new rectangle(8,9);
$volume=new box(4,5,10);
$area->calculate_area();
$volume->calculate_volume();
?>
</body>
</html>