<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inheritance</title>
</head>
<body>
<?php

class insect{
    private $name;
    private $gender;
    function inssetData($n,$g){
        $this->name=$n;
        $this->gender=$g;
    }
    function insdisplay(){
        echo "<br/>Name : " .$this->name;
        echo "<br/>Gender : " .$this->gender;
    }
}

class Butterfly extends insect{
    private $color;
    function setData($n,$g,$c){
        insect::inssetData($n,$g);
        $this->color=$c;
    }
    function display(){
        insect::insdisplay();
        echo "<br/>Color : ".$this->color;
    }
}
?>
</body>
</html>