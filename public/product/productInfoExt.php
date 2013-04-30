<?php
include("../include/common.inc.php");
	$l_id=trim($_REQUEST["l_id"]);
	$msql->query("select * from z_product where l_id=".$l_id);
	if($msql->next_record()){
	$l_extend=trim($msql->f("l_extend"));
	}

	
		 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>扩展信息</title><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body onLoad="parent.window.document.all.ProductInfoExt.height=document.body.scrollHeight">
<table width="760" border="0" cellpadding="0" cellspacing="1" >
  <form name="form1" method="post" action="pinglun_submit.php"  onSubmit="return CheckForm(this);">
    <tr>
      <td width="18" height="26">&nbsp;</td>
      <td width="626"><strong><font color="404040"><?php echo $l_extend ?></font><font color="#FFFFFF">要留言</font></strong></td>
    </tr>
  </form>
</table>
<p>&nbsp; </p>
</body>
</html>
