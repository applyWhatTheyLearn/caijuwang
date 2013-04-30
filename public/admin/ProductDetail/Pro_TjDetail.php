
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
l_id=trim($_REQUEST["l_id"))
$l_classid=trim($_REQUEST["l_classid"]);
pageno=trim($_REQUEST["pageno"))

search="select * from z_product where l_id=".$l_id.""
$msql->query(search)
if($msql->next_record()){
l_id=trim($msql->f("l_id"))
l_name=trim($msql->f("l_name"))
l_basic=trim($msql->f("l_basic"))
l_extend=trim($msql->f("l_extend"))
l_price1=trim($msql->f("l_price1"))
l_price2=trim($msql->f("l_price2"))
l_num=trim($msql->f("l_num"))
l_units=trim($msql->f("l_units"))
l_sort=trim($msql->f("l_sort"))
l_shuliang=trim($msql->f("l_shuliang"))
l_tuijian=trim($msql->f("l_tuijian"))
l_views=trim($msql->f("l_views"))
}


'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>��Ʒ����</title>
</head>
</html>
<html>
<head>
<script language="javascript">
function CheckForm (frm)
{


	if (frm.l_name.value.length==0)
	{
		frm.l_name.focus();
		frm.l_name.select();
		alert ("暂无内容Ʒ���!");
		return false;

	}	

	

}
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top" bgcolor="#E4E4E4">
        <div align="center">
          <form action="Pro_Modi_Submit.php" method="post" name="sample" id="sample"  onSubmit="return CheckForm(this);">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">��Ʒ����</font></td>
                <td width="568" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="74" bgcolor="#FFFFFF"><div align="center"><a href="Pro_TjList.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="94" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;��Ʒ��ƣ�</font></td>
                <td colspan="2" bgcolor="F1F0F1"><?php echo $l_name ?></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：Ϣ��</font></td>
                <td height="23" colspan="2" valign="top" bgcolor="F1F0F1"><?php echo $l_basic ?></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��չ��Ϣ��</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_extend ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;市场价：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_price1 ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;商城价：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_price2 ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;单位：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_units ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;库存数量：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_num ?></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;排序状态：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><?php echo $l_sort ?> </td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">��Ʒ推荐</font>��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_tuijian ?></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><?php echo $l_views ?></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="button" name="Submit3" value="返回前页" onClick="location='Pro_TjList.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>'"></td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>

