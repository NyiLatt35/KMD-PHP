<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Student</title>
</head>
<body>
<?php
include 'student.php';
$student1=new Student();
$student1->setData("Mg Mg","MDY","0912345678","1");
$student1->showData();
?>
</body>
</html>