
<!--#include file="../../_inc/checkoutTime2.php" -->
<?php
	l_id=trim($_REQUEST["l_id"))

	' $msql->query (search)
	'if($msql->next_record()){ product_name=trim($msql->f("l_name"))
	'
	
	search="select l_id,l_title,l_url from w_ad_pic where l_id=".$l_id.""
	 $msql->query (search)

	if($msql->next_record()){
	l_id=trim($msql->f("l_id"))
	l_title=trim($msql->f("l_title"))
	l_url=trim($msql->f("l_url"))
	}

	
	'response.Write("l_classid=".$l_classid."<br>")
	'response.Write("l_id=".$l_id."<br>")

?>

<html>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E4E4E4;
}
.STYLE1 {color: #0033FF}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>修改ͼƬ</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="Pic_modiPic_Save.php" name="theForm" enctype="multipart/form-data">
  <table width="740" border="0" cellpadding="0" cellspacing="1">
    <tr></tr>
    <tr>
      <td height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">修改ͼƬ</font></td>
      <td width="502" height="21" bgcolor="#FFFFCC">&nbsp;</td>
      <td width="97" bgcolor="#FFFFCC"><div align="center"><a href="pic_list.php">����ͼƬ�б�</a></div></td>
    </tr>
    <tr>
      <td height="18" colspan="3">
      <div align="right"></div></td>
    </tr>
    <tr>
      <td width="137" height="1" bgcolor="#999999"></td>
      <td height="1" colspan="2" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="32" bgcolor="F1F0F1"><font size="2">&nbsp;选择图片：</font></td>
      <td colspan="2" bgcolor="F1F0F1"><input type="file" name="file1" style="width:400" class="tx1" value=""></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;</td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><span class="STYLE1">ͼƬ��С���ܳ����ܳ���200K</span></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��Ҫ˵����</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_title" type="text" id="l_title" value="<?php echo $l_title ?>" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;���ӵ�ַ��</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_url" type="text" id="l_url" value="<?php echo $l_url ?>" size="50" maxlength="50">
      暂无内容Http://</td>
    </tr>
    
    <tr>
      <td height="16" valign="top" bgcolor="F1F0F1">&nbsp;</td>
      <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
    </tr>
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" colspan="2" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="修改图片">
        <input type="reset" name="reset" value="重新选择">
        <input type="button" name="Submit2" value="取消" onClick="location='pic_list.php'">
        <input type="hidden" name="l_id" value="<?php echo $l_id ?>">
      </p></td>
    </tr>
    <tr>
      <td height="21" colspan="3" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
