<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Session</title>
</head>
<body>
<?php
session_start();
if(!empty($_SESSION['uname'])){
    echo "<font color='green'>Welcome ".$_SESSION["uname"]."</font>";
}

?>
</body>
</html>