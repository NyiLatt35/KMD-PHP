<html>
<head>
    <title>One Way Selection</title>
</head>
<body>
<?php
//$mark=60;
//if($mark>=40){
//    echo "Pass The Exam";
//}

//$mark=60;
//if($mark>=40 && $mark<=100){
//    echo "Pass The Exam";
//}else{
//    echo "Fill The Exam";
//}

$mark=60;
if($mark>=40 && $mark<=100){
    echo "Pass The Exam";
}else if($mark>=0 && $mark<=39){
    echo "Fail the exam";
}else{
    echo "Invail number ";
}
?>
</body>

</html>