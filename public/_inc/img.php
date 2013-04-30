<?php
Call Com_CreatValidCode($_REQUEST["tel"))
Public Sub Com_CreatValidCode(pTel)  
     '----------��ֹ����  
     Response.Expires = 0 
     Response.AddHeader "Pragma","no-cache"  
     Response.AddHeader "cache-ctrol","no-cache"  
     Response.ContentType = "Image/BMP"  
     Randomize  
     Dim i, ii, iii ,rndColor,strLen,sql,rs 
     Const cOdds = 0 '------------�ӵ���ֵĻ��� 
     Const str="0123456789-"  
     strLen = len(pTel) 
     rndColor = ChrB(intval(rnd*255)) & ChrB(intval(rnd*255)) & ChrB(intval(rnd*255))
     '-----------��ɫ�����(�ַ���)  
     Dim vColorData(1)  
     vColorData(0) = ChrB(0) & ChrB(0) & ChrB(0)     '----��0����0����0����ɫ��  
     vColorData(1) = ChrB(255) & ChrB(255) & ChrB(255) '----��250����236����211��ǳ��ɫ��  
     'vColorData(0) = ChrB(197) & ChrB(106) & ChrB(49)     '---- ��0����0����0����ɫ��  
     'vColorData(1) = ChrB(238) & ChrB(210) & ChrB(193) '-----��250����236����211��ǳ��ɫ��  
     'vColorData(0) = ChrB(0) & ChrB(0) & ChrB(0)     '---------��0����0����0����ɫ��  
     'vColorData(1) = ChrB(205) & ChrB(237) & ChrB(245) '------------��250����236����211��ǳ��ɫ��  

     '--------------------�������ַ�  
     Randomize 
     Dim vCode() 
     redim vCode(strLen-1) 
     For i = 0 To strLen-1 
         vCode(i) =instr(1,str,mid(pTel,i+1,1),1)-1 
     Next  

     '-----------�ַ�����  
     Dim vNumberData(11)  
     'Verdana Font 
     vNumberData(0) = "11111111111000111101110111011101110111011101110111011101110111011110001111111111"  
     vNumberData(1) = "11111111111101111110011111110111111101111111011111110111111101111110001111111111"  
     vNumberData(2) = "11111111111000111101110111011101111110111111011111101111110111111100000111111111"  
     vNumberData(3) = "11111111111000111101110111111101111100111111110111111101110111011110001111111111"  
     vNumberData(4) = "11111111111110111111001111101011111010111101101111100001111110111111100111111111"  
     vNumberData(5) = "11111111110000011101111111011111110000111111110111111101110111011110001111111111"  
     vNumberData(6) = "11111111111000111101101111011111110000111101110111011101110111011110001111111111"  
     vNumberData(7) = "11111111110000011101101111111011111101111111011111110111111101111111011111111111"  
     vNumberData(8) = "11111111111000111101110111011101111000111101110111011101110111011110001111111111"  
     vNumberData(9) = "11111111111000111101110111011101110111011110000111111101111011011110000111111111"  
     vNumberData(10) = "11111111111111111111111111111111111111111100000111111111111111111111111111111111"  
     vNumberData(11) = "11111111111111111111111111111111111111111111111111111111111111111111111111111111"  
     '-----------------���ͼ���ļ�ͷ <br>
     Response.BinaryWrite ChrB(66) & ChrB(77) &chrb(((strLen*8*10*3+54) mod 256)) & chrb(((strLen*8*10*3+54)\ 256)mod 256) & ChrB((((strLen*8*10*3+54)\ 256)\256)mod 256) & ChrB(((((strLen*8*10*3+54)\ 256)\256)\256)mod 256) & ChrB(0) & ChrB(0) &_  
     ChrB(0) & ChrB(0) & ChrB(54) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(40) & ChrB(0) &_  
     ChrB(0) & ChrB(0) & ChrB(strLen*8) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(10) & ChrB(0) &_  
     ChrB(0) & ChrB(0) & ChrB(1) & ChrB(0)  
     '------------------���ͼ����Ϣͷ  
     Response.BinaryWrite ChrB(24) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0)&_ 
     ChrB((strLen*8*10*3)mod 256)&ChrB(((strLen*8*10*3)\256)mod 256)&ChrB((((strLen*8*10*3)\256)\256)mod 256)&ChrB(((((strLen*8*10*3)\256)\256)\256)mod 256)&_  
     ChrB(196) & ChrB(14) & ChrB(0) & ChrB(0) & ChrB(196) & ChrB(14)&ChrB(0) & ChrB(0) &_  
      ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0) & ChrB(0)  
     For i = 9 To 0 Step -1     '----------暂无内容
         For ii = 0 To strLen-1     '-------暂无内容
             For iii = 1 To 8 '--------暂无内容��
                '---------���С����֡������ص����ͼ�����  
                If Rnd * 99 + 1 < cOdds Then '---------�������ӵ�  
                     Response.BinaryWrite rndColor 
                Else  
                     Response.BinaryWrite vColorData(Mid(vNumberData(vCode(ii)), i * 8 + iii, 1))  
                End If  
             Next  
         Next  
     Next  
End Sub 
?>