<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$l_id=trim($_REQUEST["l_id"]);
$pageno=trim($_REQUEST["pageno"]);
$msql->query( "select * from z_class where l_id=".$l_id);
if($msql->next_record()){
    $l_pic=trim($msql->f("l_pic"));
    $l_ext=trim($msql->f("l_ext"));
}
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
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>修改图片</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="ProClass_ModiPic_Save.php" name="form1" enctype="multipart/form-data">
  <table width="740" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改图片</font></td>
      <td width="417" height="21" bgcolor="#FFFFFF"><div align="right"><a href="ProBigClass_index.html?pageno=<?php echo $pageno ?>">返回产品分类列表</a></div></td>
      <td width="204" rowspan="6" bgcolor="#FFFFFF"><div align="center"><a href="../../folder/productClassPic/<?php echo $l_pic ?>.<?php echo $l_ext ?>" target="_blank"><img src='../../folder/productClassPic/<?php echo $l_pic ?>.<?php echo $l_ext ?>' name='Pic' width="120" height="120" border="0" ></a></div></td>
    </tr>
    <tr>
      <td height="18">&nbsp;</td>
      <td height="18">&nbsp;</td>
    </tr>
    <tr>
      <td width="115" height="1" bgcolor="#999999"></td>
      <td height="1" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="49" valign="top" bgcolor="F1F0F1"><font size="2"><br>
        &nbsp;选择图片：</font></td>
      <td bgcolor="F1F0F1"><input name="file1" type="file" class="tx1" style="width:400" value="" size="15"></td>
    </tr>
    <tr>
      <td height="25" bgcolor="F1F0F1">&nbsp;</td>
      <td height="25" bgcolor="F1F0F1">图片大小为（186 x 173 像素） 并且大小不能超过不能超过2000K</td>
    </tr>
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="开始上传">
        <input type="reset" name="reset" value="重新选择">
        <input type="button" name="Submit2" value="取消" onClick="location='ProBigClass_index.html?pageno=<?php echo $pageno ?>'">
        <input type="hidden" name="l_id" value="<?php echo $l_id?>">
        <input type="hidden" name="pageno" value="<?php echo $pageno ?>">
      </p></td>
    </tr>
  </table>
</form>
</body>
</html>
