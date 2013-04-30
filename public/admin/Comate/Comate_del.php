<?php
include("../../include/common.inc.php");
$w_id = trim($_REQUEST["w_id"]);
$class_id = trim($_REQUEST["class_id"]);
$msql->query("select w_id,w_pic,w_ext from z_comate where w_id=" . $w_id);
if ($msql->next_record()) {
    $w_picName = trim($msql->f("w_pic"));
    $w_ext = trim($msql->f("w_ext"));
    unlink("../../folder/comatepic/" . $w_picName . "." . $w_ext);
}

$msql->query ("Delete from z_comate where w_id = ".$w_id);
?>
<html>
<head>
<title>删除成功</title>
<meta http-equiv="refresh" content="0;url = Comate_list . php ? class_id =<?php echo $class_id ?>">
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


 