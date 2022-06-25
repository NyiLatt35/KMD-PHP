<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using String Functions</title>
</head>
<body>
    <?php
        $str="PHP Programming Language";
        $index=strpos($str,"P",1);
        echo "Position: ".$index;
        echo "<br/>";
        echo strrev($str)."<br/>";

        $s1=str_replace("PHP","Java",$str);
        echo $s1."<br/>";

        $old_char=array('a','e','i','o','u');
        $s2=str_replace($old_char,"*",$str);
        echo $s2."<br/>";

        $user_name="kmd";
        $password="kmd";
        echo "User Name: ".$user_name."<br/>";
        echo "Password: ".md5($password)."<br/>";
    ?>
</body>
</html>