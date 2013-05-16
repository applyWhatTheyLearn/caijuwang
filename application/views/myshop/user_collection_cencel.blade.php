<?php
include("../include/common.inc.php");
session_start();
$UserLoginStatu = isset($_SESSION["UserLoginStatu"]) ? trim($_SESSION["UserLoginStatu"]) : '';
$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
if (strlen($UserLoginStatu)==0 || $UserLoginStatu<>"login") {
    ?>
    <script language=javascript>
        //history.back()
        alert("您还没有登陆");
        location.href="user_login.php"
    </script>
    <?php
    exit;
}
 
   $collid=trim($_REQUEST["collid"]);
				
   $msql->query ("Delete from z_collection where l_id=".$collid);


?>
<html>
<head>
<title>删除成功</title>
<meta http-equiv="refresh" content="0;URL=user_collection.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>


 