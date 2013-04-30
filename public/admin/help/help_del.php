
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->

<?php
	$l_classid=trim($_REQUEST["l_classid"]);
	l_id=trim($_REQUEST["l_id"))
				
   DelInfo="Delete from z_helpdetail where l_id=".$l_id.""
   $msql->query (DelInfo)


	''response.redirect("DelUserOK$_REQUEST[")
?>
<html>
<head>
<title>ɾ����Ϣ</title>
<meta http-equiv="refresh" content="0;url=help_list.php?l_classid=<?php echo  $l_classid ?>">
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


 