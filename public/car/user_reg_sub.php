
<!--#include file="../_inc/md5$_REQUEST["-->

<?php
LogTime=Now()
GetTempNum1=trim($_POST["GetTempNum1"))
Cnum=trim($_POST["Cnum"))
NickName=trim($_POST["NickName"))
UserName=trim($_POST["UserName"))
sex=trim($_POST["sex"))
UserPass=trim($_POST["UserPass"))
ReUserPass=trim($_POST["ReUserPass"))
address=trim($_POST["address"))
postcode=trim($_POST["postcode"))
Tel=trim($_POST["Tel"))
Email=trim($_POST["Email"))
Msn=trim($_POST["Msn"))
QQ=trim($_POST["QQ"))
Detail=trim($_POST["Detail"))
shibie=trim($_POST["shibie"))
Photo=trim($_POST["Photo"))

'ChackError NickName,"用户昵称"
'ChackError UserName,"真实姓名"
'ChackPass  UserPass,ReUserPass,"用户密码"
'ChackError shibie,"识别信息"
'echo("LogTime="&LogTime &"<br>")
'echo("ChanPinMC="&ChanPinMC &"<br>")
'echo("ZongDaiJG="&ZongDaiJG &"<br>")
'echo("addpic="&addpic &"<br>")
'echo("FenDaiJG="&FenDaiJG &"<br>")
'echo("ChanPinSM="&ChanPinSM &"<br>")
'echo("JiShuWT="&JiShuWT &"<br>")
'echo("View="&View &"<br>")
'echo "selectclass="&selectclass


	Search = "Select * From z_user where UserName="&UserName&" order by meid desc"
	Rs.open Search,Myconn,adOpenStatic,adLockReadOnly	
	
	if($msql->next_record()){
     ?>
     <script language=javascript>
             history.back()
             alert("用户已存在！请重新输入 ！")
     </script>
     <?php
	response.end 	
	}
	


      sql="select * from z_user "
      rs.open sql,Myconn,1,3
      rs.addnew
	  $msql->f("Cnum")=Cnum
	  '$msql->f("shibie")=shibie
	  $msql->f("NickName")=NickName
      $msql->f("UserName")=UserName
	  $msql->f("sex")=sex
	  $msql->f("UserPass")=md5(UserPass)
	  '$msql->f("UserLevel")=UserLevel
	  $msql->f("address")=address
      $msql->f("postcode")=postcode
	  $msql->f("Tel")=Tel
	  $msql->f("Email")=Email
	  '$msql->f("Msn")=Msn
	  '$msql->f("QQ")=QQ
	  $msql->f("Detail")=Detail
	  $msql->f("Views")="�ѿ�ͨ"
	  $msql->f("Photo")=Photo
	  $msql->f("RegTime")=now()
	  '$msql->f("LastLoginTime")=now()
	  $msql->f("LoginNum")=0
      rs.update


    $msql->query("select * from z_user where Cnum='"&Cnum&"'")
	UserLoginUserID=trim($msql->f("meid"))
	$_SESSION["UserLoginUserID")=UserLoginUserID
	$_SESSION["UserLoginUserName")=UserName
	$_SESSION["UserLoginUserNamePass")=md5(UserPass)
	$_SESSION["UserLoginStatu")="login"
	'response.Write("addpic="&addpic)

'
?>

<html>
<head>
<title>更新添加成功!</title>
<meta http-equiv=refresh content="0; url=SelectStatu.php?GetTempNum1=<?php echo( GetTempNum1 ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<table width="40%" border="1" cellspacing="10" cellpadding="0" align="center" class="table">
  <tr>
    <td>
            
      <table width="100%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" bordercolorlight="#000000">
        <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                
          <td align="center"><b><font color="#990000">更新添加成功!</font></b></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
              <tr>
                
          <td align="center">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
    </td>
  </tr>
</table>
</body>
</html><?php
	Function ChackError(ce,detailin) 
	if len(trim(ce))=0 {
     ?>
     <script language=javascript>
             history.back()
             alert("[ <?php echo(detailin?>  ] ����Ϊ�գ暂无内容������ ��")
     </script>
     <?php
	response.end 	
	}
	
	for i=1 to len(ce) 
	'��MID暂无内容���user��i λ�õ�һ���ַ�
	us=mid(ce,i,1) 
	'暂无内容�ַ���бȽ�
	if us="'" or us="%" or us="<" or us=">" or us="&" or us="`" or us="\" or us="/" {
	'暂无内容��ַ��不显示�����ܺ暂无内容����ַ�
     ?>
     <script language=vbscript>
             history.back()
             alert("[ <?php echo(detailin?>  ] �в��ܺ���[  ' %  <  >  & \  /  ` ]�ȷǷ��ַ暂无内容��� ��")
     </script>
     <?php
	response.end 
	}
	next 
	}
	
	Function ChackNum(num,info)
	
	for ii=1 to len(num)
	UsNum=mid(num,ii,1) 
	if Asc(UsNum)<48 or Asc(UsNum)>57 {
     ?>
		 <script language=vbscript>
				 history.back()
				 alert("[ <?php echo(info?>  ] ֻ暂无内容 ��")
		 </script>
     <?php
	response.end 	
	}
	next
	}
	
	Function ChackPass(P,RP,info)

	if len(trim(P))=0 or len(trim(RP))=0 {
     ?>
     <script language=javascript>
             history.back()
             alert("[ <?php echo(info?>  ] ����Ϊ�գ�")
     </script>
     <?php
	response.end 	
	}
	
	for i=1 to len(p) 
	'��MID暂无内容���user��i λ�õ�һ���ַ�
	Pass=mid(p,i,1) 
	ChackPass=mid(RP,i,1) 
	'暂无内容�ַ���бȽ�
	if Pass<>ChackPass {
	'暂无内容��ַ��不显示�����ܺ暂无内容����ַ�
     ?>

     <script language=vbscript>
             history.back()
             alert("<?php echo(info?>暂无内容���룡")
     </script>
     <?php
	response.end 
	}
	next 	
	
	}
?>