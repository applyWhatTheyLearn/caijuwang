<?php
include("../include/common.inc.php");
session_start();
$adminame=trim($_POST["username"]);
$adminpwd=trim($_POST["password"]);
if ($adminame=="" || $adminpwd=="") {
   $_SESSION["err_mes"]="请输入用户名或密码";
   header("Location:login.php");

}
$adminame=str_replace("'","''",$adminame);
$adminpwd=str_replace("'","''",$adminpwd);
$msql->query("select * from admin where UserName='" . $adminame . "' and  UserPass='" . md5($adminpwd) . "' and opens='open'");
if($msql->next_record()){
	$_SESSION["err_mes"]="";
	$_SESSION["loginid"]="true";
	$_SESSION["UserName"]=trim($msql->f("UserName"));
	$_SESSION["UserID"]=trim($msql->f("UserID"));
	header("Location:managelist.php");
}else{
	$_SESSION["err_mes"]="请核对您的用户名和密码！";
	header("Location:login.php");
}


?>

