
<!--#include file="../_inc/md5$_REQUEST["-->
<?php
GetTempNum1=trim($_POST["GetTempNum1"))
UserName=trim($_POST["UserName"))
UserPass=trim($_POST["UserPass"))

	Search = "Select * From z_user where UserName='"&UserName&"' and UserPass='"&md5(UserPass)&"'"
	$msql->query(search)
	
	if rs.eof {


	header("Location:SelectStatu.php?st=2&GetTempNum1="&GetTempNum1
	else
	UserLoginUserID=trim($msql->f(0))
	$_SESSION["UserLoginUserID")=UserLoginUserID
	$_SESSION["UserLoginUserName")=UserName
	$_SESSION["UserLoginUserNamePass")=md5(UserPass)
	$_SESSION["UserLoginStatu")="login"
	$msql->query ("update z_user set LoginNum=LoginNum+1,LastLoginTime='"&now()&"' where Meid='"&UserLoginUserID&"'")
	}
	

	'response.Write("addpic="&addpic)





?>

<html>
<head>
<meta http-equiv=refresh content="0; url=SelectStatu.php?GetTempNum1=<?php echo( GetTempNum1 ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>�ޱ����ĵ�</title>
</head>

<body>

</body>
</html>
