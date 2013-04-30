<?php
session_start();
$_SESSION["loginid"] = "";
$_SESSION["UserName"] = "";
$_SESSION["UserID"] = "";
header("Location:login.php");
