<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$w_id=trim($_REQUEST["db_w_id"]);
$dbname=trim($_REQUEST["dbname"]);
$mysql_file="../../folder/db/".$dbname.".sql"; //指定要恢复的MySQL备份文件路径,请自已修改此路径
restore ($mysql_file,$msql); //执行MySQL恢复命令

function restore($fname,$msql)
	{
 		if (file_exists($fname)) {
			$sql_value="";
			$cg=0;
			$sb=0;
			$sqls=file($fname);
			foreach($sqls as $sql)
			{
				$sql_value.=$sql;
			}
			$a=explode(";\r\n", $sql_value);  //根据";\r\n"条件对数据库中分条执行
			$total=count($a)-1;
			for ($i=0;$i<$total;$i++)
			{
				//执行命令
				if($msql->query($a[$i]))
				{
					$cg+=1;
				}
				else
				{
					$sb+=1;
					$sb_command[$sb]=$a[$i];
				}
			}
			echo "操作完毕，共处理 $total 条命令，成功 $cg 条，失败 $sb 条";
			//显示错误信息 
			if ($sb>0)
			{
				echo "<hr><br><br>失败命令如下：<br>";
				for ($ii=1;$ii<=$sb;$ii++)
				{
					echo "<p><b>第 ".$ii." 条命令（内容如下）：</b><br>".$sb_command[$ii]."</p><br>";
				}
			}			//-----------------------------------------------------------
		}
         else{
			echo "MySQL备份文件不存在，请检查文件路径是否正确！";
		}
	}
//数据库成功已恢复
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
</head>

<body>
</body>
</html>
