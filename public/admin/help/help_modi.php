
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
	$l_classid=trim($_REQUEST["l_classid"]);
	l_id=trim($_REQUEST["l_id"))
	search="select * from z_helpClass  where l_id=".$l_classid.""
	$msql->query(search)
	
	if($msql->next_record()){
	l_classname=trim($msql->f("l_classname"))
	}


	search="select * from z_helpdetail  where l_id=".$l_id.""
	$msql->query(search)
	if($msql->next_record()){
	l_title=trim($msql->f("l_title"))
	l_detail=trim($msql->f("l_detail"))
	l_sort=trim($msql->f("l_sort"))
	l_views=trim($msql->f("l_views"))
	'response.Write("l_filename="&l_filename)
	}



	set myconn=nothing
	
	
	Select Case l_views
	   Case "显示"
	   l_views1="checked"
	   Case "不显示"
	   l_views2="checked"
	End Select	
	
'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>�޸İ�����Ϣ</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top">
          <form action="help_modi_sub.php" method="post" name="sample" id="sample">
            <table width="700" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#006699">&nbsp;<font color="#FFFFFF">�޸İ�����Ϣ</font></td>
                <td width="492" height="21" bgcolor="#FFFFFF">&nbsp;排序：���ࣺ[ <span class="STYLE3"><?php echo $l_classname ?></span> ]</td>
                <td width="103" bgcolor="#FFFFFF"><div align="center"><a href="help_list.php?l_classid=<?php echo  $l_classid ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="101" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;排序：��⣺</td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_title" type="text" id="l_title" value="<?php echo $l_title ?>" size="50" maxlength="50"></td>
              </tr>
              <tr>
                <td height="309" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：���ݣ�</font></td>
                <td height="309" colspan="2" valign="top" bgcolor="F1F0F1"><iframe id="eWebEditor1" src="../../editor/ewebeditor.php?id=l_detail&style=standard1" frameborder="0" scrolling="no" width="100%" height="300"></iframe>
                <textarea name="l_detail" style="display:none" rows="1" cols="20"><?php echo $l_detail ?></textarea></td>
              </tr>
              <tr>
                <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
                <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="<?php echo $l_sort ?>" size="25" maxlength="6">
                  *只能是小于6位数的数字（数字越大越靠前）</td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                  <input name="l_views" type="radio" value="显示" <?php echo $l_views1 ?>>
                  不显示
                  <input type="radio" name="l_views" value="不显示" <?php echo $l_views2 ?>>
                </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="修改">
                    <input type="button" name="Submit3" value="返回前页" onClick="location='help_list.php?l_classid=<?php echo  $l_classid ?>'">
                    <input name="l_classid" type="hidden" id="l_classid" value="<?php echo  $l_classid ?>">
                    <input name="l_id" type="hidden" id="l_id" value="<?php echo $l_id ?>">
                    </td>
              </tr>
              
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
        </form>
       </td>
    </tr>
  </table>
</body>
</html>

 