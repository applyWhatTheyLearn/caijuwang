<?php
include("../include/common.inc.php");
include("../_inc/GetTempNum.php");
$allnum = "0";
$allprice = "0";
$welcominfo = "";
if (isset($_SESSION["GetTempNum"])) {
    $GetTempNum1 = trim($_SESSION["GetTempNum"]); //取用户访问网站临时标识号
    $carList = "SELECT z_car.l_id, z_car.l_productid, z_car.l_num, z_car.l_datetime, z_car.l_tempnum, z_product.l_fid, z_product.l_classid, z_product.l_name, z_product.l_price1, z_product.l_price2, z_car.l_extprice1, z_car.l_extprice2 FROM z_car INNER JOIN z_product ON z_car.l_productid = z_product.l_id";
    $msql->query("select sum(l_num) as allnum,sum(l_price2*l_num) as allprice from (" . $carList . ") as tb where l_tempnum='" . $GetTempNum1 . "'");

    if (($msql->next_record())) {
        $allnum = trim($msql->f("allnum"));
        $allprice = trim($msql->f("allprice"));
    }
}
if (isset($_SESSION["UserLoginStatu"]) && $_SESSION["UserLoginStatu"] == "login") {
    $UserName = $_SESSION["UserLoginUserName"];
    $welcominfo = "尊敬的[ <strong><font color=#0000FF>" . $UserName . " </font></strong> ] 会员！欢迎您的到来！";
}

?>
<html>
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
        function CheckForm(frm) {

            if (frm.productname.value.length == 0) {
                frm.productname.focus();
                frm.productname.select();
                alert("请输入要搜索的产品名称！");
                return false;

            }


        }
    </script>
</head>

<body>
<div align="center">
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="191" rowspan="4" valign="top"><img src="../images/style2_logo.gif" width="196" height="60"></td>
            <td height="30" colspan="2" valign="middle" background="../images/top_pic_2.gif">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <div align="center">欢迎您的来到! [ <a href="../myshop/user_login.php" target="_parent"><font
                                        color="#000000">请登陆</font></a> ] [ <a href="../myshop/user_reg.php"
                                                                              target="_parent"><font color="#000000">免费注册</font></a>
                                ]
                            </div>
                        </td>
                        <td width="3%">
                            <div align="left"><a href="../car/car.php" target="_parent"><img src="../images/pic_2.gif"
                                                                                             width="16" height="14"
                                                                                             border="0"></a></div>
                        </td>
                        <td width="47%">您的购物车中有 <font color="#0000FF"><?php echo($allnum);  ?></font> 件商品 总金额 <font
                                color="#FF0000"><?php echo($allprice); ?></font> 元
                        </td>
                        <td width="3%" valign="bottom">
                            <div align="center"><img src="../images/pic_3.gif" width="14" height="15"></div>
                        </td>
                        <td width="10%">
                            <div align="right"><a href="../myshop/user_order_list.php" target="_parent"><font
                                        color="#333333">我的订单</font></a> | &nbsp;</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="13">&nbsp;</td>
            <td width="780"><font color="#993300"><?php echo($welcominfo); ?></font></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td background="../GongGao/GongGao_list.php">
                <div align="right"><strong><a href="../index.php" target="_parent"><font
                                color="#FF6600">首页</font></a></strong> | <a href="../index.php" target="_parent"
                                                                            class="topMenuLink">商城</a> | <a
                        href="../product/product_list.php" target="_parent" class="topMenuLink">商品展示</a> | <a
                        href="../hot/hot_list.php" target="_parent" class="topMenuLink">热门促销</a> | <a
                        href="../newproduct/NewProduct_list.php" target="_parent" class="topMenuLink">新品推荐</a> | <a
                        href="../paihang/ph_list.php" target="_parent" class="topMenuLink">热销排行</a> | <a
                        href="../myshop/user_index.php" target="_parent" class="topMenuLink">我的商城</a> | <a
                        href="../car/car.php" target="_parent" class="topMenuLink"><strong><font
                                color="#FF6600">购物车</font></strong></a> | &nbsp;</div>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <table width="984" height="91" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="7" height="6" align="left" valign="top"><img src="../images/huikuang_1_r2_c2.jpg" width="6"
                                                                    height="6"></td>
            <td width="401" height="6" valign="top"><img src="../images/huikuang_1_r2_c3.jpg" width="971" height="6">
            </td>
            <td width="10" height="6" align="center" valign="top"><img src="../images/huikuang_1_r2_c7.jpg" width="7"
                                                                       height="6"></td>
        </tr>
        <tr>
            <td height="78" valign="top"><img src="../images/huikuang_1_r3_c2.jpg" width="6" height="78"></td>
            <td valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <form name="form1" method="post" action="../search/search_product_list.php" target="_parent"
                              onSubmit="return CheckForm(this);">
                            <td width="1%">
                                <div align="right"><img src="../images/pic_4_1_1.gif" width="4" height="35"></div>
                            </td>
                            <td width="6%" background="../images/pic_4_2_1.gif">
                                <div align="center"><img src="../images/fdj.gif" width="20" height="20"></div>
                            </td>
                            <td width="41%" background="../images/pic_4_2_1.gif"><select name="select" id="select">
                                    <option>搜索商品</option>
                                </select>
                                <input name="productname" type="text" id="productname" size="40" maxlength="50"></td>
                            <td width="52%" background="../images/pic_4_2_1.gif"><input name="button" type="submit"
                                                                                        class="topbuttom" id="button"
                                                                                        value=" "></td>
                            <td width="0%"><img src="../images/pic_4_3_1.gif" width="4" height="35"></td>
                        </form>
                    </tr>
                    <?php
                    //$_REQUEST[
                    $Search = "select * from z_product where l_views='显示' order by l_clicknum desc limit 6";
                    $msql->query($Search);
                    $hotproduct = "";
                    while ($msql->next_record()) {

                        $l_id = trim($msql->f("l_id"));
                        $l_name = trim($msql->f("l_name"));
                        $hotproduct = $hotproduct . "<font color=#ff9900>|</font>&nbsp; <a href=../product/product_detail.php?l_id=" . $l_id . " target=_parent><font color=#333333>" . $l_name . "</font></a>&nbsp; ";
                    }

                    ?>
                    <tr>
                        <td height="32">&nbsp;</td>
                        <td colspan="3" valign="bottom">网上购物热点：<?php echo($hotproduct); ?></td>
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
