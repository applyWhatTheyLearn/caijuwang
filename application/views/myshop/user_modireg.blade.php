<?php
include("../include/common.inc.php");
session_start();
$UserLoginStatu = isset($_SESSION["UserLoginStatu"]) ? trim($_SESSION["UserLoginStatu"]) : '';
$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
if (strlen($UserLoginStatu)==0 || $UserLoginStatu<>"login") {
    ?>
    <script language=javascript>
        //history.back()
        alert("您还没有登陆");
        location.href="user_login.php"
    </script>
    <?php
    exit;
}
$msql->query("select * from z_user where Meid=".$UserLoginUserID);
if($msql->next_record()){
    $Cnum=trim($msql->f("Cnum"));
    $shibie=trim($msql->f("shibie"));
    $NickName=trim($msql->f("NickName"));
    $UserName=trim($msql->f("UserName"));
    $sex=trim($msql->f("Sex"));
    $UserPass=trim($msql->f("UserPass"));
    $UserLevel=trim($msql->f("UserLevel"));
    $address=trim($msql->f("Address"));
    $postcode=trim($msql->f("PostCode"));
    $Tel=trim($msql->f("Tel"));
    $Email=trim($msql->f("Email"));
    $Msn=trim($msql->f("Msn"));
    $QQ=trim($msql->f("QQ"));
    $Detail=trim($msql->f("Detail"));
    $Views=trim($msql->f("Views"));
    $Photo=trim($msql->f("Photo"));
    $RegTime=trim($msql->f("RegTime"));
    $LastLoginTime=trim($msql->f("LastLoginTime"));
    $LoginNum=trim($msql->f("LoginNum"));
    $selected1=($sex=="男")?"selected":'';
    $selected2=($sex=="女")?"selected":'';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>注册信息</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE2 {color: #0099CC}
-->
</style>
<script>
function ShowPic(){
document.images.Pic.src="../Folder/pic/"+document.sample.Photo.options[document.sample.Photo.selectedIndex].value;
//document.sample.PicUrl.value="../bbs/Images/Topic/"+document.sample.headpic.options[document.sample.headpic.selectedIndex].value+".gif";
}
</script>
<script language="javascript">
function CheckForm (frm)
{

	if (frm.UserName.value.length==0)
	{
		frm.UserName.focus();
		frm.UserName.select();
		alert ("用户姓名不能为空！");
		return false;

	}

	if (frm.NickName.value.length==0)
	{
		frm.NickName.focus();
		frm.NickName.select();
		alert ("用户昵称不能为空！");
		return false;

	}	

		


	if (frm.Email.value.search("@")<=0)
	{
		frm.Email.focus();
		frm.Email.select();
		alert ("不是合法的email地址，请务必准确填写，\n 以便我们能够与您联系。");
		return false;

	}
			

	if(frm.UserPass.value!=frm.ReUserPass.value)
	{
		frm.ReUserPass.focus();
		frm.ReUserPass.select();
		alert ("两次输入密码不同！");
		return false;
	}		
}
</script>
</head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_top scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  
    <table width="984" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
    <form name="sample" method="post" action="user_modireg_sub.php"  onSubmit="return CheckForm(this);">
      <tr>
        <td height="32" colspan="3">&nbsp;&nbsp;首页：&gt; 我的商城 &gt; 注册信息 </td>
      </tr>
      <tr>
        <td width="225" rowspan="17" valign="top" bordercolorlight="#999999" bordercolordark="#FFFFFF"><iframe frameborder=0 name=window_left scrolling="no" src=../include/myshop_left1.php  style="WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;会员号：</font></td>
        <td><font size="2" color="#993300"><?php echo $Cnum ?></font>
          <input name="Cnum" type="hidden" id="Cnum" size="22" maxlength="8" value="<?php echo $Cnum?>"></td>
      </tr>
      <tr>
        <td width="162" valign="top" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;用户头像</font></td>
        <td width="587"><span class="STYLE2">
          <select name=Photo size=8 class="loginText" id="Photo" onChange='ShowPic()'>
          <option value="<?php echo $Photo ?>" selected><?php echo substr($Photo,0,2) ?></option>
            <option value="01.gif">1</option>
            <option value="02.gif">2</option>
            <option value="03.gif">3</option>
            <option value="04.gif">4</option>
            <option value="05.gif">5</option>
            <option value="06.gif">6</option>
            <option value="07.gif">7</option>
            <option value="08.gif">8</option>
            <option value="09.gif">9</option>
            <option value="10.gif">10</option>
            <option value="11.gif">11</option>
            <option value="12.gif">12</option>
            <option value="13.gif">13</option>
            <option value="14.gif">14</option>
            <option value="15.gif">15</option>
            <option value="16.gif">16</option>
            <option value="17.gif">17</option>
            <option value="18.gif">18</option>
            <option value="19.gif">19</option>
            <option value="20.gif">20</option>
            <option value="21.gif">21</option>
            <option value="22.gif">22</option>
            <option value="23.gif">23</option>
            <option value="24.gif">24</option>
            <option value="25.gif">25</option>
            <option value="26.gif">26</option>
            <option value="27.gif">27</option>
            <option value="28.gif">28</option>
            <option value="29.gif">29</option>
            <option value="30.gif">30</option>
            <option value="31.gif">31</option>
            <option value="32.gif">32</option>
            <option value="33.gif">33</option>
            <option value="34.gif">34</option>
            <option value="35.gif">35</option>
            <option value="36.gif">36</option>
            <option value="37.gif">37</option>
            <option value="38.gif">38</option>
            <option value="39.gif">39</option>
            <option value="40.gif">40</option>
            <option value="41.gif">41</option>
            <option value="42.gif">42</option>
            <option value="43.gif">43</option>
            <option value="44.gif">44</option>
            <option value="45.gif">45</option>
            <option value="46.gif">46</option>
            <option value="47.gif">47</option>
            <option value="48.gif">48</option>
            <option value="49.gif">49</option>
            <option value="50.gif">50</option>
            <option value="51.gif">51</option>
            <option value="52.gif">52</option>
            <option value="53.gif">53</option>
            <option value="54.gif">54</option>
            <option value="55.gif">55</option>
            <option value="56.gif">56</option>
            <option value="57.gif">57</option>
            <option value="58.gif">58</option>
            <option value="59.gif">59</option>
            <option value="60.gif">60</option>
            <option value="61.gif">61</option>
          </select>
          <img src='../folder/Pic/<?php echo $Photo ?>' name='Pic'> </span></td>
      </tr>
      <tr>
        <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;用户姓名：</font></td>
        <td><input name="UserName" type="text" class="loginText" id="UserName" value="<?php echo $UserName ?>" size="30" maxlength="20">
            <font color=#ff0000>*</font></td>
      </tr>
      <tr>
        <td height="20" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;用户昵称：</font></td>
        <td><font color=#ff0000>
          <input name="NickName" type="text" class="loginText" id="NickName" value="<?php echo $NickName ?>" size="30" maxlength="20">
        </font></td>
      </tr>
      <tr>
        <td height="23" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;性别：</font></td>
        <td><select name="sex" class="loginText" id="sex">
            <option value="男" <?php echo $selected1 ?>>男</option>
            <option value="女" <?php echo $selected2 ?>>女</option>
        </select></td>
      </tr>
      <tr>
        <td height="23" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;用户密码：</font></td>
        <td><input name="UserPass" type="password" class="loginText" id="UserPass" size="30" maxlength="20">
        <font color=#ff0000>*</font></td>
      </tr>
      <tr>
        <td height="22" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;校验用户密码</font></td>
        <td><input name="ReUserPass" type="password" class="loginText" id="ReUserPass" size="30" maxlength="20">
        <font color=#ff0000>*</font></td>
      </tr>
      <tr>
        <td height="22" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;联系地址：</font></td>
        <td><input name="address" type="text" class="loginText" id="address" value="<?php echo $address ?>" size="60" maxlength="50"></td>
      </tr>
      <tr>
        <td height="24" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6">&nbsp;<font color="#000000" size="2">邮政编码：</font></td>
        <td><font color="#000000" size="2">
          <input name="postcode" type="text" class="loginText" id="postcode" value="<?php echo $postcode ?>" size="15" maxlength="6">
        </font></td>
      </tr>
      <tr>
        <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;联系电话：</font></td>
        <td><input name="Tel" type="text" class="loginText" id="Tel" value="<?php echo $Tel ?>" size="60" maxlength="50"></td>
      </tr>
      <tr>
        <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;Email：</font></td>
        <td><input name="Email" type="text" class="loginText" id="Email" value="<?php echo $Email ?>" size="60" maxlength="50">
        <font color=#ff0000>*</font></td>
      </tr>
      <tr>
        <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;Msn：</font></td>
        <td><input name="Msn" type="text" class="loginText" id="Msn" value="<?php echo $Msn ?>" size="60" maxlength="50"></td>
      </tr>
      <tr>
        <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="#F6F6F6"><font size="2">&nbsp;QQ：</font></td>
        <td><input name="QQ" type="text" class="loginText" id="QQ" value="<?php echo $QQ ?>" size="60" maxlength="20"></td>
      </tr>
      <tr>
        <td height="23" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="23" colspan="2"><input name="button" type="submit" class="regbottom" id="button" value="提交修改">
        <input name="l_userid" type="hidden" id="l_userid" value="<?php echo $UserLoginUserID ?>"></td>
      </tr>
      <tr>
        <td height="23" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="23" colspan="2">&nbsp;</td>
      </tr>
      </form>
  </table>
    
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="984" height="6"></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_bottom scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>
