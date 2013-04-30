<?php
Function ErrorMsgUrl($Msgstr, $Urlstr)
{
    echo "<script language='javascript>";
    echo "alert('" . $Msgstr . "');";
    echo "location.href='" . $Urlstr . "';";
    echo "</script>";
}


Function ChackTimeOut($str)
{
    if ($str == "") {
        ?>
        <script language="JavaScript">
            {
                history.back();
                alert("您还没有正确登录或是未操作的时间过长");
            }
        </script>
<?php
//		response.End()
    }
}

Function ChackSpecailWord($ce, $detail)
{

    if (strpos($ce, "'") || strpos($ce, "%") || strpos($ce, "<") <> -1
        || strpos($ce, ">") || strpos($ce, "&") <> -1
        || strpos($ce, "`") || strpos($ce, "\\") || strpos($ce, "/") <> -1
    ) {
        ?>
        <script language=vbscript>
            history.back();
            alert("[ <?php echo($detail)?>  ] 中不能含有[ ' % < > & \ / ` ]等非法字符请重新输入 ！")
        </script>
    <?php
    }
}


Function ChackError($ce, $detailin)
{
    if (strlen(trim($ce)) == 0) {
        ?>
        <script language=javascript>
            history.back();
            alert("[ <?php echo($detailin);?>  ] 不能为空！请重新输入数据 ！")
        </script>
    <?php
    }

    if (strpos($ce, "'")>-1 || strpos($ce, "%")>-1 || strpos($ce, "<")>-1
        || strpos($ce, ">")>-1 || strpos($ce, "&")>-1
        || strpos($ce, "`")>-1 || strpos($ce, "\\")>-1 || strpos($ce, "/")>-1
    ) {
        ?>
        <script language=vbscript>
            history.back()
            alert("[ <?php echo($detailin)?>  ] 中不能含有[ ' % < > & \ / ` ]等非法字符请重新输入 ！")
        </script>
    <?php
        exit;
    }
}

Function ChackNum($num, $info)
{
    if (strlen($num) == 0) {
        ?>
        <script language=vbscript>
            history.back()
            alert("[ <?php echo($info);?>  ] 不能为空 ！")
        </script>
        <?php
        return;
    }
    if (is_numeric($num)) {
        ?>
        <script language=vbscript>
            history.back();
            alert("[ <?php echo($info);?>  ] 只能是数字 ！")
        </script>
    <?php

    }
}

Function ChackPass($P, $RP, $info)
{

    if (strlen(trim($P)) == 0 || strlen(trim($RP)) == 0) {
        ?>
        <script language=javascript>
            history.back();
            alert("[ <?php echo($info);?>  ] 不能为空！")
        </script>
    <?php
    }

    if (strcmp($P, $RP) <> 0) {
        ?>

        <script language=vbscript>
            history.back()
            alert("<?php echo($info);?>有误请检查密码！")
        </script>
    <?php
    }
}

function gen_key($digits)
{
    $authnum = '';
    srand((double)microtime() * 1000000); //create a random number feed.
    $ychar = "0,1,2,3,4,5,6,7,8,9";
    $list = explode(",", $ychar);
    for ($i = 0; $i < $digits; $i++) {
        $randnum = rand(0, 9); // 10+26;
        $authnum .= $list[$randnum];
    }
    return $authnum;
}

//取得一个不重复的序号
Function GetNewFileName()
{
    return date("YmdHis", time()) . gen_key(6);
}

Function checkPic ($ext,$size){
    $FileExt = "gif/jpg/bmp/";
    if (stripos($FileExt, $ext) < 0) {
        ?>
        <script language=javascript>
            history.back();
            alert("您只能上传后缀为{ <?php echo $FileExt?> } 文件");
        </script>
        <?php
        exit;
    }

    if ($size >= 2000000) {
        ?>
        <script language=javascript>
            history.back();
            alert("上传文件不能超过不能超过2M！您输入的文件大小为{ <?php echo $size?> }已超过了限制");
        </script>
        <?php
        exit;
    }
}
?>