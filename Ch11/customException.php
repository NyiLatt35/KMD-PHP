<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Custom Exception</title>
</head>
<body>
<?php
class invalidPassword extends Exception{
    public function get_message(){
        return "Wrong Password";
    }
}
    if(isset($_POST["btnLog"])){
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        try {
            if($password!="kmd"){
                throw new invalidPassword();
            }else{
                echo "Welcome from KMD";
            }
        }catch (invalidPassword $ip){
            echo $ip->get_message();
        }
    }

?>
<form action="customException.php" method="post">
    User Name :
    <input type="text" name="uname" id="" />
    <p></p>
    Password :
    <input type="text" name="password" id="" />
    <p></p>
    <input type="submit" name="btnLog" id="" value="Login" />
</form>
</body>
</html>