<?php
function add($a,$b){
    return $a+$b;
}
function sub($a,$b){
    return $a-$b;
}
function mul($a,$b){
    return $a*$b;
}
function div($a,$b){
    return $a/$b;
}
if(isset($_POST['btnName'])){
    $num1=$_POST['txtNum1'];
    $num2=$_POST['txtNum2'];
    $op=$_POST['rdoOperator'];

    if($op=="+"){
        $result=$num1." + ".$num2." = ".add($num1,$num2);
    }

    if($op=="-"){
        $result=$num1." - ".$num2." = ".sub($num1,$num2);
    }

    if($op=="*"){
        $result=$num1." * ".$num2." = ".mul($num1,$num2);
    }

    if($op=="/"){
        $result=$num1." / ".$num2." = ".div($num1,$num2);
    }
}

if(!empty($result)){
    echo $result;
}