<?php
include("../include/common.inc.php");
session_start();
$AccID = trim($_REQUEST["AccID"]);
$AdminID = trim($_REQUEST["AdminID"]);
$msql->query("select * from Accredit where FotherID=" . $AccID . " and AdminID=" . $AdminID . " order by compositor");
$n = 1;
while ($msql->next_record()) {
    $TitleName1 = trim($msql->f("TitleName"));
    $LinkName1 = trim($msql->f("LinkName"));
    echo("
    <table width=180 border=0 align=center cellpadding=1 cellspacing='1'>
        <tr>
            <td width=14 background='images/line-3.gif' bgcolor=#EEEEEE>&nbsp;</td>
            <td width=152 background='images/line-3.gif' bgcolor=#EEEEEE>".$n."、
                <font color='#003366'><a href=".$LinkName1."
                                         target='mainFrame'>".$TitleName1."</a></font></td>
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