<!--#include file="my_conn"-->
<!--#include file="../_inc/adovbs.inc"-->
<?php
	detailid=trim($_GET("detailid"))
	$msql->query ("update w_detail set w_attention=w_attention+1 where w_id='"&detailid&"'")
	$msql->query("select w_id,w_tip from w_detail where w_id='"&detailid&"'" )
	w_tip=trim($msql->f("w_tip"))
	'response.charset="gb2312"



	set myconn=nothing
	echo (w_tip)

?>
