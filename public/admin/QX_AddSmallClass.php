
<!--#include file="../_inc/checkoutTime.php"-->
<?php
	SmalllClass=trim($_POST["SmalllClass"))
	AccID=trim($_POST["AccID"))
    UserID=trim($_POST["UserID"))
	AccID_t=trim($_POST["AccID_t"))
	'Response.Write("SmalllClass="&SmalllClass &"<br>")
	'Response.Write("AccID="&AccID &"<br>")
	'Response.Write("UserID="&UserID &"<br>")
	'Response.Write("AccID_t="&AccID_t &"<br>")
	if SmalllClass<>"0" {
	$_REQUEST[
	Search = "select * from Accredit  where TitleName='"&SmalllClass&"' and AdminID="&UserID&""
    $msql->query($Search);
	if($msql->next_record()){
	?>
	<script language=vbscript>
			history.back()
			alert("��ģ������Ӳ����ٴ���ӣ�")
	</script>
	<?php
	response.end 
	}

	
	$_REQUEST[
	Search = "select * from Accredit_t  where TitleName_t='"&SmalllClass&"'"
    $msql->query($Search);
	'Response.Write("Search="&Search &"<br>")
	NAccID_t=trim($msql->f("AccID_t"))
	TitleName_t=trim($msql->f("TitleName_t"))
	LinkName_t=trim($msql->f("LinkName_t"))
	FotherID_t=trim($msql->f("FotherID_t"))
	compositor_t=trim($msql->f("compositor_t"))
	UpdateInfo="insert into  Accredit (AdminID,AccID_t,TitleName,LinkName,FotherID,compositor) values ('"&UserID&"','"&NAccID_t&"','"&TitleName_t&"','"&LinkName_t&"','"&AccID&"','"&compositor_t&"') "
    $msql->query (UpdateInfo)



	set myconn=nothing
	
	}
'
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="refresh" content="0;url=QX_Detail.php?UserID=<?php echo $UserID?>&amp;AccID_t=<?php echo(AccID_t?>&amp;AccID=<?php echo(AccID?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  </div>
</body>
</html>
