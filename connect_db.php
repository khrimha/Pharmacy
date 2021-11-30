<?php

error_reporting (1);

if (!function_exists("mysqli_pconnect")){
    function mysqli_pconnect($host, $username, $password){
        return mysqli_connect("p:".$host, $username, $password);
    }
}

$con=mysqli_pconnect('localhost','root','')or die("cannot connect to server");

mysqli_select_db($con,'pharmacy')or die("cannot connect to database");

?>