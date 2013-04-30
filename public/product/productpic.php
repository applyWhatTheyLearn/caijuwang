<?php
include("../include/common.inc.php");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>产品图片列表</title>
    <script language="javascript">
        function viewpic(a) {
//alert (a);
            document.images.bigpic.src = "../folder/product/" + a;

        }//-->
    </script>
</head>

<body>
<?php
$l_id = trim($_REQUEST["productid"]);
$msql->query("select * from z_productpic where l_productid=" . $l_id . " and l_views='显示' order by l_sort desc");
?>
<div align="center">
    <table width="602" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td height="58">
                <div align="center">
                    <?php if ($msql->next_record()) { ?>
                        <img
                            src="../folder/product/<?php echo trim($msql->f('l_pic')) ?>.<?php echo trim($msql->f('l_ext')) ?>"
                            border="0" name="bigpic" id="bigpic">
                    <?php
                    }
                    ?>
                </div>
            </td>
        </tr>
        <tr>
            <td height="13">&nbsp;</td>
        </tr>
        <tr>
            <td height="1" bgcolor="#0099FF"></td>
        </tr>
        <tr>
            <td height="8"></td>
        </tr>
        <tr>
            <td>
                <?php
                $num = 1;
                while ($msql->next_record()) {


                    $picname = trim($msql->f('l_pic')) . "." . trim($msql->f('l_ext'));
                    if ($num >= 6) {
                        $brinfo = "<br>";
                        $num = 0;
                    } else {
                        $brinfo = "";
                    }
                    ?>
                    <a href="#" onClick="viewpic('<?php echo $picname ?>');"><img
                            src="../folder/product/<?php echo trim($msql->f('l_pic')) ?>.<?php echo trim($msql->f('l_ext')) ?>"
                            name="img<?php echo $num ?>" width="90" class="picborder"
                            id="img<?php echo $num ?>"></a>&nbsp;<?php echo $brinfo ?>
                    <?php
                    $num = $num + 1;
                }
                ?>
            </td>

        </tr>
    </table>
</div>
</body>
</html>
