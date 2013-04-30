<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime2.asp" --><%
	Meid=Trim(Request.QueryString("Meid"))
	Set rs = Server.CreateObject("ADODB.RecordSet") 
	Search = "select * from w_user where Meid='"&Meid&"'"
    Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	  Cnum=Trim(rs("Cnum"))
	  shibie=Trim(rs("shibie"))  
	  NickName=Trim(rs("NickName"))
      UserName=Trim(rs("UserName"))
	  sex=Trim(rs("sex"))
	  UserPass=Trim(rs("UserPass"))
	  UserLevel=Trim(rs("UserLevel"))
	  address=Trim(rs("address"))
      postcode=Trim(rs("postcode"))
	  Tel=Trim(rs("Tel"))
	  Email=Trim(rs("Email"))
	  Msn=Trim(rs("Msn"))
	  QQ=Trim(rs("QQ"))
	  Detail=Trim(rs("Detail"))
	  Views=Trim(rs("Views"))
	  Photo=Trim(rs("Photo"))
	  RegTime=Trim(rs("RegTime"))
	  LastLoginTime=Trim(rs("LastLoginTime"))
	  LoginNum=Trim(rs("LoginNum"))
	
	Select Case Views
		   Case "�ѿ�ͨ"
		   View1="checked"
		   Case "δ��ͨ"
		   View2="checked"
	End Select

'%>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<title>�޸��û���Ϣ</title>
<style type="text/css">
<!--
.STYLE2 {color: #0099CC}
-->
</style>

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
          <form action="Member_Modi_Submit.asp" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">�޸��û���Ϣ</font></td>
                <td width="426" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="186" bgcolor="#FFFFFF"><div align="right"><a href="Member_List.asp">����ǰҳ</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"><div align="right"></div></td>
              </tr>
              <tr>
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��Ա�ţ�</font></td>
                <td bgcolor="F1F0F1"><font size="2" color="#993300"><%= CNum %></font></td>
                <td bgcolor="F1F0F1"><div align="center">�û�ͷ��</div></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�û��ǳƣ�<font color="#FF0000">*</font></font></td>
                <td bgcolor="F1F0F1"><input name="NickName" type="text" id="NickName" size="22" maxlength="20" value="<%= NickName %>"></td>
                <td rowspan="6" valign="top"><span class="STYLE2">
                  <select name=Photo size=8 id="Photo" onChange='ShowPic()'>
                    <option value="<%= photo %>" selected><%= left(photo,2) %></option>
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
                <img src='../../folder/Pic/<%= photo %>' name='Pic'> </span></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ʵ����<font color="#FF0000">*</font></font></td>
                <td bgcolor="F1F0F1"><input name="UserName" type="text" id="UserName" size="22" maxlength="20" value="<%= UserName %>">
                  �Ա�:
                  <select name="sex" id="sex">
          <option value="��" selected>��</option>
          <option value="Ů">Ů</option>
      </select></td>
              </tr>
              <tr>
                <td height="21" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1">&nbsp;�û����룺<font color="#FF0000">*</font></td>
                <td bgcolor="F1F0F1"><input name="UserPass" type="password" id="UserPass" size="22" maxlength="20">
                  �����û�����:<font size="2"><font color="#FF0000">*</font></font>
                      <input name="ReUserPass" type="password" id="ReUserPass" size="22" maxlength="20">                  </td>
              </tr>
              <tr>
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�û�����</font> </td>
                <td bgcolor="F1F0F1"><input name="UserLevel" type="text" id="UserLevel" size="22" maxlength="16"  value="<%= UserLevel %>"></td>
              </tr>
              <tr>
                <td height="18" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ϵ��ַ��</font></td>
                <td bgcolor="F1F0F1"><input name="address" type="text" id="address" size="60" maxlength="50"  value="<%= address %>"></td>
              </tr>
              <tr>
                <td height="20" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1">&nbsp;<font color="#000000" size="2">�������룺</font></td>
                <td bgcolor="F1F0F1"><font color="#000000" size="2">
                  <input name="postcode" type="text" id="postcode" size="15" maxlength="6"  value="<%= postcode %>">
                </font></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��ϵ�绰��</font></td>
                <td bgcolor="F1F0F1"><input name="Tel" type="text" id="Tel" size="60" maxlength="50"  value="<%=Tel  %>"></td>
                <td bgcolor="F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Email��</font></td>
                <td height="20" bgcolor="F1F0F1"><input name="Email" type="text" id="Email" size="60" maxlength="50"  value="<%=Email  %>"></td>
                <td height="20" bgcolor="F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;Msn��</font></td>
                <td height="20" colspan="2" bgcolor="F1F0F1"><input name="Msn" type="text" id="Msn" size="60" maxlength="50"  value="<%= Msn %>"></td>
              </tr>
              <tr>
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;QQ��</font></td>
                <td height="20" colspan="2" bgcolor="F1F0F1"><input name="QQ" type="text" id="QQ" size="60" maxlength="20"  value="<%= QQ %>"></td>
              </tr>
              <tr>
                <td bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;�Ƽ��ˣ�</font></td>
                <td height="20" colspan="2" bgcolor="F1F0F1"><input name="TID" type="text" id="TID" size="60" maxlength="50"  value="<%= TID %>"></td>
              </tr>
              <tr>
                <td height="18" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;ע��ʱ�䣺</font></td>
                <td colspan="2" bgcolor="F1F0F1">&nbsp;<%= RegTime %></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;����½ʱ�䣺</font></td>
                <td colspan="2" bgcolor="F1F0F1">&nbsp;<%= LastLoginTime %></td>
              </tr>
              <tr>
                <td height="19" bordercolorlight="#999999" bordercolordark="#FFFFFF" bgcolor="F1F0F1"><font size="2">&nbsp;��½����</font></td>
                <td colspan="2" bgcolor="F1F0F1">&nbsp;<%= LoginNum %></td>
              </tr>
              <tr>
                <td height="23" valign="top" bgcolor="F1F0F1">&nbsp;���ܣ�</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><iframe ID="eWebEditor1" src="../../editor/ewebeditor.asp?id=Detail&style=standard1" frameborder="0" scrolling="no" width="100%" HEIGHT="200"></iframe>
                    <textarea name="Detail" style="display:none" rows="1" cols="20"><%= Detail %></textarea>                </td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;��ͨ״̬��</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> <font size="2">&nbsp;</font>�ѿ�ͨ
                  <input name="Views" type="radio" value="�ѿ�ͨ" <%= View1 %>>
                  δ��ͨ
                  <input type="radio" name="Views" value="δ��ͨ" <%= View2 %>>
                </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="�޸�">
                    <input type="button" name="Submit3" value="����ǰҳ" onClick="location='Member_List.asp'">
                    <input name="Meid" type="hidden" value="<%=Meid%>">                </td>
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
<script>
function ShowPic(){
document.images.Pic.src="../../Folder/pic/"+document.sample.Photo.options[document.sample.Photo.selectedIndex].value;
//document.sample.PicUrl.value="../bbs/Images/Topic/"+document.sample.headpic.options[document.sample.headpic.selectedIndex].value+".gif";
}
</script>