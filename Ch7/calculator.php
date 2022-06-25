<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<?php
include 'phponly.php';
?>
<form action="#" method="post" style="border: 1px solid #000;width: 300px;padding: 10px">
    <table>
        <tr>
            <td>
                <label for="num1">Number 1 </label>
            </td>
            <td>
                <input type="text" name="txtNum1" id="" />
            </td>
        </tr>

        <tr>
            <td>
                <label for="num2">Number 2 </label>
            </td>
            <td>
                <input type="text" name="txtNum2" id="" />
            </td>
        </tr>

        <tr>
            <td>
                <input type="radio" name="rdoOperator" id="" value="+" />
            </td>
            <td>
                Add
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="rdoOperator" id="" value="-" />
            </td>
            <td>
                Substraction
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="rdoOperator" id="" value="*" />
            </td>
            <td>
                Multiplication
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="rdoOperator" id="" value="/" />
            </td>
            <td>
                Division
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="btnName" id="" value="Calculate">
            </td>
        </tr>

    </table>
</form>
</body>
</html>