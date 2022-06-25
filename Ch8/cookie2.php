<?php
setcookie("username1","NCC",time()+30);
print_r($_COOKIE);
echo "<br/>";
echo $_COOKIE["username1"];
?>