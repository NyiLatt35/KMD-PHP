<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Child Class</title>
</head>
<body>
<?php
include 'rectangle.php';
class box extends rectangle{
    protected $height;

    public function __construct($w,$l,$h){
        rectangle::__construct($w,$l);
        $this->height=$h;
    }

    public function calculate_volume(){
        echo "<br/>Volume of Box : ".$this->width*$this->length*$this->height;
    }
}
?>
</body>
</html>