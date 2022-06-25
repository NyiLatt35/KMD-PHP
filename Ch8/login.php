<?php
session_start();

if(isset($_POST['btnLogin'])){
    $username=$_POST['txtUsername'];
    $password=$_POST['txtPassword'];
    if(empty($username)){
        echo "Please Enter Username";
    }else if(empty($password)){
        echo "Please Enter Password";
    }else{
        if($username=="kmd" && $password=="kmd"){
            $_SESSION['uname']=$username;
            header("location: user.php");
        }
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form action="" method="post" style="width: 300px;">
    <fieldset>
        <legend style="text-align: center;">Please Login Here</legend>
        <table>
            <tr>
                <td>User Name</td>
                <td>
                    <input type="text" name="txtUsername" id="">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" name="txtPassword" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnLogin" id="" value="Login">
                </td>
            </tr>


        </table>
    </fieldset>
</form>
</body>
</html>