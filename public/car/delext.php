


<?php
   $l_id=trim($_REQUEST["l_id"]);
   car_id=trim($_REQUEST["car_id"))
   l_fid=trim($_REQUEST["l_fid"))
   l_tempnum=trim($_REQUEST["l_tempnum"))
	'Response.Write("FoWuCheID="&GoWuCheID &"<br>")

	'
	'Search="select * from ���ﳵ where ���ﳵID='"&GoWuCheID&"'"
	'$msql->query($Search);
	'Session("AllNum")=Session("AllNum")-trim($msql->f("����"))
	'
	'
	
		'response.Write("Search="&Search)
   DelInfo="Delete from z_carext where l_id=".$l_id.""
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
<meta http-equiv="refresh" content="0;url=carext.php?l_fid=<?php echo $l_fid ?>&car_id=<?php echo( car_id ?>&l_tempnum=<?php echo $l_tempnum ?>">
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
