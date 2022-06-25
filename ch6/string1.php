<html>
<head>
    <title>Using String Function</title>
</head>
<body>
<?php
$string1=" PHP Language ";
echo trim($string1);
echo "<br/>";
$string2="Java Developer";
echo strtoupper($string1);
echo "<br/>";
echo strtolower($string2);
echo "<br/>";
$string3=substr($string1,0,4);
echo $string3;
echo "<br/>";
$string4=substr($string2,5);
echo $string4;
echo "<br/>";
$count=strlen($string4);
echo $count;
?>
</body>
</html>