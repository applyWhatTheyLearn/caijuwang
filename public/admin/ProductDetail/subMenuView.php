<?php
include("../../include/common.inc.php");
session_start();

$l_fid = trim($_REQUEST["l_id"]);
$msql->query("select * from z_class  where l_fid=" . $l_fid . " order by l_sort desc");
$n = 1;
while ($msql->next_record()) {
    $l_classid = trim($msql->f("l_id"));
    $TitleName1 = substr(trim($msql->f("l_name")), 0, 9);
    echo("
				<table width=180 border=0 align=center cellpadding=1 cellspacing='1'>
                 <tr>
                  <td width=14 background='images/line-3.gif' bgcolor=#EEEEEE>&nbsp;</td>
                  <td width=152 background='images/line-3.gif' bgcolor=#EEEEEE>" . $n . "、<font color='#003366'>
                  <a href='Pro_list.php?l_classid=" . $l_classid . "' target='window_main'>" . $TitleName1 . "</a></font>                  </td>
                 </tr>
                </table>");
    $n = $n + 1;
}
?>
<table width=180 border=0 align=center cellpadding=1 cellspacing="1">
    <tr>
        <td height="4" colspan="2"></td>
    </tr>
</table>