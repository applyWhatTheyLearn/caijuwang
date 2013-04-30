<?php
include("../include/common.inc.php");
$statu=trim($_REQUEST["statu"]);
switch ($statu){
 case "yo":
     $ssinfo="[ <font size=2 color=#0000ff>您的评论信息已成功提交！</font> ]";
     break;
 case "no":
     $ssinfo="[  <font size=2 color=#ff0000>出错啦！您是否已登陆?或是输错用户名称或密码了？！</font> ] ";
     break;
}
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="153"><div align="center"><?php echo $ssinfo ?></div></td>
  </tr>
</table>
</body>

</html>
