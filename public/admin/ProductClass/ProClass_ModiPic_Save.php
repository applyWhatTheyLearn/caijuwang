<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");

$l_id = $_POST["l_id"];
$pageno = $_POST["pageno"];
$msql->query("select l_id,l_pic,l_ext from z_class where l_id=" . $l_id);
if ($msql->next_record()) {
    $l_picIsNull = (trim($msql->f("l_pic"))=='');
    $l_picName = trim($msql->f("l_pic"));
    $l_ext = trim($msql->f("l_ext"));
} else {
    exit;
}

$formPath = "../../folder/productClassPic/";
$type = $_FILES["file1"]["type"];
$size = $_FILES["file1"]["size"];
$tmp_name = $_FILES["file1"]["tmp_name"];
$ext = substr(strrchr($_FILES["file1"]["name"], "."),1);
If ($size < 1024) {
    $imageSize = $size & " Bytes";
} elseif ($size < 1048576) {
    $imageSize = Round($size / 1024.1) & " KB";
} else {
    $imageSize = Round(($size / 1024) / 1024.1) & " MB";
}

checkPic($ext,$size);

$PicName = GetNewFileName(); //定义变量，保存图片名，以防图片的名字相同


if ($l_picIsNull) { //l_pic 字段为空更新l_pic字段值
    $msql->query("update z_class set l_pic='" . $PicName . "',l_ext='" . $ext . "' where l_id=" . $l_id);
    move_uploaded_file($tmp_name, $formPath . $PicName . "." . $ext);
} else {
    if ($ext == $l_ext) { //文件后缀与上传的文件后缀相同时文件不需改名直接存贮
        unlink($formPath . $l_picName . "." . $ext);
        move_uploaded_file($tmp_name, $formPath . $l_picName . "." . $ext);
    } else { //更新后缀并按照新后缀存储文件并删除久文件
        $msql->query("update z_class set l_ext='" . $ext . "' where l_id=" . $l_id);
        move_uploaded_file($tmp_name, $formPath . $l_picName . "." . $ext);

        unlink($formPath . $l_picName . "." . $l_ext);
    }

}



?>
<html>
<head>
    <title>modipic</title>
    <meta http-equiv=refresh content="0;url=ProBigClass_index.html?pageno=<?php //echo $pageno ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font color="#993300"><strong>信息已修改</strong></font> </p>
</div>
</body>
</html>