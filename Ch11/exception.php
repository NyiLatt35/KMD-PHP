<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Exception Handling</title>
</head>
<body>
<?php
if(isset($_POST["btnDivide"])){
    try {
        $a=$_POST['txtDivided'];
        $b=$_POST['txtDivisor'];

        if(is_numeric($a)==false || is_numeric($b)==false){
            throw new InvalidArgumentException();
        }else if($b==0){
            throw new RangeException();
        }else{
            $result=$a/$b;
            echo "Result = ".$result;
        }

    }catch (InvalidArgumentException $ie){
        echo "Must be Number.";
    }catch (RangeException $re){
        echo "Not Divisible by zero";
    }
}
?>
<form action="exception.php" method="post">
    Divided:
    <input type="text" name="txtDivided" id="" />
    <p></p>
    Divisor
    <input type="text" name="txtDivisor" id="" />
    <p></p>
    <input type="submit" name="btnDivide" id="Divide">
</form>
</body>
</html>