<?php
    include("../include/common.inc.php");
    session_start();
   $loginid = $_SESSION["loginid"];
   if(!$loginid) {
	  $_SESSION["err_mes"]="您还没有正确登录或是未操作的时间过长!";
	  header("Location:login.php");
      exit;
   }

?>
<html>
<head>
<title>后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<frameset rows="*" cols="214,*" framespacing="1" frameborder="no" border="1">
  <frame src="manageleft.php" name="leftFrame" scrolling="auto">
  <frame src="managedetail.php" name="mainFrame">
</frameset>
<noframes><body>

</body></noframes>
</html>
