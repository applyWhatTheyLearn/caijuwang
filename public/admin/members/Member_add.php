<?php
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$OrderNum1=gen_key(8);
$AddressID='';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>添加新用户</title>
<style type="text/css">
<!--
.STYLE2 {color: #0099CC}
-->
</style>
<script type="text/javascript" src="../../ueditor/editor_config.js"></script>
<script type="text/javascript" src="../../ueditor/editor_all.js"></script>
<script>
function ShowPic(){
document.images.Pic.src="../folder/Pic/"+document.sample.Photo.options[document.sample.Photo.selectedIndex].value;
//document.sample.PicUrl.value="../bbs/Images/Topic/"+document.sample.headpic.options[document.sample.headpic.selectedIndex].value+".gif";
}
</script>
</head>
<html>
<head>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top" bgcolor="#E4E4E4">
        <div align="center">
          <form action="Member_add_Submit.php" method="post" name="sample" id="sample">
            <table width="100%" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">添加新用户</font></td>
                <td width="426" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="186" bgcolor="#FFFFFF"><div align="right"><a href="Member_List.php">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;会员号：</font></td>
                <td bgcolor="F1F0F1"><font size="2" color="#993300"><?php echo $OrderNum1 ?></font>
                <input name="Cnum" type="hidden" id="Cnum" size="22" maxlength="8" value="<?php echo $OrderNum1?>"></td>
                <td bgcolor="F1F0F1"><div align="center">用户头像</div></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;用户昵称：<font color="#FF0000">*</font></font></td>
                <td bgcolor="F1F0F1"><input name="NickName" type="text" id="NickName" size="22" maxlength="20"></td>
                <td rowspan="6" valign="top"><span class="STYLE2">
                  <select name=Photo size=8 id="Photo" onChange='ShowPic()'>
                    <option value="01.gif" selected>1</option>
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
                <img src='../../folder/Pic/57.gif' name='Pic'> </span></td>
              </tr>
              <tr>
                <tr>
                    <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;真实姓名：<font color="#FF0000">*</font></font></td>
                    <td bgcolor="F1F0F1"><input name="UserName" type="text" id="UserName" size="22" maxlength="20">
                        性别: <select name="sex" id="sex">
                            <option value="男" selected>男</option>
                            <option value="女">女</option>
                        </select></td>
                </tr>
                <tr>
                    <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;用户密码：<font color="#FF0000">*</font></font></td>
                    <td bgcolor="F1F0F1"><input name="UserPass" type="password" id="UserPass" size="22" maxlength="20">
                        交验用户密码
                        :<font size="2"><font color="#FF0000">*</font></font>
                        <input name="ReUserPass" type="password" id="ReUserPass" size="22" maxlength="20"></td>
                </tr>
                <tr>
                    <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;用户级别：</font>                </td>
                    <td bgcolor="F1F0F1"><input name="UserLevel" type="text" id="UserLevel" size="22" maxlength="16"></td>
                </tr>
                <tr>
                    <td height="18" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;联系地址：</font></td>
                    <td bgcolor="F1F0F1"><input name="address" type="text" id="address" size="60" maxlength="50"></td>
                </tr>
                <tr>
                    <td height="20" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1">&nbsp;<font color="#000000" size="2">邮政编码：</font></td>
                    <td bgcolor="F1F0F1"><font color="#000000" size="2">
                            <input name="postcode" type="text" id="postcode" size="15" maxlength="6">
                        </font></td>
                </tr>
                <tr>
                    <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;联系电话：</font></td>
                    <td bgcolor="F1F0F1"><input name="Tel" type="text" id="Tel" size="60" maxlength="50"></td>
                    <td bgcolor="F1F0F1">&nbsp;</td>
                </tr>
                <tr>
                    <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Email：</font></td>
                    <td height="20" bgcolor="F1F0F1"><input name="Email" type="text" id="Email" size="60" maxlength="50"></td>
                    <td height="20" bgcolor="F1F0F1">&nbsp;</td>
                </tr>
                <tr>
                    <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Msn：</font></td>
                    <td height="20" colspan="2" bgcolor="F1F0F1"><input name="Msn" type="text" id="Msn" size="60" maxlength="50"></td>
                </tr>
                <tr>
                    <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;QQ：</font></td>
                    <td height="20" colspan="2" bgcolor="F1F0F1"><input name="QQ" type="text" id="QQ" size="60" maxlength="20"></td>
                </tr>

                <tr>
                    <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;推荐人：</font></td>
                    <td height="20" colspan="2" bgcolor="F1F0F1"><input name="recommender" type="text" id="recommender" size="60" maxlength="50"></td>
                </tr>
                <tr>
                    <td height="18" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;注册时间：</font></td>
                    <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
                </tr>
                <tr>
                    <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;最后登陆时间：</font></td>
                    <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
                </tr>
                <tr>
                    <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;登陆次数：</font></td>
                    <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
                </tr>
                <tr>
                    <td height="23" valign="top" bgcolor="F1F0F1">&nbsp;介绍：</td>
                    <td height="23" colspan="2" bgcolor="F1F0F1">
                        <textarea name="Detail" id="Detail">这里写你的初始化内容</textarea>
                        <script type="text/javascript">
                            var editor = new UE.ui.Editor();
                            editor.render("Detail");
                            //1.2.4以后可以使用一下代码实例化编辑器
                            //UE.getEditor('myEditor')
                        </script>
                </tr>
                <tr>
                    <td height="23"><span class="STYLE2"><font size="2">&nbsp;</font></span><font color="#0000FF" size="2">识别信息：</font><font size="2"><span class="STYLE2"><font color="#FF0000">*</font></span></font></td>
                    <td height="23" colspan="2"><input name="shibie" type="text" id="shibie" size="30" maxlength="50">
                        <span class="STYLE3">(请认真填写，找回密码是需要此信息)</span></td>
                </tr>
                <tr>
                    <td height="23" bgcolor="F1F0F1">&nbsp;开通状态：</td>
                    <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> <font size="2">&nbsp;</font>已开通
                            <input name="Views" type="radio" value="已开通" checked>
                            未开通
                            <input type="radio" name="Views" value="未开通">
                        </font></td>
                </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1"><div align="center"></div></td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="添加">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='Member_List.php'">
                  <input name="AddressID" type="hidden" value="<?php echo $AddressID?>">                </td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>
