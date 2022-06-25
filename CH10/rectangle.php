<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parent Class</title>
</head>
<body>
<?php
class rectangle{
    protected $width;
    protected $length;
    public function __construct($w,$l){
        $this->width=$w;
        $this->length=$l;
    }

    public function calculate_area(){
        echo "<br/>Area of Rectangle : ".$this->width*$this->length;
    }
}
?>
</body>
</html>