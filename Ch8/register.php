<?php include 'header.php';?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        form{
            width: 500px;
            border: 1px solid #000;
            margin: 10px;
            padding: 15px;
        }
        input{
            margin: 5px 0px;
        }
    </style>
</head>
<body>
<form action="#" method="post">
    <h1>Create Your Google Account</h1>
    <table>
        <tr>
            <td>Name</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="firstname" id="" value="first" />
            </td>
            <td>
                <input type="text" name="lastname" id="" value="last" />
            </td>
        </tr>
        <tr>
            <td>Choose Your User Name</td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="text" name="username" id="" style="width: 100%;"/>
            </td>
        </tr>
        <tr>
            <td>Create a Password</td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="password" name="username" id="" style="width: 100%;" />
            </td>
        </tr>
        <tr>
            <td>Create Confirm Password</td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="password" name="username" id="" style="width: 100%;" />
            </td>
        </tr>
        <tr>
            <td>Birthday</td>
        </tr>
        <tr>
            <td colspan="2">
                <select name="month" id="">
                    <option value="">Month</option>
                </select>
                <input type="text" name="day" id="" placeholder="Day" />
                <input type="text" name="year" id="" placeholder="Year" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btnRegister" id="" value="Register" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>