<?php
session_start();
$err_mes =isset($_SESSION["err_mes"])?$_SESSION["err_mes"]:'';
?>
<html>
<head>
<title>管理登陆</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center">
  <form name="form1" method="post" action="chacklogin.php">
    <p><font color="#FF0000" size="2"><?php echo($err_mes);?></font></p>
    <p>用户名：
      <input name="username" type="text" id="username" size="15" maxlength="15">
        密码：
      <input name="password" type="password" id="password" size="15" maxlength="20">
    </p>
    <p>
      <input type="submit" name="Submit" value="登陆">
      <input type="reset" name="Submit2" value="重置">
    </p>
  </form>
</div>
</body>
</html>
