<html>
<head>
    <title>Addition</title>
</head>
<body>
<?php
if(isset($_POST['btnadd'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $sum=$num1 + $num2;
    echo "Your number is ".$sum;
}
?>
    <form action="#" method="post">
        <table>
            <tr>
                <td>First Number</td>
                <td>
                    <input type="number" name="num1">
                </td>
            </tr>
            <tr>
                <td>Last Number</td>
                <td>
                    <input type="number" name="num2">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="btnadd" value="Add">Add</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>