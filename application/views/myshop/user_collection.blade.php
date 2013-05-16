<?php
include("../include/common.inc.php");
include("../include/SubPages.php");
session_start();
$GetTempNum1 = isset($_SESSION["GetTempNum"]) ? trim($_SESSION["GetTempNum"]) : '';
$UserLoginStatu = isset($_SESSION["UserLoginStatu"]) ? trim($_SESSION["UserLoginStatu"]) : '';
$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
if (strlen($UserLoginStatu)==0 || $UserLoginStatu<>"login") {
 ?>
  <script language=javascript>
          //history.back()
          alert("您还没有登陆");
		  location.href="user_login.php"
  </script>
<?php
exit;
}
$collectionlist="SELECT z_collection.l_id as collid, z_collection.l_userid, z_collection.l_time, z_product.l_id, z_product.l_fid, z_product.l_classid, z_product.l_name, z_product.l_basic, z_product.l_extend, z_product.l_price1, z_product.l_price2, z_product.l_units, z_product.l_num, z_product.l_tuijian, z_product.l_shuliang, z_product.l_sort, z_product.l_views, z_product.l_clicknum
FROM z_collection INNER JOIN z_product ON z_collection.l_productid=z_product.l_id";
    $msql->query("select * from (".$collectionlist.") t where t.l_userid=".$UserLoginUserID." and t.l_views='显示' order by t.l_time desc");
		 

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<script src="../order/order.js"></script>
<title>我的收藏</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe id="topiframe" frameborder=0 name=top scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="222" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/myshop_left1.php  style="WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;首页：&gt; 我的商城 &gt; 我的收藏 </td>
        </tr>
      </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6"></td>
          </tr>
        </table>
        <?php if($msql->num_rows() > 0){?>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="24">
                <div align="right">
                    <?php
                    //每页显示的条数
                    $page_size = 25;
                    //总条目数
                    $nums = $msql->num_rows();
                    //每次显示的页数
                    $sub_pages = 5;
                    //得到当前是第几页
                    $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                    if (empty($l_classid)) {
                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "user_collection.php?pageno=", 2);
                    } else {
                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "user_collection.php?l_classid=" . $l_classid . "&pageno=", 2);
                    }

                    ?>

            </div></td>
          </tr>
          <tr>
            <td height="6"></td>
          </tr>
        </table>
      <?php
          $num = 1;
          $beginPosition = $page_size * ($pageno - 1);
          $endPosition = $page_size * $pageno;
          //定位到开始位置
          for ($m = 0; $m < $beginPosition; $m++) $msql->next_record();
          for ($m = 0; $m < $endPosition; $m++) {
              if ($msql->next_record()) {
                  $collid = $msql->f("collid");
                  $l_id = $msql->f("l_id");
                  $l_name = $msql->f("l_name");
                  $l_basic = $msql->f("l_basic");
                  $l_price1 = $msql->f("l_price1");
                  $l_price2 = $msql->f("l_price2");
                  $jiesheng=$l_price1-$l_price2;
                  $fsql->query ("select  * from z_productpic where l_productid=".$l_id." and l_views='显示' order by l_sort desc limit 1");
                  if ($fsql->next_record()) {
                      $product_pic="<img src=../folder/product/".trim($fsql->f('l_pic')).".".trim($fsql->f('l_ext'))." width=90 border=0>";
                  }else{
                      $product_pic="<img src=../images/pic_4_12.gif width=90 border=0>";
                  }
                  ?>
        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
          <tr>
            <td width="25" height="27">&nbsp;</td>
            <td width="126" rowspan="4" valign="top"><a href="../product/product_detail.php?l_id=<?php echo $l_id ?>"><?php echo $product_pic ?></a></td>
            <td colspan="3"><font color="#333333"><?php echo $num ?>、</font><strong><a href="../product/product_detail.php?l_id=<?php echo $l_id ?>"><font color="#FF6600"><?php echo $l_name ?></font></a></strong></td>
          </tr>
          <tr>
            <td height="1" valign="top"></td>
            <td height="1" colspan="3" valign="top" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="56" rowspan="2" valign="top">&nbsp;</td>
            <td height="27" colspan="3" valign="top"><span style="line-height: 130%"><font color="404040"><?php echo $l_basic ?></font></span></td>
          </tr>
          <tr>
            <td width="474" height="27"><div align="right"><font color="404040">定价：￥<?php echo $l_price1 ?> &nbsp;商城价：<strong><font color="#FF0000">￥<?php echo $l_price2 ?></font></strong>&nbsp;节省：￥<?php echo $jiesheng ?></font><a href="#" onClick="orderSub(<?php echo $l_id ?>,'<?php echo $GetTempNum1?>');"></a></div></td>
            <td width="70"><a href="#" onClick="orderSub(<?php echo $l_id ?>,'<?php echo $GetTempNum1?>');"><img src="../images/pic_4_13_1.gif" alt="订购此商品" width="69" height="21" border="0"></a><a href="#" onClick="orderSub(<?php echo $l_id ?>,'<?php echo $GetTempNum1?>');"></a></td>
            <td width="51"><div align="right">
              <input name="button" type="button" class="loginBottom" id="button" value="取消收藏" onClick="location='user_collection_cencel.php?collid=<?php echo $collid ?>'">
            </div></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
          <?php
              } else {
                  break;
              }
              $num += 1;
          }?>
        </table>
        <?php } ?></td>
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
