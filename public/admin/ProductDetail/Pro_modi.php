<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$l_id=trim($_REQUEST["l_id"]);
$l_classid=trim($_REQUEST["l_classid"]);
$pageno=trim($_REQUEST["pageno"]);
$msql->query("select * from z_product where l_id=".$l_id);
if($msql->next_record()){
    $l_id=trim($msql->f("l_id"));
    $l_name=trim($msql->f("l_name"));
    $l_name_e=trim($msql->f("l_name_e"));
    $l_basic=trim($msql->f("l_basic"));
    $l_basic_e=trim($msql->f("l_basic_e"));
    $l_extend=trim($msql->f("l_extend"));
    $l_extend_e=trim($msql->f("l_extend_e"));
    $l_price1=trim($msql->f("l_price1"));
    $l_price2=trim($msql->f("l_price2"));
    $l_num=trim($msql->f("l_num"));
    $l_units=trim($msql->f("l_units"));
    $l_sort=trim($msql->f("l_sort"));
    $l_shuliang=trim($msql->f("l_shuliang"));
    $l_tuijian=trim($msql->f("l_tuijian"));
    $l_views=trim($msql->f("l_views"));
    $l_views1=($l_views=="显示")?"checked":"";
    $l_views2=($l_views=="显示")?"":"checked";
    $tuijian1=($l_tuijian=="推荐")?"checked":"";
    $tuijian2=($l_tuijian=="推荐")?"":"checked";
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>修改商品</title>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
.STYLE2 {color: #0000FF}
-->
</style>
<script type="text/javascript" src="../../ueditor/editor_config.js"></script>
<script type="text/javascript" src="../../ueditor/editor_all.js"></script>
<script language="javascript">
function CheckForm (frm)
{


	if (frm.l_name.value.length==0)
	{
		frm.l_name.focus();
		frm.l_name.select();
		alert ("请输入商品名称!");
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
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改商品</font></td>
                <td width="538" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="74" bgcolor="#FFFFFF"><div align="center"><a href="Pro_List.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;商品名称（中文）：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" value="<?php echo $l_name ?>" size="70" maxlength="50"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;基础信息（中文）：</font></td>
                <td height="23" colspan="2" valign="top" bgcolor="F1F0F1">
                    <textarea name="l_basic" id="l_basic"><?php echo $l_basic ?></textarea>
                    <script type="text/javascript">
                        UE.getEditor('l_basic')
                    </script>
                </td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;扩展信息（中文）：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1">
                    <textarea name="l_extend" id="l_extend"><?php echo $l_extend ?></textarea>
                    <script type="text/javascript">
                        UE.getEditor('l_extend')
                    </script>
                </td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><span class="STYLE2"><font size="2">&nbsp;商品名称（英文）：</font></span></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name_e" type="text" id="l_name_e" value="<?php echo $l_name_e ?>" size="70" maxlength="50"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><span class="STYLE2"><font size="2">&nbsp;基础信息（英文）：</font></span></td>
                <td height="23" colspan="2" valign="top" bgcolor="F1F0F1">
                    <textarea name="l_basic_e" id="l_basic_e"><?php echo $l_basic_e ?></textarea>
                    <script type="text/javascript">
                        UE.getEditor('l_basic_e')
                    </script>
                  </td>
              </tr>
              <tr>
                <td valign="top" bgcolor="F1F0F1"><font size="2" class="STYLE2">&nbsp;扩展信息（中文）：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1">
                    <textarea name="l_extend_e" id="l_extend_e"><?php echo $l_extend_e ?></textarea>
                    <script type="text/javascript">
                        UE.getEditor('l_extend_e')
                    </script>
                  </td>
              </tr>
              
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;市场价：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_price1" type="text" id="l_price1" value="<?php echo $l_price1 ?>" size="25" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;商城价：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_price2" type="text" id="l_price2" value="<?php echo $l_price2 ?>" size="25" maxlength="6"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;单位：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_units" type="text" id="l_units" value="<?php echo $l_units ?>" size="25" maxlength="10"></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1"><font size="2">&nbsp;库存数量：</font></td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><input name="l_num" type="text" id="l_num" value="<?php echo $l_num ?>" size="25" maxlength="6"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;排序状态：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="<?php echo $l_sort ?>" size="25" maxlength="6">
                *只能是小于6位数的数字（数字越大越靠前）</td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;<font size="2">首页新品推荐</font>：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;推荐
                  <input name="l_tuijian" type="radio" value="推荐" <?php echo $tuijian1 ?>>
                  不推荐
                  <input name="l_tuijian" type="radio" value="不推荐" <?php echo $tuijian2 ?>>
                  （注：推荐后会在商品列表中的荐这一竖列，以红色<span class="STYLE1">荐</span>字标识） </font></td>
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
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="修改">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='Pro_List.php?l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>'">
                  <input name="l_id" type="hidden" value="<?php echo $l_id?>">
                  <input name="pageno" type="hidden" value="<?php echo $pageno?>">
                  <input name="l_classid" type="hidden" value="<?php echo $l_classid?>"></td>
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