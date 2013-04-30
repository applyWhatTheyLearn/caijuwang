
<?php
		car_id=trim($_REQUEST["car_id"))
		l_fid=trim($_REQUEST["l_fid"))
		l_tempnum=trim($_REQUEST["l_tempnum"))
		delsql="delete from z_carext where l_carid="&car_id&""
		'response.Write("delsql="&delsql)
		$msql->query(delsql)

?>
<html>
<head>
<meta http-equiv="refresh" content="0;url=carext.php?l_fid=<?php echo $l_fid ?>&car_id=<?php echo( car_id ?>&l_tempnum=<?php echo $l_tempnum ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>�ޱ����ĵ�</title>
</head>

<body>

</body>
</html>
