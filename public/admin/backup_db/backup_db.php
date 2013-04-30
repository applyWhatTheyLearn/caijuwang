<?php
include("../../include/common.inc.php");
$bkDBname=$_POST['bkDBname'];
if(!mysql_connect($dbHost,$dbUser,$dbPass))  //连接mysql数据库
{ 
	echo '数据库连接失败，请核对后再试';
	exit;
}
if(!mysql_select_db($dbName))  //是否存在该数据库
{
	echo '不存在数据库:'.$dbname.',请核对后再试';
	exit;
}
mysql_query("set names 'utf8'");
//$mysql= "set charset utf8;\r\n";
$mysql="DROP TABLE `Accredit`, `Accredit_t`, `admin`, `tb_member`, `w_ad_pic`, `w_copyright`, `w_db_bakinfo`, `z_affiche`, `z_car`, `z_carext`, `z_class`, `z_classpic`, `z_collection`, `z_comate`, `z_comments`, `z_contact`, `z_fittings`, `z_fittings_pic`, `z_helpclass`, `z_helpdetail`, `z_helpic`, `z_hot`, `z_link`, `z_order`, `z_product`, `z_productpic`, `z_return`, `z_smallclass`, `z_user`, `z_viewhistory` ;\r\n";
$q1=mysql_query("show tables");
while($t=mysql_fetch_array($q1)){
    $table=$t[0];
    $q2=mysql_query("show create table `$table`");
    $sql=mysql_fetch_array($q2);
    $mysql.=$sql['Create Table'].";\r\n";
    $q3=mysql_query("select * from `$table`");
    while($data=mysql_fetch_assoc($q3)){
        $keys=array_keys($data);
        $keys=array_map('addslashes',$keys);
        $keys=join('`,`',$keys);
        $keys="`".$keys."`";
        $vals=array_values($data);
        $vals=array_map('addslashes',$vals);
        $vals=join("','",$vals);
        $vals="'".$vals."'";
        $mysql.="insert into `$table`($keys) values($vals);\r\n";
    }
}

$filename="../../folder/db/".$bkDBname.".sql";  //存放路径，默认存放到项目最外层
//$filename="/home/sw/".$bkDBname.".sql";  //存放路径，默认存放到项目最外层
$fp = fopen($filename,'w');
fputs($fp,$mysql);
fclose($fp);
echo "数据备份成功";
$msql->query("insert into w_db_bakinfo (w_name,w_ext,w_time) values ('" .$bkDBname."','sql','".date("Y-m-d H:i:s",time()) . "')");
header("Location: backup_database.php");
?>