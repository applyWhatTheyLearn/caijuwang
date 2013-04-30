<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$l_classid = $_POST["l_classid"];
$l_sort = $_POST["l_sort"];
$l_views = $_POST["l_views"];
$l_title = $_POST["l_title"];


$formPath = "../../folder/product/";
$type = $_FILES["file1"]["type"];
$size = $_FILES["file1"]["size"];
$tmp_name = $_FILES["file1"]["tmp_name"];
$ext = substr(strrchr($_FILES["file1"]["name"], "."), 1);
If ($size < 1024) {
    $imageSize = $size & " Bytes";
} elseif ($size < 1048576) {
    $imageSize = Round($size / 1024.1) & " KB";
} else {
    $imageSize = Round(($size / 1024) / 1024.1) & " MB";
}

checkPic($ext, $size);

$PicName = GetNewFileName(); //定义变量，保存图片名，以防图片的名字相同
move_uploaded_file($tmp_name, $formPath . $PicName . "." . $ext);
$msql->query("INSERT INTO z_productpic (l_productid,l_title,l_pic,l_ext,l_sort,l_views) VALUES ('" . $l_classid . "','" . $l_title . "','" . $PicName . "','" . $ext . "','" . $l_sort . "','" . $l_views . "')");


?>

<html>
<head>
    <title>addpic</title>
    <meta http-equiv="refresh" content="0;url=Pro_Pic_List.php?l_classid=<?php echo  $l_classid ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<div align="center">
    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p>&nbsp;</p>

    <p><font color="#993300"><strong>信息已添加</strong></font></p>
</div>
</body>
</html>
