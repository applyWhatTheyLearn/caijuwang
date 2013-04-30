
<!--#include file="../_inc/GetTempNum$_REQUEST["-->
<?php
	allnum="0"
	allprice="0"
	$GetTempNum1 = isset($_SESSION["GetTempNum"]) ? trim($_SESSION["GetTempNum"]) : ''; 'ȡ用户密码��վ��ʱ��ʶ��
     $msql->query ("select sum(l_num) as allnum,sum(l_price2*l_num) as allprice from CarList where l_tempnum='"&GetTempNum1&"'")
	if (not rs.eof) and not isNull(trim($msql->f(0))) {
	allnum=trim($msql->f(0))
	allprice=trim($msql->f(1))
	}

	
	if $_SESSION["UserLoginStatu")="login" {
	UserName=$_SESSION["UserLoginUserName")
	welcominfo="�𾴵�[ <strong><font color=#0000FF>"&UserName&" </font></strong> ] ��Ա����ӭ��ĵ�����"
	}
		 
'?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>top</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
.topbuttom {
	background-image: url(../images/pic_4_5_1.gif);
	height: 22px;
	width: 58px;
	margin: 0px;
	clear: none;
	float: none;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
-->
</style>

<script language="javascript">
function CheckForm (frm)
{

	if (frm.productname.value.length==0)
	{
		frm.productname.focus();
		frm.productname.select();
		alert ("������Ҫ�����Ĳ�Ʒ��ƣ�");
		return false;

	}

	
}
</script>
</head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="191" rowspan="4"><img src="../images/top_pic_1.jpg" width="191" height="83"></td>
      <td height="30" colspan="2" valign="middle" background="../images/top_pic_2.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><div align="center">��ӭ�������ݹ�����! [ <a href="../myshop/user_login.php" target="_parent"><font color="#000000">���½</font></a> ] [ <a href="../myshop/user_reg.php" target="_parent"><font color="#000000">���ע��</font></a> ]</div></td>
          <td width="3%"> <div align="left"><img src="../images/pic_2.gif" width="16" height="14"></div></td>
          <td width="47%">��Ĺ��ﳵ���� <font color="#0000FF"><?php echo $allnum ?></font> ����Ʒ  �ܽ�� <font color="#FF0000"><?php echo $allprice ?></font> Ԫ </td>
          <td width="3%" valign="bottom"><div align="center"><img src="../images/pic_3.gif" width="14" height="15"></div></td>
          <td width="10%"> <div align="right"><a href="../myshop/user_order_list.php" target="_parent"><font color="#333333">�ҵĶ���</font></a> | &nbsp;</div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="13">&nbsp;</td>
      <td width="780"><font color="#993300"><?php echo(welcominfo?></font></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td background="../GongGao/GongGao_list.php"><div align="right"><strong><a href="../index.php" target="_parent"><font color="#FF6600">��ҳ</font></a></strong> | <a href="../myshop/user_index.php" target="_parent" class="topMenuLink">�ҵ��̳�</a> |  <a href="../car/car.php" target="_parent" class="topMenuLink"><strong><font color="#FF6600">���ﳵ</font></strong></a> | <a href="../product/product_list.php" target="_parent" class="topMenuLink">��Ʒչʾ</a> | <a href="../helpcenter/help_list.php" target="_parent" class="topMenuLink">暂无内容</a>| <a href="../hot/hot_list.php" target="_parent" class="topMenuLink">���Ż</a> | <a href="../GongGao/GongGao_list.php" target="_parent" class="topMenuLink">�����</a> | <a href="../newproduct/NewProduct_list.php" target="_parent" class="topMenuLink">��Ʒ推荐</a> | <a href="../paihang/ph_list.php" target="_parent" class="topMenuLink">暂无内容</a>   | <a href="http://www.zssm.com.cn" target="_parent" class="topMenuLink">������ҳ</a> |  <a href="../product_e/product_list.php" target="_parent" class="topMenuLink"><strong><font color="#FF0000">English</font></strong></a> | &nbsp;</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="984" height="91" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="7" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6" height="6"></td>
      <td width="401" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="971" height="6"></td>
      <td width="10"  height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7" height="6"></td>
    </tr>
    <tr>
      <td height="78" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height="78"></td>
      <td valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
          <form name="form1" method="post" action="../search/search_product_list.php" target="_parent"  onSubmit="return CheckForm(this);">
            <td width="1%"><div align="right"><img src="../images/pic_4_1_1.gif" width="4" height="35"></div></td>
            <td width="6%" background="../images/pic_4_2_1.gif"><div align="center"><img src="../images/fdj.gif" width="20" height="20"></div></td>
            <td width="41%" background="../images/pic_4_2_1.gif"><select name="select" id="select">
                <option>������Ʒ</option>
              </select>
                <input name="productname" type="text" id="productname" size="40" maxlength="50"></td>
            <td width="52%" background="../images/pic_4_2_1.gif"><input name="button" type="submit" class="topbuttom" id="button" value=" "></td>
            <td width="0%"><img src="../images/pic_4_3_1.gif" width="4" height="35"></td>
            </form>
          </tr>
          <?php
		  $_REQUEST[
		  Search="select top 6 * from z_product where l_views='显示' order by l_clicknum desc"
		  $msql->query($Search);
		  hotproduct=""
		  while($msql->next_record()){
		  l_id=trim($msql->f("l_id"))
		  l_name=trim($msql->f("l_name"))
		  hotproduct=hotproduct&"<font color=#ff9900>|</font>&nbsp; <a href=../product/product_detail.php?l_id=".$l_id." target=_parent><font color=#333333>". $l_name."</font></a>&nbsp; "

		  }



		  set myconn=nothing
		  
		   ?>
          <tr>
            <td height="32">&nbsp;</td>
            <td colspan="3" valign="bottom">���Ϲ����ȵ㣺<?php echo( hotproduct ?></td>
            <td>&nbsp;</td>
          </tr>
          
        </table>
              
      </td>
      <td valign="top"><img src="../images/huikuang_1_r3_c7.jpg" width="7" height="78"></td>
    </tr>
    <tr>
      <td height="7"><img src="../images/huikuang_1_r5_c2.jpg" width="6" height="7"></td>
      <td><img src="../images/huikuang_1_r5_c5.jpg" width="971" height="7"></td>
      <td><img src="../images/huikuang_1_r5_c7.jpg" width="7" height="7"></td>
    </tr>
  </table>
</div>
</body>
</html>
