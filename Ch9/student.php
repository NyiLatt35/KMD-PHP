<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Object</title>
</head>
<body>
<?php
class Student{
    private $name;
    private $address;
    private $phone;
    private $rollno;

    function setData($n,$a,$p,$r){
        $this->name=$n;
        $this->address=$a;
        $this->phone=$p;
        $this->rollno=$r;

    }
    function showData(){
        echo "<br/>Student Name : ".$this->name;
        echo "<br/>Student Addresss : ".$this->address;
        echo "<br/>Student Phone : ".$this->phone;
        echo "<br/>Student Roll No : ".$this->rollno;

    }

}
?>
</body>
</html>