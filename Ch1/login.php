<html>
<head>
    <title>Login</title>
</head>
<body>
<?php
define("username","kmd");
define("password","kmd");
if(isset($_POST['btnLogin'])){
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    if(empty($username)){
        echo "Please enter username";
    }else if(empty($password)){
        echo "Please enter password";
    }else{
        if($username==7 && $password==password){
            echo "Successfully";
        }else{
            echo "Please try again";
        }
    }
}
?>
<form action="#" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="txtusername" value="username">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="txtpassword" value="password">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btnLogin" value="Login">
            </td>
        </tr>
    </table>
</form>
</body>
</html>