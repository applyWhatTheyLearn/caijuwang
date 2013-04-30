
<?php
	l_id=trim($_POST["l_id"))
	change=trim($_POST["change"))
	ChuLiDetail=trim($_POST["ChuLiDetail"))
	set rs=$msql->query("select l_statuinfo from z_order where l_id='".$l_id."'")
	info=trim($msql->f("l_statuinfo"))
	ChuLiDetail=info&"<br><br><font color=#993300>"&ChuLiDetail&"</font><br>"&now()


	
	updateinfo="update z_order set l_statuinfo='"&ChuLiDetail&"' where l_id=".$l_id.""
	if change="�����" {
	updateinfo="update z_order set l_statuinfo='"&ChuLiDetail&"',l_orderstatu='���' where l_id=".$l_id.""
	?>
	<script language="javascript">
		opener.location.href="JinXing_Order_list.php"
        window.close()
    </script>
	<?php
	}
	$msql->query (updateinfo)
	'response.Write("updateinfo="&updateinfo)
'?>
<html>
<head>
<meta http-equiv=refresh content="0; url=OrderChange.php?l_id=<?php echo $l_id ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>�ޱ����ĵ�</title>


</head>

<body>

</body>
</html>
