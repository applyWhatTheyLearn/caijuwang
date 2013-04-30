


<?php
   $l_id=trim($_REQUEST["l_id"]);
   
	'Response.Write("FoWuCheID="&GoWuCheID &"<br>")

	'
	'Search="select * from ���ﳵ where ���ﳵID='"&GoWuCheID&"'"
	'$msql->query($Search);
	'Session("AllNum")=Session("AllNum")-trim($msql->f("����"))
	'
	'
	
		'response.Write("Search="&Search)
   DelInfo="Delete from z_car where l_id=".$l_id.""
   $msql->query (DelInfo)
	'response.redirect("DelUserOK$_REQUEST[")
	'Response.Write("DelInfo="&DelInfo &"<br>")

	set myconn=nothing
	'

'
?>
<html>
<head>
<title>DelTableD</title>
<meta http-equiv="refresh" content="0;url=car.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>��Ϣ��ɾ��</strong></font> </p>
</div>
</body>
</html>
