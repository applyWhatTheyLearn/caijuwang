<?php
include("../../_inc/checkoutTime.php");
include("../../include/common.inc.php");
$l_id = trim($_REQUEST["l_id"]);
$pageno = trim($_REQUEST["pageno"]);
$msql->query("select l_id,l_pic,l_ext from z_class where l_id=" . $l_id);
if ($msql->next_record()) {
    $l_pic = trim($msql->f("l_pic"));
    $l_ext = trim($msql->f("l_ext"));
//        删除小类列表子记录
    $msql->query("select l_id,l_classid from z_fittings where l_classid=" . $l_id);
    while ($msql->next_record()) {
        $fittings_id = trim($msql->f("l_id"));
        //删除小类列表对应图片记录
        $fsql->query("select l_id,l_pjid,l_pic,l_ext from z_fittings_pic where l_pjid=" . $fittings_id);
        while ($fsql->next_record()) {
            $fittingsPicid = trim($fsql->f("l_id"));
            $fittingsPicName = trim($fsql->f("l_pic"));
            $fittingsExt = trim($fsql->f("l_ext"));
            //TODO 删除图片文件先实验一下
//            Path &"folder\fittings\"& fittingsPicName&"."&fittingsExt
            unlink("../../folder/fittings/".$fittingsPicName.".".$fittingsExt);
            $tsql->query("Delete from z_fittings_pic where l_id='" . $fittingsPicid . "'");
        }
        $dsql->query("Delete from z_fittings where l_id=" . $fittings_id);
    }

//删除小类列表
    $msql->query("select l_id,l_fid from z_class where l_fid=" . $l_id);
    while ($msql->next_record()) {
        $SmallClass_id = trim($msql->f("l_id"));
        $fsql->query("select l_id,l_classid from z_product where l_classid=" . $SmallClass_id);
        while ($fsql->next_record()) {
            $product_id = trim($fsql->f("l_id"));
            $tsql->query("select l_id,l_productid,l_pic,l_ext from z_productpic where l_productid=" . $product_id);
            while ($tsql->next_record()) {
                $proPicid = trim($tsql->f("l_id"));
                $proPicName = trim($tsql->f("l_pic"));
                $proExt = trim($tsql->f("l_ext"));

//					sMapFileName = Path &"folder\product\"& proPicName&"."&proExt
                unlink("../../folder/product/".$proPicName.".".$proExt);
                $dsql->query("Delete from z_productpic where l_id=" . $proPicid);
            }
            $dsql->query("Delete from z_product where l_id=" . $product_id);
        }

        $dsql->query("Delete from z_class where l_id=" . $SmallClass_id);


    }


//	ProClassPicName = Path &"folder\productClassPic\"& l_pic&"."&l_ext
    if(strlen($l_pic) > 0 && strlen($l_ext)>0){
        unlink("../../folder/productClassPic/".$l_pic.".".$l_ext);
    }

    $dsql->query("Delete from z_class where l_id=" . $l_id);
}
?>
<html>
<head>
    <title></title>
    <meta http-equiv="refresh" content="0;url=ProBigClass_List.php">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p>&nbsp;</p>
</div>
</body>
</html>

