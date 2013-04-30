
<!--#include file="../../_inc/checkoutTime2.php" -->

<?php
	city_id=trim($_REQUEST["city_id"))
	l_id=trim($_REQUEST["l_id"))
	$_REQUEST[
	Search = "select * from helpic where l_id=".$l_id.""
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
	l_pic=trim($msql->f("l_pic"))
	l_ext=trim($msql->f("l_ext"))
	response.Write "<img src=../../folder/helpic/"&l_pic&"."&l_ext&">"



	set myconn=nothing
	}
?>

</body>
</html>
