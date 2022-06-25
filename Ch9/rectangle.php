<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Constructor</title>
</head>
<body>
<?php
class rectangle{
    protected $length;
    protected $width;
    function __construct(){
        $this->length=10;
        $this->width=20;
    }
    function showArea(){
        echo "<br/>Area =".$this->length*$this->width;
    }
}

$area1=new rectangle();
$area1->showArea();
?>
</body>
</html>