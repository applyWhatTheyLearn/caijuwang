<!--#include file="my_conn"-->
<!--#include file="../_inc/adovbs.inc"-->
<?php
	detailid=trim($_GET("detailid"))
	'detailid=35
	$msql->query ("update w_detail set w_tip=w_tip+1 where w_id='"&detailid&"'" )
	$msql->query("select w_id,w_tip from w_detail where w_id='"&detailid&"'" )
	w_tip=trim($msql->f("w_tip"))
	'response.charset="gb2312"
	echo (w_tip)

	set myconn=nothing
?>
