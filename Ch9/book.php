<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class and Objects</title>
</head>
<body>

<?php
class Book{
    private $bname;
    private $bprice;
    function setData($name,$price){
        $this->bname=$name;
        $this->bprice=$price;
    }
    function display(){
        echo "<br/>Book Name : ".$this->bname;
        echo "<br/>Book Price : ".$this->bprice;
    }
}

$b1=new Book();
$b1->setData("Topchoice",250);
$b1->display();
?>

</body>
</html>