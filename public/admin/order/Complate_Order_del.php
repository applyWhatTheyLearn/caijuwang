
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->

<?php
	pageno=trim($_REQUEST["pageno"))
	l_id=trim($_REQUEST["l_id"))
				
   DelInfo="Delete from z_order where l_id=".$l_id.""
   $msql->query (DelInfo)


	''response.redirect("DelUserOK$_REQUEST[")
?>
<html>
<head>
<title>ɾ����Ϣ</title>
<meta http-equiv="refresh" content="0;url=Complate_Order_del.php?pageno=<?php echo $pageno ?>">
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


 