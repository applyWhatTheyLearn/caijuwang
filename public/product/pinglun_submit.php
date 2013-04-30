<?php
include("../include/common.inc.php");
$username = isset($_POST["userName"]) ? trim($_POST["userName"]) : '';
$userpass = isset($_POST["userPass"]) ? trim($_POST["userPass"]) : '';
$title = trim($_POST["title"]);
$detail = trim($_POST["detail"]);
$l_id = trim($_POST["l_id"]);
$userid = isset($_POST["userID"]) ? trim($_POST["userID"]) : '';
$msql->query("select * from z_user where UserName='" . $username . "' and  UserPass='" . $userpass . "' and views='已开通'");

if ($msql->next_record()) {

    $msql->query("INSERT INTO z_comments (l_userid,l_productid,l_title,l_detail,l_views,l_time) VALUES ('" . $userid . "','" . $l_id . "','" . $title . "','" . $detail . "','不显示','" . date("Y-m-d H:i:s", time()) . "')")
    ?>
    <script language="javascript">
        window.open('info.php?statu=yo', '', 'resizable=yes,width=450,height=200');

    </script>
<?php
} else {
    ?>
    <script language="javascript">
        window.open('info.php?statu=no', '', 'resizable=yes,width=450,height=200');

    </script>
<?php
}



?>
<html>
<head>
    <meta http-equiv=refresh content="30; url=pinglun.php?l_id=<?php echo $l_id ?>">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>评论信息</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        .STYLE1 {
            color: #0000FF
        }

        .STYLE2 {
            color: #FF6600
        }

        -->
    </style>

</head>

<body>
</body>
</html>
