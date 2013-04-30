
<!--#include file="../../_inc/checkoutTime2.php" -->

<?php
	w_id=trim($_REQUEST["w_id"))
	$_REQUEST[
	Search = "select * from z_comate where w_id="&w_id&""
    $msql->query($Search);
		 
'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
    if($msql->next_record()){
	w_pic=trim($msql->f("w_pic"))
	w_ext=trim($msql->f("w_ext"))
	response.Write "<img src=../../folder/comatepic/"&w_pic&"."&w_ext&">"



	set myconn=nothing
	}
?>

</body>
</html>
