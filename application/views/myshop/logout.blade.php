<?php
session_start();
$_SESSION["UserLoginUserID"]="";
$_SESSION["UserLoginUserName"]="";
$_SESSION["UserLoginStatu"]="";
$_SESSION["UserLoginUserNamePass"]="";
  
header("Location:../index.php");

?>

