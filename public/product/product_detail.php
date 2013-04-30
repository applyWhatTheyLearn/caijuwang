<?php
include("../include/common.inc.php");
session_start();
$GetTempNum1 = isset($_SESSION["GetTempNum"]) ? trim($_SESSION["GetTempNum"]) : '';
$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
$l_id=trim($_REQUEST["l_id"]);
$msql->query ("update z_product set l_clicknum=l_clicknum+1 where l_id=".$l_id."");
$msql->query("select * from z_product where l_id=".$l_id);
if($msql->next_record()){
    $l_id=trim($msql->f("l_id"));
    $l_classid=trim($msql->f("l_classid"));
    $l_name=trim($msql->f("l_name"));
    $l_basic=trim($msql->f("l_basic"));
    $l_price1=trim($msql->f("l_price1"));
    $l_price2=trim($msql->f("l_price2"));
    $l_num=trim($msql->f("l_num"));
    $jiesheng=$l_price1-$l_price2	;
	$msql->query ("select  * from z_productpic where l_productid=".$l_id." and l_views='显示' order by l_sort desc limit 1 ");
    if ($msql-> next_record()) {
		$product_pic1="<a href=# onClick=MM_openBrWindow('productpic.php?productid=".$l_id."','','scrollbars=yes,resizable=yes,width=800,height=600')><img src=../folder/product/".trim($msql->f("l_pic")).".".trim($msql->f("l_ext"))." width=300 border=0 title=点击看更多图片 ></a>";
        $product_pic2="";
	
	} else{
        $product_pic1="";
        $product_pic2="";
    }

	if (strlen($l_classid)>0) {
        $msql->query("select * from z_class where l_id=".$l_classid);
        //如果分类不是顶层类 ，获得顶层父类
		if ($msql-> next_record()&&$msql->f("l_fid")<>0) {
		$msql->query ("select * from z_class where l_id=".$msql->f('l_fid'));
                if ($msql-> next_record()) {
                    $f_id=trim($msql->f('l_id'));
                }else{
                    $f_id='';
                }
	    }

    }
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<script src="../order/order.js"></script>
<title>产品信息</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->

function test(){
	//document.frames['topiframe'].location.replace("test.html");
	document.frames['topiframe'].location.reload();
	}
</script>
</head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name="topif" id="topiframe" scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;首页：&gt; <a href="product_list.php"><font color="#000000">产品展示</font></a> &gt; </td>
        </tr>
      </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
     
          <tr>
            <td width="18" height="23">&nbsp;</td>
            <td width="334" rowspan="6" valign="top"><?php echo $product_pic1 ?></td>
            <td width="398"><strong><?php echo $l_name ?></strong></td>
          </tr>
          <tr>
            <td height="1"></td>
            <td height="1" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td valign="top"><span style="line-height: 130%"><font color="404040"><?php echo $l_basic ?></font></span></td>
          </tr>
          <tr>
            <td height="1" valign="top"></td>
            <td height="1" valign="top" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27" valign="top">&nbsp;</td>
            <td height="27"><div align="right"><font color="404040">定价：￥<?php echo $l_price1 ?> &nbsp;商城价<strong><font color="#FF0000">￥<?php echo $l_price2 ?></font></strong>&nbsp;节省：￥<?php echo $jiesheng ?>  库存：<?php echo $l_num ?></font></div></td>
          </tr>
          <tr>
            <td height="27" valign="top">&nbsp;</td>
            <td height="27"><a href="#" onClick="test();">qqqq</a>              <div align="right"><a href="#" onClick="orderSub(<?php echo $l_id ?>,'<?php echo $GetTempNum1?>');"><img src="../images/pic_4_13_1.gif" alt="订购此商品" width="69" height="21" border="0"></a>&nbsp;<a href="#" onClick="collection('<?php echo $l_id ?>','<?php echo $UserLoginUserID?>');"><img src="../images/pic_4_13_2.gif" alt="收藏此商品" width="75" height="21" border="0"></a></div></td>
          </tr>
        </table>
        
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">

          <tr>
            <td width="19" height="22" valign="top">&nbsp;</td>
            <td width="733" height="22" valign="bottom"><a href="productInfoExt.php?l_id=<?php echo $l_id ?>" target="ProductInfoExt">扩展信息</a> | <a href="pinglun.php?l_id=<?php echo $l_id ?>" target="ProductInfoExt">用户评价</a></td>
          </tr>
          <tr>
            <td height="1" valign="top"></td>
            <td height="1" valign="top" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27" colspan="2" valign="top"><iframe frameborder=0 name=ProductInfoExt  src="productInfoExt.php?l_id=<?php echo $l_id ?>"  style="WIDTH:100%;"> </iframe></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>

        </table>
		</td>
      <td width="222" align="right" valign="top">
      <iframe frameborder=0 name=window_left scrolling="no" src="../include/right_list_2.php"  style="WIDTH:213;"> </iframe>
      </td>
    </tr>
    <tr>
      <td height="6" colspan="2"></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=bottom scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>