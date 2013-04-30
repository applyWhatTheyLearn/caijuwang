<?php
include("../include/common.inc.php");
//'删除两小时前提交的订购信息
$msql->query("Delete from z_car where timediff(now(),l_datetime) >'2:00:00'");
session_start();
$GetTempNum1 = isset($_SESSION["GetTempNum"]) ? trim($_SESSION["GetTempNum"]) : ''; //取用户访问网站临时标识号
$carList = "SELECT z_car.l_id, z_car.l_productid, z_car.l_num, z_car.l_datetime, z_car.l_tempnum, z_product.l_fid, z_product.l_classid, z_product.l_name, z_product.l_price1, z_product.l_price2, z_car.l_extprice1, z_car.l_extprice2
FROM z_car INNER JOIN z_product ON z_car.l_productid = z_product.l_id";
$msql->query("select * from (".$carList.") as tb where l_tempnum='" . $GetTempNum1 . "' order by l_datetime desc");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>购物车</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        .STYLE1 {
            color: #FFFFFF
        }

        -->
    </style>
    <script src="../car/modiordernum.js"></script>
    <script type="text/javascript">
        <!--
        function MM_openBrWindow(theURL, winName, features) { //v2.0
            window.open(theURL, winName, features);
        }
        //-->


    </script>
</head>

<body>
<div align="center">
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_left scrolling="no" src=../include/top.php
                        style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>

    <table width="984" border="0" cellpadding="0" cellspacing="1" class="TableLineColor">
        <form name="form1" method="post" action="user_login_check$_REQUEST[" onSubmit="return CheckForm(this);">
            <tr>
                <td height="27" colspan="2">&nbsp;首页：&gt; 购物车</td>
                <td height="27" colspan="8">&nbsp;</td>
            </tr>
            <tr>
                <td height="1" colspan="10" background="../images/pic_4_9.gif"></td>
            </tr>
            <tr>
                <td width="54" height="22" bgcolor="#669933"><span class="STYLE1">&nbsp;No.</span></td>
                <td width="312" bgcolor="#669933"><span class="STYLE1">&nbsp;商品名称</span></td>
                <td width="103" bgcolor="#669933"><span class="STYLE1">&nbsp;市场价／元</span></td>
                <td width="105" bgcolor="#669933"><span class="STYLE1">&nbsp;商城价／元</span></td>
                <td colspan="2" bgcolor="#669933">
                    <div align="center"><span class="STYLE1">&nbsp;数量／件</span></div>
                </td>
                <td width="66" bgcolor="#669933">
                    <div align="center"><span class="STYLE1">附属小类</span></div>
                </td>
                <td width="89" bgcolor="#669933"><span class="STYLE1">&nbsp;小类总计/元</span></td>
                <td width="90" bgcolor="#669933"><span class="STYLE1">&nbsp;节省/元</span></td>
                <td width="31" bgcolor="#669933">
                    <div align="center"><span class="STYLE1">操作</span></div>
                </td>
            </tr>
            <?php
            $num = 1;
            $l_all_price = 0;
            $l_all_jiesheng = 0;
            while($msql->next_record()){
            $l_id = trim($msql->f("l_id"));
            $l_productid = trim($msql->f("l_productid"));
            $l_fid = trim($msql->f("l_fid"));
            $l_classid = trim($msql->f("l_classid"));
            $l_datetime = trim($msql->f("l_datetime"));
            $l_name = trim($msql->f("l_name"));
            $l_price1 = trim($msql->f("l_price1"));
            $l_price2 = trim($msql->f("l_price2"));
            $l_num = trim($msql->f("l_num"));
            $l_tempnum = trim($msql->f("l_tempnum"));
            $l_extprice1 = trim($msql->f("l_extprice1"));
            $l_extprice2 = trim($msql->f("l_extprice2"));
            $jiesheng = ($l_price1 - $l_price2) + ($l_extprice1 - $l_extprice2);
            $l_all_price = $l_all_price + ($l_price2 * $l_num) + $l_extprice2;
            $l_all_jiesheng = $l_all_jiesheng + ($jiesheng * $l_num) + ($l_extprice1 - $l_extprice2);

            ?>

            <tr bgcolor="#F2F2F2" onMouseOver="this.style.background = '#B8DB95'"
                onMouseOut="this.style.background = '#F2F2F2'">
                <td height="22">&nbsp;１、</td>
                <td>&nbsp;<a
                        href="../product/product_detail.php?l_id=<?php echo $l_productid ?>"><?php echo $l_name ?></a>
                </td>
                <td>&nbsp;<font color="404040">￥<?php echo $l_price1 ?></font></td>
                <td>&nbsp;<font color="404040"><font color="#0000FF">￥<?php echo $l_price2 ?></font></font></td>
                <td width="66"><input name="l_num<?php echo $num?>" type="text" id="l_num<?php echo $num ?>"
                                      value="<?php echo $l_num ?>" size="8" maxlength="5"></td>
                <td width="55">
                    <div align="center"><a href="#"
                                           onClick="MofiOrderNum(<?php echo $l_id ?>,<?php echo $num ?>);">修改数量</a></div>
                </td>
                <td bgcolor="#FFFFCC">
                    <div align="center"><font color="404040"><a href="#"
                                                                onClick="MM_openBrWindow('carext.php?car_id=<?php echo $l_id ?>&l_tempnum=<?php echo $l_tempnum ?>&l_fid=<?php echo $l_fid ?>','','scrollbars=yes,resizable=yes,width=1000,height=600')">附属小类</a></font>
                    </div>
                </td>
                <td bgcolor="#DDDDDD">&nbsp;<font color="#404040">￥<?php echo $l_extprice2 ?></font></td>
                <td>&nbsp;<font color="#ff0000">￥<?php echo $jiesheng ?></font></td>
                <td>
                    <div align="center"><a href="del.php?l_id=<?php echo $l_id ?>">删除</a></div>
                </td>
            </tr>
            <tr>
                <td height="１" colspan="10" background="../images/pic_4_9.gif"></td>
            </tr>
            <tr>
                <?php
                $num = $num + 1;

                }
                ?>
                <td height="23" colspan="2" bgcolor="#F2F2F2"><input name="button2" type="button" class="loginBottom"
                                                                     id="button2" value="清空购物车"
                                                                     onClick="location='delall.php'"></td>
                <td colspan="8" bgcolor="#F2F2F2"><p align="right"><font
                            color="404040">商品价格总计：<?php echo $l_all_price ?>　元　共节省了 <font
                                color="#FF0000"><?php echo $l_all_jiesheng ?></font>　元</font></p></td>
            </tr>
            <tr>
                <td height="１" colspan="10" background="../images/pic_4_9.gif"></td>
            </tr>
            <tr>
                <td height="29" colspan="10" valign="bottom" bgcolor="#F2F2F2">
                    <div align="right">
                        <input name="button4" type="button" class="regbottom" id="button4" value="继续购物"
                               onClick="location='../product/product_list.php'">
                        <input name="button3" type="button" class="regbottom" id="button3" value="去收银台"
                               onClick="location='SelectStatu.php?GetTempNum1=<?php echo $GetTempNum1 ?>'">
                    </div>
                </td>
            </tr>
        </form>
    </table>

    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="225" valign="top">&nbsp;</td>
            <td width="759" valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td height="6" colspan="2"></td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_left scrolling="no" src=../include/copyright.php
                        style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <br>
    <br>
</div>
</body>
</html>
