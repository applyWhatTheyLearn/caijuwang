
<?php
	l_id=trim($_REQUEST["l_id"))
	set rs=$msql->query("select l_statuinfo from z_order where l_id=".$l_id."")
	info=trim($msql->f("l_statuinfo"))



'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body {
	margin-left: 5px;
	margin-top: 0px;
	margin-right: 5px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<?php echo( info ?>
</body>
</html>
